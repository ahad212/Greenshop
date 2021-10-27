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
    :root{
        --text:#6A7180;
    }
    /* .col{
        border:1px solid black;
    } */
    .cart_heading{
        font-size:40px;
        color:var(--text);
    }
    .cart_img{
        width:45px;
        height:50px;
    }
    table{
        width:100%;
    }
    .input-group{
        width:100px;
        margin-top:10px;
    }
    input[type="text"]{
        border-radius:5px !important;
    }
    .input-number{
        text-align:center;
    }
    .total_pm{
        position:relative;
    }
    .minuss{
        position:absolute;
        font-size:27px;
        z-index:20;
        left:10px;
        top:-3px;
        user-select:none;
        color:red;
    }
    .pluss{
        font-size:22px;
        cursor:pointer;
        position:absolute;
        z-index:3;
        right:10px;
        user-select:none;
        top:3px;
        color:green;
    }
    .totall{
        display:inline;
    }
    .icon_del{
        cursor:pointer;
    }
    .icon_del:hover{
        color:var(--orange);
    }
    .continue_shop{
        cursor:pointer;
        display:inline-block;
        color:var(--text);
    }
    .continue_shop span{
        font-weight:bold;
    }
    .continue_shop:hover{
        color:var(--orange);
    }
    .update_cart{
        float:right;
        cursor:pointer;
        color:var(--text);
        display:none;
    }
    /* .update_cart span{
        font-weight:bold;
    }
    .update_cart:hover{
        color:var(--orange);
    } */
    @media (max-width:414px)
    {
        
        .proceed_to{
            margin:5px 0px !important;
        }
        .col br{
            display:none;
        }
        .cart_part{
            margin-top:10px !important;
        }
        table tr th{
            text-align:center;
        }
        table tr td:nth-child(3){
            width:80px;
        }
        .cart_heading{
            font-size:25px;
            font-weight:bold;
            text-align:center;
        }
        .container {
            padding-top: 10px !important;
        }
        .input-group{
            width:70px;
            margin-top:0px;
        }
        .minuss{
            font-size:22px;
            top:-2px;
            left:2px;
        }
        .pluss{
            font-size:22px;
            right:2px;
            top:1px;
        }
        .cart_img{
            width:20px;
            height:25px;
        }
        .naming_p{
            font-size:11px;
            padding-left:1px;
        }
        .cart_t_p{
            font-size:11px;
        }
        .totall{
            font-size:11px;
        }
        /* .col{
            margin:0;
            padding:0;
            padding-right:0px !important;
        } */
        table tr th{
            font-size:14px;
        }
        .icon_del{
            margin-left:20px;
        }
        .cart_part{
            margin-top:20px;
        }
        
    }
    /* @media (max-width:360px)
    {


       
    } */

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

<div class="second">
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
</div>




