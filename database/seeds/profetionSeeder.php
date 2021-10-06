<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class profetionSeeder extends Seeder
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
                    'name' => 'ibu rumah tangga',
                ],

                [
                    'name' => 'freelancer',
                ],

                [
                    'name' => 'working mom',
                ],

                [
                    'name' => 'profesional',
                ],

                [
                    'name' => 'influencer',
                ],



            ];
            foreach ($data as $d) {
                DB::table('profetions')->insert([
                    'name'    => $d['name'],
                ]);
            }
        }
    }
}
