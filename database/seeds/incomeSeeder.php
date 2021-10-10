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
                    'f' => '< 3jt',
                ],
                [
                    'income' => '> 3 - 5jt',
                ],
                [
                    'income' => '>5 - 10jt',
                ],
                [
                    'income' => '10 - 15jt',
                ],
                [
                    'income' => '> 15jt+',
                ],

            ];
            foreach ($data as $d) {
                DB::table('income')->insert([
                    'income'    => $d['income'],
                ]);
            }
        }
    }
}
