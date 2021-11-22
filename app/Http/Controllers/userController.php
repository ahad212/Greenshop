<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
include('jwt.php');
use App\Classes\JWT;
use App\Models\subadmin;
class userController extends Controller
{
    public function admin () {
        $subadmin = subadmin::all();
        return view('admin.user.admin',['subadmin'=>$subadmin]);
    }
    public function storeuser(Request $request) {
        $check = DB::table('users')->where('phone',$request->phone)->first();
        if ($check) {
            return response()->json([
                'error' => true,
                'message' => 'Phone number Already Exist'
            ],200);
        }
        $data = array();
        $data['username'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['password'] = md5($request->pass);
        $data['confirmpass'] = md5($request->conpass);
        $insert = DB::table('users')->insert($data);
        if ($insert) {
            $check = DB::table('users')->where('email',$request->email)->first();
            $payload=[
                'int'   => time(),
                'iss'   => 'localhost',
                'et'    => time()+(13*60),
                'userId'=> $check->email
         
            ];
         
            $token= JWT :: encode($payload,'ahad4545');
            return response()->json([
                'error' => false,
                'message' => 'User Regitration successfully',
                'token' => $token,
                'user' => $check
            ],201);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'User Regitration Fail'
            ],200);
        }
    }

    public function userlogin(Request $request) {
        $email = $request->email;
        $pass = $request->pass;
        $check = DB::table('users')->where([['email','=',$email],['password','=',md5($pass)]])->orWhere([['phone','=', $email],['password','=',md5($pass)]])->first();
        if ($check) {
            $payload=[
                'int'   => time(),
                'iss'   => 'localhost',
                'et'    => time()+(13*60),
                'userId'=> $check->email
         
            ];
         
            $token= JWT :: encode($payload,'ahad4545');
            return response()->json([
                'error' => false,
                'message' => 'Login successfull',
                'token' => $token,
                'user' => $check
            ],200);
        } else {
            return response()->json([
                'error' => true,
                'message' => "Email and Password not match"
            ],200);
        }
    }

    public function insertAddress(Request $request) {
        $id = $request->userID;
        $data = array();
        $data['address_arr'] = $request->address;
        $insert = DB::table('users')->where('id',$id)->update($data);
        if ($insert) {
            return response()->json([
                'error' => false,
                'message' => 'Your address added'
            ],201);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Address added failed'
            ],200);
        }
    }
    public function getAddress(Request $request) {
        $addr = DB::table('users')->where('id',$request->userID)->first();
        return response()->json($addr);
    }
}
