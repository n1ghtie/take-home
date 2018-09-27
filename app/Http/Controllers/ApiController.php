<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\UserDetails;
use App\VehicleDetails;
use Illuminate\Support\Facades\Auth; 
use Validator;

class ApiController extends Controller
{
    public $successStatus = 200;

    public function login()
    { 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')]))
        {
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')->accessToken; 
            return response()->json(['success' => $success], $this-> successStatus); 
        } 
        else { 
            return response()->json(['error' => 'Unauthorised'], 401); 
        } 
    }

    public function getUserdetails()
    {
    	$users = UserDetails::all();
    	return response()->json(['success' => $users], $this->successStatus);
    }

    public function getVehicleDetails($user_id)
    {
        $vehicle = VehicleDetails::find($user_id);
        if($vehicle === NULL)
        {
            return response()->json(['error' => 'Vehicle Not Found!'], 404);
        }
        return response()->json(['success' => $vehicle], $this->successStatus);
    }
}
