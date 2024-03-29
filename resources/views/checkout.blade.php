@extends('welcome')

@section('content')
<style>
    @media (min-width:1200px)
    {
        .container,
        .container-lg,
        .container-md,
        .container-lg{
            max-width:1215px;
        }
    }
    /* .col{
        border:1px solid black;
    } */
    :root{
        --text:#6A7180;
    }
    .returning_customer{
        display:flex;
        flex-flow:row-wrap;
    }
    .re_fir{
        font-weight:bold;
    }
    .re_sec{
        color:var(--orange);
        cursor:pointer;
        margin-left:5px;
    }
    .returning_tab{
        width:100%;
        height:0px;
        background:white;
        overflow:hidden;
        transition:.7s ease-in-out;
    }
    .show_return_tab{
        height:330px;
    }

    /* from account page */
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

    .custom_check{
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


    .eye_open1{
        position:absolute;
        right:10px;
        top:32px;
        cursor:pointer;
        cursor:pointer !important;
        color:black !important;
    }
    .eye_close1{
        position:absolute;
        right:10px;
        top:32px;
        cursor:pointer;
        display:none;
        cursor:pointer !important;
        color:black !important;
    }


/* for checkbox css started */
  .custom_check label {
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
#exampleCheck1_return {
  opacity: 0;
  height: 30px;
  width: 100%;
  cursor: pointer;
}
#exampleCheck1_return:checked + .user_sign {
  background-image: url("data:image/svg+xml,%3C?xml version='1.0' encoding='iso-8859-1'?%3E %3C!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'%3E %3Csvg version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='533.333px' height='533.333px' viewBox='0 0 533.333 533.333' style='enable-background:new 0 0 533.333 533.333;' xml:space='preserve'%3E %3Cg%3E %3Cpath d='M0,0v533.333h533.333V0H0z M500,500H33.333V33.333H500V500z M400,116.667L233.333,283.333l-100-100L66.667,250 l166.667,166.667l233.333-233.333L400,116.667z'/%3E %3C/g%3E %3C/svg%3E ");
}
.log_otp_but{
    height:40px;
    width:140px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    font-weight:bold;
    background:var(--orange);
    border-radius:5px;
    cursor:pointer;
    transition:.4s;
    border:none;
}
.log_otp_but:hover, .log_email_pass:hover{
    background:var(--green);
}
.log_email_pass{
    height:40px;
    width:240px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    font-weight:bold;
    background:var(--orange);
    border-radius:5px;
    transition:.4s;
    cursor:pointer;   
}
/* data-list-design-from-cart */

