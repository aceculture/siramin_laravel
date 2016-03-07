<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Device\DevicePort;
use App\Model\Log\Watering;

class DeviceController extends Controller
{
    public function getAllDevice($device_token)
    {
        $returnBody = DevicePort::where('device_token', $device_token)
            ->get()->toArray();

        $response = [
            'code' => 200,
            'data' => $returnBody
        ];

        return response()->json($response);
    }

    public function setWateringMode(Request $request, $device_token)
    {
        $param = $request->getContent();
        $param = json_decode($param, true);

        $port = DevicePort::where('device_token', $device_token)
            ->where('port_number', $param['port_number'])
            ->first();

        $response = [
            'code' => 200,
            'data' => []
        ];

        if (isset($param['status'])) {
            if (in_array($param['status'], [0, 1], true)) {
                $port->status = $param['status'];
                $port->save();

                $response['data'] = [];
            } else {
                // If incoming request have invalid watering method,
                // return an error msg
                $response['data'] = ['error' => 'Watering status is not recognized.'];
            }
        }

        if(isset($param['watering_method'])){
            if(in_array($param['watering_method'], ['semi', 'otomasi'], true)){
                $port->watering_method = $param['watering_method'];
                $port->save();

                $response['data'] = [];
            } else {
                // If incoming request have invalid watering method,
                // return an error msg
                $response['data'] = ['error' => 'Watering method is not recognized.'];
            }
        }

        return response()->json($response);
    }

    public function reportWatering(Request $request){
        $param = $request->getContent();
        $param = json_decode($param, true);
        $port_id = DevicePort::where('device_token', $param['device_token'])->where
        ('port_number', $param['port_number'])->get()->toArray();
        try{
            $watering = new Watering();
            $watering->port_id = $port_id[0]['id'];
            $watering->save();

            $return_body = array(
                'code' => 200,
                'data' => array()
            );
        } catch(\Exception $e){
            $return_body = array(
                'code' => 400,
                'data' => array(
                    'error_msg' => $e
                )
            );
        }

        return response()->json($return_body);
    }
}
