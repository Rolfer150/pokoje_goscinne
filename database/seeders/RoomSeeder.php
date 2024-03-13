<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'name' => 'Pokój dwuosobowy',
                'slug' => 'pokoj-dwuosobowy',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Ut risus dui, imperdiet eget risus sed, vulputate interdum justo.
                Proin vulputate magna malesuada pulvinar dapibus. Curabitur tempor,
                mi nec lobortis pellentesque, ipsum risus luctus orci, sed pellentesque ante tellus
                nec lectus. Suspendisse pharetra consectetur lacus, in iaculis tortor.
                Suspendisse aliquam ultrices ullamcorper.',
                'accommodation_number' => 2,
                'price' => 80,
                'apartment_size' => 18,
            ],
            [
                'name' => 'Pokój trzyosobowy',
                'slug' => 'pokoj-trzyosobowy',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Ut risus dui, imperdiet eget risus sed, vulputate interdum justo.
                Proin vulputate magna malesuada pulvinar dapibus. Curabitur tempor,
                mi nec lobortis pellentesque, ipsum risus luctus orci, sed pellentesque ante tellus
                nec lectus. Suspendisse pharetra consectetur lacus, in iaculis tortor.
                Suspendisse aliquam ultrices ullamcorper.',
                'accommodation_number' => 3,
                'price' => 100,
                'apartment_size' => 25,
            ],
            [
                'name' => 'Pokój czteroosobowy',
                'slug' => 'pokoj-czteroosobowy',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Ut risus dui, imperdiet eget risus sed, vulputate interdum justo.
                Proin vulputate magna malesuada pulvinar dapibus. Curabitur tempor,
                mi nec lobortis pellentesque, ipsum risus luctus orci, sed pellentesque ante tellus
                nec lectus. Suspendisse pharetra consectetur lacus, in iaculis tortor.
                Suspendisse aliquam ultrices ullamcorper.',
                'accommodation_number' => 4,
                'price' => 120,
                'apartment_size' => 35,
            ]
        ];

        foreach ($rooms as $key => $value)
        {
            Room::create($value);
        }
    }
}
