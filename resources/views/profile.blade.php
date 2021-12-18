@extends('welcome')

@section('content')
{{-- <div id="profile">
    <profile-vue/>
</div>
<script src="js/profile.js"></script> --}}

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
        flex-flow: row wrap;
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
    .tab-content{
        flex-basis: 10000px;
    }
</style>

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
                        {{-- auto imported from js  --}}
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="button">
                        <button class="btn btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#editProfile">Edit profile</button>
                        <br>
                        <br>
                        <button class="btn btn-outline-danger"  data-bs-toggle="modal" data-bs-target="#changePass">Change password</button>
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


{{-- bootstrap modal start  --}}

  <!-- Modal -->
  <div class="modal fade" id="editProfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editProfileLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editProfileLabel">Edit Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail3" class="form-label">Mobile</label>
                    <input type="number" name="phone" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp">
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="editProfile()">Update</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal 2-->
  <div class="modal fade" id="changePass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="changePassLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="changePassLabel">Change Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="mb-3">
                    <label for="exampleInputEmail11" class="form-label">Old Password</label>
                    <input type="text" name="oldpass" class="form-control" id="exampleInputEmail11" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail22" class="form-label">New Password</label>
                    <input type="text" name="newpass" class="form-control" id="exampleInputEmail22" aria-describedby="emailHelp">
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="changePass()">Update</button>
        </div>
      </div>
    </div>
  </div>

{{-- bootstrap modal end  --}}


<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    let userDetails = JSON.parse(localStorage.getItem('userDetails'));
    let myform = document.forms[0];
    let name = myform.name;
    let email = myform.email;
    let phone = myform.phone;

    let changePassForm = document.forms[1];
    let oldPass = changePassForm.oldpass;
    let newPass = changePassForm.newpass;


    function getPerson() {
        let userDetailsPerson = JSON.parse(localStorage.getItem('userDetails'));
        if (userDetailsPerson) {
            let profileDecorattion = `
                <div class="name">
                    <label for="">Full name</label>
                    <p>${userDetailsPerson.username}</p>
                </div>
                <div class="email">
                    <label for="">Email address</label>
                    <p>${userDetailsPerson.email}</p>
                </div>
                <div class="mobile">
                    <label for="">Mobile</label>
                    <p>${userDetailsPerson.phone}</p>
                </div>
            `;
            document.getElementsByClassName('info')[0].innerHTML = profileDecorattion;
        }

    }
    getPerson();

    async function editPersonData() {

        if (userDetails) {
            name.value = userDetails.username;
            email.value = userDetails.email;
            phone.value = userDetails.phone;
        }
    }
    editPersonData();

    async function editProfile() {
        let fromdata = new FormData();
        fromdata.append('name',name.value);
        fromdata.append('email',email.value);
        fromdata.append('phone',phone.value);
        fromdata.append('id',userDetails.id);
        try {
            let res = await axios.post('/laraecomm/api/user/edit',fromdata);
            console.log(res);
            iziToast.success({
                title: 'Success',
                message: res.data.message,
                position: 'topCenter',
            });
            if (!res.data.error) {
                localStorage.setItem('userDetails',JSON.stringify(res.data.userDetails));
                // show data real time
                getPerson();
            }
        } catch (error) {
            iziToast.error({
                title: 'Error',
                message: 'Please change something',
                position: 'topCenter',
            });
        }
    }


    async function changePass() {
        let fromdata = new FormData();
        fromdata.append('oldPass',oldPass.value);
        fromdata.append('newPass',newPass.value);
        fromdata.append('id',userDetails.id);
        try {
            let res = await axios.post('/laraecomm/api/user/changepass',fromdata);
            if (res.data.error) {
                iziToast.error({
                    title: 'Error',
                    message: res.data.message,
                    position: 'topCenter',
                });                
            } else {
                iziToast.success({
                    title: 'Success',
                    message: res.data.message,
                    position: 'topCenter',
                });
                oldPass.value = ''; 
                newPass.value = ''; 
            }
        } catch (error) {
            iziToast.error({
                title: 'Error',
                message: 'Due to client error',
                position: 'topCenter',
            });
        }
    }
</script>
@endsection