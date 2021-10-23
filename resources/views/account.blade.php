@extends('welcome')


@section('content')
<link href="{{asset('laraecomm/allcss/iao-alert.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/css/uikit.min.css" />

<style>
    :root{
        --text:#6A7180;
    }
    .account_head{
        color:var(--text);
        font-size:40px;
        font-family:"Nunito Sans";
        word-wrap:break-word;
        font-weight:600;
    }
    .register_login{
        width:48%;
        margin:auto;
        margin-bottom:100px;
    }
    .account_btn_group{
        display:flex;
        justify-content:center;
        align-items:center;
        font-size:20px;
        font-family:tahoma;
        font-weight:bold;
    }
    .login{
        color:black;
        cursor:pointer;
        transition:.5s;
    }
    .login:hover,.register:hover{
        color:black;
    }
    .register{
        margin-left:25px;
        color:#bbb;
        cursor:pointer;
        transition:.35s;
    }
    .login_modal{
    }
    .login_modal a,.register_modal a{
        color:var(--orange);
        
    }
    .register_modal a:hover{
        text-decoration:none;
    }
    .link_forget{
        text-align:center;
    }
    input[type='email'],input[type='password'],input[type='text']{
        font-size:13px;
        font-family:arial;
        padding:10px 15px;
    }

    .form-check{
        margin-top:-20px;
        margin-bottom:10px;
        margin-left:-20px;
        user-select:none;
    }

    .sub_but{
        width:100%;
        background:var(--orange);
        border:none;
        height:44px;
        font-weight:bold;
        transition:.4s;
        margin-bottom:10px;
    }
    .sub_but:hover{
        background:var(--green);
    }
    .form-group{
        margin-top:10px;
    }
    .pass{
        position:relative;
    }
    .eye_open{
        position:absolute;
        right:10px;
        top:10px;
        cursor:pointer;
    }
    .eye_close{
        position:absolute;
        right:10px;
        top:10px;
        cursor:pointer;
        display:none;
    }
    .eye_open1{
        position:absolute;
        right:10px;
        top:10px;
        cursor:pointer;
    }
    .eye_close1{
        position:absolute;
        right:10px;
        top:10px;
        cursor:pointer;
        display:none;
    }

    @media (max-width:950px) {
        .register_login{
            width:80%;
        }

    }
    @media (max-width:600px) {
        .register_login{
            width:100%;
        }
        .container{
            padding-top:10px !important;
        }
    }

    .num_pre_text{
        width:10%;
    }
    .select_num{
        width:30%;
    }
    .select_num select{
        cursor:pointer;
    }
    .num_field{
        width:60%;
    }
    @media (max-width:414px)
    {
    .num_pre_text{
        width:20%;
    }
    .col br:nth-child(2),.col br:nth-child(3){
        display:none;
    }
    .account_head{
        font-size:25px;
        text-align:center;
    }
    .select_num{
        width:30%;
    }
    .num_field{
        width:50%;
    }
    }
    .number_group{
        display:flex;
        align-items:center;
        justify-content:center;
    }
/* for checkbox css started */

