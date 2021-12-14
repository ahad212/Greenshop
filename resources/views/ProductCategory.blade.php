@extends('welcome')
@section('content')
<link rel="stylesheet" href="{{asset('laraecomm/allcss/nice-select.css')}}">
<link rel="stylesheet" href="{{asset('laraecomm/allcss/category.css')}}">
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



<div class="page_wrap">
    <div class="container">
        <div class="row">
            <div class="sidebar col-12 col-xl-3">
                <div class="sidebar_title">
                    Price
                </div>
                    <br/>
                    <div class="slider">
                        <div id="slider-range" onmouseup="getMaxMin()" class="slmargintop"></div>
                        <p>
                        <label for="amount">Price:
                        <input class="slider_input slinput" type="text" id="amount" readonly >
                        </label></p>
                    </div>
                    <div class="price_range"></div>
                <hr class="hrclass"/>
                <div class="categories">
                    <div class="ctitle">
                        Categories
                    </div>
                    <ul id="ullist">

                    </ul>
                </div>
                {{-- <hr class="hrclass"/>
                <div class="product_tag">
                    <div class="ctitle">
                        Product Tags
                    </div>
                    <ul>
                        <li>Aspirin <span> (0)</span></li>
                        <li>Bandages <span> (0)</span></li>
                        <li>Chamber <span> (0)</span></li>
                        <li>Clinic <span> (0)</span></li>
                        <li>Corona <span> (0)</span></li>
                        <li>Doctor <span> (0)</span></li>
                        <li>Ear piece <span> (0)</span></li>
                        <li>Medical <span> (0)</span></li>
                    </ul>
                </div> --}}
                <hr class="hrclass"/>
                <div class="product_color">
                    <div class="ctitle">
                        Product Color
                    </div>
                    <ul>
                        <li>Black <span> (0)</span></li>
                        <li>Blue <span> (0)</span></li>
                        <li>Green <span> (0)</span></li>
                        <li>Gray <span> (0)</span></li>
                        <li>Red <span> (0)</span></li>
                    </ul>
                </div>
                <hr class="hrclass"/>
                <div class="product_size">
                    <div class="ctitle">
                        Product Size
                    </div>
                    <ul>
                        <li>100ml <span> (0)</span></li>
                        <li>200ml <span> (0)</span></li>
                        <li>2XLarge <span> (0)</span></li>
                        <li>300mg <span> (0)</span></li>
                        <li>300ml <span> (0)</span></li>
                    </ul>
                </div>
            </div>
            <div class="main_page col-12 col-xl-9">

                <div class="for_inline">
                    {{-- <select id="mounth" class="select-hidden" >
                        <!-- <option value="hide">-- Month --</option> -->
                        <option value="january" rel="icon-temperature">Default sorting</option>
                        <option value="february">Sort by popularity</option>
                        <option value="march">Sort by average rating</option>
                        <option value="april">Sort by latest</option>
                        <option value="may">price low to high</option>
                        <option value="june">price high to low</option>
                    </select> --}}
                    <style>
                        .nice-select .option:hover, .nice-select .option.focus, .nice-select .option.selected.focus {
                            background-color: #b9b3b3;
                        }
                    </style>
                    <select name="" id="select" onchange="filter2(this)">
                        <option value="default-sorting">Default sorting</option>
                        {{-- <option value="">Sort by average rating</option> --}}
                        <option value="sort-by-letest">Sort by latest</option>
                        <option value="price-low-to-high">Price low to high</option>
                        <option value="price-high-to-low">Price high to low</option>
                    </select>
                    <div class="filter_button filcolor" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <img class="filter_img filcolor" src="{{asset('laraecomm/images/filter.png')}}" alt=""><span>Filter</span>
                    </div>
                    <div class="listgridbut">
                        <div class="btn-grid orange btndis1" id="btn_grid"><i class="fas fa-th"></i></div>
                        <div class="btn-list btndis" id="btn_list"><i class="fas fa-th-list"></i></div>
                    </div>
                    <div class="item_count filcolor">
                        Showing 6 results  from <strong><?php echo str_replace('_',' ',substr($_SERVER['REQUEST_URI'],27));?></strong>
                    </div>
                </div>
                <hr class="hrclassfullwidth">


                <!-- list and grid component -->


