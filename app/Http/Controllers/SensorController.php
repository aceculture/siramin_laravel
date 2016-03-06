<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Log\Sensor;
use App\Model\Device\DevicePort;

class SensorController extends Controller
{
    public function getSensorLog($device_token, $port_number){
        $result = DevicePort::where('device_token', $device_token)->where('port_number',
                $port_number)->first()->sensorLog;

        $body = array(
            'code' => 200,
            'data' => $result
        );

        return response()->json($body);
    }
}
