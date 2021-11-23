<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\brandModel;
use App\Models\location;
use Carbon\Carbon;
class product extends Controller
{
    public function storeproduct (Request $request) {
        $data = new products();
        $data->name = $request->product;
        $data->category = $request->brand;
        $data->pdescription = $request->description;
        // $imgg = $request->file('images');
        $attach = $request->file('attach');

        if ($request->hasFile('image')) {
            $imgaa = [];
            foreach ($request->file('image') as $file) {
                # code...
                $filename = '/productimages/'.$file->getClientOriginalName();
                $file->move(public_path('productimages'),$filename);
                $imgaa[] = $filename;
            }
            $data->pimage = json_encode($imgaa);

        }
        if ($attach) {
            $img_name= hexdec(uniqid());
            $nameonly = $attach->getClientOriginalName();
            $ext=strtolower($nameonly);
            $img_full_name = $img_name.'.'.$ext;
            $path = 'public/new/';
            $img_url = $path.$img_full_name;
            $attach->move($path,$img_full_name);
            $data->attach = $img_url;
        }
        $data->quantity = $request->quantity;
        $data->price = $request->price;
        if ($request->discount_price) {
            $data->discount_price = $request->discount_price;
        } else {
            $data->discount_price = '0';
        }
        if ($request->color) {
            $data->color = $request->color;
        }
        if ($request->size) {
            $data->size = $request->size;
        }
        if ($request->shippingCost) {
            $data->shipping_charge = $request->shippingCost;
        } else {
            $data->shipping_charge = '0';
        }
        $data->slug = $request->slug;
        $data->longd = $request->longd;
        $data->featured = $request->productf;
        $data->pstatus = $request->isActive;
        $data->pimei = $request->IMEI;
        $data->pwarranty = $request->Warrantyavailable;
        $data->warrantytime = $request->warrantyTime;
        $data->save();
        if ( $data ) {
            return response()->json('Product uploaded successfully');
        }

    }

public function updateProduct(Request $request) {
    $data = array();
    $data['name'] = $request->product;
    $data['category'] = $request->brand;
    $data['pdescription'] = $request->description;
    // $imgg = $request->file('images');
    $attach = $request->file('attach');

    if ($request->hasFile('image')) {
        // $imgaa = [];
        foreach ($request->file('image') as $file) {
            # code...
            $filename = '/productimages/'.$file->getClientOriginalName();
            $file->move(public_path('productimages'),$filename);
            // $imgaa[] = $filename;
        }
        

    }
    if ($request->immageArray) {
        $data['pimage'] = $request->immageArray;
    }
    if ($attach) {
        $img_name= hexdec(uniqid());
        $nameonly = $attach->getClientOriginalName();
        $ext=strtolower($nameonly);
        $img_full_name = $img_name.'.'.$ext;
        $path = 'public/new/';
        $img_url = $path.$img_full_name;
        $attach->move($path,$img_full_name);
        $data['attach'] = $img_url;
    }
    $data['quantity'] = $request->quantity;
    $data['price'] = $request->price;
    if ($request->discount_price) {
        $data['discount_price'] = $request->discount_price;
    } else {
        $data['discount_price'] = '0';
    }
        $data['color'] = $request->color;
        $data['size'] = $request->size;
    if ($request->shippingCost) {
        $data['shipping_charge'] = $request->shippingCost;
    }
    if ($request->shippingCost) {
        $data['shipping_charge'] = $request->shippingCost;
    } else {
        $data['shipping_charge'] = '0';
    }
    $data['slug'] = $request->slug;
    $data['longd'] = $request->longd;
    $data['featured'] = $request->productf;
    $data['pstatus'] = $request->isActive;
    $data['pimei'] = $request->IMEI;
    $data['pwarranty'] = $request->Warrantyavailable;
    $data['warrantytime'] = $request->warrantyTime;
    $data['updated_at'] = Carbon::now();
    $datass = products::whereId($request->id)->update($data);
    if ( $datass ) {
        return response()->json('Product updated successfully');
    }
}


