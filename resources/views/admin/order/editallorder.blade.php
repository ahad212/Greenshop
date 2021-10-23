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
            </div>
        </div>
        <form action="{{route( 'updateallorder',$order->id)}}" method="POST" style="width:90%;margin:auto;" enctype="multipart/form-data">
            @csrf
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col">
                    <label for="ss" style="font-weight:bold;margin-top:5px;">Select Category</label>
                    <select name="status" id="ss" class="form-control">
                        <option value="">Select Order status</option>
                        <option value="pending_order" <?php if($order->status =='pending_order') echo 'selected';?>>Pending Order</option>
                        <option value="processing" <?php if($order->status =='processing') echo 'selected';?>>Processing Order</option>
                        <option value="curiar_order" <?php if($order->status =='curiar_order') echo 'selected';?>>Curiar Order</option>
                        <option value="completed_order" <?php if($order->status =='completed_order') echo 'selected';?>>Completed Order</option>
                        <option value="cancel_order" <?php if($order->status =='cancel_order') echo 'selected';?>>Cancel Order</option>
                        <option value="exchange_order" <?php if($order->status =='exchange_order') echo 'selected';?>>Exchange Order</option>
                        <option value="refund_order" <?php if($order->status =='refund_order') echo 'selected';?>>Refund Order</option>
                    </select>

                </div>
                <div class="col">

                </div>
            </div>
    
    
            <button class="btn btn-primary" style="margin-top:10px;">Submit</button>
            <a href="javascript:history.back()" class="btn btn-secondary" style="margin-left:15px;margin-top:10px;">Cancel</a>    
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('laraecomm/adminAssets/js/scripts.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('laraecomm/adminAssets/js/datatables-simple-demo.js')}}"></script>



@endsection
