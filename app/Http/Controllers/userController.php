<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
include('jwt.php');
use App\Classes\JWT;
class userController extends Controller
{
    public function storeuser(Request $request) {
        $check = DB::table('users')->where('email',$request->email)->first();
        if ($check) {
            return response()->json([
                'error' => true,
                'message' => 'Email Already Exist'
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
}
