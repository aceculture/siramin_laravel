<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Log\Sensor;
use App\Model\Device\DevicePort;
use Mockery\CountValidator\Exception;

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

    public function insertSensorLog(Request $request){
        $param = $request->getContent();
        $param = json_decode($param, true);

        $result = DevicePort::where('device_token', $param['device_token'])->where('port_number',
            $param['port_number'])->get()->toArray();
        $port_id = $result[0]['id'];

        try{
            $sensor = new Sensor();
            $sensor->port_id = $port_id;
            //check parameter before insertion
            if(isset($param['moisture'])){
                $sensor->moisture = $param['moisture'];
            }
            if(isset($param['temperature'])){
                $sensor->temperature = $param['temperature'];
            }
            $sensor->save();

            DevicePort::where('id', $port_id)->update([
                'current_moisture'      => $param['moisture'],
                'current_temperature'   => $param['temperature']
            ]);

            $body = array(
                'code' => 200,
                'data' => array()
            );
        } catch(\Exception $e){
            $body = array(
                'code' => 200,
                'data' => array(
                    'error' => $e
                )
            );
        }

        return response()->json($body);
    }
}