<div class="container grid-container cgc">
    <div class="row"  id="main_card">
        {{-- @foreach ($allProducts as $k => $products)
            <div class="col-6 col-md-6 col-lg-4">
                @php
                    $image = json_decode($products->pimage)[0];

                    //discount percentage calculation
                    $price = $products->price;
                    $dis_price = $products->discount_price;
                    $subtruct = $price - $dis_price;
                    $parcentage = ($subtruct*100)/$price;
                @endphp
                <div class="card">
                    <div class="one class_for_list">
                        <div class="product_image">
                        <a href="{{route('product_details',$products->slug)}}"><img class="p_img" src="{{asset('laraecomm/'.$image)}}" alt=""></a></div>
                        <div class="apart_for_list">
                            <a href="{{route('product_details',$products->slug)}}"><div class="product_title">{{$products->name}}</div></a>
                            @php
                            $countReview = 0;
                            $reviewArray = json_decode($products->review);
                            $ratingTotal = 0;
                            if ($reviewArray) {
                                for ($i=0; $i <count($reviewArray) ; $i++) { 
                                    // how many people review it
                                    $countReview += 1;
                                    //total review count from above people
                                    $ratingTotal += $reviewArray[$i]->ratingCount;
                                }
                            }
                            var_dump($reviewArray);
                            echo $countReview;
                            final review calculate avg
                            this condition for by zero division issue
                            if ($countReview == 0) {
                                $countingReview = round($ratingTotal / 1);
                            } else {
                                $countingReview = round($ratingTotal / $countReview);
                            }
                        @endphp
                        @if ($countingReview == 0)
                            <div class="rating">
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span>
                                <span class="spanrating">(0)</span>
                            </div>                      
                        @elseif ($countingReview == 1)
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span>
                                <span class="spanrating">(1)</span>
                            </div>
                        @elseif ($countingReview == 2)
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span>
                                <span class="spanrating">(2)</span>
                            </div>
                        @elseif ($countingReview == 3)
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span>
                                <span class="spanrating">(3)</span>
                            </div>
                        @elseif ($countingReview == 4)
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span class="far fa-star checked"></span>
                                <span class="spanrating">(4)</span>
                            </div>
                        @elseif ($countingReview == 5)
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span class="spanrating">(5)</span>
                            </div>
                        @endif
                        @if ($products->discount_price)
                            <div class="taka">৳ {{number_format($products->discount_price)}} </div>
                        @else
                            <div class="taka">৳ {{number_format(intval($products->price))}}</div>
                        @endif
                        @if ($products->discount_price)
                            <div class="mainprice" style="text-align:center;color:rgba(0,0,0,0.4)">
                                <del> ৳ {{number_format(intval($products->price))}}</del> 
                            </div>
                        @endif
                            
                        @if (!$products->discount_price)
                            <br>
                        @endif
                            <div class="list_all_text">
                                <div class="list_all_text_title">
                                    {{$products->name}}
                                </div>
                                <div class="list_all_text_description">
                                  
                                </div>
                            </div>
                            <div class="add_to_cart">Add to cart</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach --}}
        
        {{-- single product  --}}

        {{-- single product  --}}
    </div>
</div>

<!-- end list grid -->
            </div>
        </div>
    </div>
</div>



<!-- can-vas-sidebar-start -->

<div class="offcanvas offcanvas-start custom_byme" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-body">
        <!-- main-content-of-sidebar-start -->
        <div class="sidebar_title">
            Price
        </div>
            <br/>
        <div class="slider">
            <div id="slider-range2" class="slmargintop"></div>
            <p>
            <label for="amount2">Price:
            <input  class="slider_input slinput" type="text" id="amount2" readonly >
            </label></p>
        </div>
        <div class="price_range"></div>
        <hr class="hrclass"/>
        <div class="categories">
            <div class="ctitle">
                Categories
            </div>
            <ul>
                <li>iPhone <span> (0)</span></li>
                <li>Oppo <span> (0)</span></li>
                <li>Samsung <span> (0)</span></li>
                <li>Vivo <span> (0)</span></li>
                <li>Xiaomi (MI) <span> (0)</span></li>
            </ul>
        </div>
        {{-- <hr class="hrclass"/>
        <div class="product_tag">
            <div class="ctitle">
                Product Tags
            </div>
            <ul>
                <li>Aspirin <span> (0)</span></li>
                <li>Bandages <span> (0)</span></li>
                <li>Chamber <span> (0)</span></li>
                <li>Clinic <span> (0)</span></li>
                <li>Corona <span> (0)</span></li>
                <li>Doctor <span> (0)</span></li>
                <li>Ear piece <span> (0)</span></li>
                <li>Medical <span> (0)</span></li>
            </ul>
        </div> --}}
        <hr class="hrclass"/>
        <div class="product_color">
            <div class="ctitle">
                Product Color
            </div>
            <ul>
                <li>Black <span> (0)</span></li>
                <li>Blue <span> (0)</span></li>
                <li>Green <span> (0)</span></li>
                <li>Gray <span> (0)</span></li>
                <li>Red <span> (0)</span></li>
            </ul>
        </div>
        <hr class="hrclass"/>
        <div class="product_size">
            <div class="ctitle">
                Product Size
            </div>
            <ul>
                <li>100ml <span> (0)</span></li>
                <li>200ml <span> (0)</span></li>
                <li>2XLarge <span> (0)</span></li>
                <li>300mg <span> (0)</span></li>
                <li>300ml <span> (0)</span></li>
            </ul>
        </div>
  </div>
</div>





<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{asset('laraecomm/alljs/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('laraecomm/alljs/category.js')}}"></script>

<style>
    .card{
        width:100%;
        min-height:150px;
        border:1px solid #d4d2d2;
    }
    .card img{
        height:120px;
        display: block;
        margin: 10px auto;
        cursor: pointer;
    }
    .imageDiv{
        max-height:150px;
    }
    .cardDetails{
        height: 40%;
    }
    .cardDetails a {
        text-align: center;
        display: block;
        font-size:88%;
        font-weight: 600;
        cursor: pointer;
    }
    .cardDetails a:hover{
        color:var(--orange);
    }
    .discount{
        text-align: center;
        opacity: 0.5;
    }
</style>
@endsection