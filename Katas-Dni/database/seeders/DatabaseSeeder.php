<?php

namespace Database\Seeders;

use App\Models\letter_dni;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $letter = new letter_dni();
        $letter->letter = 'R';
        $letter->save();
        
        $letter = new letter_dni();
        $letter->letter = 'T';
        $letter->save();
        
        $letter = new letter_dni();
        $letter->letter = 'W';
        $letter->save();
        
        $letter = new letter_dni();
        $letter->letter = 'Y';
        $letter->save();
        
        $letter = new letter_dni();
        $letter->letter = 'G';
        $letter->save();

        $letter = new letter_dni();
        $letter->letter = 'M';
        $letter->save();

        $letter = new letter_dni();
        $letter->letter = 'A';
        $letter->save();

        $letter = new letter_dni();
        $letter->letter = 'F';
        $letter->save();
        
        $letter = new letter_dni();
        $letter->letter = 'X';
        $letter->save();

        $letter = new letter_dni();
        $letter->letter = 'D';
        $letter->save();

        $letter = new letter_dni();
        $letter->letter = 'P';
        $letter->save();

        $letter = new letter_dni();
        $letter->letter = 'B';
        $letter->save();

        $letter = new letter_dni();
        $letter->letter = 'N';
        $letter->save();

        $letter = new letter_dni();
        $letter->letter = 'J';
        $letter->save();

        $letter = new letter_dni();
        $letter->letter = 'Q';
        $letter->save();

        $letter = new letter_dni();
        $letter->letter = 'S';
        $letter->save();

        $letter = new letter_dni();
        $letter->letter = 'Z';
        $letter->save();

        $letter = new letter_dni();
        $letter->letter = 'V';
        $letter->save();

        $letter = new letter_dni();
        $letter->letter = 'H';
        $letter->save();

        $letter = new letter_dni();
        $letter->letter = 'E';
        $letter->save();

        $letter = new letter_dni();
        $letter->letter = 'C';
        $letter->save();

        $letter = new letter_dni();
        $letter->letter = 'K';
        $letter->save();

        $letter = new letter_dni();
        $letter->letter = 'L';
        $letter->save();
    }
}