@extends('admin.adminwelcom')
@section('main_content')
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Prodcuts</li>
        </ol>
    </div>
    <form action="{{route('editproduct',$data->id)}}" method="POST" style="width:90%;margin:auto;" enctype="multipart/form-data">
        @csrf
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col">
                <label for="cname" class="d-block" style="font-weight: bold;">
                    Product Name
                    <input type="text" id="cname" value="{{$data->name}}" class="form-control" name="pname" required>
                </label>
                <label for="ss" style="font-weight:bold;margin-top:5px;">Select Category</label>
                <select name="scat" id="ss" class="form-control">
                    @foreach ($category as $cat)
                        <option value="{{$cat->cname}}">{{$cat->cname}}</option>
                    @endforeach
                </select>
                <label for="sb" style="font-weight:bold;margin-top:5px;">Select Brand</label>
                <select name="sbrand" id="sb" class="form-control">
                    @foreach ($brand as $cat)
                        <option value="{{$cat->bname}}">{{$cat->bname}}</option>
                    @endforeach
                </select>
                <label for="cdescription" style="margin-top:5px;" class="d-block" style="font-weight: bold;">
                    Product Description
                    <textarea cols="30" rows="5" id="cdescription" class="form-control" name="bdescription" required>{{$data->pdescription}}
                    </textarea>
                </label>
            </div>
            <div class="col">
                <div class="custom-file">
                    <div class="chead" style="font-weight: bold;">Product Image (should width/height: 190px/192px)</div>
                    <input type="file" id="cimg" class="d-none custom-file-input" name="pimage" >
                    <label for="cimg" class="form-control custom-file-label">
                        Choose logo
                    </label>
                </div>
                <label for="price" style="margin-top:5px;font-weight:bold;" class="d-block" style="font-weight: bold;">
                    Product Price
                    <input type="text" name="price" id="price" class="form-control" value="{{$data->price}}">
                </label>
                <div class="status_wrapping">
                    <div class="status" style="font-weight:bold;">Featured</div>
                    <div class="check_wrapping" style="display: flex;grid-column-gap:10px;">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fy" value="yes" id="f1" <?php if($data->featured == 'yes') echo 'checked'?>>
                            <label class="form-check-label" for="f1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fy" value="no" id="f2" <?php if($data->featured == 'no') echo 'checked'?>>
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
                            <input class="form-check-input" type="radio" name="sactive" value="active" id="flexRadioDefault1" <?php if($data->pstatus == 'active') echo 'checked'?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Active
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="inactive" name="sactive" id="flexRadioDefault2" <?php if($data->pstatus == 'inactive') echo 'checked'?>>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Inactive
                            </label>
                        </div>
                    </div>
                </div>
                <div class="status_wrapping">
                    <div class="status" style="font-weight:bold;">IMEI Available?</div>
                    <div class="check_wrapping" style="display: flex;grid-column-gap:10px;">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ia" value="yes" id="imei1" <?php if($data->pimei == 'yes') echo 'checked'?>>
                            <label class="form-check-label" for="imei1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="no" name="ia" id="imei2" <?php if($data->pimei == 'no') echo 'checked'?>>
                            <label class="form-check-label" for="imei2">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="status_wrapping">
                    <div class="status" style="font-weight:bold;">Warranty Available?</div>
                    <div class="check_wrapping" style="display: flex;grid-column-gap:10px;">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ai" value="yes" id="warranty1" <?php if($data->pwarranty == 'yes') echo 'checked'?>>
                            <label class="form-check-label" for="warranty1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="no" name="ai" id="warranty2" <?php if($data->pwarranty == 'no') echo 'checked'?>>
                            <label class="form-check-label" for="warranty2">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="wainfo" id="wainfo">
                    <label for="win" style="font-weight: bold;">Warranty time period?</label>
                    <input type="text" class="form-control" id="win"  name="wamount" placeholder="e.g. 1 year" value="{{$data->warrantytime}}">
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
    <script>
        let wavailable = document.getElementById('warranty1');
        let wnot = document.getElementById('warranty2');
        let wi = document.getElementById('wainfo');
        wi.style.display = 'none';
        window.onload = function () {
            if (wavailable.checked == true) {
                wi.style.display = 'block';
            }
        }
        wavailable.addEventListener('click',function() {
            wi.style.display = 'block';
        });
        wnot.addEventListener('click',function() {
            wi.style.display = 'none';
        });
    </script>
@endsection
