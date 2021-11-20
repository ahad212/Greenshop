<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\products;
class OrderController extends Controller
{
    public function allorder () {
        $order = order::join('users', 'users.id', '=', 'orders.customer_id')->select('orders.*','users.username','email')->get();
        return view('admin.order.allorder',['order' => $order]);
    }

    public function allorderIdwise($id) {
        $order = order::where('id',$id)->first();
        return view('admin.order.editallorder',compact('order'));
    }

    public function updateallorder (Request $request,$id) {
        $data = array();
        $data['status'] = $request->status;
        $check = order::where('id',$id)->update($data);
        if($check) {
            return back()->with('status','Order Status Updated successfully');
        }
    }

    public function cancelorder () {
        $order = order::where('status','cancel_order')->get();
        return view('admin.order.cancel',['order'=>$order]);
    }

    public function completeorder () {
        $order = order::where('status','completed_order')->get();
        return view('admin.order.complete',['order'=>$order]);
    }

    public function curiarorder () {
        $order = order::where('status','curiar_order')->get();
        return view('admin.order.curiar',['order'=>$order]);
    }

    public function exchangeorder () {
        $order = order::where('status','exchange_order')->get();
        return view('admin.order.exchange',['order'=>$order]);
    }
    
    public function pendingorder () {
        $order = order::where('status','pending_order')->get();
        return view('admin.order.pendigorder',['order'=>$order]);
    }
    
    public function processingorder () {
        $order = order::where('status','processing')->get();
        return view('admin.order.processingorder',['order'=>$order]);
    }

    public function refundorder () {
        $order = order::where('status','refund_order')->get();
        return view('admin.order.refund',['order'=>$order]);
    }


    public function insertOrder (Request $request) {
        $orderArray = json_decode($request->actuallyBuyCartString);
        // $orderArray = $request->actuallyBuyCart;
        $elementing= '';
        for ($i=0; $i < count($orderArray); $i++) { 
            $element = $orderArray[$i];
            $getProduct = products::where('id',$element->id)->first();
            $elementing = $getProduct;
            $getQuantity = $getProduct->quantity;
            $updatedQuantity = intval($getQuantity) - intval($element->quantity);
            products::where('id',$element->id)->update(['quantity'=> $updatedQuantity]);
        }

        $data = array();
        $data['customer_id'] = $request->id ;
        $data['product_with_quantity'] = $request->actuallyBuyCartString;
        $data['shipping_address'] = $request->shippingAddress;
        $data['delivery_location'] = $request->address;
        $data['payment_method'] = $request->paymentGateway;
        $data['total_amount'] = $request->totalValuewihShiping;
        $data['status'] = 'Pending';
        $check = order::insert($data);
        if($check) {
            return response()->json([
                'error' => false,
                'message' => 'Congratulations'
            ],201);
        }
    }
}