    public function storeattach (Request $request) {
        $data = new products();
        $data->name = $request->pname;
        $data->category = $request->scat;
        $data->pdescription = $request->bdescription;
        $imgg = $request->file('pimage');
        $attach = $request->file('attach');

        if ($imgg) {
            $imgaa = [];
            $filename = '/productimages/'.$imgg->getClientOriginalName();
            $imgg->move(public_path('/productimages/'),$filename);
            $imgaa[] = $filename;
            $data->pimage = json_encode($imgaa);
        }
        if ($attach) {
            $img_name= hexdec(uniqid());
            $nameonly = $attach->getClientOriginalName();
            $ext=strtolower($nameonly);
            $img_full_name = $img_name.'.'.$ext;
            $path = 'public/new/';
            $img_url = $path.$img_full_name;
            $attach->move($path,$img_full_name);
            $data->attach = $img_url;
        }
        $data->quantity = $request->quantity;
        $data->price = $request->price;
        // $data->featured = $request->fy;
        $data->shipping_charge = 0;
        $data->virtual_product = 'yes';
        $data->discount_price = $request->d_price;
        $data->pstatus = $request->sactive;
        $data->pimei = $request->IMEI;
        $data->pwarranty = $request->Warrantyavailable;
        $data->warrantytime = $request->warrantyTime;
        $data->save();
        if ( $data ) {
            return back()->with('status','Product uploaded successfully');
        }

    }



    public function allproducts () {
        $getall = products::join('brands','products.category','=','brands.id')->select('products.*','brands.cname','brands.parent')->orderBy('id','DESC')->get();
        return view('admin.product.allproducts',['getall' => $getall]);
    }

    public function recent () {
        $recent = products::orderBy('id','DESC')->limit(10)->get();
        return view('admin.product.recentproducts',['getall'=>$recent]);
    }

    public function getbrandlist () {
        $brands = brandModel::orderBy('id','DESC')->where('parent','parent')->get();
        return view('admin.product.brand',['brands' =>$brands]);
    }
    public function brandeditview($id) {
        $ibrand = brandModel::where('id',$id)->first();
        $brands = brandModel::orderBy('id','DESC')->where('parent','parent')->get();
        return view('admin.product.categoryedit',compact('ibrand'),['brands' =>$brands]);
    }
    

    public function brandUpdate (Request $request,$id) {
        $data = array();
        $data['cname'] = $request->cname;
        // $brand->cdescription = $request->cdescription;
        if ( $request->cparent ) {
            $data['parent'] = $request->input('cparent');
        }
        $imgg = $request->file('cimage');
        if ($imgg) {
            $img_name= hexdec(uniqid());
            $nameonly = $imgg->getClientOriginalName();
            $ext=strtolower($nameonly);
            $img_full_name = $img_name.'.'.$ext;
            $path = 'public/new/';
            $img_url = $path.$img_full_name;
            $imgg->move($path,$img_full_name);
            $data['bimage'] = $img_url;
        }
        if ($request->fy) {
            $data['cfeatured'] = $request->fy;
        } else {
            $data['cfeatured'] = 'no';
        }
        $data['status'] = $request->ai;
        $parentname = brandModel::where('id',$id)->first();
        $brand = brandModel::where('id',$id)->update($data);
        $forChild = array();
        $forChild['parent'] = $request->cname;
        $childUpdate = brandModel::where('parent',$parentname->cname)->update($forChild);

        if ( $brand ) {
            return redirect()->route('category')->with('status','Category Updated successfully');
        } else {
            return redirect()->route('category')->with('status','Category Updated failed');
        }    
    }

    public function brandIndex () {
        $category = brandModel::orderBy('id','DESC')->get();
        return view('admin/product/category',['category' => $category]);
    }


    public function brandInsert (Request $request) {

        $brand = new brandModel();
        $brand->cname = $request->cname;
        // $brand->cdescription = $request->cdescription;
        if ( $request->cparent ) {
            $brand->parent = $request->input('cparent');
        }
        $imgg = $request->file('cimage');
        if ($imgg) {
            $img_name= hexdec(uniqid());
            $nameonly = $imgg->getClientOriginalName();
            $ext=strtolower($nameonly);
            $img_full_name = $img_name.'.'.$ext;
            $path = 'public/new/';
            $img_url = $path.$img_full_name;
            $imgg->move($path,$img_full_name);
            $brand->bimage = $img_url;
        }
        if ($request->fy) {
            $brand->cfeatured = $request->fy;
        } else {
            $brand->cfeatured = 'no';
        }
        $brand->status = $request->ai;
        $brand->save();
        if ( $brand ) {
            return redirect()->route('category')->with('status','Category created successfully');
        }
    }
    public function addnew() {
        $Category = brandModel::all();
        return view('admin.product.addnew',compact('Category'));
    }

