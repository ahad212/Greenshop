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
                <a href="{{route('createadmin')}}" class="btn btn-secondary" style="margin-left:auto;">Create Admin</a>
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
                            <th>Email</th>
                            <th>Block Admin</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($subadmin as $k => $admin)
                            <tr>
                                <td>{{$k+1}}</td>
                                <td>{{$admin->name}}</td>
                                <td>{{$admin->email}}</td>
                                <td>{{$admin->blockadmin}}</td>
                                <td>
                                    <a href="{{route('editadmin',$admin->id)}}" class="btn btn-info" style="color:white;" title="Edit"><i class="far fa-edit"></i></a>
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
