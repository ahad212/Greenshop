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
            <li class="breadcrumb-item active">Offer</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body" style="display: flex;">
                <div class="textt" style="font-size: 25px;font-weight:bold;">
                    Manage All Offer
                </div>
                <a href="{{route('offer.create')}}" class="btn btn-secondary" style="margin-left:auto;">Create Offer</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Offer List
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Location Name</th>
                            <th>Location Parent</th>
                            <th>Shipping Cost (tk)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($offer as $k=> $offer)
                            @php
                                if ($offer->products) {
                                    $offerArray = json_decode($offer->products);
                                }
                            @endphp
                            <tr>  
                                <td>{{$k+1}}</td>
                                <td>{{$offer->name}}</td>
                                <td>{{$offer->datetime}}</td>
                                <td>
                                    <ul>
                                        @foreach ($offerArray as $offerItem)
                                            <li>
                                                {{$offerItem->name}}
                                            </li>
                                        @endforeach
                                    </ul>

                                </td>
                                <td>
                                    <a href="{{route('offer.edit',$offer->id)}}" class="btn btn-info" style="color:white;" title="Edit"><i class="far fa-edit"></i></a>
                                        
                                    <label for="{{$offer->id}}" style="color:white;margin-left:4px;" class="btn btn-danger"><i class="fas fa-trash"></i>
                                        <input style="display: none;" type="button" id="{{$offer->id}}" onclick="delform(this.value)" value="{{$offer->id}}" name="hiddenvalue">
                                    </label>
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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        async function delform(value) {
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                let formdata = new FormData();
                formdata.append('id',value);
                axios.post(`/laraecomm/admin/setting/delete/${value}`,formdata).then(res=>{
                    console.log(res);
                    Swal.fire(
                    'Deleted!',
                    'Your offer has been deleted.',
                    'success'
                    ).then(res=>{
                        window.location.reload();
                    });
                });
            }
            });
        }

    </script>
@endsection
