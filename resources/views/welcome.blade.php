<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Greenshop is one of the hassle free E-Commerce website">
        <meta name="keywords" content="Greenshop, Green Shop, greenshop, E-commerce, Website, ecommerce site, Shop, Mobile, Laptop, Smartphone, Accessories">
        <meta  name="copyright" content="Greenshop is one of the hassle free E-Commerce website">
        <meta property="og:type" content="ECommerce Website">
        <meta property="og:description" content="Greenshop is one of the hassle free E-Commerce website">
        <meta property="twitter:title" content="Greenshop">
        
        <title>Greenshop</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/css/uikit.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{asset('laraecomm/allcss/welcome.css')}}">


    </head>

    <style>

        /* body::-webkit-scrollbar {
            display: none; /* for Chrome, Safari, and Opera   
        }*/
        #loader {
            position:fixed;
            top:0;
            bottom:0;
            left:0;
            right:0;
            background:white;
            height:100% ;
            width:100% ;
            z-index:3000;
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }
        #loader img {
            display:block;margin:auto;
        }
    </style>
    <body>
    {{-- <div id="loader">
        <img src="{{asset('laraecomm/images/loader.gif')}}" alt="">
    </div> --}}
    <header>
        <div class="first">
            <div class="left">
                <a href="{{route('home')}}">
                <div class="logo">
                    <img src="https://greenshopbd.com/wp-content/uploads/2020/04/Untitled-1-min.png" alt="">
                </div>
                </a>
            </div>
            <div class="searchBar">
                <input type="text" placeholder="Search Products...">
                <div class="searchIcon"><i class="fas fa-search"></i></div>
            </div>
            <div class="rightpart">
            <a href="{{route('account')}}"><div class="cart">
                    <i class="far fa-user fa-color"></i>
                </div></a>
                <a href="{{route('wich')}}">
                    <div class="cart">
                        <i class="far fa-heart fa-color"></i>
                        <span class='badge badge-warning' id='lblCartCount'> 5 </span>
                    </div>
                </a>
                <div class="cart cart_offcanvas"   data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" >
                    <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                    </svg>
                    <span class='badge badge-warning badge-cart' id='lblCartCount'> 1 </span>
                    <span class="taka">৳&nbsp;0.00</span>
                </div>
            </div>
        </div>
    </header>



<!-- left_menubar_modal -->
<!-- left_menubar_modal_end -->
    <div class="head2">
        <div class="innerhead2">
            <div class="row">
                <div class="col-2 col2_row">
                    <div class="menu_icon"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample2" aria-controls="offcanvasExample2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </div>
                </div>
                <div class="col-7">
                    <div class="res_logo">
                        <img class="res_img" src="https://greenshopbd.com/wp-content/uploads/2020/04/Untitled-1-min.png" alt="">
                    </div>
                </div>
                <div class="col-3 col_3pos">
                    <div class="right_cart_responsive cart_off">
                        <div class="carting" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <span class="spantaka">৳ 0.00</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                            </svg>
                            <span class='badge badge-warning' id='lblCartCount'>1</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="search_bar_responsive">
                    <div class="search_contain">
                    <img src="{{asset('laraecomm/assets/images/special-offer-red-banner-sticker_275806-500-removebg-preview.png')}}" alt="">
                    <input type="text" placeholder="Search here...">
                    <div class="search_buttonn">
                        <i class="fas fa-search"></i>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- responsive left menu modal -->



