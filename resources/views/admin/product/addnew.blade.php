@extends('admin.adminwelcom')
@section('main_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-te/1.4.0/jquery-te.min.css" integrity="sha512-i/BB4iyU9djSiXob0SEGOfX3Ld6mfBkFMMocNQV0VHmhtM9roKQuOo1wTDa9h+q9J0EjL3O3MrwrIMOoiQ6kxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .jqte_tool.jqte_tool_1 .jqte_tool_label{
        display: inline;
    }
    .minebut {
        padding:3;font-size:10px;margin-left:3px;
        margin-bottom:-40px;
    }
    .color-variant {
        min-height:100px;
        box-shadow: 1px 2px 2px rgba(0,0,0,0.1),-1px -2px 2px rgba(0,0,0,0.1);
        width:100%;
    }
    .cover {
        border: 1px solid black;
        box-sizing: border-box;
        padding:10px;
        margin-bottom:10px;
    }
</style>
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
                    Manage All Catagory
                </div>
            </div>
        </div>
        <form id="forsubmit" enctype="multipart/form-data">
            @csrf
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col">
                    <label for="cname" class="d-block" style="font-weight: bold;">
                        Product Name
                        <input type="text" id="cname" class="form-control" name="pname" required>
                    </label>
                    <label for="ss" style="font-weight:bold;margin-top:5px;">Select Category</label>
                    <select name="scat" id="ss" class="form-control" required>
                        <option value="" hidden>Select Category</option>
                        @foreach ($Category as $cat)
                            <option value="{{$cat->id}}">{{$cat->cname . ' ('. $cat->parent.')'}}</option>
                        @endforeach
                    </select>
                    {{-- <label for="sb" style="font-weight:bold;margin-top:5px;">Select Brand</label>
                    <select name="sbrand" id="sb" class="form-control">
                        @foreach ($brand as $cat)
                            <option value="{{$cat->bname}}">{{$cat->bname}}</option>
                        @endforeach
                    </select> --}}
                    <label for="cdescription" class="d-block" style="font-weight: bold;margin-top:5px;">
                        Short Description (Use ; end of every line)
                        <textarea cols="30" rows="5" id="cdescription" class="form-control" name="bdescription" placeholder="OS: Android 10;" required></textarea>
                    </label>
                    <label for="longgd" style="font-weight: bold;margin-top:5px;"> Description
                        <textarea name="longd" id="longgd" cols="30" rows="10" class="form-control"></textarea>
                    </label>
                    <label for="quantity" class="d-block" style="font-weight: bold;">
                        Product Quantity 
                        <span>
                            <label for="uncheck"  class="form-control"  style="cursor: pointer">
                                <input type="checkbox" id="uncheck" onclick="checkquantity()"> Unlimited Stock
                            </label>
                        </span>
                        <input type="number" id="quantity" class="form-control" name="quantity" required>
                    </label>
                </div>
                <div class="col">
                    <div class="custom-file">
                        <div class="chead" style="font-weight: bold;">Product Image (should width/height: 650px/550px minimum)</div>
                        <input type="file" id="cimg" class="d-none custom-file-input" name="pimage" onchange="showing(this)">
                        <label for="cimg" class="form-control custom-file-label">
                            Choose Image
                        </label>
                        {{-- show logo --}}
                        <div id="showimg">
                            {{-- images loop injected here --}}
                        </div>
                    </div>
                    <label for="price" style="margin-top:5px;font-weight:bold;" class="d-block" style="font-weight: bold;">
                        Product Price
                        <input type="number" name="price" id="price" class="form-control" required>
                    </label>
                    <label for="dprice" style="margin-top:5px;font-weight:bold;" class="d-block" style="font-weight: bold;">
                        Discount Price
                        <input type="text" name="dprice" id="dprice" class="form-control">
                    </label>
                    <label for="shipPrice" style="margin-top:5px;font-weight:bold;" class="d-block" style="font-weight: bold;">
                        Shipping Charge
                        <input type="number" name="shipPrice" id="shipPrice" class="form-control" required>
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
                                <input class="form-check-input" type="radio" value="inactive" name="sactive" id="flexRadioDefault2" >
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Inactive
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="status_wrapping">
                        <div class="status" style="font-weight:bold;">EMI Available?</div>
                        <div class="check_wrapping" style="display: flex;grid-column-gap:10px;">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ia" value="yes" id="imei1" required>
                                <label class="form-check-label" for="imei1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="no" name="ia" id="imei2" >
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
                                <input class="form-check-input" type="radio" name="ai" value="yes" id="warranty1" required>
                                <label class="form-check-label" for="warranty1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="no" name="ai" id="warranty2" >
                                <label class="form-check-label" for="warranty2">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="wainfo" id="wainfo">
                        <label for="win" style="font-weight: bold;">Warranty time period?</label>
                        <input type="text" class="form-control" id="win"  name="wamount" placeholder="e.g. 1 year">
                    </div>
                    {{-- <h4>Color variant</h4>
                    <a class="btn btn-primary" style="padding:5px;" onclick="addcolor()">Add color section</a>
                    <div class="color-variant" id="variant">


                        <br>
                    </div> --}}
                    <label for="variant" class="d-block" style="font-weight: bold;">Color (separte color with ,)</label>
                    <input type="text" placeholder="Red,Green,Blue" id="variant" name="variant" class="form-control">

                    <label for="size" class="d-block" style="font-weight: bold;">Size (separte size with ,)</label>
                    <input type="text" placeholder="14 inchs,22 inchs" id="size" name="size" class="form-control">
                    <br>
                    <label for="outstock" class="form-check form-control" style="cursor: pointer">
                        <input type="checkbox" id="outstock" onclick="checkquntity2()"> Out of stock
                    </label>
                </div>
            </div>

    
            <button class="btn btn-primary" style="margin-top:10px;">Submit</button>
            <a href="javascript:history.back()" class="btn btn-secondary" style="margin-left:15px;margin-top:10px;">Cancel</a>                          
        </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('laraecomm/adminAssets/js/scripts.js')}}"></script>
    <script src="{{asset('laraecomm/adminAssets/js/adminwelcome.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('laraecomm/adminAssets/js/datatables-simple-demo.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-te/1.4.0/jquery-te.min.js" integrity="sha512-813LH2NdwwzXnVfsmzSuAyyit5bRFdh997hN9Vzm0cdx3LdZV7TZNNb2Ag0dgJPD3J1Xn1Alg2YW70id+RtLrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $("#longgd").jqte();
        $('#ss').select2();
    </script>



    <script>
    
        function checkquantity() {
            let unlimited = document.getElementById('uncheck');
            let quantity = document.getElementById('quantity');
            let outstock = document.getElementById('outstock');
            if ( unlimited.checked == true ) {
                outstock.checked = false;
                quantity.value = '500000';
            } else {
                quantity.value = '';
            }
        }
        function checkquntity2() {
            let unlimited = document.getElementById('uncheck');
            let quantity = document.getElementById('quantity');
            let outstock = document.getElementById('outstock');
            if ( outstock.checked == true ) {
                unlimited.checked = false;
                quantity.value = '0';
            } else {
                quantity.value = '';
            }            
        }

