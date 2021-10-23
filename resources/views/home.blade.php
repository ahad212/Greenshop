@extends('welcome')
@section('content')
<link rel="stylesheet" href="{{asset('laraecomm/allcss/home.css')}}">

<div class="con_cover_extend">
<div class="sidebar_all">
    <div class="left_bar">
        <div class="menupartLeft">
            <ul>
                <a href="javascript:void(0)"><li><i  class="fas fa-mobile-alt category_icon3"></i>Mobile</li></a>
                <a href="javascript:void(0)"><li><i  class="fas fa-headphones-alt category_icon"></i> Mobile Accessories</li></a>
                <a href="javascript:void(0)"><li><i  class="fas fa-laptop category_icon2"></i> Laptop</li></a>
                <a href="javascript:void(0)"><li><i  class="fas fa-mouse category_icon"></i> Laptop Accessories</li></a>
                <a href="javascript:void(0)"><li><i  class="far fa-lightbulb category_icon"></i> Electronic</li></a>
                <a href="javascript:void(0)"><li><i  class="fab fa-uncharted category_icon"></i> Software</li></a>
                <a href="javascript:void(0)"><li><i  class="fas fa-shield-virus category_icon2"></i> Antivirus</li></a>
            </ul>
        </div>
    </div>
    <div class="slide">
        <div class="slider">
            <div uk-slideshow="max-height:283;ratio: 16:5; autoplay: true;animation: fade">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                    <ul class="uk-slideshow-items">
                        <li>
                            <img src="https://greenshopbd.com/wp-content/uploads/2021/07/2021-04-12_214327-1.jpg" alt="" uk-cover>
                        </li>
                        <li>
                            <img src="https://greenshopbd.com/wp-content/uploads/2021/07/c-1.jpg" alt="" uk-cover>
                        </li>
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                </div>
                <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>
        </div>
    </div>