    public function virtualcreate() {
        $Category = brandModel::all();
        return view('admin.product.addvirtual',compact('Category'));
    }



    public function getProducts() {
        $all_products = products::where('pstatus','active')->get();
        return response()->json([
            'data' => $all_products,
            'error' => false,
            'message' => 'All active Producs only',
        ],200);
    }

    public function individualproduct($product_name) {
        $single_product = products::where('slug',$product_name)->first();
        $images = json_decode($single_product->pimage);
        return response()->json([
            'data' => $single_product,
            'error' => false,
            'images' => $images,
            'message' => 'Single Product',            
        ],200);
    }


    // product view in client
    public function individualproductblade($product_name) {
        $single_product = products::join('brands','brands.id','=','products.category')->select('products.*','brands.cname','brands.parent')->where('slug',$product_name)->first();
        $location = location::all();
        $images = json_decode($single_product->pimage);

        return view('product_view',compact('single_product'),['image'=> $images,'location' => $location],);
    }


    //client home 
    public function home(){
        $all_products = products::where('pstatus','active')->join('brands','products.category','=','brands.id')->select('products.*','brands.cname','brands.parent')->get();
        $f_products = products::where('pstatus','active')->get();
        return view('home',['allProducts'=> $all_products,'featuredProducts'=> $f_products]);
    }


    public function editnew($id) {
        $product = products::whereId($id)->first();
        $brands = brandModel::all();
        return view('admin/product/editproduct',compact('product'),['category' => $brands]);
    }

    public function idwiseimageedit(Request $request) {
        $single_productd = products::whereId($request->id)->first();
        return response()->json($single_productd,200);
    }
    public function slugproduct(Request $request) {
        $single_productd = products::where('slug',$request->slug)->first();
        return response()->json($single_productd,200);        
    }

    // this is for checking category for delete 
    public function testing(Request $request) {
        $cat = brandModel::whereId($request->id)->first();
        return response()->json($cat);
    }

    // delete category with sub
    public function delcategorysub(Request $request) {
        $catdetails = brandModel::whereId($request->id)->first();
        $delsub = brandModel::where('parent',$catdetails->cname)->delete();
        $delparent = brandModel::whereId($request->id)->delete();
        if ($delsub || $delparent) {
            return response()->json('All sub Category deleted with this parent');
        } else {
            return response()->json("Category is not deleted yet");
        }
    }



    public function category() {
        $all_products = products::where('pstatus','active')->join('brands','products.category','=','brands.id')->select('products.*','brands.cname','brands.parent')->get();
        $f_products = products::where('pstatus','active')->get();
        return view('ProductCategory',['allProducts'=> $all_products,'featuredProducts'=> $f_products]);
    }

    public function searchApi(Request $request) {
        $all_products = products::where('name', 'like', $request->Searchtext.'%')->where('pstatus','active')->get();
        return response()->json($all_products);
    }


    public function rating(Request $request) {
        $ratingObject = json_decode($request->review);
        $productId = $ratingObject->productId;
        $previousRating = products::where('id',$productId)->first();
        $existingReview = json_decode($previousRating->review);
        if ($existingReview) {
            array_push($existingReview ,$ratingObject);
            products::where('id',$productId)->update([
                'review' => json_encode($existingReview)
            ]);
            return response()->json([
                'message' => 'Thanks for your review :)'
            ],201);
        } 
        else {
            $array = array();
            array_push($array,$ratingObject);
            products::where('id',$productId)->update([
                'review' => json_encode($array)
            ]);
            return response()->json([
                'message' => 'Thanks for your review :)'
            ],201);
        }
        return response()->json();
    }

}
