<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\User;
use App\Model\Device\Device;
use App\Model\Device\DevicePort;
use App\Model\Device\UserDevice;

class UserController extends Controller
{

    public function index(){
        $users = User::get()->toArray();

    }

    public function getAvailableAccess(Request $request){

        $content = $request->getContent();
        $param = json_decode($content, true);

        $accesses = User::where('user_id', $param['user_id'])->first()->deviceUser;

        $return_body = array();
        $counterPort = 0;
        $counterDevice = 0;
        foreach($accesses as $access){
            if($counterDevice == 0){
                $return_body[$counterDevice]['device_token'] = $access['device_token'];
                $return_body[$counterDevice]['user_id'] = $access['user_id'];
                $counterDevice++;
            }

            if($access['device_token'] != $return_body[$counterDevice-1]['device_token']){
                $counterPort = 0;
                $return_body[$counterDevice]['device_token'] = $access['device_token'];
                $return_body[$counterDevice]['user_id'] = $access['user_id'];
                $counterDevice++;
            }

            if($access['device_token'] == $return_body[$counterDevice-1]['device_token']){
                $return_body[$counterDevice-1]['available_port'][$counterPort] =
                    $access['port_number'];
                $counterPort++;
            }
        }

        $return_body = array(
            'code' => 200,
            'data' => $return_body
        );

        return response()->json($return_body);
    }

    public function getAllUser()
    {
        $returnBody = User::select('user_id', 'name', 'password')
            ->get()
            ->toArray();

        $response = [
            'code' => 200,
            'data' => $returnBody
        ];

        return response()->json($response);
    }

    public function signUpNewUser(Request $request){
        $content = $request->getContent();
        $param = json_decode($content, true);

        $return_array = array();
        try{
            //insert value in user database
            $user = new User;
            $user->user_id = $param['user_id'];
            $user->name = $param['user_name'];
            $user->email = $param['user_email'];
            $user->password = $param['user_password'];
            $user->save();
            $return_array['status'] = 200;
            $return_array['data'] = array();

            //insert value in user_device databaset
            //default is one device for one user
            //we must set manually later for special request (1 device many)
            for($i=0; $i<5; $i++){
                $userDevice = new UserDevice();
                $userDevice->user_id = $param['user_id'];
                $userDevice->device_token = $param['device_token'];
                $userDevice->port_number = $i;
                $userDevice->save();
            }

            //insert value in device_port database
            for($i=0; $i<5; $i++){
                $devicePort = new DevicePort();
                $devicePort->device_token = $param['device_token'];
                $devicePort->port_number = $i;
                $devicePort->status = 0;

                if(isset($param['plant_type'])){
                    if($param['plant_type']=='vegetable'){
                        $devicePort->plant_type = 'vegetable';
                        $devicePort->moisture_threshold = 40;
                    } elseif($param['plant_type'] == 'tree'){
                        $devicePort->plant_type = 'tree';
                        $devicePort->moisture_threshold = 20;
                    } else{
                        $devicePort->plant_type = 'grass';
                        $devicePort->moisture_threshold = 30;
                    }
                }
                $devicePort->save();
            }

            //insert value in device database
            $device = new Device();
            $device->device_token = $param['device_token'];
            $device->platform = 'raspberry pi'; //harcoded
            $device->save();

        }catch (\Exception $e){
            $return_array['status'] = 400;
            $return_array['data'] = array();
        }

        return response()->json($return_array);
    }
}
