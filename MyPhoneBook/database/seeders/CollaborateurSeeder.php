<?php

namespace Database\Seeders;

use App\Models\Collaborateur;
use Illuminate\Database\Seeder;

class CollaborateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collaborateur::factory()
        ->count(100)
        ->create();
    }
}
