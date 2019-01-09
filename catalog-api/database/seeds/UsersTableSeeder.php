<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => bcrypt('asdfasdf')
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@example.com',
                'password' => bcrypt('asdfasdf')
            ],
        ];

        DB::table('users')->insert($data);
    }
}