<div class="left_offcanvas_wrapper">
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample2" aria-labelledby="offcanvasExampleLabel2">
        <div class="offcanvas-header">
            <div class="heading_left_menu">All Category</div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        
        <div class="offcanvas-body">
            <!-- <ul>
                <a href=""><li style="padding-top:5px;">Menu</li></a>
                <a href=""><li style="padding-left:10px;padding-top:5px;">
                    <span style="margin-right:10px;"><i class="fas fa-mobile-alt"></i></span>Mobile
                </li></a>
                <a href=""><li style="padding-left:10px;padding-top:5px;">Mobile Accessories</li></a>
                <a href=""><li style="padding-left:10px;padding-top:5px;">Laptop</li></a>
                <a href=""><li style="padding-left:10px;padding-top:5px;">Laptop Accessories</li></a>
                <a href=""><li style="padding-left:10px;padding-top:5px;">Electronic</li></a>
                <a href=""><li style="padding-left:10px;padding-top:5px;">Software</li></a>
                <a href=""><li style="padding-left:10px;padding-top:5px;">Antivirus</li></a>
            </ul> -->

            <!-- accordion -->
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <i class="fas fa-mobile-alt"></i> Mobile
                    </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Xiaomi</li>
                                <li>Samsung</li>
                                <li>Apple</li>
                                <li>ViVo</li>
                                <li>Oppo</li>
                                <li>Huawei</li>
                                <li>Motorolla</li>
                                <li>Realme</li>
                                <li>Honor</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <i class="fas fa-headphones-alt"></i>   Mobile Accessories
                    </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        coming..
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <i class="fas fa-laptop"></i>   Laptop
                    </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Apple-MacBook</li>
                                <li>Honor</li>
                                <li>HP</li>
                                <li>DELL</li>
                                <li>ASUS</li>
                                <li>Doel</li>
                                <li>Huawei-MateBook</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="four">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#four_colupse" aria-expanded="false" aria-controls="four_colupse">
                    <i class="fas fa-mouse"></i>Laptop Accessories
                    </button>
                    </h2>
                    <div id="four_colupse" class="accordion-collapse collapse" aria-labelledby="four" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Coming..
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="five">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#five_colupse" aria-expanded="false" aria-controls="five_colupse">
                    <i class="far fa-lightbulb"></i>Electronic
                    </button>
                    </h2>
                    <div id="five_colupse" class="accordion-collapse collapse" aria-labelledby="five" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Coming..
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="six">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#six_colupse" aria-expanded="false" aria-controls="six_colupse">
                    <i class="fab fa-uncharted"></i> Software
                    </button>
                    </h2>
                    <div id="six_colupse" class="accordion-collapse collapse" aria-labelledby="six" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Coming..    
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="seven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#seven_colupse" aria-expanded="false" aria-controls="seven_colupse">
                    <i class="fas fa-shield-virus"></i>Antivirus
                    </button>
                    </h2>
                    <div id="seven_colupse" class="accordion-collapse collapse" aria-labelledby="seven" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Coming..
                    </div>
                    </div>
                </div>
            </div>
            <!-- end accordion -->
        </div>
    </div>    
