@extends('admin.adminwelcom')
@section('main_content')
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Category</li>
        </ol>
    </div>
    {{-- @foreach ( $editable as $editdata ) --}}

    <form action="{{route('edit',$editable->id)}}" method="POST" style="width:90%;margin:auto;">
        @csrf
        <label for="cname" class="d-block">
            Category Name
            <input type="text" id="cname" class="form-control" value="{{$editable->cname}}" name="cname" required>
        </label>
        <label for="cname" class="d-block">
            Categroy Description
            <input type="text" id="cname" class="form-control" value="{{$editable->cdescription}}"  name="cdescription" required>
        </label>
        <div class="status_wrapping">
            <div class="status" style="font-weight:bold;">Status</div>
            <div class="check_wrapping" style="display: flex;grid-column-gap:10px;">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ai" value="active" id="flexRadioDefault1" <?php if($editable->status == 'active') echo 'checked'?>>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Active
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="inactive" name="ai" id="flexRadioDefault2" <?php if($editable->status == 'inactive') echo 'checked'?>>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Inactive
                    </label>
                </div>
            </div>
        </div>
        <button class="btn btn-primary">Submit</button>                          
    </form>        
    {{-- @endforeach --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('laraecomm/adminAssets/js/scripts.js')}}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> --}}
    {{-- <script src="{{asset('laraecomm/adminAssets/js/datatables-simple-demo.js')}}"></script> --}}
@endsection
