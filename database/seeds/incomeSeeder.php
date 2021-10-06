<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class incomeSeeder extends Seeder
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
                    'name' => '< 3jt',
                ],
                [
                    'name' => '> 3 - 5jt',
                ],
                [
                    'name' => '>5 - 10jt',
                ],
                [
                    'name' => '10 - 15jt',
                ],
                [
                    'name' => '> 15jt+',
                ],

            ];
            foreach ($data as $d) {
                DB::table('incomes')->insert([
                    'name'    => $d['name'],
                ]);
            }
        }
    }
}
