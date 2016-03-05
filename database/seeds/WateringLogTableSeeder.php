<?php

use Illuminate\Database\Seeder;

class WateringLogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('watering_log')->insert([
            'device_token' => 'lampu_pi',
            'port_number' => 1
        ]);

        DB::table('watering_log')->insert([
            'device_token' => 'lampu_pi',
            'port_number' => 2
        ]);

        DB::table('watering_log')->insert([
            'device_token' => 'lampu_pi',
            'port_number' => 3
        ]);

        DB::table('watering_log')->insert([
            'device_token' => 'lampu_pi',
            'port_number' => 4
        ]);

        DB::table('watering_log')->insert([
            'device_token' => 'lampu_pi',
            'port_number' => 5
        ]);

        DB::table('watering_log')->insert([
            'device_token' => 'lampu_pi2',
            'port_number' => 1
        ]);

        DB::table('watering_log')->insert([
            'device_token' => 'lampu_pi2',
            'port_number' => 2
        ]);

        DB::table('watering_log')->insert([
            'device_token' => 'lampu_pi2',
            'port_number' => 3
        ]);

        DB::table('watering_log')->insert([
            'device_token' => 'lampu_pi2',
            'port_number' => 4
        ]);

        DB::table('watering_log')->insert([
            'device_token' => 'lampu_pi2',
            'port_number' => 5
        ]);

        DB::table('watering_log')->insert([
            'device_token' => 'lampu_pi2',
            'port_number' => 5
        ]);

        DB::table('watering_log')->insert([
            'device_token' => 'lampu_pi',
            'port_number' => 1
        ]);

        DB::table('watering_log')->insert([
            'device_token' => 'lampu_pi',
            'port_number' => 1
        ]);
    }
}