@font-face {
    font-family: "iconfont";
    src: url("iconfont.eot?t=1519919520638"); /* IE9*/
    src: url("iconfont.eot?t=1519919520638#iefix") format("embedded-opentype"),
    url("data:application/x-font-woff;charset=utf-8;base64,d09GRgABAAAAAAT8AAsAAAAAB0wAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABHU1VCAAABCAAAADMAAABCsP6z7U9TLzIAAAE8AAAARAAAAFZW7kgPY21hcAAAAYAAAABeAAABhpnMBr5nbHlmAAAB4AAAAS8AAAE4GE3xD2hlYWQAAAMQAAAALwAAADYQm8k2aGhlYQAAA0AAAAAcAAAAJAfeA4RobXR4AAADXAAAAAwAAAAMC+kAAGxvY2EAAANoAAAACAAAAAgAdgCcbWF4cAAAA3AAAAAfAAAAIAESAF1uYW1lAAADkAAAAUUAAAJtPlT+fXBvc3QAAATYAAAAIgAAADPZhex6eJxjYGRgYOBikGPQYWB0cfMJYeBgYGGAAJAMY05meiJQDMoDyrGAaQ4gZoOIAgCKIwNPAHicY2Bk/sE4gYGVgYOpk+kMAwNDP4RmfM1gxMjBwMDEwMrMgBUEpLmmMDgwVDxTZW7438AQw9zA0AAUZgTJAQAmGwyReJzFkMENgDAMAy9t6QOxRiUeDMSLOTpx1ygmlAcT1JJjxbGUKMACRPEQE9iF8eCUa+5HVveTZ7LUCNRWelf/qSKaZdegkpkGm7f6j83rPjp9hTqoE1t5SbgBrLcMIwAAeJwVjD1Lw1AYhe97r7lJbtLE3nynSZsP26tUC8ZYB7FdXBQHwamjIDjp4NKlhQ4KDg7udRLBX+BW8LeI/o5oPBweeDhwkITQ7xdZER9ZaBPtomN0jhDQPmQGjiEV5QD3wUklx7MNInKRynk2IEfgZdR2i2HZ86hMTTCgDXtpMRQDLGC/HOFDKNwYIGiFF7wbcfIMzBfth+oUv4LTySNztFOdbI/tIrGUqc55wPmTQiVJwXjNNODGc1VJZbR6k8zQWXW2cAf0QIRnk0bS4peP5W3c9VSAxQKsVmK8j5ths+4sdC0eyOsNxQ8b+YYN0x/Nt/S4943qwD/IJ75DzVp6mazWoLYHbnEAw5J8aJFWzau5FjkMllqsw5Lha8aqGdwzp96uGIMXLapf/gAZTTBEAHicY2BkYGAA4rxVF67H89t8ZeBmYQCBa/ucFiDo/w9ZGJglgFwOBiaQKABVfgtlAHicY2BkYGBu+N/AEMPCAAJAkpEBFTADAEcJAmwEAAAAA+kAAAQAAAAAAAAAAHYAnHicY2BkYGBgZghkYGUAASYg5gJCBob/YD4DABD3AXAAeJxlj01OwzAQhV/6B6QSqqhgh+QFYgEo/RGrblhUavdddN+mTpsqiSPHrdQDcB6OwAk4AtyAO/BIJ5s2lsffvHljTwDc4Acejt8t95E9XDI7cg0XuBeuU38QbpBfhJto41W4Rf1N2MczpsJtdGF5g9e4YvaEd2EPHXwI13CNT+E69S/hBvlbuIk7/Aq30PHqwj7mXle4jUcv9sdWL5xeqeVBxaHJIpM5v4KZXu+Sha3S6pxrW8QmU4OgX0lTnWlb3VPs10PnIhVZk6oJqzpJjMqt2erQBRvn8lGvF4kehCblWGP+tsYCjnEFhSUOjDFCGGSIyujoO1Vm9K+xQ8Jee1Y9zed0WxTU/3OFAQL0z1xTurLSeTpPgT1fG1J1dCtuy56UNJFezUkSskJe1rZUQuoBNmVXjhF6XNGJPyhnSP8ACVpuyAAAAHicY2BigAAuBuyAmZGJkZmRhYGxgjWxqCi/nIEBABIwAsUAAA==")
        format("woff"),
    url("iconfont.ttf?t=1519919520638") format("truetype"),
    url("iconfont.svg?t=1519919520638#iconfont") format("svg"); /* iOS 4.1- */
}

.iconfont {
    font-family: "iconfont" !important;
    font-size: 16px;
    font-style: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.icon-arrow:before {
    content: "\e625";
}


#datalist1 {
    margin: auto;
    position: relative;
    width: 100%;
    color: #000;
}

#datalist1.active #datalist-ul1 {
    display: block;
}

#datalist-input1 {
    padding-left: 1em;
    width: 100%;
    height: 40px;
    border-radius: 5px;
    box-sizing: border-box;
    box-shadow: none;
    border: 1px solid #ccc;
    outline: 0;
    margin-top:10px;
}
#datalist-icon1 {
    position: absolute;
    right: 20px !important;
    top: 6px !important;
    font-size:15px !important; 
    transition: transform 0.2s ease;
}
#datalist-input1:focus {
    border: 1px solid #AA0000;
    outline: 0;
}

#datalist1.active i {
    transform: rotate(270deg);
}

#datalist-ul1 {
    display: none;
    position: absolute;
    margin: 5px 0 0 0;
    padding: 0;
    width: 100%;
    max-height: 120px;
    top: 100%;
    left: 0;
    list-style: none;
    border-radius: 2px;
    background: #fff;
    overflow: hidden;
    overflow-y: auto;
    z-index: 100;
    border:1px solid black;
}

/* custom-scroll-bar-for-this */

        #datalist-ul1::-webkit-scrollbar {
        width: 10px;
        }

        /* Track */
        #datalist-ul1::-webkit-scrollbar-track {
        background: #f1f1f1; 
        }
        
        /* Handle */
        #datalist-ul1::-webkit-scrollbar-thumb {
        background: #888; 
        }

        /* Handle on hover */
        #datalist-ul1::-webkit-scrollbar-thumb:hover {
        background: #555; 
        }
#datalist-ul1 li {
    display: block;
    text-align: left;
    padding: 2px 5px;
    color: #999;
    cursor: pointer;
}

#datalist-ul1 li:hover {
    background: #4e00f0;
    color: white;
}

.sign_up_bil_toggle{
    width:100%;
    height:0px;
    overflow:hidden;
    transition:.7s ease-in-out;
}
.sign_up_bil_toggle_show{
    height:270px;
}
.create_billing_ac{
    margin-top:10px;
}

