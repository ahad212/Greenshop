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
            <li class="breadcrumb-item active">Brand</li>
        </ol>
    </div>
    <form action="{{route('updateadmin',$subadmin->id)}}" method="POST" style="width:90%;margin:auto;">
        @csrf
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col">
                <label for="cname" class="d-block" style="font-weight:bold;">
                    Name
                    <input type="text" id="cname" value="{{$subadmin->name}}" class="form-control" name="name" >
                </label>
                <label for="cname" class="d-block"  style="font-weight:bold;">
                    Email
                    <input type="text" id="cname" value="{{$subadmin->email}}" class="form-control" name="email" >
                </label>
                
                {{-- <div class="custom-file">
                    <div class="chead" style="font-weight: bold;">Brand Logo (should width/height: 190px/192px)</div>
                    <input type="file" id="cimg" class="d-none custom-file-input" value="{{$getbrand->bimage}}" name="bimage" >
                    <label for="cimg" class="form-control custom-file-label">
                        Choose logo
                    </label>
                </div> --}}
                {{-- <input type="text" id="role" value="{{$data->role}}" class="form-control" name="role" > --}}
            </div>
            <div class="col">

                <div class="status_wrapping">
                    <div class="status" style="font-weight:bold;">Block Admin</div>
                    <div class="check_wrapping" style="display: flex;grid-column-gap:10px;">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fy" value="yes" id="f1" @php
                                if ($subadmin->blockadmin == 'yes') echo 'checked';
                            @endphp>
                            <label class="form-check-label" for="f1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fy" value="no" id="f2"
                            @php
                                if ($subadmin->blockadmin == 'no') echo 'checked';
                            @endphp>
                            <label class="form-check-label" for="f2">
                                No
                            </label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        
        <button class="btn btn-primary" style="margin-top:10px;">Submit</button>
        <a href="javascript:history.back()" style="margin-left:15px;margin-top:10px;" class="btn btn-secondary">Cancel</a>                        
    </form>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('laraecomm/adminAssets/js/scripts.js')}}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> --}}
    {{-- <script src="{{asset('laraecomm/adminAssets/js/datatables-simple-demo.js')}}"></script> --}}
@endsection