<div class="container">
    <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
        <div class="col col-lg-8">
            <div class="cart_heading">Cart</div>
            <table>
                <tr style="border-bottom:1px solid rgba(0,0,0,0.2);height:50px;">
                    <th colspan="2">Product</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
                <tr style="border-bottom:1px solid rgba(0,0,0,0.2);height:100px;">
                    <td>
                        <img class="cart_img" src="{{asset('laraecomm/assets/images/xiaomi-redmi-note10-pro.jpg')}}" alt="">
                    </td>
                    <td><div class="naming_p">
                    Xiaomi redmi note10 pro
                    </div>
                    <div class="cart_t_p">
                    ৳ 14,499.00
                    </div>
                    </td>
                    <td>
                        <div class="center">
                            <div class="input-group total_pm">
                                <span class="input-group-btn minuss">
                                    <div type="button" id="btn" class="btn-number"  data-type="minus" data-field="quant[2]">
                                        -
                                    </div>
                                </span>
                                <input type="text" name="quant[2]" class="form-control input-number" value="2" min="1" max="100">
                                <span class="input-group-btn pluss">
                                    <div id="btn2" class="btn-number" data-type="plus" data-field="quant[2]">
                                        +
                                    </div>
                                </span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="totall">
                        ৳ 28,998.00 
                        </div>
                        <span class="icon_del">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </span>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <a href="{{route('home')}}">
                <div class="continue_shop">
                    &#8592;<span> Continue shoping</span>
                </div>
            </a>
            <div class="update_cart">
            <i class="fas fa-redo-alt"></i> <span> Update cart</span>
            </div>
        </div>
        <div class="col col-lg-4">
        <style>
            .cart_totaling{
                width:100%;
                min-height:355px;
                background:#F5F5F5;
                padding:0px 25px;
                padding-top:30px;
            }
            .right_part{
                margin-top:80px;
            }
            .cart_total_head{
                font-size:19px;
                color:var(--text);
                font-weight:bold;
            }
            .s_t{
                display:inline-block;
            }
            .r_tak{
                display:inline-block;
                float:right;
                font-weight:bold;
                color:var(--orange);
                font-size:14px;
            }
            .r_ship_p{
                margin-top:12px;
            }
            .s_t2{
                display:inline-block;
            }
            .r_tak2{
                float:right;
                display:inline;
                text-align:right;
            }
            .r_tak2 span{
                font-weight:bold;
            }
            .ship_o_w{
                margin-top:7px;
                color:var(--text);
            }
            .u_d_c{
                color:var(--text);
                margin-top:7px;
            }
            .conver_shop_car{
                text-align:right;
            }
            .cal_shipping{
                cursor:pointer;
                color:var(--orange);
                display:inline;
                user-select:none;
            }
            .cal_modal_toggle{
                padding-top:15px;
                min-width:170px;
                height:0px;
                overflow:hidden;
                transition:.7s ease-in-out;
                margin-left:100px;
            }
            .show_cal_modal{
                height:240px;
            }
            .mid_details{
                min-height:130px;
            }
            .total_ship_amount{
                height:40px;
                margin-bottom:20px;
            }
            .t_head_t{
                font-weight:700;
                display:inline;
            }
            .t_head_taka{
                float:right;
                font-weight:bold;
                color:var(--orange);
            }
            .proceed_to{
                width:100%;
                height:45px;
                border-radius:5px;
                color:white;
                display:flex;
                justify-content:center;
                align-items:center;
                background:var(--orange);
                margin:20px 0px;
                cursor:pointer;
                font-weight:bold;
                transition:.4s;
            }
            .proceed_to:hover{
                background:var(--green);
            }
            .cart_part{
                margin-top:80px;
            }
        </style>
            <div class="cart_part">
                <div class="cart_totaling">
                    <div class="cart_total_head">
                        Cart totals
                    </div>
                    <hr style="border-bottom:1px solid black">
                    <div class="mid_details">
                        <div class="r_sub_t_p">
                            <div class="s_t">
                                Subtotal
                            </div>
                            <div class="r_tak">
                            ৳ 28,998.00
                            </div>
                        </div>
                        <div class="r_ship_p">
                            <div class="s_t2">
                                Shipping
                            </div>
                            <div class="r_tak2">
                                <span>
                                    Flat rate: ৳ 99.00
                                </span>
                                <div class="ship_o_w">
                                    Shipping options will be
                                </div>
                                <div class="u_d_c">
                                    updated during checkout.
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="conver_shop_car">
                        <div class="cal_shipping" id="cal_shipping">
                            Calculate Shipping
                            <span>
                            <i class="fas fa-truck"></i>
                            </span>
                        </div>
                    </div>

                    <!-- style for slect-data-list -->
                    <style>
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

                    #datalist {
                        margin: auto;
                        position: relative;
                        width: 150px;
                        color: #000;
                    }

                    #datalist.active #datalist-ul {
                        display: block;
                    }

                    #datalist-input {
                        padding-left: 1em;
                        width: 100%;
                        height: 40px;
                        border-radius: 5px;
                        box-sizing: border-box;
                        box-shadow: none;
                        border: 1px solid #ccc;
                        outline: 0;
                    }

                    #datalist-input:focus {
                        border: 1px solid #AA0000;
                        outline: 0;
                    }

                    #datalist-icon {
                        position: absolute;
                        right: 20px !important;
                        top: 10px !important;
                        font-size:15px !important; 
                        transition: transform 0.2s ease;
                    }

                    #datalist.active i {
                        transform: rotate(270deg);
                    }

                    #datalist-ul {
                        display: none;
                        position: absolute;
                        z-index: 100;
                        margin: 5px 0 0 0;
                        padding: 0;
                        width: 100%;
                        max-height: 120px;
                        top: 100%;
                        left: 0;
                        list-style: none;
                        border-radius: 2px;
                        background: #98AFC7;
                        overflow: hidden;
                        overflow-y: auto;
                    }

                    #datalist-ul li {
                        display: block;
                        text-align: left;
                        padding: 2px 5px;
                        color: white;
                        cursor: pointer;
                    }

                    #datalist-ul li:hover {
                        background: #4e00f0;
                        color: white;
                    }


                    /* for second data-list */


                    #datalist1 {
                        margin: auto;
                        position: relative;
                        width: 150px;
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
                        top: 20px !important;
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
                    .town_ci{
                        width:150px;
                        height:40px;
                        padding:5px 20px;
                        color:var(--text);
                        border:1px solid rgba(0,0,0,0.3);
                        outline:none;
                        margin-left:18px;
                        margin-top:10px;
                    }
                    .town_ci:focus{
                        border:1px solid #BA3232;
                    }
                    .update_butd{
                        height:30px;
                        width:60px;
                        background:var(--orange);
                        border-radius:4px;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        margin-top:5px;
                        margin-left:auto;
                        margin-right:22px;
                        font-size:14px;
                        cursor:pointer;
                        color:white;
                    }
                    .update_butd:hover{
                        background:var(--green);
                    }

                    </style>
                    
                    <div class="cal_modal_toggle" id="cal_modal_toggle">
                        <div id="datalist">
                            <input id="datalist-input" type="text" placeholder="Selcet Country">
                            <i id="datalist-icon" class="icon iconfont icon-arrow"></i>
                            <ul id="datalist-ul"></ul>
                        </div>

                        <!-- second data-list -->
                        <div id="datalist1">
                            <input id="datalist-input1" type="text" placeholder="Select District">
                            <i id="datalist-icon1" class="icon iconfont icon-arrow"></i>
                            <ul id="datalist-ul1"></ul>
                        </div>
                        <div class="town_city">
                            <input id="town" class="town_ci" type="text" placeholder="Town / City">
                        </div>
                        <div class="post_zip">
                            <input id="zip" class="town_ci" type="text" placeholder="Postcode / Zip">
                        </div>
                        <div class="update_butd" onclick="sendShippingData()">Update</div>
                    </div>
                    <hr style="border-bottom:1px solid black;">
                    <div class="total_ship_amount">
                        <div class="t_head_t">
                            Total
                        </div>
                        <div class="t_head_taka">
                            ৳ 29,097.00
                        </div>
                    </div>
                </div>
                <a href="{{route('checkout')}}"><div class="proceed_to">
                    Proceed to checkout
                </div></a>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="{{asset('laraecomm/alljs/cart.js')}}"></script>




@endsection



<!-- for me api read -->

<!-- <div id="show"></div>
<style>
    .good{
        background:red;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        var good;
        $.get('https://amaderhospital.com/api//Location/get',function(res){

            for(i=0;i<res.result.length;i++){
              good   += '<div class="good">'+ res.result[i].name +'</div>';
            }

            $('#show').html(good.substring(9))
        });

    });
</script> -->