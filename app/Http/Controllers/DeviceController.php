<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Device\DevicePort;

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

        dd($response);
        return response()->json($response);
    }

    public function setWateringMode(Request $request, $device_token)
    {
        $param = $request->getContent();
        $param = json_decode($param, true);

        $port = DevicePort::where('device_token', $device_token)
            ->where('port_number', $param['id'])
            ->first();

        $response = [
            'code' => 200,
            'data' => []
        ];

        if (isset($param['status'])) {
            if (in_array($param['status'], ['semi', 'otomatis'], true)) {
                $port->watering_method = $param['status'];
                $port->save();

                $response['data'] = [];
            }
            else {
                // If incoming request have invalid watering method,
                // return an error msg
                $response['data'] = ['error' => 'Watering method is not recognized.'];
            }
        }
        else {
            $response['data'] = ['error' => 'Watering method value is not found.'];
        }

        return response()->json($response);
    }
}
