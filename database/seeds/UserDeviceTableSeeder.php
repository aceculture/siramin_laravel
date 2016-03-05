<?php

use Illuminate\Database\Seeder;

class UserDeviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_device')->insert([
            'user_id' => 'radityacandra',
            'port_id' => 1
        ]);

        DB::table('user_device')->insert([
            'user_id' => 'radityacandra',
            'port_id' => 3
        ]);

        DB::table('user_device')->insert([
            'user_id' => 'radityacandra',
            'port_id' => 5
        ]);

        DB::table('user_device')->insert([
            'user_id' => 'agandhi',
            'port_id' => 2
        ]);

        DB::table('user_device')->insert([
            'user_id' => 'agandhi',
            'port_id' => 4
        ]);

        DB::table('user_device')->insert([
            'user_id' => 'agandhi',
            'port_id' => 6
        ]);

        DB::table('user_device')->insert([
            'user_id' => 'agandhi',
            'port_id' => 3
        ]);

        DB::table('user_device')->insert([
            'user_id' => 'agandhi',
            'port_id' => 10
        ]);

        DB::table('user_device')->insert([
            'user_id' => 'radityacandra',
            'port_id' => 7
        ]);

        DB::table('user_device')->insert([
            'user_id' => 'radityacandra',
            'port_id' => 9
        ]);
    }
}
