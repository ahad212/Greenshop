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
        <form action="{{route( 'attachinsert' )}}" method="POST" style="width:90%;margin:auto;" enctype="multipart/form-data">
            @csrf
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col">
                    <label for="cname" class="d-block" style="font-weight: bold;">
                        Product Name
                        <input type="text" id="cname" class="form-control" name="pname" required>
                    </label>
                    <label for="ss" style="font-weight:bold;margin-top:5px;">Select Category</label>
                    <select name="scat" id="ss" class="form-control" required>
                        <option value="">Select Brand</option>
                        @foreach ($Category as $cat)
                            <option value="{{$cat->cname}}">{{$cat->cname}}</option>
                        @endforeach
                    </select>

                    {{-- <label for="sb" style="font-weight:bold;margin-top:5px;">Select Brand</label>
                    <select name="sbrand" id="sb" class="form-control">
                        @foreach ($brand as $cat)
                            <option value="{{$cat->bname}}">{{$cat->bname}}</option>
                        @endforeach
                    </select> --}}
                    <label for="cdescription" style="margin-top:5px;" class="d-block" style="font-weight: bold;">
                        Product Description
                        <textarea cols="30" rows="5" id="cdescription" class="form-control" name="bdescription" required></textarea>
                    </label>
                    <label for="quantity" class="d-block" style="font-weight: bold;">
                        Product Quantity
                        <input type="number" id="quantity" class="form-control" name="quantity" required>
                    </label>
                </div>
                <div class="col">
                    <div class="custom-file">
                        <div class="chead" style="font-weight: bold;">Product Image (should width/height: 650px/550px)</div>
                        <input type="file" id="cimg" class="d-none custom-file-input" name="pimage" onchange="showing(this)">
                        <label for="cimg" class="form-control custom-file-label">
                            Choose logo
                        </label>
                        <img src="" alt="" id="show" style="height:200px;width:100%;">
                    </div>
                    <style>
                        .attach-file {
                            height:50px;
                            width:100%;
                            border: 2px dashed black;
                            cursor: pointer;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }
                        #attFile {
                            height:60px;
                            width:100%;
                            border:1px solid black;
                        }
                    </style>
                    <div class="att-title"><strong>Attach File</strong></div>
                    <label class="attach-file" for="attach"><i class="far fa-file-archive" style="font-size: 23px;"></i></label>
                    <input type="file" id="attach" style="display: none;" onchange="getfile(this)" name="attach">
                    <div id="attFile">
                        <div id="file-name" ></div>
                        <div id="file-size" ></div>
                    </div>
                    <label for="price" style="margin-top:5px;font-weight:bold;" class="d-block" style="font-weight: bold;">
                        Product Price
                        <input type="text" name="price" id="price" class="form-control" required>
                    </label>
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
                    <div class="status_wrapping">
                        <div class="status" style="font-weight:bold;">Status</div>
                        <div class="check_wrapping" style="display: flex;grid-column-gap:10px;">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sactive" value="active" id="flexRadioDefault1" required>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Active
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="inactive" name="sactive" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Inactive
                                </label>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="status_wrapping">
                        <div class="status" style="font-weight:bold;">IMEI Available?</div>
                        <div class="check_wrapping" style="display: flex;grid-column-gap:10px;">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ia" value="yes" id="imei1" >
                                <label class="form-check-label" for="imei1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="no" name="ia" id="imei2" checked>
                                <label class="form-check-label" for="imei2">
                                    No
                                </label>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="status_wrapping">
                        <div class="status" style="font-weight:bold;">Warranty Available?</div>
                        <div class="check_wrapping" style="display: flex;grid-column-gap:10px;">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ai" value="yes" id="warranty1" >
                                <label class="form-check-label" for="warranty1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="no" name="ai" id="warranty2" checked>
                                <label class="form-check-label" for="warranty2">
                                    No
                                </label>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="wainfo" id="wainfo">
                        <label for="win" style="font-weight: bold;">Warranty time period?</label>
                        <input type="text" class="form-control" id="win"  name="wamount" placeholder="e.g. 1 year">
                    </div> --}}
                </div>
            </div>
    
    
            <button class="btn btn-primary" style="margin-top:10px;">Submit</button>
            <a href="javascript:history.back()" class="btn btn-secondary" style="margin-left:15px;margin-top:10px;">Cancel</a>                          
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('laraecomm/adminAssets/js/scripts.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('laraecomm/adminAssets/js/datatables-simple-demo.js')}}"></script>

    <script>
        document.getElementById('show').style.display = 'none';
        document.getElementById('attFile').style.display = 'none';
        // let wavailable = document.getElementById('warranty1');
        // let wnot = document.getElementById('warranty2');
        // let wi = document.getElementById('wainfo');
        // wi.style.display = 'none';
        // wavailable.addEventListener('click',function() {
        //     wi.style.display = 'block';
        // });
        // wnot.addEventListener('click',function() {
        //     wi.style.display = 'none';
        // });

        function showing(file) {
            document.getElementById('show').style.display = 'block';
            let imgd = URL.createObjectURL(file.files[0]);
            document.getElementById('show').src = imgd;
        }

        function getfile(e) {
            document.getElementById('attFile').style.display = 'block';
            document.getElementById('file-name').innerHTML = 'File Name ='+ e.files[0].name;
            document.getElementById('file-size').innerHTML = 'File Size = '+ e.files[0].size+'byte';
            
        }
    </script>

@endsection
