<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
                    'name' => 'soni',
                    'email' => 'wadadaw@coba.com',
                    'role_id' => '1',
                    'password' => bcrypt('123'),
                    'remember_token' => Str::random(10),
                ],
                [
                    'name' => 'minong',
                    'email' => 'wididiw@coba.com',
                    'role_id' => '2',
                    'password' => bcrypt('123'),
                    'remember_token' => Str::random(10),
                ],

            ];
            foreach ($data as $d) {
                DB::table('users')->insert([
                    'name'    => $d['name'],
                    'email'    => $d['email'],
                    'role_id'    => $d['role_id'],
                    'password'    => $d['password'],
                    'remember_token' => $d['remember_token']

                ]);
            }
        }
    }
}
