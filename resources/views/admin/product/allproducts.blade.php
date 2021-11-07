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
            <li class="breadcrumb-item active">Product</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body" style="display: flex;">
                <div class="textt" style="font-size: 25px;font-weight:bold;">
                    Manage All Product
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
                            <th>Name</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Sold</th>
                            <th>Price</th>
                            <th>Discount Price</th>
                            {{-- <th>Featured</th> --}}
                            <th>Status</th>
                            <th>EMI</th>
                            <th>Warranty</th>
                            <th>Warranty Duration</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $getall as $k => $all )
                            <tr>
                                <td>{{$k+1}}</td>
                                <td>{{$all->name}}</td>
                                <td>{{$all->cname}}</td>
                                <td><img style="height:50px;width:50px;object-fit:contain;" src="{{($all->pimage === null || substr($all->pimage,0,1) === '[')? asset('laraecomm/images/default.png') : asset('laraecomm/public/'.$all->pimage)}}" alt=""></td>
                                <td>{{$all->sold}}</td>
                                <td>{{$all->price}}</td>
                                <td>{{$all->discount_price}}</td>
                                {{-- <td>{{$all->featured}}</td> --}}
                                <td>{{$all->pstatus}}</td>
                                <td>{{$all->pimei}}</td>
                                <td>{{$all->pwarranty}}</td>
                                <td>{{$all->warrantytime}}</td>
                                <td>
                                    <a href="{{route('editprod',$all->id)}}" class="btn btn-info" style="color:white;" title="Edit"><i class="far fa-edit"></i></a>
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
