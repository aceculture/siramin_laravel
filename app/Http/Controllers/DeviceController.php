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
}
