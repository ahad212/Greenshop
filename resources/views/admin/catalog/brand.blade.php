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
            <li class="breadcrumb-item active">Brands</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body" style="display: flex;">
                <div class="textt" style="font-size: 25px;font-weight:bold;">
                    Manage All Brands
                </div>
                <a href="{{route('brandadd')}}" class="btn btn-secondary" style="margin-left:auto;">Create Brands</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Brand List
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Featured</th>
                            <th>Logo</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brand as $brands)
                            
                        <tr>
                            <td>{{$brands->bname}}</td>
                            <td>{{$brands->bdescription}}</td>
                            <td>{{$brands->bfeatured}}</td>
                            <td><img style="height:50px;width:50px;object-fit:contain;" src="{{($brands->bimage == 'NONE')? asset('laraecomm/images/default.png') : asset('laraecomm/public/'.$brands->bimage)}}" alt=""></td>
                            <td>{{$brands->status}}</td>
                            <td>
                                <a href="{{route('brandedit',$brands->id)}}" class="btn btn-info" style="color:white;" title="Edit"><i class="far fa-edit"></i></a>
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