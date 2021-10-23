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
                    Manage All Category
                </div>
                <a href="{{route('brand')}}" class="btn btn-secondary" style="margin-left:auto;">Create Category</a>
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
                            <th>Category Name</th>
                            <th>Parent Category</th>
                            <th>Category image</th>
                            {{-- <th>Featured</th> --}}
                            {{-- <th>status</th> --}}
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $k=> $loc)

                            <tr>  
                                <td>{{$k+1}}</td>
                                <td>{{$loc->cname}}</td>
                                <td>{{$loc->parent}}</td>
                                <td><img style="height:50px;width:50px;object-fit:contain;" src="{{($loc->bimage === null )? asset('laraecomm/images/default.png') : asset('laraecomm/public/'.$loc->bimage)}}" alt=""></td>
                                {{-- <td>{{$loc->cfeatured}}</td> --}}
                                {{-- <td>{{$loc->status}}</td> --}}
                                <td>
                                    <a href="{{route('categoryeditedit',$loc->id)}}" class="btn btn-info" style="color:white;" title="Edit"><i class="far fa-edit"></i></a>
                                    <label for="{{$loc->id}}" style="color:white;margin-left:4px;" class="btn btn-danger"><i class="fas fa-trash"></i>
                                        <input style="display: none;" type="button" id="{{$loc->id}}" onclick="delform(this.value)" value="{{$loc->id}}" name="hiddenvalue">
                                    </label>
                                    {{-- <a class="btn btn-danger" onclick="delform()" style="color:white;margin-left:4px;" title="Delete"><i class="fas fa-trash"></i></a> --}}
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>

        async function delform(val) {
            let checkParent;
            let formdata = new FormData();
            formdata.append('id',val);
            await axios.post('/laraecomm/api/v1/test',formdata).then(res=>{
                checkParent = res.data.parent;
            });
            if (checkParent == 'parent') {
                Swal.fire({
                title: 'Are you sure? This is parent Category',
                text: "All sub category will be deleted",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.post('/laraecomm/api/v1/deletcat',formdata).then(res=>{
                            
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            ).then(res=>{
                                window.location.reload();
                            });
                        }).catch(res=>{
                            Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'This Category already used in some products',
                            });
                        });

                    }
                });                
            } else {
                axios.post('/laraecomm/api/v1/deletcat',formdata).then(res=>{
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    ).then(res=>{
                        window.location.reload();
                    });
                    
                }).catch(res=>{
                    Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'This Category already used in some products',
                    });
                });
            }
        }

    </script>
@endsection
