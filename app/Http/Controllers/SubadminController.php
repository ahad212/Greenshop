<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subadmin;
class SubadminController extends Controller
{
    public function admin () {
        $subadmin = subadmin::all();
        return view('admin.user.admin',['subadmin'=>$subadmin]);
    }

    public function create () {
        return view('admin.user.createsubadmin');
    }
    public function store (Request $request) {
        $check = subadmin::where('email',$request->email)->first();
        if ($check) {
            return redirect()->route('admin')->with('error','Email Already Exist');
        }
        $subadmin = new subadmin();
        $subadmin->name = $request->name;
        $subadmin->email = $request->email;
        $subadmin->pass = md5($request->pass);
        $subadmin->blockadmin = $request->fy;
        $subadmin->save();
        if ($subadmin) {
            return redirect()->route('admin')->with('status','Sub Admin Created Successfully');
        } else {
            return redirect()->route('admin')->with('error','Sub Admin created Failed');
        }
    }
    public function edit ($id) {
        $subadmin = subadmin::where('id',$id)->first();
        return view('admin.user.editsubadmin',compact('subadmin'));   
    }
    public function update (Request $request,$id) {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['blockadmin'] = $request->fy;
        $subadmin = subadmin::where('id',$id)->update($data);

        if ($subadmin) {
            return redirect()->route('admin')->with('status','Sub Admin Updated Successfully');
        } else {
            return redirect()->route('admin')->with('error','Sub Admin Updated Failed');
        }
    }
}