.eye_open{
    position:absolute;
    right:10px;
    top:10px;
    cursor:pointer;
    cursor:pointer !important;
    color:black !important;
}
.eye_close{
    position:absolute;
    right:10px;
    top:10px;
    cursor:pointer !important;
    color:black !important;
    display:none;
}
.checkoutc span{
    color:red;
    cursor:help;
}
.billing_head{
    font-size:20px;
    font-weight:bold;
}
.custom_checkbar:checked{
    background-color:var(--orange);
    border-color:var(--orange);
}
.con-cover-checkout .container{
    padding-top:10px !important;
}


/*head part menu*/
.second{
    height: 55px;
    background:rgb(255, 255, 255);
    display: flex;
    border-bottom:1px solid rgb(212, 210, 210);
}
.smain{
    width:28%;
}
.cathead{
    width:68.5%;
    height:100%;
    position: relative;
    margin-left:auto;
    margin-right:10.3%;
}
.covercat{
    height:400px;
    background:red;
}
.corg{
    height:100%;
    background:#FF3C20;
    margin-left:auto;
    display: flex;
    align-items: center;
    justify-content: center;
    color:white;
    cursor:pointer;
}
.catdetails{
    height:400px;
    width:100%;
    background:white; 
    position:absolute;
    top:130px;
    z-index:300;
    box-shadow:1px 1px 7px rgb(172, 170, 170);
    transition: .5s;
    visibility: hidden;
    opacity:0;
}
.cathead:hover .catdetails{
    visibility: visible;
    top:53px;
    opacity:1;
}
.catdetails ul{
    list-style:none;
    overflow:hidden;
    border:1px solid #D7D7D7;
    padding-top:2px;
    padding-left:0px;
}
.catdetails ul li{
    width:100%;
    padding:10px 0px;
    padding-left:30px;
    border-bottom:1px solid #D7D7D7;
}
.catdetails a{
    text-decoration:none;
    color:black;
}
.catdetails a:hover{
    text-decoration:none;
    color:var(--orange);

}
.menupart{
    width:72%;
    display:flex;
    align-items:center;
    padding-top:20px;
}
.menupart ul{
    list-style:none;
    display:flex;
    grid-column-gap:30px;
}
.menupart ul li{
    display:inline;
}
.menupart ul li a{
    text-decoration:none;
    color:rgb(230, 56, 56);
    padding:13px 10px;
    border-radius:7px;
    font-size:18px;
}



</style>


{{-- <div class="second">
    <div class="smain">
        <div class="cathead">
            <div class="corg">
                <span><i class="fa fa-bars" aria-hidden="true"></i> </span> <strong style="margin-left:10px;"> ALL CATEGORIES</strong>
            </div>
            <div class="catdetails">
                <ul>
                    <a href="javascript:void(0)"><li><i  class="fas fa-mobile-alt category_icon3"></i>Mobile</li></a>
                    <a href="javascript:void(0)"><li><i  class="fas fa-headphones-alt category_icon"></i> Mobile Accessories</li></a>
                    <a href="javascript:void(0)"><li><i  class="fas fa-laptop category_icon2"></i> Laptop</li></a>
                    <a href="javascript:void(0)"><li><i  class="fas fa-mouse category_icon"></i> Laptop Accessories</li></a>
                    <a href="javascript:void(0)"><li><i  class="far fa-lightbulb category_icon"></i> Electronic</li></a>
                    <a href="javascript:void(0)"><li><i  class="fab fa-uncharted category_icon"></i> Software</li></a>
                    <a href="javascript:void(0)"><li><i  class="fas fa-shield-virus category_icon2"></i> Antivirus</li></a>
                    <a href="javascript:void(0)"><li><i  class="fas fa-shield-virus category_icon2"></i> More</li></a>
                </ul>
            </div>
        </div>
    </div>
    <div class="menupart">
        <ul>
            <li><a href=""><i class="fas fa-home"></i> Home</a></li>
            <li><a href=""><i class="fas fa-store-alt"></i> Shop</a></li>
            <li><a href=""><i class="fab fa-buffer"></i> Special Offer</a></li>
            <li><a href=""><i class="fas fa-info-circle"></i> Support(Live chat)</a></li>
            <li><a href=""><i class="fas fa-phone-alt"></i> 01778543921 (9am-11pm)</a></li>
        </ul>
    </div>
</div> --}}



