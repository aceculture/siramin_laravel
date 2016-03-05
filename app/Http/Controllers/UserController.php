<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\User;

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

        echo json_encode($return_body);
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
}
