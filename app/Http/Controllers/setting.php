<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\location;
use DB;
use Carbon\Carbon;
use Input;
class setting extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getlocation() {
        $locations = location::all();
        return response()->json([
            'error' => false,
            'data' => $locations,
            'message' => 'All Location For Delivery'
        ]);
    } 
    
    public function index()
    {   $location = location::all();
        return view('admin/site/location',['location' => $location]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plocation = location::where('parent','Parent Location')->get();
        return view('admin/site/locationadd',['plocation'=> $plocation]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeing = new location();
        $storeing->name= $request->name;
        $storeing->shippingcost = $request->cost;
        if ($request->parent) {
            $storeing->parent = $request->parent;
        }
        $storeing->save();
        if ($storeing) {
            return redirect()->route('location.index')->with('status','Location Created Successfully');
        } else {
            return redirect()->route('location.index')->with('error','Location Create Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $ploc = location::where('parent','Parent Location')->where('id','<>',$id)->get();
        $location = location::where('id',$id)->first();
        return view('admin/site/locationedit',compact('location'),['ploc'=>$ploc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array();
        $data['name']= $request->name;
        $data['shippingcost'] = $request->cost;
        if ($request->parent) {
            $data['parent'] = $request->parent;
        }
        $data['updated_at'] = Carbon::now();
        $storeing = location::whereId($id)->update($data);

        if ($storeing) {
            return redirect()->route('location.index')->with('status','Location Updated Successfully');
        } else {
            return redirect()->route('location.index')->with('error','Location Update Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$parent)
    {
        $del = location::where('id',$id)->delete();
        echo $parent;
        // return back();
    }
}