// form submit
document.getElementById('forsubmit').addEventListener('submit',async function (event) {
    event.preventDefault();
    await test();
    let myform = document.getElementById('forsubmit');
    let productName = myform.pname.value;
    let brand = myform.scat.value;
    let productd = myform.bdescription.value;
    let productq = myform.quantity.value;
    let price = myform.price.value;
    let productf = 'no';
    let active = myform.sactive.value;
    let ia = myform.ia.value;
    let ai = myform.ai.value;
    let longd = myform.longd.value;
    let discount_p = myform.dprice.value;
    let image = myform.cimg.files[0];
    let warranty = '';
    let shipPrice = myform.shipPrice.value;
    let variant = myform.variant.value;
    let size = myform.size.value;
    let slug = productName.toLowerCase().replace(/ /g,'-');
    if ( ai == 'yes' ) {
        warranty = myform.wamount.value;
    } else {
        warranty = 'no';
    }
    formdata = new FormData();
    formdata.append('product',productName);
    formdata.append('brand',brand);
    formdata.append('description',productd);
    formdata.append('longd',longd);
    formdata.append('quantity',productq);
    formdata.append('price',price);
    formdata.append('discount_price',discount_p);
    formdata.append('productf',productf);
    formdata.append('isActive',active);
    formdata.append('IMEI',ia);
    formdata.append('shippingCost',shipPrice);
    formdata.append('Warrantyavailable',ai);
    formdata.append('warrantyTime',warranty);
    if (variant.length) {
        formdata.append('color',variant);
    }
    if (size.length) {
        formdata.append('size',size);
    }
    formdata.append('slug',slug);
    //append multiple images
    for (let j = 0; j < imgWithoutUrl.length; j++) {
        const element = imgWithoutUrl[j];
        formdata.append('image['+ j +']',element);
        console.log('element'+j+' :',element);
    }
        axios.post('/laraecomm/admin/product/insert',formdata).then(res=>{
            alert(res.data);
            location.reload();
        });
});
// form submit end
    </script>

@endsection
