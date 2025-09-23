<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $this->call([
            // UserSeeder::class,

            // Document Seeder
            DocumentSeeder::class,
            BirthNoteSeeder::class,
            DeathNoteSeeder::class,
            LetterDeathSeeder::class,
            LetterBusinessSeeder::class,
            LetterFuelSeeder::class,
            LetterIncapacitiesSeeder::class,
            LetterLostSeeder::class,

            // Budget & Demographic Seeder
            BudgetCategorySeeder::class,
            BudgetSeeder::class,
            DemographicSeeder::class,

            // Konten & Media Seeder
            CategorySeeder::class,
            LocationSeeder::class,
            NewsSeeder::class,
            GalerySeeder::class,
            OrganizationSeeder::class,
            CreationSeeder::class,
        ]);
    }
}
