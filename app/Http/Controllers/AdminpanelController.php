<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminpanel;
use App\Models\subadmin;
use DB;
include('jwt.php');
use App\Classes\JWT;
class AdminpanelController extends Controller
{
    public function adminlogin (Request $request) {
        $verify = adminpanel::where([['username',$request->username],['password',$request->password]])->first();
        if ( $verify ) {
            $payload=[
                'int'   => time(),
                'iss'   => 'localhost',
                'et'    => time()+(13*60),
                'userId'=> $verify->username
         
            ];
         
            $token= JWT :: encode($payload,'ahad4545');
            return response()->json([
                'error' => false,
                'token' => $token,
                'message' => 'login success'
            ],200);
        } else {

            return response()->json([
                'error' => true,
                'message' => "User name & Password doesn't match"
            ]);
        }
    }

    public function subadminlogin (Request $request) {
        $verify = subadmin::where([['email',$request->email],['pass',md5($request->pass)]])->first();
        if ( $verify ) {
            $payload=[
                'int'   => time(),
                'iss'   => 'localhost',
                'et'    => time()+(13*60),
                'userId'=> $verify->id
         
            ];
         
            $token= JWT :: encode($payload,'ahad4545');
            return response()->json([
                'error' => false,
                'token' => $token,
                'message' => 'login success'
            ],200);
        } else {

            return response()->json([
                'error' => true,
                'message' => "User name & Password doesn't match"
            ]);
        }

    }



    public function sellerlogin (Request $request) {
        $check = DB::table('users')->where('email',$request->email)->first();
        if ($check == '') {
            return response()->json([
                'error' => true,
                'message' => "Seller doesn't exist"
            ]);

        } else {
            if ($check->role === 'seller') {
                $verify = DB::table('users')->where([['email',$request->email],['password',$request->password]])->first();
                if ( $verify ) {
                    $payload=[
                        'int'   => time(),
                        'iss'   => 'localhost',
                        'et'    => time()+(13*60),
                        'userId'=> $verify->id
                 
                    ];
                 
                    $token= JWT :: encode($payload,'ahad4545');
                    return response()->json([
                        'error' => false,
                        'token' => $token,
                        'message' => 'login success'
                    ],200);
                } else {
            
                    return response()->json([
                        'error' => true,
                        'message' => "User name & Password doesn't match"
                    ]);
                } 
            } else {
                return response()->json([
                    'error' => true,
                    'message' => "You are not seller"
                ]);
            }
           
        }




    }
}