label {
  transition: 0.5s all;
  margin: 0;
  padding: 0;
  font-size: 13px;
  cursor: pointer;
  background-position: left center;
  background-size: auto 100%;
  background-repeat: no-repeat;
  padding-left: 30px;
  background-image: url("data:image/svg+xml,%3C?xml version='1.0' encoding='iso-8859-1'?%3E %3C!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'%3E %3Csvg version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='533.333px' height='533.333px' viewBox='0 0 533.333 533.333' style='enable-background:new 0 0 533.333 533.333;' xml:space='preserve'%3E %3Cg%3E %3Cpath d='M0,0v533.333h533.333V0H0z M500,500H33.333V33.333H500V500z'/%3E %3C/g%3E %3C/svg%3E ");
}
input[type='checkbox'] {
  opacity: 0;
  height: 30px;
  width: 100%;
  cursor: pointer;
}
input[type='checkbox']:checked + label {
  background-image: url("data:image/svg+xml,%3C?xml version='1.0' encoding='iso-8859-1'?%3E %3C!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'%3E %3Csvg version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='533.333px' height='533.333px' viewBox='0 0 533.333 533.333' style='enable-background:new 0 0 533.333 533.333;' xml:space='preserve'%3E %3Cg%3E %3Cpath d='M0,0v533.333h533.333V0H0z M500,500H33.333V33.333H500V500z M400,116.667L233.333,283.333l-100-100L66.667,250 l166.667,166.667l233.333-233.333L400,116.667z'/%3E %3C/g%3E %3C/svg%3E ");
}
.form-check .form-check-input{
    height: 0px;
    margin-top: 30px;
}
/* end checkbox style */
</style>
<div class="container" style="padding-top:10px;">
    <div class="row">
        <div class="col">
            <div class="account_head">My account</div>
            <br>
            <div class="register_login">
                <div class="account_btn_group">
                    <div class="login">Login</div>
                    <div class="register">Register</div>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="login_modal">
                    <form id="logform">
                        <div class="form-group">
                            <p>Enter your Phone/Email and password to login.</p>
                            <input type="text" class="form-control" id="sigin_mail" aria-describedby="emailHelp" placeholder="Phone or Email" name="email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <div class="pass">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
                                <span class="eye_open" id="eye_open"><i class="far fa-eye"></i></span>
                                <span class="eye_close" id="eye_close"><i class="fas fa-eye-slash"></i></span>
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" style="margin-left:0px !important;margin-top:30px;">
                            <label class="form-check-label" for="exampleCheck1" style="margin-top:27px;margin-left:-20px;">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary sub_but">Login</button>
                        <a href="#">
                            <div class="link_forget">Lost password</div>
                        </a>
                    </form>
                </div>
                <div class="register_modal" style="display:none;">
                    <form id="regform">
                        {{-- <div class="form-group">
                            <p>Enter your email and password to register.</p>
                            <div class="number_group">
                                <div class="num_pre_text">
                                    Phone<span style="color:red;">*</span>
                                </div>
                                <div class="select_num">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>+880</option>
                                    </select>
                                </div>
                                <div class="num_field">
                                    <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="17xxxxxx">
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Phone" required>
                        </div>
                        <div class="form-group">
                            <div class="pass">
                                <input type="password" class="form-control" id="pass" placeholder="Password" required>
                                <span class="eye_open1" id="eye_open1"><i class="far fa-eye"></i></span>
                                <span class="eye_close1" id="eye_close1"><i class="fas fa-eye-slash"></i></span>
                            </div>
                        </div>
                        <div class="form-group" id="testt">
                            <div class="pass">
                                <input type="text" class="form-control" id="exampleInputPassword3" placeholder="Confirm password" name="cpass" required>
                                <span id="cpassSpan" style="color:red;"></span>
                            </div>
                        </div>
                        <hr style="border-bottom:1px solid black;">
                        <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy</a>.</p>
                        <button type="submit" class="btn btn-primary sub_but">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('laraecomm/alljs/login.js')}}"></script>
<script src="{{asset('laraecomm/alljs/iao-alert.jquery.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>

   let cpasserror = document.getElementById('cpassSpan');
   cpasserror.style.display = 'none';
   let regform =  document.getElementById('regform');
   regform.addEventListener('submit',function (e) {
       e.preventDefault();
       let username = regform.name.value;
       let email = regform.email.value;
       let phone = regform.phone.value;
       let pass = regform.pass.value;
       let conpass = regform.cpass.value;
        if (pass != conpass) {
            regform.pass.style.border = '1px solid red';
            regform.cpass.style.border = '1px solid red';
            cpasserror.style.display = 'block';
            cpasserror.innerHTML = 'Password is not match';
        } else {
            regform.pass.style.border = '1px solid #CED4DA';
            regform.cpass.style.border = '1px solid #CED4DA';
            cpasserror.innerHTML = 'Password is not match';
            cpasserror.style.display = 'none';
            let formdata = new FormData();
            formdata.append('name',username);
            formdata.append('email',email);
            formdata.append('phone',phone);
            formdata.append('pass',pass);
            formdata.append('conpass',conpass);
            axios.post('/laraecomm/api/user/create',formdata).then(res=>{
                if (res.data.error) {
                    UIkit.notification({message: `<span uk-icon=\'icon:  minus-circle\'></span>${res.data.message}`,pos: 'top-right',status:'danger'});
                } else {
                    UIkit.notification({message: `<span uk-icon=\'icon: check\'></span>${res.data.message}`,pos: 'top-right',status:'success'});
                    localStorage.clear();
                    localStorage.setItem('usertoken',res.data.token);
                    location.href = "{{route('home')}}";
                }
            });
        }

   });

   let logform = document.getElementById('logform');

   logform.addEventListener('submit',function (e) {
       e.preventDefault();
       let email = logform.email.value;
       let pass = logform.pass.value;

       let formdata = new FormData();
        formdata.append('email',email);
        formdata.append('pass',pass);

        axios.post('/laraecomm/api/user/login',formdata).then(res=>{
            if (res.data.error) {
                UIkit.notification({message: `<span uk-icon=\'icon:  minus-circle\'></span>${res.data.message}`,pos: 'top-right',status:'danger'});
            } else {
                localStorage.clear();
                localStorage.setItem('usertoken',res.data.token);
                UIkit.notification({message: `<span uk-icon=\'icon: check\'></span>${res.data.message}`,pos: 'top-right',status:'success'});
                history.back();
            }
        });
   });


</script>
@endsection