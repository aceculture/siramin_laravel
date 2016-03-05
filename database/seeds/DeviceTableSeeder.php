<?php

use Illuminate\Database\Seeder;

class DeviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('device')->insert([
            'device_token'  => 'lampu_pi',
            'platform'      => 'raspberry_pi3'
        ]);

        DB::table('device')->insert([
            'device_token'  => 'lampu_pi2',
            'platform'      => 'galileo gen 2'
        ]);
    }
}
