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
        <form action="{{route('binsert')}}" method="POST" style="width:90%;margin:auto;" enctype="multipart/form-data">
            @csrf
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col">
                    <label for="cname" class="d-block" style="font-weight: bold;">
                        Category Name
                        <input type="text" id="cname" class="form-control" name="cname" required>
                    </label>
                    {{-- <label for="cdescription" class="d-block" style="font-weight: bold;">
                        Category Description
                        <textarea cols="30" rows="5" id="cdescription" class="form-control" name="cdescription" required></textarea>
                    </label> --}}
                    <div class="custom-file">
                        <div class="chead" style="font-weight: bold;">Category Logo (should width/height: 190px/192px)</div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02" name="cimage">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label for="parent">Parent Category</label>

                    <select name="cparent" id="parent" class="form-control">
                        <option value="">Select Parent category</option>
                        @foreach ($brands as $brand)
                            <option value="{{$brand->cname}}">{{$brand->cname}}</option>
                        @endforeach
                    </select>
                    <div class="status_wrapping">
                        {{-- <div class="status" style="font-weight:bold;">Featured</div>
                        <div class="check_wrapping" style="display: flex;grid-column-gap:10px;">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="fy" value="yes" id="f1" >
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
                        </div> --}}
                    </div>
                    {{-- <div class="status_wrapping">
                        <div class="status" style="font-weight:bold;">Status</div>
                        <div class="check_wrapping" style="display: flex;grid-column-gap:10px;">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ai" value="active" id="flexRadioDefault1" required>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Active
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="inactive" name="ai" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Inactive
                                </label>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
    
    
            <button class="btn btn-primary" style="margin-top:10px;">Submit</button>
            <a href="javascript:history.back()" class="btn btn-secondary" style="margin-left:15px;margin-top:10px;">Cancel</a>                          
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('laraecomm/adminAssets/js/scripts.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('laraecomm/adminAssets/js/datatables-simple-demo.js')}}"></script>
@endsection
