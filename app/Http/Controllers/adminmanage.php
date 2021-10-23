<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class adminmanage extends Controller
{
    public function getuser () {
        $data = DB::table('users')->where('role','user')->get();
        return view('admin.user.user',['getdata' => $data]);
    }
    public function getseller () {
        $data = DB::table('users')->where('role','seller')->get();
        return view('admin.user.seller',['getdata' => $data]);
    }

    public function getEdituser ($id) {
        $data = DB::table('users')->where('id',$id)->first();
        return view('admin.user.edituser',compact('data'));
    }

    public function updateuser (Request $request, $id) {
        $data = array();
        $data['username'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['role'] = $request->role;
        $data['blockuser'] = $request->fy;
        $result = DB::table('users')->where('id',$id)->update($data);

        if ( $result ) {
            return redirect()->route($request->role)->with('status', $request->role.' updated successfully');
        } else {
            return redirect()->route($request->role)->with('error', $request->role.' updated failed');
        }
    }

}
