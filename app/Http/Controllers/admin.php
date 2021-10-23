<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class admin extends Controller
{
    public function categorypage () {
        $getCategoryData = DB::table('category')->get();
        return view('admin.catalog.category',['cdata' => $getCategoryData]);
    }
    public function insert (Request $request) {
        $data = array();
        $data['cname'] = $request->cname;
        $data['cdescription'] = $request->cdescription;
        $data['status'] = $request->ai;
        $send = DB::table('category')->insert($data);
        if ($send) {
            return redirect('/laraecomm/admin/category')->with('status','Category Created successfully');
        } else {
            return redirect('/laraecomm/admin/category')->with('error','Category Created Failed');
        }
    }
    public function edit ($id) {
            $editable = DB::table('category')->where('id',$id)->first();
            return view('admin.catalog.editcategory',compact('editable'));
    }

    public function editdata (Request $request,$id) {
        $data = array();
        $data['cname'] = $request->cname;
        $data['cdescription'] = $request->cdescription;
        $data['status'] = $request->ai;
        $confirm = DB::table('category')->where('id',$id)->update($data);
        if ($confirm) {
            return redirect('/laraecomm/admin/category')->with('status','Edit category successfully');

        } else {
            return redirect('/laraecomm/admin/category')->with('error','Edit Category Failed');

        }
    }


    public function insertbrand (Request $request) {
        $data = array();
        $data['bname'] = $request->bname;
        $data['bdescription'] = $request->bdescription;
        $data['bfeatured'] = $request->fy;
        $data['status'] = $request->ai;
        $imgg = $request->file('bimage');

        if ($imgg) {
            $img_name= hexdec(uniqid());
            $nameonly = $imgg->getClientOriginalName();
            $ext=strtolower($nameonly);
            $img_full_name = $img_name.'.'.$ext;
            $path = 'public/new/';
            $img_url = $path.$img_full_name;
            $imgg->move($path,$img_full_name);
            $data['bimage'] = $img_url;
            $good = DB::table('brands')->insert($data);
            if ($good ) {
                return redirect('/laraecomm/admin/brand')->with('status','insert brand successfully');
    
            } else {
                return redirect('/laraecomm/admin/brand')->with('error','insert brand Failed');
    
            }
        } else {
            $good = DB::table('brands')->insert($data);
            if ($good) {
                return redirect('/laraecomm/admin/brand')->with('status','insert brand successfully');
    
            } else {
                return redirect('/laraecomm/admin/brand')->with('error','insert brand Failed');
    
            }
        }
    }
    public function brand () {
            $data = DB::table('brands')->get();
            return view('admin.catalog.brand',['brand' => $data]);
    }
    public function brandedit ($id) {
        $getbrand = DB::table('brands')->where('id',$id)->first();
        return view('admin.catalog.editbrand',compact('getbrand'));
    }
    public function editbrand (Request $request, $id) {
        $data = array();
        $data['bname'] = $request->bname;
        $data['bdescription'] = $request->bdescription;
        $data['bfeatured'] = $request->fy;
        $data['status'] = $request->ai;
        date_default_timezone_set('Asia/Dhaka');
        $data['updated_at'] = now();
        $imgg = $request->file('bimage');

        if ($imgg) {
            $img_name= hexdec(uniqid());
            $nameonly = $imgg->getClientOriginalName();
            $ext=strtolower($nameonly);
            $img_full_name = $img_name.'.'.$ext;
            $path = 'public/new/';
            $img_url = $path.$img_full_name;
            $imgg->move($path,$img_full_name);
            $data['bimage'] = $img_url;
            $good = DB::table('brands')->where('id',$id)->update($data);
            if ($good ) {
                return redirect('/laraecomm/admin/brand')->with('status','Edit brand successfully');
    
            } else {
                return redirect('/laraecomm/admin/brand')->with('error','Edit brand Failed');
    
            }
        } else {
            $good = DB::table('brands')->where('id',$id)->update($data);
            if ($good) {
                return redirect('/laraecomm/admin/brand')->with('status','Edit brand successfully');
    
            } else {
                return redirect('/laraecomm/admin/brand')->with('error','Edit brand Failed');
    
            }
        }
    }
    public function productaddselect () {
        $datafcategory = DB::table('category')->get();
        $datafbrand = DB::table('brands')->get();
        return view('admin.catalog.addproduct',['category'=> $datafcategory,'brand'=> $datafbrand]);
    }

    public function insertproduct (Request $request) {
        $data = array();
        $data['name'] = $request->pname;
        $data['category'] = $request->scat;
        $data['brand'] = $request->sbrand;
        $data['price'] =  number_format($request->price);
        $data['pdescription'] = $request->bdescription;
        $data['featured'] = $request->fy;
        $data['pstatus'] = $request->sactive;
        $data['pimei'] = $request->ia;
        $data['pwarranty'] = $request->ai;
        if (!($data['warrantytime'] = $request->wamount)) {
            $data['warrantytime'] = 'No Warranty';
        } else {
            $data['warrantytime'] = $request->wamount;
        }
        $imgg = $request->file('pimage');

        if ($imgg) {
            $img_name= hexdec(uniqid());
            $nameonly = $imgg->getClientOriginalName();
            $ext=strtolower($nameonly);
            $img_full_name = $img_name.'.'.$ext;
            $path = 'public/new/';
            $img_url = $path.$img_full_name;
            $imgg->move($path,$img_full_name);
            $data['pimage'] = $img_url;
            $good = DB::table('products')->insert($data);
            if ($good ) {
                return redirect('/laraecomm/admin/product')->with('status','insert product successfully');
    
            } else {
                return redirect('/laraecomm/admin/product')->with('error','insert product Failed');
    
            }
        } else {
            $good = DB::table('products')->insert($data);
            if ($good) {
                return redirect('/laraecomm/admin/product')->with('status','insert product successfully');
    
            } else {
                return redirect('/laraecomm/admin/product')->with('error','insert product Failed');
    
            }
        }
    }
    public function getproduct () {
        $data = DB::table('products')->get();
        return view('admin.catalog.products',['product' => $data]);
    }
    public function productedit ($id) {
        $data = DB::table('products')->where('id',$id)->first();
        $datafcategory = DB::table('category')->get();
        $datafbrand = DB::table('brands')->get();
        return view('admin.catalog.editproduct',compact('data'),['category'=> $datafcategory,'brand'=> $datafbrand]);
    }

    public function editproduct (Request $request, $id) {
        $data = array();
        $data['name'] = $request->pname;
        $data['category'] = $request->scat;
        $data['brand'] = $request->sbrand;
        $data['price'] =  (strpos($request->price,","))? $request->price : number_format($request->price);
        $data['pdescription'] = $request->bdescription;
        $data['featured'] = $request->fy;
        $data['pstatus'] = $request->sactive;
        $data['pimei'] = $request->ia;
        $data['pwarranty'] = $request->ai;
        if (!($request->wamount)) {
            $data['warrantytime'] = 'No Warranty';
        } else {
            $data['warrantytime'] = $request->wamount;
        }
        $imgg = $request->file('pimage');

        if ($imgg) {
            $img_name= hexdec(uniqid());
            $nameonly = $imgg->getClientOriginalName();
            $ext=strtolower($nameonly);
            $img_full_name = $img_name.'.'.$ext;
            $path = 'public/new/';
            $img_url = $path.$img_full_name;
            $imgg->move($path,$img_full_name);
            $data['pimage'] = $img_url;
            $good = DB::table('products')->where('id',$id)->update($data);
            if ($good ) {
                return redirect('/laraecomm/admin/product')->with('status','Edit product successfully');
    
            } else {
                return redirect('/laraecomm/admin/product')->with('error','Edit product Failed');
    
            }
        } else {
            $good = DB::table('products')->where('id',$id)->update($data);
            if ($good) {
                return redirect('/laraecomm/admin/product')->with('status','Edit product successfully');
    
            } else {
                return redirect('/laraecomm/admin/product')->with('error','Edit product Failed');
    
            }
        }        
    }

}
