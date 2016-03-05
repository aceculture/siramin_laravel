<?php

use Illuminate\Database\Seeder;

use App\Model\Log\Sensor;
use App\Model\Device\DevicePort;

class SensorLogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 5; $i++) {
            Sensor::create([
                'port_id' => $i,
                'moisture' => rand(50, 70),
                'temperature' => rand(15, 28),
            ]);
        }
        for ($i=1; $i <= 5; $i++) {
            // lol sorry quick hack
            $moisture = rand(50, 70);
            $temperature = rand(15, 28);
            Sensor::create([
                'port_id' => $i,
                'moisture' => $moisture,
                'temperature' => $temperature,
            ]);
            $p = DevicePort::find($i);
            $p->current_moisture = $moisture;
            $p->current_temperature = $temperature;
            $p->save();
        }
    }
}
