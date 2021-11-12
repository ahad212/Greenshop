@extends('welcome')


@section('content')
<link rel="stylesheet" href="{{asset('laraecomm/allcss/cart.css')}}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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



<div class="container">
    <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
        <div class="col col-lg-8">
            <div class="cart_heading">Cart</div>
            <br>
            <br>
            <div class="selectobx">
                <div class="selecItm">
                    <label for="checking" style="cursor: pointer">
                        <span  id="labelId2">
                            {{-- input fied auto injected from js file --}}
                        </span>
                        <span id="lebelId"> SELECT ALL (0 ITEM(S))</span>
                    </label>
                </div>
            </div>
            <style>
                .fiTable tr th:nth-child(1){
                    width:515px;
                }
                .fiTable tr th:nth-child(2){
                    width:170px;
                }
            </style>
            <table class="fiTable">
                <tr style="border-bottom:1px solid rgba(0,0,0,0.2);height:50px;">
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
                {{-- <tr>
                    <th colspan="3">select</th>
                    <th>d</th>
                </tr> --}}
            </table>
            <table id="cartBoard">
                {{-- all details will be auto injected --}}
            </table>
            <br>
            <br>
            <a href="{{route('home')}}">
                <div class="continue_shop">
                    &#8592;<span> Continue shoping</span>
                </div>
                <br>
                <br>
                <br>
                <br>
            </a>
            <div class="update_cart">
            <i class="fas fa-redo-alt"></i> <span> Update cart</span>
            </div>
        </div>
        <div class="col col-lg-4">

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
                            <div class="r_tak" id="r_tak">
                                ৳ 00
                            </div>
                        </div>
                        <div class="r_ship_p">
                            <div class="s_t2">
                                Shipping Area
                            </div>
                            <div class="r_tak2">
                                <span>
                                    <select onchange="takeValue(this)" class="js-example-basic-single" name="state" id="sss">
                                        <option value="">Add Any First</option>
                                    </select>
                                </span> {{-- 
                                <div class="ship_o_w">
                                    Shipping options will be
                                </div>
                                <div class="u_d_c">
                                    updated during checkout.
                                </div> --}}

                            </div>
                        </div>
                        <div class="r_ship_p">
                            <div class="s_t2">
                                Shipping Cost
                            </div>
                            <div class="r_tak2">
                                <span style="color:var(--orange);font-size: 13px;" id="shipCharge">
                                    ৳ 00
                                </span>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="conver_shop_car">
                        <div class="cal_shipping" id="cal_shipping">
                            Calculate Shipping
                            <span>
                            <i class="fas fa-truck"></i>
                            </span>
                        </div>
                    </div> --}}

                    
                    <div class="cal_modal_toggle" id="cal_modal_toggle">
                        {{-- <div id="datalist">
                            <input id="datalist-input" type="text" placeholder="Selcet Country">
                            <i id="datalist-icon" class="icon iconfont icon-arrow"></i>
                            <ul id="datalist-ul"></ul>
                        </div> --}}

                        <!-- second data-list -->
                        {{-- <div id="datalist1">
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
                        <div class="update_butd" onclick="sendShippingData()">Update</div> --}}
                    </div>
                    <hr style="border-bottom:1px solid black;">
                    <div class="total_ship_amount">
                        <div class="t_head_t">
                            Total
                        </div>
                        <div class="t_head_taka" id="t_head_taka">
                            ৳ 00
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
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('laraecomm/alljs/cart.js')}}"></script>


@endsection

