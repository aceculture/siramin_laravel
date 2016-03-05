<?php

use Illuminate\Database\Seeder;

class DevicePortTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('device_port')->insert([
            'device_token'  => 'lampu_pi',
            'port_number'   => 1,
            'status'        => 0,
            'plant_type'    => 'vegetable',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65
        ]);

        DB::table('device_port')->insert([
            'device_token'  => 'lampu_pi',
            'port_number'   => 2,
            'status'        => 0,
            'plant_type'    => 'vegetable',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65
        ]);

        DB::table('device_port')->insert([
            'device_token'  => 'lampu_pi',
            'port_number'   => 3,
            'status'        => 0,
            'plant_type'    => 'tree',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65
        ]);

        DB::table('device_port')->insert([
            'device_token'  => 'lampu_pi',
            'port_number'   => 4,
            'status'        => 0,
            'plant_type'    => 'tree',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65
        ]);

        DB::table('device_port')->insert([
            'device_token'  => 'lampu_pi',
            'port_number'   => 5,
            'status'        => 0,
            'plant_type'    => 'grass',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65
        ]);

        DB::table('device_port')->insert([
            'device_token'  => 'lampu_pi2',
            'port_number'   => 1,
            'status'        => 0,
            'plant_type'    => 'vegetable',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65
        ]);

        DB::table('device_port')->insert([
            'device_token'  => 'lampu_pi2',
            'port_number'   => 2,
            'status'        => 0,
            'plant_type'    => 'grass',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65
        ]);

        DB::table('device_port')->insert([
            'device_token'  => 'lampu_pi2',
            'port_number'   => 3,
            'status'        => 0,
            'plant_type'    => 'vegetable',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65
        ]);

        DB::table('device_port')->insert([
            'device_token'  => 'lampu_pi2',
            'port_number'   => 4,
            'status'        => 0,
            'plant_type'    => 'grass',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65
        ]);

        DB::table('device_port')->insert([
            'device_token'  => 'lampu_pi2',
            'port_number'   => 5,
            'status'        => 0,
            'plant_type'    => 'vegetable',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65
        ]);
    }
}
