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
            <li class="breadcrumb-item">Products</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body" style="display: flex;">
                <div class="textt" style="font-size: 25px;font-weight:bold;">
                    Manage All Products
                </div>
                <a href="{{route('productadd')}}" class="btn btn-secondary" style="margin-left:auto;">Create Product</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Product List
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Featured</th>
                            <th>Status</th>
                            <th>IMEI</th>
                            <th>Warranty</th>
                            <th>period</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $products)
                            
                        <tr>
                            <td>{{$products->name}}</td>
                            <td>{{$products->category}}</td>
                            <td>{{$products->brand}}</td>
                            <td>{{$products->pdescription}}</td>
                            <td><img style="height:70px;width:70px;object-fit:contain;" src="{{($products->pimage == 'NONE')? asset('laraecomm/images/default.png') : asset('laraecomm/public/'.$products->pimage)}}" alt=""></td>
                            <td>{{$products->price}}</td>
                            <td>{{$products->featured}}</td>
                            <td>{{$products->pstatus}}</td>
                            <td>{{$products->pimei}}</td>
                            <td>{{$products->pwarranty}}</td>
                            <td>{{$products->warrantytime}}</td>
                            <td><a href="{{route('productedit',$products->id)}}"  class="btn btn-info" style="color:white;" title="Edit"><i class="far fa-edit"></i></a>
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
@endsection