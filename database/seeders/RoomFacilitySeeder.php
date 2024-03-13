<?php

namespace Database\Seeders;

use App\Models\RoomFacility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomFacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roomFacilities = [
            [
                'name' => 'Drewniana podłoga lub parkiet'
            ],
            [
                'name' => 'Dojście na wyższe piętra tylko schodami'
            ],
            [
                'name' => 'Telewizor z płaskim ekranem'
            ],
            [
                'name' => 'Długie łóżka (> 2 metry)'
            ],
            [
                'name' => 'Sofa'
            ],
            [
                'name' => 'Sprzęt do prasowania'
            ],
            [
                'name' => 'Część wypoczynkowa'
            ],
            [
                'name' => 'Telewizor'
            ],
            [
                'name' => 'Klimatyzacja obsługiwana indywidualnie dla każdego pokoju'
            ],
            [
                'name' => 'Szafa'
            ]
        ];

        foreach ($roomFacilities as $key => $value)
        {
            RoomFacility::create($value);
        }
    }
}
