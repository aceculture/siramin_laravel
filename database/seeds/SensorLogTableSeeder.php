<?php

use Illuminate\Database\Seeder;

class SensorLogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sensor_log')->insert([
            'device_id' => 'lampu_pi',
            'moisture'  => 65,
            'temperature' => 15,
            'port_number' => 1
        ]);

        DB::table('sensor_log')->insert([
            'device_id' => 'lampu_pi',
            'moisture'  => 65,
            'temperature' => 15,
            'port_number' => 1
        ]);

        DB::table('sensor_log')->insert([
            'device_id' => 'lampu_pi',
            'moisture'  => 66,
            'temperature' => 15,
            'port_number' => 1
        ]);

        DB::table('sensor_log')->insert([
            'device_id' => 'lampu_pi',
            'moisture'  => 64,
            'temperature' => 15,
            'port_number' => 1
        ]);

        DB::table('sensor_log')->insert([
            'device_id' => 'lampu_pi',
            'moisture'  => 60,
            'temperature' => 15,
            'port_number' => 1
        ]);

        DB::table('sensor_log')->insert([
            'device_id' => 'lampu_pi',
            'moisture'  => 56,
            'temperature' => 15,
            'port_number' => 1
        ]);

        DB::table('sensor_log')->insert([
            'device_id' => 'lampu_pi',
            'moisture'  => 60,
            'temperature' => 0,
            'port_number' => 1
        ]);

        DB::table('sensor_log')->insert([
            'device_id' => 'lampu_pi2',
            'moisture'  => 60,
            'temperature' => 0,
            'port_number' => 1
        ]);

        DB::table('sensor_log')->insert([
            'device_id' => 'lampu_pi2',
            'moisture'  => 60,
            'temperature' => 0,
            'port_number' => 1
        ]);

        DB::table('sensor_log')->insert([
            'device_id' => 'lampu_pi',
            'moisture'  => 60,
            'temperature' => 0,
            'port_number' => 1
        ]);

        DB::table('sensor_log')->insert([
            'device_id' => 'lampu_pi',
            'moisture'  => 60,
            'temperature' => 0,
            'port_number' => 1
        ]);
    }
}