<div class="con-cover-checkout">
<div class="container checkoutc">
    <div class="row row-cols-1 row-cols-sm-1 row-cols-lg-2">
        <div class="col col-lg-7">
            <div class="returning_customer">
                <div class="re_fir">Returning customer? </div>
                <div class="re_sec" id="re_sec"> Clisk here to login</div>
            </div>
            
            <div class="returning_tab" id="returning_tab">
                <p>If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing section.</p>
                <div class="login_modal">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="sigin_mail_return" aria-describedby="emailHelp" placeholder="Username or email">
                        </div>
                        <div class="form-group">
                            <div class="pass">
                                <input type="password" class="form-control" id="exampleInputPassword1_return" placeholder="Password">
                                <span class="eye_open" id="eye_open_return"><i class="far fa-eye"></i></span>
                                <span class="eye_close" id="eye_close_return"><i class="fas fa-eye-slash"></i></span>
                            </div>
                        </div>
                        <div class="form-check custom_check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1_return">
                            <label class="form-check-label user_sign" for="exampleCheck1_return">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary sub_but">Login</button>
                        <a href="#">
                            <div class="link_forget">Lost password</div>
                        </a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col col-lg-5"></div>
    </div>
    <!-- <br>
    <br>
    <div class="row">
        <div class="col">
            <div class="phone_otp">
                Phone <span>*</span>
                <form action="">
                    <input type="text" placeholder="017xxxxxxxx" class="form-control" required><br>
                    <button class="log_otp_but" type="submit">Login with OTP</button><br>
                </form>
                <div class="log_email_pass" id="login_em2">Login with Email & Password</div>
            </div>
        </div>
    </div> -->
    <hr style="border-bottom:1px solid black;">
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
            <div class="col col-lg-7">
                <div class="billing_details">
                    <div class="billing_head">Billing details</div>
                    <div class="row">
                        <div class="col">
                            <label for="billing_name">First name <span>*</span></label>
                            <input type="text" class="form-control" id="billing_name">
                        </div>
                        <div class="col">
                            <label for="billing_lname">Last name <span>*</span></label>
                            <input type="text" class="form-control" id="billing_lname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-- <label for="company_name">Company name (optional)</label>
                            <input type="text" id="company_name" class="form-control"> -->
                            <div class="country_region" style="margin-top:8px;">
                                <!-- <div class="chr">Country / Region</div>
                                <div class="bd_name"><strong>Bangladesh</strong></div> -->
                                <div class="street">
                                    <label for="street" style="margin-top:8px;">Street address <span>*</span></label>
                                    <input type="text" class="form-control" id="street" placeholder="House number and street name">
                                    <input type="text"  style="margin-top:8px;" class="form-control" placeholder="Apartment, suite, unit, etc. (optional)">
                                </div>
                                <!-- <div class="town_city" style="margin-top:8px;">
                                    <label for="townc">Town / City <span>*</span></label>
                                    <input type="text" class="form-control" id="townc">
                                </div> -->
                                <div class="discrict" style="margin-top:8px;">
                                    <div class="discrictd">Town / City<span>*</span></div>
                                    <div id="datalist1">
                                        <input id="datalist-input1" style="margin-top:-2px;" type="text" placeholder="Select City">
                                        <i id="datalist-icon1" class="icon iconfont icon-arrow"></i>
                                        <ul id="datalist-ul1"></ul>
                                    </div>
                                </div>
                                <!-- <div class="post_code_bil" style="margin-top:8px;">
                                    <label for="posts">Postcode / Zip (optional) <span>*</span></label>
                                    <input type="text" class="form-control" id="posts">   
                                </div> -->
                                <div class="phone_bl" style="margin-top:8px;">
                                    <label for="phone_bls">Phone <span>*</span></label>
                                    <input type="text" class="form-control" id="phone_bls">   
                                </div>
                                <div class="email_bl" style="margin-top:8px;">
                                    <label for="email_bls">Email address <span>*</span></label>
                                    <input type="email" class="form-control" id="email_bls">   
                                </div>
                                <!-- <div class="form-check create_billing_ac">
                                    <input class="form-check-input custom_checkbar" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Create an accoutn?
                                    </label>
                                </div> -->
                                <div class="pass_bl" style="margin-top:8px;">
                                    <label for="pass_bld">Password <span>*</span></label>
                                    <input type="password" class="form-control" id="pass_bld">   
                                </div>
                                <div class="sign_up_bil_toggle">
                                    <!-- copy-from-account -->
                                    <form>
                                        <div class="form-group">
                                            <label for="name">Account username <span>*</span></label>
                                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <div class="pass">
                                                <label for="pass">Create account password <span>*</span></label>
                                                <input type="password" class="form-control" id="pass" placeholder="Password">
                                                <span class="eye_open1" id="eye_open1"><i class="far fa-eye"></i></span>
                                                <span class="eye_close1" id="eye_close1"><i class="fas fa-eye-slash"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="pass">
                                                <label for="exampleInputPassword3">Confirm password <span>*</span></label>
                                                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirm password">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="order_notes" style="margin-top:10px;">
                                    <label for="exampleFormControlTextarea1" class="form-label">Order notes (optional)</label>
                                    <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery" id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .order_box{
                    width:100%;
                    min-height:306px;
                    border:1px solid #DCDCDC;
                }
                .order_head{
                    width:100%;
                    height:53px;
                    background:#F5F5F5;
                    border-bottom:1px solid #DCDCDC;
                }
                .payment_box{
                    width:100%;
                    min-height:260px;
                    border:1px solid #DCDCDC;

                }
                .payment_head1{
                    width:100%;
                    height:75px;
                    border-bottom:1px solid #DCDCDC;
                    padding:10px 20px;
                    color:black;
                    overflow:hidden;
                    transition:.5s;

                }

                .payment_head2{
                    width:100%;
                    height:60px;
                    border-bottom:1px solid #DCDCDC;
                    overflow:hidden;
                    padding:10px 20px;
                    transition:.5s;
                    color:black;                
                }
                .payment_head3{
                    width:100%;
                    height:130px;
                    overflow:hidden;
                    transition:.5s;
                    padding:10px 20px;
                    color:black;                
                }
                .show_pay_height_toggle{
                    height:100px;
                    background:#F5F5F5;
                }
                .show_pay_height_toggle_spe{
                    background:#F5F5F5;
                }
                .pay_slogan{
                    padding-top:10px;
                }
                .padding_top_pm{
                    padding-top:15px;
                }
                .padding_left_pm{
                    padding-left:10px;
                }
                .pay_flex_part{
                    display:flex;
                    flex-flow:row-wrap;
                }
                .p_name{
                    display:inline;
                    color:black;
                    font-weight:bold;
                }
                .s_name{
                    display:inline;
                    float:right;
                    font-weight:bold;
                    color:black;
                }

                .namig_he_g{
                    padding:12px 30px;
                }
                .heda_imidiate{
                    display:flex;
                    flex-flow:row-wrap;
                    height:80px;
                    width:100%;
                    border-bottom:1px solid #DCDCDC;
                }
                .custom_pad_inner{
                    padding:10px 30px;
                }
                .c_p_img{
                    width:20%;
                }
                .c_p_img img{
                    height:50px;
                    width:50px;
                }
                .c_p_mid{
                    width:55%;
                }
                .c_p_final{
                    width:25%;
                    text-align:right;
                    color:var(--orange);
                    font-weight:bold;
                }
                .hed_f1, .hed_f2, .hed_f3{
                    display:flex;
                    flex-flow:row-wrap;
                }
                .subto, .shipp, .total_sh{
                    text-align:left;
                }
                .right_al{
                    margin-left:auto;
                    text-align:right;
                }
                .c_p_mid aside{
                    display:inline;
                    color:var(--text);
                }

            </style>
            <div class="col col-lg-5 custom_col_padd">
                <div class="your_order">
                    <strong style="font-size:20px;">Your order</strong>
                    <br>
                    <br>
                    <div class="order_box">
                            <div class="row">
                                <div class="col">
                                    <div class="order_head">
                                        <div class="namig_he_g">
                                            <div class="p_name">Product</div>
                                            <div class="s_name">Subtotal</div>
                                        </div>
                                    </div>
                                    <div class="heda_imidiate  custom_pad_inner">
                                        <div class="c_p_img"><img src="{{asset('laraecomm/assets/images/xiaomi-redmi-note10-pro.jpg')}}" alt=""></div>
                                        <div class="c_p_mid" style="color:black;">Xiaomi redmi note10 pro <aside>(x 2)</aside></div>
                                        <div class="c_p_final">৳ 28,998.00</div>
                                    </div>
                                    <div class="head_final custom_pad_inner">
                                        <div class="hed_f1">
                                            <div class="subto" style="color:black;">Subtotal</div>
                                            <div class="c_p_final right_al">৳ 28,998.00</div>
                                        </div>
                                        <br>
                                        <div class="hed_f2">
                                            <div class="shipp" style="color:black;">Shipping</div>
                                            <div class="flatr right_al">
                                                <div class="flatr1">Flat rate:</div><br>
                                                <div class="flatr2" style="font-weight:bold;">৳ 99.00</div>
                                            </div>
                                        </div>
                                        <div class="hed_f3">
                                            <div class="total_sh c_p_final">Total</div>
                                            <div class="c_p_final right_al">৳ 29,097.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <br>
                <div class="payment_method">
                    <strong style="font-size:20px;">Payment method</strong>
                    <br>
                    <br>
                    <div class="payment_box">
                        <div class="payment_head1 show_pay_height_toggle" id="payment_head1">
                            <div class="pay_flex_part">
                                <div class="form-check padding_top_pm">
                                    <input class="form-check-input custom_checkbar" type="checkbox" value="" id="flexCheckDefault_payment" onclick="checkTestPayment(this)" checked>
                                    <label class="form-check-label" for="flexCheckDefault_payment" style="cursor:pointer;user-select:none;">
                                        ShurjoPay
                                    </label>
                                </div>
                                <div class="pay_img padding_left_pm">
                                    <img src="https://greenshopbd.com/wp-content/plugins/shurjoPay/template/images/logo.png" alt="">
                                </div>
                            </div>
                            <div class="pay_slogan" style="padding-left:20px;color:var(--text);user-select:none;">
                                Pay securely using ShurjoPay
                            </div>
                        </div>
                        <div class="payment_head2" id="payment_head2">
                            <div class="form-check padding_top_pm">
                                <input class="form-check-input custom_checkbar" type="checkbox" value="" id="flexCheckDefault_payment1" onclick="checkTestPayment(this)">
                                <label class="form-check-label" for="flexCheckDefault_payment1" style="cursor:pointer;user-select:none;">
                                    Cash on delivery
                                </label>
                            </div>
                            <div class="pay_slogan" style="padding-left:20px;color:var(--text);">
                                Pay with cash upon delivery.
                            </div>
                        </div>
                        <div class="payment_head3" id="payment_head3">
                            <div class="form-check padding_top_pm">
                                <input class="form-check-input custom_checkbar" type="checkbox" value="" id="flexCheckDefault_payment2" onclick="checkTestPayment(this)">
                                <label class="form-check-label" for="flexCheckDefault_payment2" style="cursor:pointer;">
                                    sManager Online Payment
                                </label>
                            </div>
                            <div class="pay_slogan" style="padding-left:10px;">
                                <img src="https://greenshopbd.com/wp-content/plugins/payment-gateway-smanager/assets/img/smanager.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href=""><span style="cursor:pointer;">privacy policy</span></a>.</p>
                <style>
                    .terms_and_condition{
                        width:100%;
                        height:0px;
                        overflow:hidden;
                        background: #F2F2F2;
                        transition:.4s ease-in-out;
                    }
                    .terms_show{
                        padding:15px 20px;
                        height:200px;
                        overflow-y:scroll;
                        border:1px solid black;
                    }
                    .terms_show::-webkit-scrollbar {
                    width: 10px;
                    }

                    /* Track */
                    .terms_show::-webkit-scrollbar-track {
                    background: #f1f1f1; 
                    }
                    
                    /* Handle */
                    .terms_show::-webkit-scrollbar-thumb {
                    background: #888; 
                    }

                    /* Handle on hover */
                    .terms_show::-webkit-scrollbar-thumb:hover {
                    background: #555; 
                    }
                    .place_button{
                        width:100%;
                        height:40px;
                        border-radius:4px;
                        background:var(--orange);
                        transition:.4s;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        color:white;
                        font-weight:bold;
                        cursor:pointer;
                        margin-top:15px;
                    }
                    .place_button:hover{
                        background:var(--green);
                    }
                    @media (max-width:968px) {
                        .custom_col_padd{
                            padding-top:50px !important;
                        }
                    }
                    @media (max-width:1026px) {
                        .second{
                            display: none;
                        }
                    }
                    @media (max-width:414px)
                    {
                        .c_p_final{
                            font-size:12px;
                        }
                        br{
                            display:none;
                        }
                        .log_otp_but{
                            margin-top:10px;
                        }
                        .log_email_pass{
                            margin-top:10px;
                        }
                        .custom_col_padd{
                            padding-top:0px !important;
                        }
                        .place_button{
                            margin-bottom:50px;
                        }
                        .payment_head1{
                            height:65px;
                        }
                        .show_pay_height_toggle{
                            height:85px;
                        }
                        .payment_box{
                            min-height:250px;
                        }
                    }
                </style>
                <div class="terms_and_condition" id="terms_and_condition">
                    <strong style="color:var(--text);font-size:14px;">TERMS AND CONDITIONS</strong><br><br>
                    <strong style="font-size:14px;color:var(--text);">Privacy Policy</strong>
                    <p>We, at greenshopbd.com, value the trust you place in us. That’s why we insist upon the highest standards for secure transactions and customer information privacy. Please read the following statement to learn about our information gathering and dissemination practices.</p>
                    <p>Note:</p>
                    <p>Our privacy policy is subject to change at any time without notice. To make sure you are aware of any changes, please review this policy periodically.</p>
                    <p>By visiting this Website you agree to be bound by the terms and conditions of this Privacy Policy. If you do not agree please do not use or access our Website.</p>
                    <p>By mere use of the Website, you expressly consent to our use and disclosure of your personal information in accordance with this Privacy Policy. This Privacy Policy is incorporated into and subject to the Terms of Use.</p>
                    <div class="terms_2">
                        <div class="terms_2_h" style="padding-left:20px;">
                            1. <strong style="color:var(--text);">Collection of Personally Identifiable Information and other Information</strong>
                        </div>
                        <p>When you use our Website, we collect and store your personal information which is provided by you from time to time. Our primary goal in doing so is to provide you with a safe, efficient, smooth and customized experience. This allows us to provide services and features that most likely meet your needs, and to customize our Website to make your experience safer and easier. More importantly, while doing so we collect personal information from you that we consider necessary for achieving this purpose.</p>
                        <p>In general, you can browse the Website without telling us who you are or revealing any personal information about yourself. Once you give us your personal information, you are not anonymous to us. Where possible, we indicate which fields are required and which fields are optional. You always have the option to not provide information by choosing not to use a particular service or feature on the Website. We may automatically track certain information about you based on your behaviour on our Website. We use this information to do internal research on our users’ demographics, interests, and behavior to better understand, protect, and serve our users. This information is compiled and analysed on an aggregated basis. This information may include the URL that you just came from (whether this URL is on our Website or not), which URL you next go to (whether this URL is on our Website or not), your computer browser information, and your IP address.</p>
                        <p>We use data collection devices such as “cookies” on certain pages of the Website to help analyze our web page flow, measure promotional effectiveness, and promote trust and safety. “Cookies” are small files placed on your hard drive that assist us in providing our services. We offer certain features that are only available through the use of a “cookie”. We also use cookies to allow you to enter your password less frequently during a session. Cookies can also help us provide information that is targeted to your interests. Most cookies are “session cookies,” meaning that they are automatically deleted from your hard drive at the end of a session. You are always free to decline our cookies if your browser permits, although in that case, you may not be able to use certain features on the Website and you may be required to re-enter your password more frequently during a session.</p>
                        <p>Additionally, you may encounter “cookies” or other similar devices on certain pages of the Website that are placed by third parties. We do not control the use of cookies by third parties.</p>
                        <p>If you choose to buy on the Website, we collect information about your buying behavior.</p>
                        <p>If you transact with us, we collect some additional information, such as a billing address, a credit/debit card number and a credit/debit card expiration date and/ or other payment instrument details and tracking information from cheques or money orders.</p>
                        <p>If you choose to post messages on our message boards, chat rooms or other message areas or leave feedback, we will collect that information you provide to us. We retain this information as necessary to resolve disputes, provide customer support and troubleshoot problems as permitted by law.</p>
                        <p>If you send us personal correspondence, such as emails or letters, or if other users or third parties send us correspondence about your activities or postings on the Website, we may collect such information into a file specific to you.</p>
                        <p>We collect personally identifiable information (email address, name, phone number, credit card/debit card / other payment instrument details, etc.) from you when you set up a free account with us. While you can browse some sections of our Website without being a registered member, certain activities (such as placing an order) do require registration. We do use your contact information to send you offers based on your previous orders and your interests.</p>
                        <div class="terms_2_h" style="padding-left:20px;">
                            2. <strong style="color:var(--text);">Use of Demographic / Profile Data / Your Information</strong>
                        </div>
                        <p>We use personal information to provide the services you request. To the extent we use your personal information to market to you, we will provide you with the ability to opt-out of such uses. We use your personal information to resolve disputes; troubleshoot problems; help promote a safe service; collect money; measure consumer interest in our products and services, inform you about online and offline offers, products, services, and updates; customize your experience; detect and protect us against error, fraud, and other criminal activity; enforce our terms and conditions; and as otherwise described to you at the time of collection.</p>
                        <p>In our efforts to continually improve our product and service offerings, we collect and analyze demographic and profile data about our users’ activity on our Website.</p>
                        <p>We identify and use your IP address to help diagnose problems with our server and to administer our Website. Your IP address is also used to help identify you and to gather broad demographic information.</p>
                        <p>We will occasionally ask you to complete optional online surveys. These surveys may ask you for contact information and demographic information (like zip code, age, or income level). We use this data to tailor your experience to our Website, providing you with content that we think you might be interested in and to display content according to your preferences.</p>
                        <p><strong style="color:var(--text);">Cookies</strong></p>
                        <p>A “cookie” is a small piece of information stored by a web server on a web browser so it can be later read back from that browser. Cookies are useful for enabling the browser to remember information specific to a given user. We place both permanent and temporary cookies on your computer’s hard drive. The cookies do not contain any of your personally identifiable information.</p>
                        <div class="terms_2_h" style="padding-left:20px;">
                            3. <strong style="color:var(--text);">Sharing of personal information</strong>
                        </div>
                        <p>We may share personal information with our other corporate entities and affiliates. These entities and affiliates may market to you as a result of such sharing unless you explicitly opt-out.</p>
                        <p>We may disclose personal information to third parties. This disclosure may be required for us to provide you access to our Services, to comply with our legal obligations, to enforce our User Agreement, to facilitate our marketing and advertising activities, or to prevent, detect, mitigate, and investigate fraudulent or illegal activities related to our Services. We do not disclose your personal information to third parties for their marketing and advertising purposes without your explicit consent.</p>
                        <p>We may disclose personal information if required to do so by law or in the good faith belief that such disclosure is reasonably necessary to respond to subpoenas, court orders, or other legal processes. We may disclose personal information to law enforcement offices, third party rights owners, or others in the good faith belief that such disclosure is reasonably necessary to: enforce our Terms or Privacy Policy; respond to claims that an advertisement, posting or other content violates the rights of a third party; or protect the rights, property or personal safety of our users or the general public.</p>
                        <p>We and our affiliates will share/sell some or all of your personal information with another business entity should we (or our assets) plan to merge with, or be acquired by that business entity, or re-organization, amalgamation, restructuring of the business. Should such a transaction occur that other business entity (or the new combined entity) will be required to follow this privacy policy with respect to your personal information.</p>
                        <div class="terms_2_h" style="padding-left:20px;">
                            4. <strong style="color:var(--text);">Links to Other Sites</strong>
                        </div>
                        <p>Our Website links to other websites that may collect personally identifiable information about you. Greenshopbd.com is not responsible for the privacy practices or the content of those linked websites.</p>
                        <div class="terms_2_h" style="padding-left:20px;">
                            5. <strong style="color:var(--text);">Security Precautions</strong>
                        </div>
                        <p>Our Website has stringent security measures in place to protect the loss, misuse, and alteration of the information under our control. Whenever you change or access your account information, we offer the use of a secure server. Once your information is in our possession we adhere to strict security guidelines, protecting it against unauthorized access.</p>
                        <div class="terms_2_h" style="padding-left:20px;">
                            6. <strong style="color:var(--text);">Choice/Opt-Out</strong>
                        </div>
                        <p>We provide all users with the opportunity to opt-out of receiving non-essential (promotional, marketing-related) communications from us on behalf of our partners, and from us in general, after setting up an account.</p>
                        <p>If you want to remove your contact information from all Greenshopbd.com lists and newsletters, please visit unsubscribe</p>
                        <div class="terms_2_h" style="padding-left:20px;">
                            7. <strong style="color:var(--text);">Advertisements on Greenshopbd.com</strong>
                        </div>
                        <p>We use third-party advertising companies to serve ads when you visit our Website. These companies may use information (not including your name, address, email address, or telephone number) about your visits to this and other websites in order to provide advertisements about goods and services of interest to you.</p>
                        <div class="terms_2_h" style="padding-left:20px;">
                            8. <strong style="color:var(--text);">Your Consent</strong>
                        </div>
                        <p>By using the Website and/ or by providing your information, you consent to the collection and use of the information you disclose on the Website in accordance with this Privacy Policy, including but not limited to Your consent for sharing your information as per this privacy policy.</p>
                        <p>If we decide to change our privacy policy, we will post those changes on this page so that you are always aware of what information we collect, how we use it, and under what circumstances we disclose it.</p>
                    </div>
                </div>

                <div class="form-check" style="display:inline-block;">
                    <input class="form-check-input custom_checkbar" type="checkbox" value="" id="flexCheckDefaultch" checked>
                    <label class="form-check-label" for="flexCheckDefaultch">
                        I have read and agree to the website
                    </label>
                </div>
                <div id="terms_ac" style="display:inline;color:var(--orange);cursor:pointer;margin-top:10px;">terms and conditions *</div>
                <br>
                <div class="place_button">Place order</div>
                <br>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('laraecomm/alljs/checkout.js')}}"></script>




<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<script>
    // let bil_sign_tog = $('#flexCheckDefault');
    // let bil_press = $('.sign_up_bil_toggle');
    // bil_sign_tog.on('click',function(){
    //     bil_press.toggleClass('sign_up_bil_toggle_show');
    // });

</script>
@endsection