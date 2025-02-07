<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Letter;
use App\Models\letter_dni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LetterDniController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'number' => 'required | integer | between:0,99999999',
        ]);

        if($validator->fails()) {
            return response()->json([
                'message' => 'El dato introducido no sirve',
                'errors' => $validator->errors(),
            ], 400);
        }

        $validated = $validator->validated();

        $mod = ($validated['number'] % 23) + 1;

        $result = letter_dni::findOrFail($mod);

        return response()->json([
            'letter_dni' => $result->letter,
        ], 200);
    }
}