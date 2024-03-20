<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;
use App\Models\Departement;
use App\Models\Commune;
use App\Models\CentreDeVote;
use App\Models\BureauDeVote;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Region::factory(2)
        ->has(Departement::factory(3)
        ->has(Commune::factory(2)
        ->has(CentreDeVote::factory(4)
        ->has(BureauDeVote::factory(3)))))->create();
    }
}
