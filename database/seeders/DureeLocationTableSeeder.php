<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DureeLocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('duree_locations')->insert([
            ['libelle'=>'Journee', 'valeurEnHeure'=>24],
            ['libelle'=>'Demi-journee', 'valeurEnHeure'=>12],
        ]);
    }
}
