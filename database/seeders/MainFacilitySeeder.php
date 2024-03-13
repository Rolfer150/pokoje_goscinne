<?php

namespace Database\Seeders;

use App\Models\MainFacility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainFacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainFacilities = [
            [
                'name' => 'Bezpłatny parking'
            ],
            [
                'name' => 'Pokoje rodzinne'
            ],
            [
                'name' => 'Bezpłatne Wi-Fi'
            ],
            [
                'name' => 'Taras'
            ],
            [
                'name' => 'Sprzęt do grillowania'
            ],
            [
                'name' => 'Sauna'
            ],
        ];

        foreach ($mainFacilities as $key => $value)
        {
            MainFacility::create($value);
        }
    }
}
