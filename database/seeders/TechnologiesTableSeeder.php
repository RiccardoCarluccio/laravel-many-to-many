<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Technology;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = ["HTML", "CSS", "JavaScript", "SASS", "Vue.js", "PHP", "MySQL", "Laravel"];
        foreach ($languages as $language) {
            $newLanguage = new Technology();
            $newLanguage->name = $language;
            $newLanguage->save();
        }
    }
}
