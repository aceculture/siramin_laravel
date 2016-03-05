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
            'user_id'       => 'radityacandra',
            'device_token'  => 'lampu_pi',
            'port_number'   => 1
        ]);

        DB::table('user_device')->insert([
            'user_id'       => 'radityacandra',
            'device_token'  => 'lampu_pi',
            'port_number'   => 3
        ]);

        DB::table('user_device')->insert([
            'user_id'       => 'radityacandra',
            'device_token'  => 'lampu_pi',
            'port_number'   => 5
        ]);

        DB::table('user_device')->insert([
            'user_id'       => 'agandhi',
            'device_token'  => 'lampu_pi',
            'port_number'   => 2
        ]);

        DB::table('user_device')->insert([
            'user_id'       => 'agandhi',
            'device_token'  => 'lampu_pi',
            'port_number'   => 4
        ]);

        DB::table('user_device')->insert([
            'user_id'       => 'agandhi',
            'device_token'  => 'lampu_pi2',
            'port_number'   => 1
        ]);

        DB::table('user_device')->insert([
            'user_id'       => 'agandhi',
            'device_token'  => 'lampu_pi2',
            'port_number'   => 3
        ]);

        DB::table('user_device')->insert([
            'user_id'       => 'agandhi',
            'device_token'  => 'lampu_pi2',
            'port_number'   => 5
        ]);

        DB::table('user_device')->insert([
            'user_id'       => 'radityacandra',
            'device_token'  => 'lampu_pi2',
            'port_number'   => 2
        ]);

        DB::table('user_device')->insert([
            'user_id'       => 'radityacandra',
            'device_token'  => 'lampu_pi2',
            'port_number'   => 4
        ]);
    }
}
