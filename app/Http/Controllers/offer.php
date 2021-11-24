<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\offerModel;
use App\Models\products;
use DB;
class offer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $all = offerModel::all();
        return view('admin.sellOffer.offer',['offer' => $all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_products = products::all();
        return view('admin.sellOffer.offeradd',['allproduct'=> $all_products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $store = offerModel::insert([
            'name' => $request->name,
            'datetime' => $request->dateTime,
            'products' => $request->productArray
        ]);
        if ($store) {
            return response()->json([
                'message' => 'Offer create successfully'
            ],201);
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
        $item = offerModel::where('id',$id)->first();
        return response()->json($item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $all_products = products::all();
        $item = offerModel::where('id',$id)->first();
        return view('admin.sellOffer.offeredit',compact('item'),['allproduct' => $all_products]);
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
        $store = offerModel::where('id',$id)->update([
            'name' => $request->name,
            'datetime' => $request->dateTime,
            'products' => $request->productArray
        ]);
        if ($store) {
            return response()->json([
                'message' => 'Offer edited successfully'
            ],201);
        }     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // i had created below function

    }
    public function deleteItem($id){
        $confirm = offerModel::whereId($id)->delete();
        return response()->json('confirm',200);
    }

    public function updateitem($id){

    }
}
