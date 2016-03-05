<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(DeviceTableSeeder::class);
        $this->call(DevicePortTableSeeder::class);
        $this->call(UserDeviceTableSeeder::class);
        $this->call(SensorLogTableSeeder::class);
        $this->call(WateringLogTableSeeder::class);
    }
}
