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
            <li class="breadcrumb-item active">Create Offer</li>
        </ol>
    </div>
    <form style="width:90%;margin:auto;" id="myform">
        @csrf
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col">
                <label for="cname" class="d-block"  style="font-weight:bold;">
                    Offer Name
                    <input type="text" id="cname" class="form-control" name="name" value="{{$item->name}}" required>
                </label>
                <label for="cname" class="d-block"  style="font-weight:bold;">
                    Offer Date & Time ( when offer will be end)
                    <input type="datetime-local" class="form-control" value="{{$item->datetime}}" id="dateTime" name="dateTime" required>
                </label>
                

            </div>
            <div class="col">
                <label for="ss" style="font-weight:bold;margin-top:5px;">Select Product</label>
                <select name="parent" id="location" class="form-control" onchange="pickProduct(this)">
                    <option value="" hidden>Select Product</option>
                    @foreach ($allproduct as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <style>
                    .fieldofselectedProducts{
                        height:200px;
                        width:100%;
                        border:1px solid black;
                        border-radius:4px;
                    }
                </style>
                <div class="fieldofselectedProducts">
                    <h4>Selected Products</h4>
                    <ul class="productLoop" id="ploop">

                    </ul>
                </div>
            </div>
        </div>
        
        
        <input type="hidden" id="hiddenId" value="{{$item->id}}">
        <button class="btn btn-primary" style="margin-top:10px;">Submit</button>
        <a href="javascript:history.back()" style="margin-left:15px;margin-top:10px;" class="btn btn-secondary">Cancel</a>                        
    </form>
    <br>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('laraecomm/adminAssets/js/scripts.js')}}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> --}}
    {{-- <script src="{{asset('laraecomm/adminAssets/js/datatables-simple-demo.js')}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        $('#location').select2();
        let productArray = [];
        let allProducts;
        let runningOffer;
        axios.get('/laraecomm/api/v1/products').then(res=>{
            allProducts = res.data.data;
        });
        let offeridFromHiddenField = document.getElementById('hiddenId').value;
        axios.get(`/laraecomm/admin/setting/offer/${offeridFromHiddenField}`).then(res=>{
            runningOffer = JSON.parse(res.data.products);
            show();
        });
        function pickProduct(Productopt) {
            let pname = Productopt.options[Productopt.selectedIndex].text;
            let pid = Productopt.options[Productopt.selectedIndex].value;
            let fndIndex = allProducts.findIndex(res=> res.id == pid);
            if (fndIndex != -1) {
                let product = allProducts[fndIndex];
                let existingarraycheck = runningOffer.findIndex(res=>res.id == pid);
                if (existingarraycheck == -1) {
                    runningOffer.push(product);
                    show();
                }
            }
        }
        function show() {
            let all = '';
            for (let index = 0; index < runningOffer.length; index++) {
                const element = runningOffer[index];
                all +=`
                    <li>${element.name} <span style="cursor:pointer;color:red;font-size:19px;" onclick="deleteItem(${element.id})"> x</span></li>
                `;
            }
            document.getElementById('ploop').innerHTML = all;
        }

        function deleteItem(pid) {
            let delIndex = runningOffer.findIndex(res=>res.id == pid);
            runningOffer.splice(delIndex,1);
            show();
        }

        // let form1 = document.forms[0]; not possible with this off reload
        let form2 = document.getElementById('myform');

        form2.addEventListener('submit',function(event){
            event.preventDefault();
            let name = form2.name.value;
            let datetime = form2.dateTime.value;
            let productarray = JSON.stringify(runningOffer);
            console.log(name,datetime,productarray);
            let formdata = new FormData();
            formdata.append('name',name);
            formdata.append('dateTime',datetime);
            formdata.append('productArray',productarray);
            axios.put(`/laraecomm/admin/setting/offer/${offeridFromHiddenField}`,{
                name:name,
                dateTime: datetime,
                productArray:productarray
            }).then(res=>{
                window.location.href = "{{route('offer.index')}}";
            });
        });
    </script>
@endsection
