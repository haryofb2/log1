<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class interestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $data = [
                [
                    'name' => 'Skill Development',
                ],
                [
                    'name' => 'Beauty',
                ],

                [
                    'name' => 'Lifestyle',
                ],
                [
                    'name' => 'Parenting',
                ],

                [
                    'name' => 'Travel',
                ],
                [
                    'name' => 'Finance',
                ],

                [
                    'name' => 'bisnis',
                ],
                [
                    'name' => 'Culinary',
                ],

                [
                    'name' => 'Sport',
                ],
                [
                    'name' => 'Movie',
                ],

                [
                    'name' => 'Music',
                ],
                [
                    'name' => 'guest',
                ],

                [
                    'name' => 'Religi',
                ],
                [
                    'name' => 'hobby & art',
                ],

                [
                    'name' => 'planting',
                ],
                [
                    'name' => 'writing',
                ],

                [
                    'name' => 'fotografi',
                ],
                [
                    'name' => 'others',
                ],

            ];
            foreach ($data as $d) {
                DB::table('interests')->insert([
                    'name'    => $d['name'],
                ]);
            }
        }
    }
}
