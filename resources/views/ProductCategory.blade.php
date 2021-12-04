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
            <div class="main_page col-12 col-xl-9">

                <div class="for_inline">
                    <select id="mounth" class="select-hidden">
                        <!-- <option value="hide">-- Month --</option> -->
                        <option value="january" rel="icon-temperature">Default sorting</option>
                        <option value="february">Sort by popularity</option>
                        <option value="march">Sort by average rating</option>
                        <option value="april">Sort by latest</option>
                        <option value="may">price low to high</option>
                        <option value="june">price high to low</option>
                    </select>
                    {{-- <select name="" id="select">
                        <option value="">a</option>
                        <option value="">b</option>
                        <option value="">c</option>
                        <option value="">e</option>
                    </select> --}}
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



<script>
    // window.onload = function(){
    //     var width = window.innerWidth;
    //     // console.log(width);
    //     //  var ff = document.getElementById('containerss');
    //     // if(width <= 800){
    //     //     ff.classList.add('container');
    //     // }
    //     // else{

    //     //     ff.classList.remove('container');
    //     // }
    //     if(width <= 414)
    //     {
    //         var figcap = document.getElementsByClassName('product_title');
    //         for(var i=0;i<figcap.length;i++){
    //             var cutingf = figcap[i].innerText;
    //             var pstr = cutingf.substr(0,10)+'..';
    //             figcap[i].innerHTML = pstr;
    //             // console.log(pstr);
    //         }
    //     }
    //     else{
    //         // console.log('no');
    //     }
    // }
    // let btnList = document.getElementById('btn_list');
    // btnList.addEventListener('click',function(){
    //     var figcap2 = document.getElementsByClassName('product_title');
    //         for(var i=0;i<figcap2.length;i++){
    //             var cutingf2 = figcap2[i].innerText;
    //             var pstr2 = cutingf2.substr(0);
    //             figcap2[i].innerHTML = pstr;
    //             // console.log(pstr);
    //         }  
    // });

</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
<script>
    $('#select').niceSelect();



    $( function() {
        $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 200000,
        values: [ 0, 200000 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "৳" + ui.values[ 0 ] + " - ৳" + ui.values[ 1 ] );
            // show(ui.values[ 0 ],ui.values[ 1 ]);
        }
        });
        $( "#amount" ).val( "৳" + $( "#slider-range" ).slider( "values", 0 ) +
        " - ৳" + $( "#slider-range" ).slider( "values", 1 ) );
    });

    function show(min,max) {
        let formData = new FormData();
        formData.append('min',min);
        formData.append('max',max);
        axios.post('/laraecomm/api/product/filter',formData).then(res=>{
            console.log(res.data);
            let allp = '';
            for (let index = 0; index < res.data.length; index++) {
                const element = res.data[index];
                const imageFirst = JSON.parse(element.pimage);
                let reviewArray = JSON.parse(element.review);
                let reviewPerson = 0;
                let reviewPointTotal = 0;
                let unCheckedReview = 5;
                let AVG_REVIEW = 0;
                if (reviewArray) {
                    reviewPerson = reviewArray.length;
                    for (let i = 0; i < reviewArray.length; i++) {
                        const element = reviewArray[i];
                        reviewPointTotal += parseInt(element.ratingCount,10);
                    }
                    AVG_REVIEW = Math.round(reviewPointTotal/reviewPerson);
                    unCheckedReview = unCheckedReview - AVG_REVIEW;
                    console.log(reviewPointTotal);
                    console.log(reviewPerson);
                    console.log(AVG_REVIEW);
                    console.log(unCheckedReview);
                }
                allp +=`
                <div class="col-6 col-md-6 col-lg-3" id="colChange">
                    <div class="card">
                        <div class="imageDiv">
                            <a href="/laraecomm/Product/${element.slug}"><img src="${'/laraecomm'+imageFirst[0]}" alt=""></a>
                        </div>
                        <div class="cardDetails">
                            <a class="name" href="/laraecomm/Product/${element.slug}">${element.name}</a>
                            <div class="rating">
                                ${(AVG_REVIEW == 0 )? '<span class="far fa-star checked"></span><span class="far fa-star checked"></span><span class="far fa-star checked"></span><span class="far fa-star checked"></span><span class="far fa-star checked"></span><span class="spanrating">('+reviewPerson+')</span>':''}
                                ${(AVG_REVIEW == 1 )? '<span class="fas fa-star"></span><span class="far fa-star checked"></span><span class="far fa-star checked"></span><span class="far fa-star checked"></span><span class="far fa-star checked"></span><span class="spanrating">('+reviewPerson+')</span>':''}
                                ${(AVG_REVIEW == 2 )? '<span class="fas fa-star"></span><span class="fas fa-star"></span><span class="far fa-star checked"></span><span class="far fa-star checked"></span><span class="far fa-star checked"></span><span class="spanrating">('+reviewPerson+')</span>':''}
                                ${(AVG_REVIEW == 3 )? '<span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="far fa-star checked"></span><span class="far fa-star checked"></span><span class="spanrating">('+reviewPerson+')</span>':''}
                                ${(AVG_REVIEW == 4 )? '<span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="far fa-star checked"></span><span class="spanrating">('+reviewPerson+')</span>':''}
                                ${(AVG_REVIEW == 5 )? '<span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="spanrating">('+reviewPerson+')</span>':''}
                            </div>
                            
                            ${ (element.discount_price > 0) ? '<div class="taka">৳ '+element.discount_price+'</div><div class="discount"><del> ৳ '+element.price+'</del></div>': '<div class="taka">৳ '+element.price+'</div></br>'}
                        </div>
                        <div class="addbut">
                            <div class="add_to_cart">Add to cart</div>
                        </div>
                    </div>
                </div>                
                `;
            }
            document.getElementById('main_card').innerHTML = allp;
        });
    }
    show(0,500000);

    function getMaxMin() {
        let range = document.getElementById('amount').value;
        let MAX_MIN_VALUE_ARRAY = range.replaceAll('৳','').split('-');
        let min = parseInt(MAX_MIN_VALUE_ARRAY[0],10);
        let max = parseInt(MAX_MIN_VALUE_ARRAY[1],10);
        show(min,max);
    }
</script>
@endsection