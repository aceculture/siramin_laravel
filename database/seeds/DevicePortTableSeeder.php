<?php

use Illuminate\Database\Seeder;

use App\Model\Device\DevicePort;

class DevicePortTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DevicePort::create([
            'device_token'  => 'lampu_pi',
            'port_number'   => 1,
            'status'        => 0,
            'plant_type'    => 'vegetable',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65,
            'updated_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now()
        ]);

        DevicePort::create([
            'device_token'  => 'lampu_pi',
            'port_number'   => 2,
            'status'        => 0,
            'plant_type'    => 'vegetable',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65,
            'updated_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now()
        ]);

        DevicePort::create([
            'device_token'  => 'lampu_pi',
            'port_number'   => 3,
            'status'        => 0,
            'plant_type'    => 'tree',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65,
            'updated_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now()
        ]);

        DevicePort::create([
            'device_token'  => 'lampu_pi',
            'port_number'   => 4,
            'status'        => 0,
            'plant_type'    => 'tree',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65,
            'updated_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now()
        ]);

        DevicePort::create([
            'device_token'  => 'lampu_pi',
            'port_number'   => 5,
            'status'        => 0,
            'plant_type'    => 'grass',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65,
            'updated_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now()
        ]);

        DevicePort::create([
            'device_token'  => 'lampu_pi2',
            'port_number'   => 1,
            'status'        => 0,
            'plant_type'    => 'vegetable',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65,
            'updated_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now()
        ]);

        DevicePort::create([
            'device_token'  => 'lampu_pi2',
            'port_number'   => 2,
            'status'        => 0,
            'plant_type'    => 'grass',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65,
            'updated_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now()
        ]);

        DevicePort::create([
            'device_token'  => 'lampu_pi2',
            'port_number'   => 3,
            'status'        => 0,
            'plant_type'    => 'vegetable',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65,
            'updated_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now()
        ]);

        DevicePort::create([
            'device_token'  => 'lampu_pi2',
            'port_number'   => 4,
            'status'        => 0,
            'plant_type'    => 'grass',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65,
            'updated_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now()
        ]);

        DevicePort::create([
            'device_token'  => 'lampu_pi2',
            'port_number'   => 5,
            'status'        => 0,
            'plant_type'    => 'vegetable',
            'moisture_threshold' => 60,
            'watering_method' => 'semi',
            'location'      => 'Halaman Depan',
            'current_moisture' => 65,
            'updated_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now()
        ]);
    }
}
