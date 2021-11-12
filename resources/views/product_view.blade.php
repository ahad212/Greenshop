@extends('welcome')

@section('content')
{{-- <link rel="stylesheet" href="{{asset('laraecomm/allcss/jquery.exzoom.css')}}"> --}}
<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('laraecomm/allcss/product_view.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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




<div class="top_fixed_for_pc_only" id="fixed_show">
    <div class="row">
        <div class="col sticky_custom_col">
            
            <div class="product_img_sticky">
                <img src="{{asset('laraecomm'.$image[0])}}" alt="">
            </div>
            <div class="product_details_sticky">
                <div class="title_sticky">
                    {{$single_product->name}}
                </div>
                <div class="details_sticky">
                    <div class="rating4">
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span><span class="spanrating2">(0 Reviews)</span><span class="spancolmargin"><span class="spancol3">|  sold:</span> {{$single_product->sold}}</span>
                    </div>    
                </div>
            </div>
        </div>
        <div class="col">
            <div class="product_price_sticky">
                @if ($single_product->discount_price)
                    <div class="taka price_sticky" style="margin-top:10px;">৳ {{number_format($single_product->discount_price)}}</div>
                @else
                    <div class="taka price_sticky" style="margin-top:10px;">৳ {{number_format($single_product->price)}}</div>
                @endif
                <div class="cart_button_sticky">Add to cart</div>
            </div>
        </div>
    </div>
</div>

<form action="" id="myform">
<div class="container_wrapper">
  <div class="row row-cols-1 row-cols-lg-3">
    <div class="col">
        <div class="product_page_img">
            {{-- product image slide --}}
            {{-- <div uk-lightbox>
                <a href="{{asset('laraecomm/assets/images/xiaomi-redmi-note10-pro.jpg')}}">
                    <img class="img_res_p"  src="{{asset('laraecomm/assets/images/xiaomi-redmi-note10-pro.jpg')}}" alt="">
                </a>
            </div> --}}
            <div class="fotorama " data-nav="thumbs" data-navposition="bottom" data-allowfullscreen="true" data-ratio="10/9">
                @foreach ($image as $imgg)
                <img src="{{asset('laraecomm'.$imgg)}}"/>
              @endforeach
            </div>
        </div>
    </div>
    <div class="col pro_view_ul">
        <ul>
            <li class="ifontsize">{{$single_product->name}}</li>
            <li class="limargin">
                <div class="rating3">
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span><span class="spanrating2">(0 Reviews)</span><span class="spancolmargin"><span class="spancol3">sold:</span> 0</span>
                </div>
            </li>
            @if ($single_product->discount_price)
                <li class="taka" style="margin-top:0px !important;">৳ {{number_format($single_product->discount_price)}}</li>
            @else
                <li class="taka"  style="margin-top:0px; !important">৳ {{number_format($single_product->price)}}</li>
            @endif
            {{-- @foreach (explode(';',$single_product->pdescription) as $des)
                <li>{{$des}}</li>
            @endforeach --}}
            {{-- <li>OS: Android 10</li>
            <li>Chipset: Qualcomm SDM450 Snapdragon 450 (14 nm)</li>
            <li>CPU: Octa-core 1.8 GHz Cortex-A53</li>
            <li>GPU: Adreno 506</li>
            <li>RAM: 4GB</li>
            <li>ROM: 64GB</li>
            <li>Back Camera: 13MP+2MP+2MP</li>
            <li>Front Camera: 5MP</li>
            <li>Display Size: 6.5” (PLS IPS Display)</li> --}}
            <li>
                <style>
                    .custom_checkbar:checked{
                        background-color:var(--orange);
                        border-color:var(--orange);
                    }
                    .emi_ahref{
                        color:var(--orange);
                        cursor:pointer;
                    }
                    .emi_ahref:hover{
                        text-decoration:underline;
                    }
                    .formcolf {
                        display:inline-block;
                        margin-top:5px;
                    }
                    .labavail {
                        cursor:pointer;user-select:none;
                    }
                </style>
            
                <div class=" formcolf">
                    {{-- <input class="form-check-input custom_checkbar" type="checkbox" value="" id="flexCheckemi"> --}}
                    <label class="" for="">
                        Available EMI Plan
                    </label>
                </div>
                <span class="emi_ahref" id="popup-btn"> View plans</span>



                <!-- popup for view plans -->
                <div id="popup-wrapper" class="popup-container">
                <div class="popup-content">
                    <span id="close">&times;</span>
                    <p>
                        <!--EMI modal content start from here -->
                            <style>
                            .custom_checkbar:checked{
                                background-color:var(--orange);
                                border-color:var(--orange);
                            }
                            .imei{
                                padding:0px 20px;
                                background:white;
                                width:350px;
                                border:1px solid #DDDDDD;
                                overflow:hidden;
                                transition:.5s;
                                height:490px;
                                margin:auto;
                                margin-top:-73px;
                            }
                            .imei_show{
                                height:630px;
                            }
                            .imei_options{
                                padding-left:15px;
                            }
                        </style>
                        <div class="imei" id="imei">
                            <!-- <div class="form-check">
                                <input class="form-check-input custom_checkbar" type="checkbox" value="" id="flexCheckDefaultimi">
                                <label class="form-check-label" for="flexCheckDefaultimi" style="cursor:pointer;user-select:none;">
                                    Payment EMI
                                </label>
                            </div> -->
                            <div class="imei_options">
                                <!-- <p>You Can Pay With Equated Monthly Installment (EMI) using your credit card</p> -->

                                

                                <style>
                                    .radio_group label {display: block; padding:5px 0px;}
                                    .radio_group label input {display: none;}
                                    .radio_group label .span {
                                        border: 1px solid #ccc;
                                        width: 300px; 
                                        height: 55px;
                                        border-radius:8px; 
                                        line-height: 1;
                                        font-size: 10pt;
                                        margin-top: -7.5px;
                                        display:flex;
                                        flex-flow:row-wrap;
                                        padding-top:10px;
                                        cursor:pointer;
                                    }
                                    .left_p{
                                        text-align:left;
                                    }
                                    .right_p{
                                        text-align:right;
                                        margin-left:auto;
                                    }
                                    .radio_group input:checked + .span {background: #5562EB; border-color: #ccf;color:white;}
                                    .leftp_marbot {
                                        margin-bottom:5px;
                                    }
                                </style>
                                <div class="radio_group" id="rad_group">
                                    <label>
                                        <input type="radio" name="select" />
                                        <div class="span">
                                            <div class="left_p">
                                                <div class="left_p_1 leftp_marbot">৩ কিস্তি</div>
                                                <div class="left_p_2">মোট পরিশোধ ৳ ৩৭২৩৬</div>
                                            </div>
                                            <div class="right_p">
                                                ৳ ১২৪১২/মাস
                                            </div>
                                        </div>
                                    </label>
                                    <label>
                                        <input type="radio" name="select" />
                                        <div class="span">
                                            <div class="left_p">
                                                <div class="left_p_1 leftp_marbot">৩ কিস্তি</div>
                                                <div class="left_p_2">মোট পরিশোধ ৳ ৩৭২৩৬</div>
                                            </div>
                                            <div class="right_p">
                                                ৳ ১২৪১২/মাস
                                            </div>
                                        </div>
                                    </label>
                                    <label>
                                        <input type="radio" name="select" />
                                        <div class="span">
                                            <div class="left_p">
                                                <div class="left_p_1 leftp_marbot">৩ কিস্তি</div>
                                                <div class="left_p_2">মোট পরিশোধ ৳ ৩৭২৩৬</div>
                                            </div>
                                            <div class="right_p">
                                                ৳ ১২৪১২/মাস
                                            </div>
                                        </div>
                                    </label>
                                    <label>
                                        <input type="radio" name="select" />
                                        <div class="span">
                                            <div class="left_p">
                                                <div class="left_p_1 leftp_marbot">৩ কিস্তি</div>
                                                <div class="left_p_2">মোট পরিশোধ ৳ ৩৭২৩৬</div>
                                            </div>
                                            <div class="right_p">
                                                ৳ ১২৪১২/মাস
                                            </div>
                                        </div>
                                    </label>
                                    <label>
                                        <input type="radio" name="select" />
                                        <div class="span">
                                            <div class="left_p">
                                                <div class="left_p_1 leftp_marbot">৩ কিস্তি</div>
                                                <div class="left_p_2">মোট পরিশোধ ৳ ৩৭২৩৬</div>
                                            </div>
                                            <div class="right_p">
                                                ৳ ১২৪১২/মাস
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <img src="https://greenshopbd.com/wp-content/plugins/smanager-emi/assets/img/emi-available.jpg" alt="">
                        </div>
                    </p>
                </div>
                </div>
                <div class="emi_start_amount">
                    EMI starts form Tk ১২৪১২/মাস
                </div>
            </li>
            <li>
            
                <div class="conli"  style="display:flex;margin-top:-10px;">
                    <div class="center">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" id="btn" class="btn-number"  data-type="minus" data-field="quant[2]">
                                    -
                                </button>
                            </span>
                            <input type="text" name="quant[2]" class="form-control input-number" value="1" min="1" max="{{$single_product->quantity}}" id="quantitynum">
                            <span class="input-group-btn">
                                <button type="button" id="btn2" class=" btn-number" data-type="plus" data-field="quant[2]">
                                    +
                                </button>
                            </span>
                        </div>
        
                    </div>
                    <p style="margin-left:10px;margin-top:15px;"><strong>In Stock : @php
                        if ($single_product->quantity > 499 ) {
                            echo 'Unlimited';
                        } else {
                            echo $single_product->quantity;
                        }
                    @endphp</strong></p>
                </div>
            </li>
            <li style="display: flex;grid-column-gap:3px;margin-bottom:10px;">
                {{-- <div class="color"><strong>Color Variant:</strong><span class="spanfont3"> Black</span></div>
                <div class="select_color">
                    <label>
                        <input type="radio" name="color" checked/>
                        <div class="span1 spblack">

                        </div>
                    </label>
                    <label>
                        <input type="radio" name="color" />
                        <div class="span1 bggold">

                        </div>
                    </label>
                    <label>
                        <input type="radio" name="color" />
                        <div class="span1 bggold">

                        </div>
                    </label>
                </div> --}}
                @php
                    $colors = explode(',',$single_product->color);
                @endphp
                @if ($single_product->color)
                    <div class="colorr">
                        <label for="" style="font-weight:bold;">Color Available</label>
                        <select name="" id="coloring" class="form-select" style="width:140px;">
                            <option value="" hidden>select Color</option>
                            @foreach ($colors as $color)
                            <option value="{{$color}}">{{$color}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>                    
                @endif
                {{-- @if ((count($colors) == 1) && $single_product->color != null)
                    <strong>Color :  @php echo $colors[0]; @endphp</strong> <br>
                @endif --}}
                @php
                    $size = explode(',',$single_product->size);
                @endphp
                @if ($single_product->size)
                    <div class="sizee">
                        <label for="" style="font-weight:bold;">Size Available</label>
                        <select name="" id="sizing" class="form-select" style="width:140px" >
                            <option value="" hidden>select Size</option>
                            @foreach ($size as $size)
                            <option value="{{$size}}">{{$size}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>                    
                @endif

            </li>
            <!-- <li>
                <style>
                    .custom_checkbar:checked{
                        background-color:var(--orange);
                        border-color:var(--orange);
                    }
                    .imei{
                        padding:10px 20px;
                        background:white;
                        width:350px;
                        border:1px solid #DDDDDD;
                        overflow:hidden;
                        transition:.5s;
                        height:50px;
                    }
                    .imei_show{
                        height:650px;
                    }
                </style>
                <div class="imei" id="imei">
                    <div class="form-check">
                        <input class="form-check-input custom_checkbar" type="checkbox" value="" id="flexCheckDefaultimi">
                        <label class="form-check-label" for="flexCheckDefaultimi" style="cursor:pointer;user-select:none;">
                            Payment EMI
                        </label>
                    </div>
                    <br>
                    <div class="imei_options" style="padding-left:15px;">
                        <p>You Can Pay With Equated Monthly Installment (EMI) using your credit card</p>

                        

                        <style>
                            .radio_group label {display: block; padding:5px 0px;}
                            .radio_group label input {display: none;}
                            .radio_group label .span {
                                border: 1px solid #ccc;
                                width: 300px; 
                                height: 55px;
                                border-radius:8px; 
                                line-height: 1;
                                font-size: 10pt;
                                margin-top: -7.5px;
                                display:flex;
                                flex-flow:row-wrap;
                                padding-top:10px;
                                cursor:pointer;
                            }
                            .left_p{
                                text-align:left;
                            }
                            .right_p{
                                text-align:right;
                                margin-left:auto;
                            }
                            .radio_group input:checked + .span {background: #5562EB; border-color: #ccf;color:white;}
                        </style>
                        <div class="radio_group">
                            <label>
                                <input type="radio" name="select" />
                                <div class="span">
                                    <div class="left_p">
                                        <div class="left_p_1" style="margin-bottom:5px;">৩ কিস্তি</div>
                                        <div class="left_p_2">মোট পরিশোধ ৳ ৩৭২৩৬</div>
                                    </div>
                                    <div class="right_p">
                                        ৳ ১২৪১২/মাস
                                    </div>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="select" />
                                <div class="span">
                                    <div class="left_p">
                                        <div class="left_p_1" style="margin-bottom:5px;">৩ কিস্তি</div>
                                        <div class="left_p_2">মোট পরিশোধ ৳ ৩৭২৩৬</div>
                                    </div>
                                    <div class="right_p">
                                        ৳ ১২৪১২/মাস
                                    </div>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="select" />
                                <div class="span">
                                    <div class="left_p">
                                        <div class="left_p_1" style="margin-bottom:5px;">৩ কিস্তি</div>
                                        <div class="left_p_2">মোট পরিশোধ ৳ ৩৭২৩৬</div>
                                    </div>
                                    <div class="right_p">
                                        ৳ ১২৪১২/মাস
                                    </div>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="select" />
                                <div class="span">
                                    <div class="left_p">
                                        <div class="left_p_1" style="margin-bottom:5px;">৩ কিস্তি</div>
                                        <div class="left_p_2">মোট পরিশোধ ৳ ৩৭২৩৬</div>
                                    </div>
                                    <div class="right_p">
                                        ৳ ১২৪১২/মাস
                                    </div>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="select" />
                                <div class="span">
                                    <div class="left_p">
                                        <div class="left_p_1" style="margin-bottom:5px;">৩ কিস্তি</div>
                                        <div class="left_p_2">মোট পরিশোধ ৳ ৩৭২৩৬</div>
                                    </div>
                                    <div class="right_p">
                                        ৳ ১২৪১২/মাস
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <img src="https://greenshopbd.com/wp-content/plugins/smanager-emi/assets/img/emi-available.jpg" alt="">
                </div>

                <br>
            </li> -->

            <li>
                <div class="add_buy_but">
                    <div class="add_but" onclick="orderplace()">Add to cart</div>
                    <div class="buy_but">Buy Now</div>
                    <div class="wish_icon"><i class="far fa-heart"></i></div>
                </div>
            </li>
            <li style="margin-top:5px;">
                Categories:  @php
                    if ($single_product->parent != 'parent') {
                        echo $single_product->parent.',';
                    }
                @endphp
                {{$single_product->cname}}
            </li>
        </ul>
    </div>

        <div class="col">
            <div class="delivery_options">
                <div class="head_deli">Delivery Options</div>
                <div class="cover_del_wrap">
                    <i class="fas fa-map-marker-alt markc"></i>
                    <div class="deli_opt_ch">
                        <label for="">
                            <input type="text" onchange="closeDiv();setamount(this.value)" list="cust_selecting" placeholder="select city" name="searchd" id="cust_select"  class="cust_select">
                        </label>
                        <datalist id="cust_selecting">
                            {{-- @foreach ($location as $loc) --}}
                            {{-- @endforeach --}}
                        </datalist>
                    </div>
                    <div class="change_cancel">
                        <div class="change_but_deli" id="change_but_deli">Change</div>
                        <div class="cancel_but_deli" id="cancel_but_deli">Cancel</div>
                    </div>
                </div>
                <div class="deliver_info">
                    <div class="title_del_info">
                        <i class="fas fa-baby-carriage markc"></i>
                        <div class="title_del_with">
                            <div class="title_del_tex">Delivery Info</div>
                            <div class="deli_time">
                                Delivery Time : 1-4 working days
                            </div>
                            <div class="del_amount_fee">
                                <span class="deli_time">Shipping Charge :</span> 
                                <strong class="font_12" id="shipping">
                                    
                                </strong>
                            </div>
                        </div>
                    </div>
                    <div class="dele" style="margin-top:5px;">
                        <i class="far fa-money-bill-alt" style="color:var(--orange)"></i> Cash on Delivery Available
                    </div>
                    <style>
                        .colicolor {
                            color:var(--orange);
                        }
                        .mari {
                            margin-top:10px;
                        }
                        .marspan {
                            margin-left:8px;
                        }
                        .sppad {
                            padding-left:5px;
                        }
                    </style>
                    <div class="del_receive_taka">
                        <img src="https://greenshopbd.com/wp-content/plugins/shurjoPay/template/images/logo.png" alt="">
                    </div>
                    <div class="jenuin mari">
                        <i class="fab fa-guilded colicolor"></i><span class="marspan">100% genuine product</span>
                    </div>
                    <div class="title_del_info">
                        <i class="fas fa-shield-alt markc"></i>
                        <div class="title_del_with">
                            <div class="title_del_tex">Return & Warranty</div>
                            <div class="deli_time">
                                Delivery Time : 1-4 working days
                            </div>
                            @if ($single_product->pwarranty != 'no')
                                <div class="del_warranty">
                                    {{-- <i class="fas fa-shield-alt markc"></i> --}}
                                    <span class="deli_time">Warranty Available : 
                                        <strong class="link_warranty" data-bs-toggle="modal" data-bs-target="#staticBackdrop">{{$single_product->warrantytime}}</strong>
                                    </span>
                                </div>
                            @else
                                <div class="del_warranty">
                                    {{-- <i class="fas fa-shield-alt markc"></i> --}}
                                    <span class="deli_time">Warranty Unavailable 
                                        {{-- <strong class="link_warranty" data-bs-toggle="modal" data-bs-target="#staticBackdrop">{{$single_product->warrantytime}}</strong> --}}
                                    </span>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="note_if_have"> <i class="fas fa-book-open markc"></i>
                        <strong class="link_warranty" style="margin-left:5px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">See Notebook</strong>
                    </div>
                </div>
            </div>                              
        </div>
    </div>
</form>
<!-- warranty modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Warranty Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        No available information yet.
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
    </div>
  </div>
</div>
<!-- end warranty modal -->

<!-- note modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Short Note</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        No available information yet.
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
    </div>
  </div>
</div>
<!-- end warranty modal -->
 
  <div class="row">
    <div class="col custom_tab">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Reviews (0)</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="tab_head">{{$single_product->name}}</div>
                {!!$single_product->longd!!}
                {{-- <ul>
                    <li>OS: Android 10</li>
                    <li>Chipset: Qualcomm SDM450 Snapdragon 450 (14 nm)</li>
                    <li>CPU: Octa-core 1.8 GHz Cortex-A53</li>
                    <li>GPU: Adreno 506</li>
                    <li>RAM: 4GB</li>
                    <li>ROM: 64GB</li>
                    <li>Back Camera: 13MP+2MP+2MP</li>
                    <li>Front Camera: 5MP</li>
                    <li>Display Size: 6.5” (PLS IPS Display)</li>
                    <li>Display Resolution: 720 x 1600 pixels, 20:9 ratio (~270 ppi Density)</li>
                    <li>Build: Glass Front, Plastic Back, Plastic Frame</li>
                    <li>Connectivity: Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot; Bluetooth: 5.0; GPS: Yes, with A-GPS, GLONASS, GALILEO, BDS; NFC: No; Radio: FM Radio</li>
                    <li>Sensors: Accelerometer, Proximity</li>
                    <li>Battery Type: Li-Po 5000mAh, non-removable</li>
                </ul>
                <style>
                    .last_img{
                        width:100%;
                    }
                </style>
                <img class="last_img" src="https://b2b-pickaboocdn.azureedge.net/media/wysiwyg/Samsung-Galaxy-A12-Background-1-1.jpg" alt=""> --}}
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <!-- review-style -->
                <style>
                    .rhead{
                        font-weight:bold;
                        font-size:18px;
                    }
                    .befirst{
                        font-weight:bold;
                        font-size:18px;
                    }
                    .spanstarcolor {
                        color:red;
                    }
                </style>
                <div class="review">
                    <div class="rhead">Reviews</div>
                    <br>
                    <div class="rdetails">
                        There are no reviews yet.
                    </div>
                    <br>
                    <br>
                    <div class="befirst">
                        Be the first to review “Samsung Galaxy M02s 4GB/64GB”
                    </div>
                    <div class="befirst_sub">
                        Your email address will not be published. Required fields are marked <span class="spanstarcolor">*</span>
                    </div>
                    <br>
                    <div class="rating_main">
                        Your rating <span class="spanstarcolor">*</span>
                        <div class="rating">

                        <!-- RATING - Form -->
                        <form class="rating-form" action="#" method="post" name="rating-movie">
                        <fieldset class="form-group">
                            
                            <legend class="form-legend">Rating:</legend>
                            
                            <div class="form-item">
                            
                            <input id="rating-5" name="rating" type="radio" value="5" />
                            <label for="rating-5" data-value="5">
                                <span class="rating-star">
                                <i class="fa fa-star-o ifontsize"></i>
                                <i class="fa fa-star ifontsize"></i>
                                </span>
                            </label>
                            <input id="rating-4" name="rating" type="radio" value="4" />
                            <label for="rating-4" data-value="4">
                                <span class="rating-star">
                                <i class="fa fa-star-o ifontsize"></i>
                                <i class="fa fa-star ifontsize"></i>
                                </span>
                            </label>
                            <input id="rating-3" name="rating" type="radio" value="3" />
                            <label for="rating-3" data-value="3">
                                <span class="rating-star">
                                <i class="fa fa-star-o ifontsize"></i>
                                <i class="fa fa-star ifontsize"></i>
                                </span>
                            </label>
                            <input id="rating-2" name="rating" type="radio" value="2" />
                            <label for="rating-2" data-value="2">
                                <span class="rating-star">
                                <i class="fa fa-star-o ifontsize"></i>
                                <i class="fa fa-star ifontsize"></i>
                                </span>
                            </label>
                            <input id="rating-1" name="rating" type="radio" value="1" />
                            <label for="rating-1" data-value="1">
                                <span class="rating-star">
                                <i class="fa fa-star-o ifontsize"></i>
                                <i class="fa fa-star ifontsize"></i>
                                </span>
                            
                            </div>
                            
                        </fieldset>
                        </form>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col">
                            <div class="review_your">
                                <label for="exampleFormControlTextarea1">Your review <span class="spanstarcolor">*</span></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <style>
                        .review_submit{
                            height:45px;
                            width:152px;
                            border-radius:3px;
                            color:white;
                            font-weight:bold;
                            background:var(--orange);
                            display:flex;
                            justify-content:center;
                            align-items:center;
                            font-size:17px;
                            cursor:pointer;
                        }
                        .review_submit:hover{
                            background:var(--green);
                        }
                        .related_head{
                            font-size:25px;
                        }
                        .h1border {
                            border-bottom:1px solid black;
                        }
                    </style>
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <label for="name">Name <span class="spanstarcolor">*</span></label>
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="col">
                        <label for="name3">Email <span class="spanstarcolor">*</span></label>
                            <input type="email" id="name3" class="form-control">
                        </div>
                    </div><br>
                    <div class="form-check">
                        <input class="form-check-input  custom_checkbar" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Save my name, email, and website in this browser for the next time I comment.
                        </label>
                    </div>
                    <br>
                    <div class="review_submit">Submit</div>
                    <br>
                    <br>
                    <hr class="h1border">
                    <br>
                    <br>
                    <div class="related_head">Related products</div>
                    <br>
<!-- slider-start-from-here -->


    <div class="sell-slider">
        <!-- <div class="Shead">Best Sell</div> -->
        <div class="owl-carousel owl-theme owlcolor">
            <div class="one">
                <div class="icon_group">
                    <div class="heart"><i class="far fa-eye"></i></div>
                    <div class="eye"><i class="far fa-heart"></i></div>
                </div>
                <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figure><img src="{{asset('laraecomm/assets/images/samsung-galaxy-s21-5g-r.jpg')}}" alt=""></figure></a>
                <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figcaption>Samsung Galaxy S21 5G</figcaption></a>
                <div class="rating2">
                    <span class="spanrating2">(0)</span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                </div>
                <div class="taka">1,39,000 <span>&#2547;</span></div> 
                <div class="add_to_cart">Add to cart</div>
            </div>
            <div class="one">
                <div class="icon_group">
                    <div class="heart"><i class="far fa-eye"></i></div>
                    <div class="eye"><i class="far fa-heart"></i></div>
                </div>  
                <a href="{{route('product_details','vivo V21')}}"><figure><img src="{{asset('laraecomm/assets/images/vivo-v21-5g.jpg')}}" alt=""></figure></a> 
                <a href="{{route('product_details','vivo V21')}}"><figcaption>vivo V21</figcaption></a>
                <div class="rating2">
                    <span class="spanrating2">(0)</span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                </div>
                <div class="taka">30,000 <span>&#2547;</span></div>
                <div class="add_to_cart">Add to cart</div>
            </div>
            <div class="one">
                <div class="icon_group">
                    <div class="heart"><i class="far fa-eye"></i></div>
                    <div class="eye"><i class="far fa-heart"></i></div>
                </div>
                <a href="{{route('product_details','Xiaomi Redmi Note 10 Pro')}}"><figure><img src="{{asset('laraecomm/assets/images/xiaomi-redmi-note10-pro.jpg')}}" alt=""></figure></a> 
                <a href="{{route('product_details','Xiaomi Redmi Note 10 Pro')}}"><figcaption>Xiaomi Redmi Note 10 Pro</figcaption></a>
                <div class="rating2">
                    <span class="spanrating2">(0)</span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                </div>
                <div class="taka">18,000 <span>&#2547;</span></div>
                <div class="add_to_cart">Add to cart</div>
            </div>
            <div class="one"> 
                <div class="icon_group">
                    <div class="heart"><i class="far fa-eye"></i></div>
                    <div class="eye"><i class="far fa-heart"></i></div>
                </div>
                <a href="{{route('product_details','Apple iPhone 12 Pro Max')}}"><figure><img src="{{asset('laraecomm/assets/images/apple-iphone-12-pro-max-.jpg')}}" alt=""></figure></a> 
                <a href="{{route('product_details','Apple iPhone 12 Pro Max')}}"><figcaption>Apple iPhone 12 Pro Max</figcaption></a>
                <div class="rating2">
                    <span class="spanrating2">(0)</span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                </div>
                <div class="taka">1,80,000 <span>&#2547;</span></div>
                <div class="add_to_cart">Add to cart</div>
            </div>
            <div class="one">
                <div class="icon_group">
                    <div class="heart"><i class="far fa-eye"></i></div>
                    <div class="eye"><i class="far fa-heart"></i></div>
                </div>
                <a href="{{route('product_details','Oppo Reno6 Pro+ 5G')}}"><figure><img src="{{asset('laraecomm/assets/images/oppo-reno6-pro-plus.jpg')}}" alt=""></figure></a> 
                <a href="{{route('product_details','Oppo Reno6 Pro+ 5G')}}"><figcaption>Oppo Reno6 Pro+ 5G</figcaption></a>
                <div class="rating2">
                    <span class="spanrating2">(0)</span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                </div>
                <div class="taka">39,000 <span>&#2547;</span></div>
                <div class="add_to_cart">Add to cart</div>
            </div>
            <div class="one">
                <div class="icon_group">
                    <div class="heart"><i class="far fa-eye"></i></div>
                    <div class="eye"><i class="far fa-heart"></i></div>
                </div>
                <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figure><img src="{{asset('laraecomm/assets/images/samsung-galaxy-s21-5g-r.jpg')}}" alt=""></figure></a> 
                <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figcaption>Samsung Galaxy S21 5G</figcaption></a>
                <div class="rating2">
                    <span class="spanrating2">(0)</span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                </div>
                <div class="taka">1,39,000 <span>&#2547;</span></div>
                <div class="add_to_cart">Add to cart</div>
            </div>
            <div class="one">
                <div class="icon_group">
                    <div class="heart"><i class="far fa-eye"></i></div>
                    <div class="eye"><i class="far fa-heart"></i></div>
                </div>
                <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figure><img src="{{asset('laraecomm/assets/images/samsung-galaxy-s21-5g-r.jpg')}}" alt=""></figure></a> 
                <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figcaption>Samsung Galaxy S21 5G</figcaption></a>
                <div class="rating2">
                    <span class="spanrating2">(0)</span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                </div>
                <div class="taka">1,39,000 <span>&#2547;</span></div>
                <div class="add_to_cart">Add to cart</div>
            </div>
            <div class="one">
                <div class="icon_group">
                    <div class="heart"><i class="far fa-eye"></i></div>
                    <div class="eye"><i class="far fa-heart"></i></div>
                </div>
                <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figure><img src="{{asset('laraecomm/assets/images/samsung-galaxy-s21-5g-r.jpg')}}" alt=""></figure></a> 
                <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figcaption>Samsung Galaxy S21 5G</figcaption></a>
                <div class="rating2">
                    <span class="spanrating2">(0)</span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                </div>
                <div class="taka">1,39,000 <span>&#2547;</span></div>
                <div class="add_to_cart">Add to cart</div>
            </div>
            <div class="one">
                <div class="icon_group">
                    <div class="heart"><i class="far fa-eye"></i></div>
                    <div class="eye"><i class="far fa-heart"></i></div>
                </div>
                <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figure><img src="{{asset('laraecomm/assets/images/samsung-galaxy-s21-5g-r.jpg')}}" alt=""></figure></a> 
                <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figcaption>Samsung Galaxy S21 5G</figcaption></a>
                <div class="rating2">
                    <span class="spanrating2">(0)</span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                    <span class="far fa-star checked"></span>
                </div>
                <div class="taka">1,39,000 <span>&#2547;</span></div>
                <div class="add_to_cart">Add to cart</div>
            </div>
        </div>
        <!-- <div class="view_all"><span>View All &#x2192;</span></div> -->
    </div>



<!-- slider_end-of-related-product -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end-of-tab -->



<!-- bottom fixed bar -->
<style>
.visibility_hide{
    visibility:hidden;
}
.maritop {
    margin-top:-3px;
}
.dfontp {
    font-size:15px;
}
</style>
<div class="bottom_fixed_buy_cart visibility_hide">
    <a href="javascript:history.back()">
        <div class="bot_fix_one">
            <div class="home_fixed_ic">
                <i class="fas fa-caret-left maritop"></i>
                <div class="home_fixed_ic_t dfontp">Back</div>
            </div>
        </div>
    </a>
    <div class="bot_fix_two"><a href="{{route('cart')}}"><div class="ttext">Add to cart</div></a></div>
    <div class="title">
        <a href="{{route('checkout')}}"><div class="ttext">Buy Now</div></a>
    </div>
</div>

<script src="{{asset('laraecomm/alljs/productraw.js')}}"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('laraecomm/alljs/product.js')}}"></script>
{{-- <script src="{{asset('laraecomm/alljs/jquery.exzoom.js')}}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    const slug = window.location.pathname.substr(19);
    let totalShippingCost;
    let productShipping;
    let currentProduct;
    let loc ='';
    let shipchar = document.getElementById('shipping');
    async function calldetails() {
        let formdata = new FormData();
        formdata.append('slug',slug);
        await axios.post('/laraecomm/api/v1/singleproductbyslug',formdata).then(res=>{
            productShipping = res.data.shipping_charge;
            currentProduct = res.data;
        });

        axios.get('/laraecomm/api/V1/location').then( res=> {
            let location = res.data.data;
            loc = location;
            let all;
            for (let index = 0; index < location.length; index++) {
                const element = location[index];
                all += `
                <option value="${element.name}">${(parseInt(element.shippingcost)+ parseInt(productShipping))+'Taka'}</option>
                `;

            }
            document.getElementById('cust_selecting').innerHTML = all;
            
        });
    }
    
    calldetails();


    function amount( value ) {
        document.getElementById('shipping').innerHTML = '00 Taka';
    }
    let shipcost;
    amount();
    function setamount( name ) {
        let search = loc.findIndex((item)=>item.name == name);
        let getitem = loc[search].shippingcost;
        totalShippingCost = parseInt(getitem,10) + parseInt(productShipping,10);
        shipchar.innerText = (parseInt(getitem,10) + parseInt(productShipping,10))+' Taka';
        shipcost = (parseInt(getitem,10) + parseInt(productShipping,10))+' Taka';
    }

    

</script>
@endsection