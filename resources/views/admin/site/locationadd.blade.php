@extends('admin.adminwelcom')
@section('main_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <li class="breadcrumb-item active">Create Location</li>
        </ol>
    </div>
    <form action="{{route('location.store')}}" method="POST" style="width:90%;margin:auto;">
        @csrf
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col">
                <label for="cname" class="d-block"  style="font-weight:bold;">
                    Location Name
                    <input type="text" id="cname" class="form-control" name="name" required>
                </label>
                <label for="cname" class="d-block"  style="font-weight:bold;">
                    Shipping Cost
                    <input type="number" id="cname" class="form-control" name="cost" required>
                </label>
                {{-- <label for="cemail" class="d-block"  style="font-weight:bold;">
                    Email
                    <input type="email" id="cemail" value="" class="form-control" name="email" required>
                </label>
                <label for="pass" class="d-block"  style="font-weight:bold;">
                    pass
                    <input type="text" id="pass" value="" class="form-control" name="pass" required>
                </label> --}}
                
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
                <label for="ss" style="font-weight:bold;margin-top:5px;">Select Parent Location</label>
                <select name="parent" id="location" class="form-control" >
                    <option value="" hidden>Select Parent</option>
                    @foreach ($plocation as $ploc)
                        <option value="{{$ploc->name}}">{{$ploc->name}}</option>
                    @endforeach
                </select>
                {{-- <div class="status_wrapping">
                    <div class="status" style="font-weight:bold;">Block Admin</div>
                    <div class="check_wrapping" style="display: flex;grid-column-gap:10px;">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fy" value="yes" id="f1">
                            <label class="form-check-label" for="f1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fy" value="no" id="f2" checked>
                            <label class="form-check-label" for="f2">
                                No
                            </label>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
        
        
        <button class="btn btn-primary" style="margin-top:10px;">Submit</button>
        <a href="javascript:history.back()" style="margin-left:15px;margin-top:10px;" class="btn btn-secondary">Cancel</a>                        
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('laraecomm/adminAssets/js/scripts.js')}}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> --}}
    {{-- <script src="{{asset('laraecomm/adminAssets/js/datatables-simple-demo.js')}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('#location').select2();
    </script>
@endsection
