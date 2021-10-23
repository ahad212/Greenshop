@extends('admin.adminwelcom')
@section('main_content')            
               
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Brand</li>
        </ol>
    </div>
    <form action="{{route('insertbrand')}}" method="POST" style="width:90%;margin:auto;" enctype="multipart/form-data">
        @csrf
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col">
                <label for="cname" class="d-block" style="font-weight: bold;">
                    Brand Name
                    <input type="text" id="cname" class="form-control" name="bname" required>
                </label>
                <label for="cdescription" class="d-block" style="font-weight: bold;">
                    Brand Description
                    <textarea cols="30" rows="5" id="cdescription" class="form-control" name="bdescription" required></textarea>
                </label>
                <div class="custom-file">
                    <div class="chead" style="font-weight: bold;">Brand Logo (should width/height: 190px/192px)</div>
                    <input type="file" id="cimg" class="d-none custom-file-input" name="bimage" >
                    <label for="cimg" class="form-control custom-file-label">
                        Choose logo
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="status_wrapping">
                    <div class="status" style="font-weight:bold;">Featured</div>
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
                    </div>
                </div>
                <div class="status_wrapping">
                    <div class="status" style="font-weight:bold;">Status</div>
                    <div class="check_wrapping" style="display: flex;grid-column-gap:10px;">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ai" value="active" id="flexRadioDefault1" checked>
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
                </div>
            </div>
        </div>


        <button class="btn btn-primary" style="margin-top:10px;">Submit</button>
        <a href="javascript:history.back()" class="btn btn-secondary" style="margin-left:15px;margin-top:10px;">Cancel</a>                          
    </form>
              
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('laraecomm/adminAssets/js/scripts.js')}}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> --}}
    {{-- <script src="{{asset('laraecomm/adminAssets/js/datatables-simple-demo.js')}}"></script> --}}
@endsection