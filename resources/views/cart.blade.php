@extends('welcome')


@section('content')
<link rel="stylesheet" href="{{asset('laraecomm/allcss/cart.css')}}">

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
            <table>
                <tr style="border-bottom:1px solid rgba(0,0,0,0.2);height:50px;">
                    <th colspan="2">Product</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
            </table>
            <table id="cartBoard">

                    <script>
                        function renderCart() {
                            let cartDetails = JSON.parse(localStorage.getItem('cart'));
                            // console.log(JSON.parse(cartDetails[0].pimage)[0]);
                            let totcart = '';
                            for (let cartDet = 0; cartDet < cartDetails.length; cartDet++) {
                                const element = cartDetails[cartDet];
                                const img = JSON.parse(element.pimage)[0];
                                let total1 = parseInt(element.quantity,10) * parseInt(element.price,10);
                                let formatValue1 = new Intl.NumberFormat('en-IN').format(total1);

                                totcart +=`
                                <tr style="border-bottom:1px solid rgba(0,0,0,0.2);height:100px;">
                                    <td style="width:60px;">
                                        <img class="cart_img" src="${'/laraecomm'+img}" alt="">
                                    </td>
                                    <td style="width:300px;">
                                        <div class="naming_p">
                                            ${element.name}
                                        </div>
                                        <div class="cart_t_p">
                                        ৳ ${element.price}
                                        </div>
                                    </td>
                                    <td  style="width:180px;">
                                        <div class="center">
                                            <div class="input-group total_pm">
                                                <span class="input-group-btn minuss">
                                                    <div type="button" id="${'btnn'+element.id}" class="btn-number" onclick="minus(${element.id})">
                                                        -
                                                    </div>
                                                </span>
                                                <input type="text" name="quant[2]" class="form-control input-number" value="${element.quantity}" min="1" max="${element.totalQuantity}">
                                                <span class="input-group-btn pluss">
                                                    <div id="${'btnn2'+element.id}" class="btn-number" onclick="plus(${element.id},${element.totalQuantity})">
                                                        +
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="totall">
                                        ৳ ${formatValue1}
                                        </div>
                                        <span class="icon_del" onclick="delCartItem(${element.id})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                        </span>
                                    </td>
                                </tr>
                                `;
                                
                            }
                            document.getElementById('cartBoard').innerHTML = totcart;
                        }
                        renderCart();
                        function delCartItem(id) {
                            let cartDetails = JSON.parse(localStorage.getItem('cart'));
                            let getIndex = cartDetails.findIndex(item=> item.id == id);
                            if (getIndex != -1) {
                                cartDetails.splice(getIndex,1);
                                console.log(cartDetails);
                                localStorage.setItem('cart',JSON.stringify(cartDetails));
                                document.getElementById('lblCartCount2').innerHTML = cartDetails.length;
                                renderCart();
                                totalcartvalue();
                                autocart();
                            }
                        }


                    </script>
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
                            </div>
                        </div>
                        <div class="r_ship_p">
                            <div class="s_t2">
                                Shipping
                            </div>
                            <div class="r_tak2">
                                <span>
                                    Flat rate: ৳ 99.00
                                </span> {{-- 
                                <div class="ship_o_w">
                                    Shipping options will be
                                </div>
                                <div class="u_d_c">
                                    updated during checkout.
                                </div> --}}

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

<script>
function totalcartvalue() {
    let totalcost = JSON.parse(localStorage.getItem('cart'));
    let total = 0;
    for (let index = 0; index < totalcost.length; index++) {
        const element = totalcost[index];
        let totalwithquan = parseInt(element.quantity) * parseInt(element.price);
        total += totalwithquan;
    }
    let formatValue = new Intl.NumberFormat('en-IN').format(total);
    document.getElementById('r_tak').innerHTML = '৳ '+formatValue;
}
totalcartvalue();
</script>


@endsection

