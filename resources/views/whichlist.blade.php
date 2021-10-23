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
    a{
        color:black;
    }
    :root{
        --text:#6A7180;
    }
    .wishlist_head{
        font-size:40px;
        color:var(--text);
        font-family:franklin;
        font-weight:bold;
    }




    /* slider css start */

    .owl-carousel{
        width:100%;
        margin:auto;
        margin-top:50px;
    }
    .wishlist .owl-stage-outer{
        /* border-left:1px solid #E5E5E5;
        border-right:1px solid #E5E5E5; */
    }
    .wishlist .sell-slider .one{
        width:225px;
        border-right:1px solid #E5E5E5;
        border-top:1px solid #E5E5E5;
        border-bottom:1px solid #E5E5E5;
        position:relative;
    }
    .wishlist figure{
        width:100px;
        height:150px;
        margin:auto;
        margin-top:50px;
        cursor:pointer;
    }
    .wishlist figcaption{
        display:block;
        margin-top:60px;
        text-align:center;
        font-weight:500;
        cursor:pointer;
        margin:auto;
    }
    .wishlist figcaption:hover{
        color:var(--orange);
        transition:.3s;
    }
    .wishlist .rating{
        text-align:center;
        color:#FFD37E;
    }
    .wishlist .taka{
        text-align:center;
        color:var(--orange);
    }
    .wishlist .taka span{
        font-size:15px;
        font-weight:bold;
    }
    .wishlist .add_to_cart{
        height:40px;
        width:150px;
        background:var(--orange);
        margin:auto;
        display:flex;
        align-items:center;
        justify-content:center;
        color:white;
        margin-top:10px;
        border-radius:5px;
        margin-bottom:15px;
        cursor:pointer;
        transition:.3s;
        display:none;
    }
    .wishlist .add_to_cart:hover{
        background:var(--green);
    }
    .wishlist .icon_group{
        position:absolute;
        height:50px;
        width:120px;
        top:50px;
        left:50px;
        z-index: 10;
        display:flex;
        align-items:center;
        justify-content:center;
        flex-flow:row-wrap;
        opacity:0;
        visibility:hidden;
        transition: all .2s linear;
    }
    .wishlist .one:hover .icon_group{
        opacity:1;
        visibility:visible;
        display:flex;
        align-items:center;
        justify-content:center;
        flex-flow:row-wrap;
        transform:scale(1.2);
    }

    .wishlist .heart{
        height:35px;
        width:35px;
        background:var(--orange);
        margin-left:5px;
        border-radius:4px;
        transition:.3s;
        cursor:pointer;
        color:white;
        font-size:17px;
        display:flex;
        align-items:center;
        justify-content:center;
    }
    .wishlist .heart:hover,.eye:hover{
        background:var(--green);
    }
    .wishlist .eye{
        height:35px;
        width:35px;
        border-radius:4px;
        background:var(--orange);
        display:flex;
        align-items:center;
        justify-content:center;
        transition:.3s;
        cursor:pointer;
        color:white;
        font-size:17px;
    }
    .wishlist .view_all{
        color:var(--orange);
        font-size:17px;
        text-align:right;
        margin-right:130px;
    }
    .wishlist .view_all span{
        cursor:pointer;
    }
    .wishlist .view_all span:hover{
        color:var(--green);
    }
    .wishlist .best_sell{
        position:relative;
    }
    .wishlist .sell_left ul li:hover{
        color:var(--orange);
    }
    .remove_wish{
        color:var(--text);
        text-align:center;
        margin-bottom:20px;
    }
    .inline_wish_delte{
        display:inline-block;
        cursor:pointer;
    }

    /* custom-slider-button */
    /* .owl-prev,
    .owl-next {
    position: absolute;
    top: 50%;
    }

    .owl-prev {
    right: -2rem;
    height:40px;
    width:40px;
    }

    .owl-next {
    left: -2rem;
    height:40px;
    width:40px;
    } */
    .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev
    /* , .owl-carousel button */
    {
        background:rgba(0,0,0,0.5);
        display:none;
    }


    /* slider-dot-color */
    .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span{
        background:var(--orange);
    }
    /* slider end  */
    .stock_y_n{
        color:green;
        text-align:center;
    }
    
    @media (max-width:768px)
    {

        .container{
            padding-top:10px !important;
        }

        .sell-slider .one{
            width:165px !important;
        }
        figure img{
            display:block;
            margin:auto;
            width:70px !important;
            height:93px;
        }
        .wishlist figcaption{
            margin-top:10px;
            height:60px;
        }
        .wishlist .one:hover .icon_group{
            opacity:0;
            visibility:hidden;
        }
        .owl-carousel{
            margin-top:10px !important;
        }
        .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev
        /* , .owl-carousel button */
        {
            display:none;
        }
    }
    @media (max-width:414px)
    {
        .sell-slider .one{
            width:165px !important;
        }
        figure{
            height:100px !important;
        }
        figure img{
            display:block;
            margin:auto;
            width:70px !important;
            height:93px;
        }
        .wishlist figcaption{
            height:20px;
            margin-top:10px;
        }
        .wishlist .one:hover .icon_group{
            opacity:0;
            visibility:hidden;
        }
        .owl-carousel{
            margin-top:10px !important;
        }
        .wishlist_head{
            font-size:25px;
            text-align:center;
        }
    }

