@extends('admin.adminwelcom')
@section('main_content')
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        @if($errors->any())
        <div class="alert alert-danger">
            <p><strong>Opps Something went wrong</strong></p>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
        
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
        
        @if(session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        @endif
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Category</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body" style="display: flex;">
                <div class="textt" style="font-size: 25px;font-weight:bold;">
                    Manage All Catagory
                </div>
                {{-- <a href="{{route('Categoryadd')}}" class="btn btn-secondary" style="margin-left:auto;">Create category</a> --}}
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Category List
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Customer Email</th>
                            <th>Customer Name</th>
                            <th>Purchase Query</th>
                            <th>Shipping Address</th>
                            <th>Payment Method</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $k => $item)
                            <tr>
                                <td>{{$k+1}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->username}}</td>
                                <td>@php

                                    $looping = json_decode($item->product_with_quantity);
                                    
                                    foreach ($looping as $key => $value) {
                                            echo $value->name.' Quantity: '.$value->quantity.'<br>';
                                        }
                                @endphp</td>
                                <td>{{$item->shipping_address}}</td>
                                <td>{{$item->payment_method}}</td>
                                <td>{{$item->total_amount}}</td>
                                <td>{{$item->status}}</td>
                                <td>
                                    <a href="{{route('editallorder',$item->id)}}" class="btn btn-info" style="color:white;" title="Edit"><i class="far fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('laraecomm/adminAssets/js/scripts.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('laraecomm/adminAssets/js/datatables-simple-demo.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // $(document).ready(function(){
    // let check;
    //     $.get("", function(data){
    //         let table = '';
    //         for (let ind = 0; ind < data.length; ind++) {
    //             const element = data[ind];
    //             check = JSON.parse(element.product_with_quantity);
    //             console.log(element);
    //             let product = '';
    //             for (let index = 0; index < check.length; index++) {
    //                 const element = check[index];
    //                 product += element.name + ' Quantity: ' + element.quantity +'\n'
    //             }
    //             table += `
    //                     <tr>
    //                     <td>`+ element.id +`</td>
    //                     <td>`+ element.customer_id +`</td>
    //                     <td>`+ element.payment_method +`</td>
    //                     <td>`+ element.total_amount +`</td>
    //                     </tr>
    //             `;
    //             console.log(product);                
    //         }
    //         $('#tab').html(table);
    //     });
    // });
</script>
@endsection