</div>



    <h1 class="h1topcategory">Top Category</h1>
    <div class="categoryab">

        <div class="cat_item_con_res">
            <!-- <div class="container"> -->
                <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-6">
                    <div class="col"><a href="{{route('categoryclient','Mobile')}}">
                        <div class="box">
                            <img class="boxinnerimg"  src="{{asset('laraecomm/assets/images/mobile.png')}}" alt="">
                        </div>
                        <div class="tag">Mobile</div></a>
                    </div>
                    <div class="col"><a href="{{route('categoryclient','Mobile_Accessories')}}">
                        <div class="box">
                        <img class="boxinnerimg"  src="{{asset('laraecomm/assets/images/22839-removebg-preview.png')}}" alt="">
                        </div>
                        <div class="tag">Mobile Accessories</div></a>
                    </div>
                    <div class="col">
                        <div class="box"><a href="{{route('categoryclient','Laptop')}}">
                        <img class="boxinnerimg"  src="{{asset('laraecomm/assets/images/laptop.png')}}" alt="">
                        </div>
                        <div class="tag">Laptop</div></a>
                    </div>
                    <div class="col">
                        <div class="box"><a href="{{route('categoryclient','Laptop_Accessories')}}">
                        <img class="boxinnerimg"  src="{{asset('laraecomm/assets/images/laptop_a.png')}}" alt="">
                        </div>
                        <div class="tag">Laptop Accessories</div></a>
                    </div>
                    <div class="col">
                        <div class="box"><a href="{{route('categoryclient','Electronic')}}">
                        <img class="boxinnerimg"  src="{{asset('laraecomm/assets/images/electronic.png')}}" alt="">
                        </div>
                        <div class="tag">Electronic</div></a>
                    </div>
                    <div class="col">
                        <div class="box"><a href="{{route('categoryclient','Antivirus')}}">
                        <img class="boxinnerimg"  src="{{asset('laraecomm/assets/images/software_a.png')}}" alt="">
                        </div>
                        <div class="tag">Antivirus</div></a>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </div>


    <div class="special_offer">
        <div class="row">
            <h1 class="h1special">Special Offer</h1>
            <div class="special_main_part">
                <div class="wrapper_counter timer_counter">
                    <div class="endlint_text" >Ending Offers </div>
                    <div class="countDownPart">
                        <div class="uk-grid-small uk-child-width-auto uk-margin" uk-grid uk-countdown="date: 2021-09-15T16:51:03+00:00">
                            <div>
                                <div class="uk-countdown-number uk-countdown-days"></div>
                                <div class="d">Day</div>
                            </div>
                            <div>
                                <div class="uk-countdown-number uk-countdown-hours"></div>
                                <div class="d">Hour</div>
                            </div>
                            <div>
                                <div class="uk-countdown-number uk-countdown-minutes"></div>
                                <div class="d">Min</div>
                            </div>
                            <div>
                                <div class="uk-countdown-number uk-countdown-seconds"></div>
                                <div class="d">Sec</div>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="best_sell6">
                    <div class="sell-sliderBrand">
                        <div class="owl-carousel owl-theme" id="owl-carousel2">
                            <div class="one">
                                <div class="fire">
                                    <img src="https://t3.ftcdn.net/jpg/02/84/46/60/360_F_284466038_lOHcM8pRGyigojkyV2M9CSQpimCTcqeD.jpg" alt="">
                                </div>
                                <div class="off">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrCWJLuEXcCU4I6sEagFGgoIwYyETv6hP36w&usqp=CAU" alt="">
                                </div>
                                <a href="{{route('categoryclient','brands')}}"><figure><img src="{{asset('laraecomm/assets/images/samsung-galaxy-s21-5g-r.jpg')}}" alt=""></figure></a>
                                <div class="fig_title_countdouen">Samsung Galaxy S21 5G</div>
                                <div class="new_price">&#2547; 1,11,000</div>
                                <div class="old_price"><del>&#2547; 1,39,000</del></div>
                            </div>
                            <div class="one">
                                <div class="fire">
                                    <img src="https://t3.ftcdn.net/jpg/02/84/46/60/360_F_284466038_lOHcM8pRGyigojkyV2M9CSQpimCTcqeD.jpg" alt="">
                                </div>
                                <div class="off">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrCWJLuEXcCU4I6sEagFGgoIwYyETv6hP36w&usqp=CAU" alt="">
                                </div>
                                <a href="{{route('categoryclient','brands')}}"><figure><img src="{{asset('laraecomm/assets/images/xiaomi-redmi-note10-pro.jpg')}}" alt=""></figure></a> 
                                <div class="fig_title_countdouen">Samsung Galaxy S21 5G</div>
                                <div class="new_price">&#2547; 1,11,000</div>
                                <div class="old_price"><del>&#2547; 1,39,000</del></div>
                            </div>
                            <div class="one">
                                <div class="fire">
                                    <img src="https://t3.ftcdn.net/jpg/02/84/46/60/360_F_284466038_lOHcM8pRGyigojkyV2M9CSQpimCTcqeD.jpg" alt="">
                                </div>
                                <div class="off">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrCWJLuEXcCU4I6sEagFGgoIwYyETv6hP36w&usqp=CAU" alt="">
                                </div>
                                <a href="{{route('categoryclient','brands')}}"><figure><img src="{{asset('laraecomm/assets/images/samsung-galaxy-s21-5g-r.jpg')}}" alt=""></figure></a>
                                <div class="fig_title_countdouen">Samsung Galaxy S21 5G</div>
                                <div class="new_price">&#2547; 1,11,000</div>
                                <div class="old_price"><del>&#2547; 1,39,000</del></div>
                            </div>
                            <div class="one">
                                <div class="fire">
                                    <img src="https://t3.ftcdn.net/jpg/02/84/46/60/360_F_284466038_lOHcM8pRGyigojkyV2M9CSQpimCTcqeD.jpg" alt="">
                                </div>
                                <div class="off">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrCWJLuEXcCU4I6sEagFGgoIwYyETv6hP36w&usqp=CAU" alt="">
                                </div>
                                <a href="{{route('categoryclient','brands')}}"><figure><img src="{{asset('laraecomm/assets/images/xiaomi-redmi-note10-pro.jpg')}}" alt=""></figure></a>
                                <div class="fig_title_countdouen">Samsung Galaxy S21 5G</div>
                                <div class="new_price">&#2547; 1,11,000</div>
                                <div class="old_price"><del>&#2547; 1,39,000</del></div>
                            </div>
                            <div class="one">
                                <div class="fire">
                                    <img src="https://t3.ftcdn.net/jpg/02/84/46/60/360_F_284466038_lOHcM8pRGyigojkyV2M9CSQpimCTcqeD.jpg" alt="">
                                </div>
                                <div class="off">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrCWJLuEXcCU4I6sEagFGgoIwYyETv6hP36w&usqp=CAU" alt="">
                                </div>
                                <a href="{{route('categoryclient','brands')}}"><figure><img src="{{asset('laraecomm/assets/images/samsung-galaxy-s21-5g-r.jpg')}}" alt=""></figure></a>
                                <div class="fig_title_countdouen">Samsung Galaxy S21 5G</div>
                                <div class="new_price">&#2547; 1,11,000</div>
                                <div class="old_price"><del>&#2547; 1,39,000</del></div>
                            </div>
                            <div class="one">
                                <div class="fire">
                                    <img src="https://t3.ftcdn.net/jpg/02/84/46/60/360_F_284466038_lOHcM8pRGyigojkyV2M9CSQpimCTcqeD.jpg" alt="">
                                </div>
                                <div class="off">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrCWJLuEXcCU4I6sEagFGgoIwYyETv6hP36w&usqp=CAU" alt="">
                                </div>
                                <a href="{{route('categoryclient','brands')}}"><figure><img src="{{asset('laraecomm/assets/images/xiaomi-redmi-note10-pro.jpg')}}" alt=""></figure></a>
                                <div class="fig_title_countdouen">Samsung Galaxy S21 5G</div>
                                <div class="new_price">&#2547; 1,11,000</div>
                                <div class="old_price"><del>&#2547; 1,39,000</del></div>
                            </div>
                        </div>
                        {{-- <!-- <a href="{{route('category','brands')}}"><div class="view_all"><span>View All</span></div></a> --> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="banner-img">
        <!-- <div class="container" style="max-width:100%;margin:auto;"> -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                <div class="col"><img class="banner_img_1" src="https://greenshopbd.com/wp-content/uploads/2021/07/2021-04-29_134003.jpg" alt=""></div>
                <div class="col"><img src="https://greenshopbd.com/wp-content/uploads/2021/07/2021-04-29_133906.jpg" alt=""></div>
            </div>
        <!-- </div> -->
    </div>


<!-- 
    <div class="" id="containerss"> -->
<h1 class="h1bestsell">Best Sell</h1>
<div class="best_sell">
    <div class="sell_left">
        <div class="menupartBest">
            <ul>
            <a href="javascript:void(0)"><li><i  class="fas fa-mobile-alt category_icon3"></i>Mobile</li></a>
            <a href="javascript:void(0)"><li><i  class="fas fa-headphones-alt category_icon"></i> Mobile Accessories</li></a>
            <a href="javascript:void(0)"><li><i  class="fas fa-laptop category_icon2"></i> Laptop</li></a>
            <a href="javascript:void(0)"><li><i  class="fas fa-mouse category_icon"></i> Laptop Accessories</li></a>
            <a href="javascript:void(0)"><li><i  class="far fa-lightbulb category_icon"></i> Electronic</li></a>
            <a href="javascript:void(0)"><li><i  class="fab fa-uncharted category_icon"></i> Software</li></a>
            <a href="javascript:void(0)"><li><i  class="fas fa-shield-virus category_icon2"></i> Antivirus</li></a>
            </ul>
        </div>
    </div>
    

    <div class="sell-slider">
        <div class="owl-carousel owl-theme">
            @foreach ($featuredProducts as $k => $products)
            @php
            $image = json_decode($products->pimage)[0];
            @endphp
                <div class="one">
                    @if (!$products->quantity)
                        <div class="sold_out">Out Of Stock</div>
                    @endif
                    <div class="icon_group">
                        <div class="heart"><i class="far fa-eye"></i></div>
                        <div class="eye"><i class="far fa-heart"></i></div>
                    </div>
                    <a href="{{route('product_details', $products->slug)}}"><figure><img src="{{asset('laraecomm'.$image)}}" alt=""></figure></a> 
                    <a href="{{route('product_details', $products->slug)}}"><figcaption>{{$products->name}}</figcaption></a>
                    <div class="rating">
                        <span class="spanrating">(0)</span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                    </div>
                    <div class="taka">{{$products->price}} <span>&#2547;</span></div>
                    <div class="add_to_cart">Add to cart</div>
                </div>
            @endforeach
        </div>
        @php
            if ($k < 4) {
                echo '<br>';
                echo '<br>';
            }
        @endphp
        <a href="{{route('categoryclient','Bestsell')}}"><div class="view_all"><span>View All</span></div></a>
    </div>
</div>

    <!-- endd slider -->
    <div class="banner-breaker">
        <!-- <div class="container"> -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                <div class="col"><img class="banner1img" src="https://greenshopbd.com/wp-content/uploads/2020/07/banner-home-03-1.png" alt=""></div>
                <div class="col"><img src="https://greenshopbd.com/wp-content/uploads/2020/07/banner-home-04-1.png" alt=""></div>
            </div>
        <!-- </div> -->
    </div>



<h1 class="h1mobile">Mobile</h1>
<div class="best_sell2">
    <div class="sell_left2">
        <div class="menupartBest2">
            <ul>
                <a href="javascript:void(0)"><li><i  class="fas fa-mobile-alt category_icon3"></i>Mobile</li></a>
                <a href="javascript:void(0)"><li><i  class="fas fa-headphones-alt category_icon"></i> Mobile Accessories</li></a>
                <a href="javascript:void(0)"><li><i  class="fas fa-laptop category_icon2"></i> Laptop</li></a>
                <a href="javascript:void(0)"><li><i  class="fas fa-mouse category_icon"></i> Laptop Accessories</li></a>
                <a href="javascript:void(0)"><li><i  class="far fa-lightbulb category_icon"></i> Electronic</li></a>
                <a href="javascript:void(0)"><li><i  class="fab fa-uncharted category_icon"></i> Software</li></a>
                <a href="javascript:void(0)"><li><i  class="fas fa-shield-virus category_icon2"></i> Antivirus</li></a>
            </ul>
        </div>
    </div>

    <div class="sell-slider">
        <div class="owl-carousel owl-theme">
            @foreach ($allProducts as $k => $products)
            @php
            $image = json_decode($products->pimage)[0];
            @endphp
                <div class="one">
                    @if (!$products->quantity)
                        <div class="sold_out">Out Of Stock</div>
                    @endif
                    <div class="icon_group">
                        <div class="heart"><i class="far fa-eye"></i></div>
                        <div class="eye"><i class="far fa-heart"></i></div>
                    </div>
                    <a href="{{route('product_details', $products->slug)}}"><figure><img src="{{asset('laraecomm'.$image)}}" alt=""></figure></a>
                    <a href="{{route('product_details', $products->slug)}}"><figcaption>{{$products->name}}</figcaption></a>
                    <div class="rating">
                        <span class="spanrating">(0)</span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                    </div>
                    <div class="taka">{{$products->price}} <span>&#2547;</span></div>
                    <div class="add_to_cart">Add to cart</div>
                </div>
            @endforeach
        </div>
        @php
            if ($k < 4) {
                echo '<br>';
                echo '<br>';
            }
        @endphp
        <a href="{{route('categoryclient','mobile')}}"><div class="view_all"><span>View All</span></div></a>
    </div>
</div>



<h1 class="h1laptop">Laptop</h1>
<div class="best_sell3">
    <div class="sell_left3">
        <div class="menupartBest3">
            <ul>
                <a href="javascript:void(0)"><li><i  class="fas fa-mobile-alt category_icon3"></i>Mobile</li></a>
                <a href="javascript:void(0)"><li><i  class="fas fa-headphones-alt category_icon"></i> Mobile Accessories</li></a>
                <a href="javascript:void(0)"><li><i  class="fas fa-laptop category_icon2"></i> Laptop</li></a>
                <a href="javascript:void(0)"><li><i  class="fas fa-mouse category_icon"></i> Laptop Accessories</li></a>
                <a href="javascript:void(0)"><li><i  class="far fa-lightbulb category_icon"></i> Electronic</li></a>
                <a href="javascript:void(0)"><li><i  class="fab fa-uncharted category_icon"></i> Software</li></a>
                <a href="javascript:void(0)"><li><i  class="fas fa-shield-virus category_icon2"></i> Antivirus</li></a>
            </ul>
        </div>
    </div>

    <div class="sell-slider">
        <div class="owl-carousel owl-theme">
            @foreach ($allProducts as $k => $products)
            @php
            $image = json_decode($products->pimage)[0];
            @endphp
                <div class="one">
                    @if (!$products->quantity)
                        <div class="sold_out">Out Of Stock</div>
                    @endif
                    <div class="icon_group">
                        <div class="heart"><i class="far fa-eye"></i></div>
                        <div class="eye"><i class="far fa-heart"></i></div>
                    </div>
                    <a href="{{route('product_details', $products->slug)}}"><figure><img src="{{asset('laraecomm'.$image)}}" alt=""></figure></a>
                    <a href="{{route('product_details', $products->slug)}}"><figcaption>{{$products->name}}</figcaption></a>
                    <div class="rating">
                        <span class="spanrating">(0)</span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                    </div>
                    <div class="taka">{{$products->price}} <span>&#2547;</span></div>
                    <div class="add_to_cart">Add to cart</div>
                </div>
            @endforeach
        </div>
        @php
            if ($k < 4) {
                echo '<br>';
                echo '<br>';
            }
        @endphp
        <a href="{{route('categoryclient','mobile')}}"><div class="view_all"><span>View All</span></div></a>
    </div>
</div>






<h1 class="h1electro">Electronics</h1>
<div class="best_sell4">
    <div class="sell_left4">
        <div class="menupartBest">
            <ul>
                <a href="javascript:void(0)"><li><i  class="fas fa-mobile-alt category_icon3"></i>Mobile</li></a>
                <a href="javascript:void(0)"><li><i  class="fas fa-headphones-alt category_icon"></i> Mobile Accessories</li></a>
                <a href="javascript:void(0)"><li><i  class="fas fa-laptop category_icon2"></i> Laptop</li></a>
                <a href="javascript:void(0)"><li><i  class="fas fa-mouse category_icon"></i> Laptop Accessories</li></a>
                <a href="javascript:void(0)"><li><i  class="far fa-lightbulb category_icon"></i> Electronic</li></a>
                <a href="javascript:void(0)"><li><i  class="fab fa-uncharted category_icon"></i> Software</li></a>
                <a href="javascript:void(0)"><li><i  class="fas fa-shield-virus category_icon2"></i> Antivirus</li></a>
            </ul>
        </div>
    </div>

    <div class="sell-slider">
        <div class="owl-carousel owl-theme">
            @foreach ($allProducts as $k => $products)
            @php
            $image = json_decode($products->pimage)[0];
            @endphp
                <div class="one">
                    @if (!$products->quantity)
                        <div class="sold_out">Out Of Stock</div>
                    @endif
                    <div class="icon_group">
                        <div class="heart"><i class="far fa-eye"></i></div>
                        <div class="eye"><i class="far fa-heart"></i></div>
                    </div>
                    <a href="{{route('product_details', $products->slug)}}"><figure><img src="{{asset('laraecomm'.$image)}}" alt=""></figure></a>
                    <a href="{{route('product_details', $products->slug)}}"><figcaption>{{$products->name}}</figcaption></a>
                    <div class="rating">
                        <span class="spanrating">(0)</span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                    </div>
                    <div class="taka">{{$products->price}} <span>&#2547;</span></div>
                    <div class="add_to_cart">Add to cart</div>
                </div>
            @endforeach
        </div>
        @php
            if ($k < 4) {
                echo '<br>';
                echo '<br>';
            }
        @endphp
        <a href="{{route('categoryclient','mobile')}}"><div class="view_all"><span>View All</span></div></a>
    </div>
</div>



<h1 class="h1shop">Shop By Brands</h1>
<div class="best_sell5">
    <!-- <div class="sell_left5">
        <div class="menupartBest">
            <ul>
            <a href="javascript:void(0)"><li>Mobile</li></a>
            <a href="javascript:void(0)"><li>Mobile Accessories</li></a>
            <a href="javascript:void(0)"><li>Laptop</li></a>
            <a href="javascript:void(0)"><li>Laptop Accessories</li></a>
            <a href="javascript:void(0)"><li>Electronic</li></a>
            <a href="javascript:void(0)"><li>Software</li></a>
            <a href="javascript:void(0)"><li>Antivirus</li></a>
            </ul>
        </div>
    </div> -->

    <div class="sell-sliderBrand">
        <div class="owl-carousel owl-theme" id="owl-carousel">
            <div class="one">
                <a href="{{route('categoryclient','brands')}}"><figure><img src="https://upload.wikimedia.org/wikipedia/commons/a/ae/Xiaomi_logo_%282021-%29.svg" alt=""></figure></a>
            </div>
            <div class="one">
                <a href="{{route('categoryclient','brands')}}"><figure><img src="https://upload.wikimedia.org/wikipedia/bn/b/b5/%E0%A6%B9%E0%A7%81%E0%A6%AF%E0%A6%BC%E0%A6%BE%E0%A6%AF%E0%A6%BC%E0%A7%87%E0%A6%87_%E0%A6%B2%E0%A7%8B%E0%A6%97%E0%A7%8B.png" alt=""></figure></a> 
            </div>
            <div class="one">
                <a href="{{route('categoryclient','brands')}}"><figure><img src="https://upload.wikimedia.org/wikipedia/commons/a/ae/Xiaomi_logo_%282021-%29.svg" alt=""></figure></a>
            </div>
            <div class="one"> 
                <a href="{{route('categoryclient','brands')}}"><figure><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/800px-Apple_logo_black.svg.png" alt=""></figure></a>
            </div>
            <div class="one">
                <a href="{{route('categoryclient','brands')}}"><figure><img src="https://upload.wikimedia.org/wikipedia/commons/a/ae/Xiaomi_logo_%282021-%29.svg" alt=""></figure></a>
            </div>
            <div class="one">
                <a href="{{route('categoryclient','brands')}}"><figure><img src="https://upload.wikimedia.org/wikipedia/bn/b/b5/%E0%A6%B9%E0%A7%81%E0%A6%AF%E0%A6%BC%E0%A6%BE%E0%A6%AF%E0%A6%BC%E0%A7%87%E0%A6%87_%E0%A6%B2%E0%A7%8B%E0%A6%97%E0%A7%8B.png" alt=""></figure></a>
            </div>
        </div>
        <!-- <a href="{{route('categoryclient','brands')}}"><div class="view_all"><span>View All</span></div></a> -->
    </div>
</div>

<!-- last 2 div of page wrapper -->
</div>
<!-- 
</div> -->
<script>
    // window.onload = function(){
    //     var width = window.innerWidth;
    //     console.log(width);
    //      var ff = document.getElementById('containerss');
    //     if(width <= 800){
    //         ff.classList.add('container');
    //     }
    //     else{

    //         ff.classList.remove('container');
    //     }
    //     if(width <= 414)
    //     {
    //         var figcap = document.getElementsByTagName('figcaption');
    //         for(var i=0;i<figcap.length;i++){
    //             var cutingf = figcap[i].innerText;
    //             var pstr = '..'+cutingf.substr(0,10);
    //             figcap[i].innerHTML = pstr;
    //             console.log(pstr);
    //         }
    //     }
    //     else{
    //         console.log('no');
    //     }
    // }
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{asset('laraecomm/alljs/home.js')}}"></script>


@endsection