</style>


<div class="container wishlist">
    <div class="row">
        <div class="col">
            <div class="wishlist_head">
                Wishlist
            </div>
            <div class="sell-slider">
                <div class="owl-carousel owl-theme" style="margin-top:40px;">
                    <div class="one">
                        <div class="icon_group">
                            <div class="heart"><i class="far fa-eye"></i></div>
                            <div class="eye"><i class="far fa-heart"></i></div>
                        </div>
                        <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figure><img src="{{asset('laraecomm/assets/images/samsung-galaxy-s21-5g-r.jpg')}}" alt=""></figure></a>
                        <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figcaption>Samsung Galaxy S21 5G</figcaption></a>
                        <!-- <div class="rating">
                            <span style="color:rgba(0,0,0,0.6);">(0)</span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                        </div> -->
                        <div class="taka">1,39,000 <span>&#2547;</span></div>
                        <div class="stock_y_n">In Stock</div>
                        <div class="add_to_cart">Add to cart</div>
                        <div class="remove_wish">
                            <div class="inline_wish_delte">
                                Remove 
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="one">
                        <div class="icon_group">
                            <div class="heart"><i class="far fa-eye"></i></div>
                            <div class="eye"><i class="far fa-heart"></i></div>
                        </div>  
                        <a href="{{route('product_details','vivo V21')}}"><figure><img src="{{asset('laraecomm/assets/images/vivo-v21-5g.jpg')}}" alt=""></figure></a> 
                        <a href="{{route('product_details','vivo V21')}}"><figcaption>vivo V21</figcaption></a>
                        <!-- <div class="rating">
                            <span style="color:rgba(0,0,0,0.6);">(0)</span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                        </div> -->
                        <div class="taka">30,000 <span>&#2547;</span></div>
                        <div class="stock_y_n">In Stock</div>
                        <div class="add_to_cart">Add to cart</div>
                        <div class="remove_wish">
                            <div class="inline_wish_delte">
                                Remove 
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="one">
                        <div class="icon_group">
                            <div class="heart"><i class="far fa-eye"></i></div>
                            <div class="eye"><i class="far fa-heart"></i></div>
                        </div>
                        <a href="{{route('product_details','Xiaomi Redmi Note 10 Pro')}}"><figure><img src="{{asset('laraecomm/assets/images/xiaomi-redmi-note10-pro.jpg')}}" alt=""></figure></a> 
                        <a href="{{route('product_details','Xiaomi Redmi Note 10 Pro')}}"><figcaption>Xiaomi Redmi Note 10 Pro</figcaption></a>
                        <!-- <div class="rating">
                            <span style="color:rgba(0,0,0,0.6);">(0)</span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                        </div> -->
                        <div class="taka">18,000 <span>&#2547;</span></div>
                        <div class="stock_y_n">In Stock</div>
                        <div class="add_to_cart">Add to cart</div>
                        <div class="remove_wish">
                            <div class="inline_wish_delte">
                                Remove
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="one"> 
                        <div class="icon_group">
                            <div class="heart"><i class="far fa-eye"></i></div>
                            <div class="eye"><i class="far fa-heart"></i></div>
                        </div>
                        <a href="{{route('product_details','Apple iPhone 12 Pro Max')}}"><figure><img src="{{asset('laraecomm/assets/images/apple-iphone-12-pro-max-.jpg')}}" alt=""></figure></a> 
                        <a href="{{route('product_details','Apple iPhone 12 Pro Max')}}"><figcaption>Apple iPhone 12 Pro Max</figcaption></a>
                        <!-- <div class="rating">
                            <span style="color:rgba(0,0,0,0.6);">(0)</span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                        </div> -->
                        <div class="taka">1,80,000 <span>&#2547;</span></div>
                        <div class="stock_y_n">In Stock</div>
                        <div class="add_to_cart">Add to cart</div>
                        <div class="remove_wish">
                            <div class="inline_wish_delte">
                                Remove 
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="one">
                        <div class="icon_group">
                            <div class="heart"><i class="far fa-eye"></i></div>
                            <div class="eye"><i class="far fa-heart"></i></div>
                        </div>
                        <a href="{{route('product_details','Oppo Reno6 Pro+ 5G')}}"><figure><img src="{{asset('laraecomm/assets/images/oppo-reno6-pro-plus.jpg')}}" alt=""></figure></a> 
                        <a href="{{route('product_details','Oppo Reno6 Pro+ 5G')}}"><figcaption>Oppo Reno6 Pro+ 5G</figcaption></a>
                        <!-- <div class="rating">
                            <span style="color:rgba(0,0,0,0.6);">(0)</span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                        </div> -->
                        <div class="taka">39,000 <span>&#2547;</span></div>
                        <div class="stock_y_n">In Stock</div>
                        <div class="add_to_cart">Add to cart</div>
                        <div class="remove_wish">
                            <div class="inline_wish_delte">
                                Remove 
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="one">
                        <div class="icon_group">
                            <div class="heart"><i class="far fa-eye"></i></div>
                            <div class="eye"><i class="far fa-heart"></i></div>
                        </div>
                        <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figure><img src="{{asset('laraecomm/assets/images/samsung-galaxy-s21-5g-r.jpg')}}" alt=""></figure></a> 
                        <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figcaption>Samsung Galaxy S21 5G</figcaption></a>
                        <!-- <div class="rating">
                            <span style="color:rgba(0,0,0,0.6);">(0)</span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                        </div> -->
                        <div class="taka">1,39,000 <span>&#2547;</span></div>
                        <div class="stock_y_n">In Stock</div>
                        <div class="add_to_cart">Add to cart</div>
                        <div class="remove_wish">
                            <div class="inline_wish_delte">
                                Remove 
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="one">
                        <div class="icon_group">
                            <div class="heart"><i class="far fa-eye"></i></div>
                            <div class="eye"><i class="far fa-heart"></i></div>
                        </div>
                        <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figure><img src="{{asset('laraecomm/assets/images/samsung-galaxy-s21-5g-r.jpg')}}" alt=""></figure></a> 
                        <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figcaption>Samsung Galaxy S21 5G</figcaption></a>
                        <!-- <div class="rating">
                            <span style="color:rgba(0,0,0,0.6);">(0)</span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                        </div> -->
                        <div class="taka">1,39,000 <span>&#2547;</span></div>
                        <div class="stock_y_n">In Stock</div>
                        <div class="add_to_cart">Add to cart</div>
                        <div class="remove_wish">
                            <div class="inline_wish_delte">
                                Remove 
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="one">
                        <div class="icon_group">
                            <div class="heart"><i class="far fa-eye"></i></div>
                            <div class="eye"><i class="far fa-heart"></i></div>
                        </div>
                        <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figure><img src="{{asset('laraecomm/assets/images/samsung-galaxy-s21-5g-r.jpg')}}" alt=""></figure></a> 
                        <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figcaption>Samsung Galaxy S21 5G</figcaption></a>
                        <!-- <div class="rating">
                            <span style="color:rgba(0,0,0,0.6);">(0)</span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                        </div> -->
                        <div class="taka">1,39,000 <span>&#2547;</span></div>
                        <div class="stock_y_n">In Stock</div>
                        <div class="add_to_cart">Add to cart</div>
                        <div class="remove_wish">
                            <div class="inline_wish_delte">
                                Remove 
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="one">
                        <div class="icon_group">
                            <div class="heart"><i class="far fa-eye"></i></div>
                            <div class="eye"><i class="far fa-heart"></i></div>
                        </div>
                        <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figure><img src="{{asset('laraecomm/assets/images/samsung-galaxy-s21-5g-r.jpg')}}" alt=""></figure></a> 
                        <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><figcaption>Samsung Galaxy S21 5G</figcaption></a>
                        <!-- <div class="rating">
                            <span style="color:rgba(0,0,0,0.6);">(0)</span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                        </div> -->
                        <div class="taka">1,39,000 <span>&#2547;</span></div>
                        <div class="stock_y_n">In Stock</div>
                        <div class="add_to_cart">Add to cart</div>
                        <div class="remove_wish">
                            <div class="inline_wish_delte">
                                Remove 
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function(){
        var width = window.innerWidth;
        console.log(width);
        if(width <= 414)
        {
            var figcap = document.getElementsByTagName('figcaption');
            for(var i=0;i<figcap.length;i++){
                var cutingf = figcap[i].innerText;
                var pstr = '..'+cutingf.substr(0,10);
                figcap[i].innerHTML = pstr;
                console.log(pstr);
            }
        }
        else{
            console.log('no');
        }
    }
</script>
@endsection