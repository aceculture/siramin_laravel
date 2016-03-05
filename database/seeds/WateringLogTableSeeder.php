<?php

use Illuminate\Database\Seeder;

use App\Model\Log\Watering;
use App\Model\Device\DevicePort;

class WateringLogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Each port in device have 2 data
        // First data
        for ($i=1; $i <= 10; $i++) {
            Watering::create([
                'port_id' => $i
            ]);
        }
        // Second data
        for ($i=1; $i <= 10; $i++) {
            Watering::create([
                'port_id' => $i
            ]);

            $p = DevicePort::find($i);
            $p->last_watering = Carbon\Carbon::now();
            $p->save();
        }
    }
}