</div>


    <section>
    @yield('content')
    </section>



    <div class="responsive_footer">
        <!-- <div class="container" style="padding:5px;margin-top:3px;"> -->
            <div class="row">
                <div class="col" title="Home">
                    <a href="{{route('home')}}">
                        <div class="icon11 {{'laraecomm/home'== request()->path()?'active_icon':''}}">
                            <div class="home_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                                </svg>
                            </div>
                            <span>Home</span>
                        </div>
                    </a>
                </div>
                <div class="col" title="Wishlist">
                    <a href="{{route('wich')}}">
                        <div class="icon22 {{'laraecomm/wishlist'== request()->path()?'active_icon':''}}">
                            <div class="heart_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
                                <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
                                </svg>
                            </div>
                            <span>Wishlist</span>
                        </div>
                    </a>
                </div>
                <div class="col" title="Recently">
                    <a href="{{route('recent')}}">
                        <div class="icon33 {{'laraecomm/recently'== request()->path()?'active_icon':''}}">
                            <div class="recently_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg>
                            </div>
                            <span>Recently</span>
                        </div>
                    </a>
                </div>
                <div class="col"  title="Account">
                    <a href="{{route('account')}}">
                        <div class="icon44 {{'laraecomm/account'== request()->path()?'active_icon':''}}">
                            <div class="account">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                </svg>
                            </div>
                            <span>Account</span>
                        </div>
                    </a>
                </div>
                <div class="col"  title="Cart">
                    <a href="{{route('cart')}}">
                        <div class="icon55 {{'laraecomm/cart'== request()->path()?'active_icon':''}}">
                            <div class="cart_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                                <span class='badge badge-warning' id='lblCartCount'>1</span>
                            </div>
                            <span class="cartspan">Cart</span>
                        </div>
                    </a>
                </div>
            </div>
        <!-- </div> -->
    </div>

    <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="head">CONTACT US</div>
                <p>If you have any question</p>
                <div class="extra_text">
                support@greenshopbd.com
                </div>
                <div class="location">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                    </div>
                    <div class="icon_text"> Jess Tower, 5th Floor Shop No: 612, Jessore 7400</div>
                </div>
                <div class="call">
                <div class="icon2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                </div>
                <div class="icon_text2">01775006625</div>
                </div>
            </div>
            <div class="col-md-3 col2 colindividual">
                <div class="head">
                    INFORMATION
                </div>
                <p><a href="javascript:void(0)">EMI Policy</a></p>
                <p><a href="javascript:void(0)">Terms and Condition</a></p>
                <p><a href="javascript:void(0)">Information</a></p>
                <p><a href="javascript:void(0)">Privacy Policy</a></p>
                <p><a href="javascript:void(0)">Shipping Details</a></p>
            </div>
            <div class="col-md-3 col2">
            <div class="head">
                    HELP & SUPPORT
                </div>
                <p><a href="javascript:void(0)">Search Terms</a></p>
                <p><a href="javascript:void(0)">Advanced Search</a></p>
                <p><a href="javascript:void(0)">Help & Faq's</a></p>
                <p><a href="javascript:void(0)">Store Location</a></p>
                <p><a href="javascript:void(0)">Orders & Returns</a></p>
            </div>
            <div class="col-md-3 col2">
            <div class="head">
                    SUPPORT
                </div>
                <p><a href="javascript:void(0)">Contact Us</a></p>
                <p><a href="javascript:void(0)">About Us</a></p>
                <p><a href="javascript:void(0)">Careers</a></p>
                <p><a href="javascript:void(0)">Refunds & Returns</a></p>
                <p><a href="javascript:void(0)">Deliveries</a></p>
            </div>
        </div>
    </div>
    <div class="foot_end">
        <div class="left_part">
            <img src="{{asset('laraecomm/images/download.png')}}" alt="">
        </div>
        <div class="right_part">
            Copyright &copy; 2021 <a href="#" class="greenshopanchorfooter">greenshopbd</a>. All Rights Reserved.
        </div>
    </div>
    </footer>


    <!-- right-off-canvas -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel" class="cart_head">Shopping cart</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <hr>
        <div class="cart_item_list">
            <div class="car_item_image">
                <img src="{{asset('laraecomm/assets/images/xiaomi-redmi-note10-pro.jpg')}}" alt="">
            </div>
            <div class="item_all_info">
                <div class="info_name">
                    Xiaomi redmi note10 pro 4GB/64GB
                </div>
                <div class="count_which">2x <span>৳ 14,499.00</span></div>
            </div>
            <div class="action_items">
                <i class="far fa-trash-alt"></i>
            </div>
        </div>
        <hr>
        
        <div class="cart_footer">
            <div class="sub_total">
                Subtotal: <div class="sub_amount">৳ 28,998.00</div>
            </div>
            <a href="{{route('cart')}}"><div class="view_cart_but">View Cart</div></a>
            <a href="{{route('checkout')}}"><div class="view_checkout_but">Checkout</div></a>
        </div>
    </div>
    </div>


<!-- end-canvas -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('laraecomm/alljs/welcome.js')}}"></script>
    </body>
</html>
