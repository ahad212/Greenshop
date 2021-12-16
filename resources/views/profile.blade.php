@extends('welcome')

@section('content')
{{-- <div id="profile">
    <profile-vue/>
</div>
<script src="js/profile.js"></script> --}}
<div class="tab-cover">
    <div class="d-flex align-items-start" style="width:100%;">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</button>
          <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">History</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="contain">
                <div class="box">
                    <div class="info">
                        <div class="name">
                            <label for="">Full name</label>
                            <p>John Doe</p>
                        </div>
                        <div class="email">
                            <label for="">Email address</label>
                            <p>JohnDoe@</p>
                        </div>
                        <div class="mobile">
                            <label for="">Mobile</label>
                            <p>0111@</p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="button">
                        <button class="btn btn-outline-primary">Edit profile</button>
                        <br>
                        <br>
                        <button class="btn btn-outline-danger">Change password</button>
                    </div>
                </div>
              </div>
          </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                  <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">1</div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">2</div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">3</div>
            </div>
          </div>
        </div>
    </div>
</div>

<style>
    .tab-cover{
        padding:50px 10px;
    }

    .box{
        border:1px solid black;
        border-radius:3px;
        box-sizing: border-box;
        padding:20px;
        width:100%;
        min-height:150px;

    }
    .info{
        display: flex;
        grid-column-gap: 60px;
    }
    .info label{
        color:rgb(171, 177, 177)
    }
    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
        background:rgba(230, 223, 223, 0.3);
    }
    .nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover{
        background:rgba(230, 223, 223, 0.3);
    }
</style>
@endsection