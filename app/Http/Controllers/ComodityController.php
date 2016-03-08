<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Comodity\VegetableComodity;

class ComodityController extends Controller
{
    public function getVegetableComodity(){
        $data = VegetableComodity::get()->toArray();

        $return_body = array(
            "code" => 200,
            "data" => $data
        );

        return response()->json($return_body);
    }
}
