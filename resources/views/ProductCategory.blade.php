@extends('welcome')
@section('content')
<link rel="stylesheet" href="{{asset('laraecomm/allcss/category.css')}}">

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



<div class="page_wrap">
    <div class="container">
        <div class="row">
            <div class="sidebar col-12 col-xl-3">
                <div class="sidebar_title">
                    Price
                </div>
                    <br/>
                    <div class="slider">
                        <div id="slider-range" class="slmargintop"></div>
                        <p>
                        <label for="amount">Price:
                        <input  class="slider_input slinput" type="text" id="amount" readonly >
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
                <hr class="hrclass"/>
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
                </div>
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
        <div class="row">
            <div class="col-6 col-md-6 col-lg-4">
                <div class="card">
                    <div class="one class_for_list">
                        <div class="icon_group">
                            <div class="heart"><i class="far fa-heart"></i></div>
                            <div class="eye emargin"><i class="far fa-eye"></i></div>
                        </div>
                        <div class="product_image">
                        <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><img class="p_img" src="{{asset('laraecomm/assets/images/samsung-galaxy-s21-5g-r.jpg')}}" alt=""></a></div>
                        <div class="apart_for_list">
                            <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><div class="product_title">Samsung Galaxy S21 5G</div></a>
                            <div class="rating">
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span><span class="ratingcolor9">(0)</span>
                            </div>
                            <div class="taka"><div class="triangle-left"></div><div class="circle_trns disinline1"></div> <div class="t_icon">&#2547;</div> 1,39,000</div>
                            <div class="list_all_text">
                                <div class="list_all_text_title">
                                    Samsung Galaxy S21 5G 8GB/256GB
                                </div>
                                <div class="list_all_text_description">
                                    {{-- <ul>
                                        <li>OS: Android 10</li>
                                        <li>Chipset: Mediatek MT6765 Helio P35 (12nm)</li>
                                        <li>CPU: Octa-core (4x2.35 GHz Cortex-A53 & 4x1.8 GHz Cortex-A53)</li>
                                        <li>GPU: PowerVR GE8320</li>
                                        <li>RAM: 4GB</li>
                                        <li>ROM: 64GB</li>
                                        <li>Back Camera: 48MP+5MP+2MP+2MP</li>
                                        <li>Front Camera: 8MP</li>
                                        <li>Display Size: 6.5” (PLS IPS Display)</li>
                                        <li>Display Resolution: 720 x 1600 pixels, 20:9 ratio (~270 ppi Density)</li>
                                        <li>Build: Glass Front, Plastic Back, Plastic Frame</li>
                                        <li>Connectivity: Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot; Bluetooth: 5.0 A2DP, LE; GPS: Yes, with</li>
                                        <li>A-GPS, GLONASS, GALILEO, BDS; NFC: YES; Radio: FM Radio, RDS, Recording; USB: Type-C 2.0</li>
                                        <li>Sensors: Fingerprint (side-mounted), accelerometer</li>
                                        <li>Battery Type: Li-Po 5000mAh, non-removable (Fast charging 15W)</li>
                                    </ul> --}}
                                </div>
                            </div>
                            <div class="add_to_cart">Add to cart</div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-6 col-md-6 col-lg-4">
            <div class="card">
                <div class="one class_for_list">
                    <div class="icon_group">
                        <div class="heart"><i class="far fa-heart"></i></div>
                        <div class="eye emargin"><i class="far fa-eye"></i></div>
                    </div>
                    <div class="product_image"><a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><img class="p_img" src="{{asset('laraecomm/assets/images/vivo-v21-5g.jpg')}}" alt=""></a></div>
                    <div class="apart_for_list">
                    <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><div class="product_title">Samsung Galaxy S21 5G</div></a>
                        <div class="rating">
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span><span class="ratingcolor9">(0)</span>
                        </div>
                        <div class="taka"><div class="triangle-left"></div><div class="circle_trns disinline1"></div> <div class="t_icon">&#2547;</div> 1,39,000</div>
                        <div class="list_all_text">
                            <div class="list_all_text_title">
                                Samsung Galaxy S21 5G 8GB/256GB
                            </div>
                            <div class="list_all_text_description">
                                {{-- <ul>
                                    <li>OS: Android 10</li>
                                    <li>Chipset: Mediatek MT6765 Helio P35 (12nm)</li>
                                    <li>CPU: Octa-core (4x2.35 GHz Cortex-A53 & 4x1.8 GHz Cortex-A53)</li>
                                    <li>GPU: PowerVR GE8320</li>
                                    <li>RAM: 4GB</li>
                                    <li>ROM: 64GB</li>
                                    <li>Back Camera: 48MP+5MP+2MP+2MP</li>
                                    <li>Front Camera: 8MP</li>
                                    <li>Display Size: 6.5” (PLS IPS Display)</li>
                                    <li>Display Resolution: 720 x 1600 pixels, 20:9 ratio (~270 ppi Density)</li>
                                    <li>Build: Glass Front, Plastic Back, Plastic Frame</li>
                                    <li>Connectivity: Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot; Bluetooth: 5.0 A2DP, LE; GPS: Yes, with</li>
                                    <li>A-GPS, GLONASS, GALILEO, BDS; NFC: YES; Radio: FM Radio, RDS, Recording; USB: Type-C 2.0</li>
                                    <li>Sensors: Fingerprint (side-mounted), accelerometer</li>
                                    <li>Battery Type: Li-Po 5000mAh, non-removable (Fast charging 15W)</li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="add_to_cart">Add to cart</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-6 col-lg-4">
            <div class="card">
                <div class="one class_for_list">
                    <div class="icon_group">
                        <div class="heart"><i class="far fa-heart"></i></div>
                        <div class="eye emargin"><i class="far fa-eye"></i></div>
                    </div>
                    <div class="product_image"><a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><img class="p_img" src="{{asset('laraecomm/assets/images/xiaomi-redmi-note10-pro.jpg')}}" alt=""></a></div>
                    <div class="apart_for_list">
                    <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><div class="product_title">Samsung Galaxy S21 5G</div></a>
                        <div class="rating">
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span><span class="ratingcolor9">(0)</span>
                        </div>
                        <div class="taka"><div class="triangle-left"></div><div class="circle_trns disinline1"></div> <div class="t_icon">&#2547;</div>1,39,000</div>
                        <div class="list_all_text">
                            <div class="list_all_text_title">
                                Samsung Galaxy S21 5G 8GB/256GB
                            </div>
                            <div class="list_all_text_description">
                                {{-- <ul>
                                    <li>OS: Android 10</li>
                                    <li>Chipset: Mediatek MT6765 Helio P35 (12nm)</li>
                                    <li>CPU: Octa-core (4x2.35 GHz Cortex-A53 & 4x1.8 GHz Cortex-A53)</li>
                                    <li>GPU: PowerVR GE8320</li>
                                    <li>RAM: 4GB</li>
                                    <li>ROM: 64GB</li>
                                    <li>Back Camera: 48MP+5MP+2MP+2MP</li>
                                    <li>Front Camera: 8MP</li>
                                    <li>Display Size: 6.5” (PLS IPS Display)</li>
                                    <li>Display Resolution: 720 x 1600 pixels, 20:9 ratio (~270 ppi Density)</li>
                                    <li>Build: Glass Front, Plastic Back, Plastic Frame</li>
                                    <li>Connectivity: Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot; Bluetooth: 5.0 A2DP, LE; GPS: Yes, with</li>
                                    <li>A-GPS, GLONASS, GALILEO, BDS; NFC: YES; Radio: FM Radio, RDS, Recording; USB: Type-C 2.0</li>
                                    <li>Sensors: Fingerprint (side-mounted), accelerometer</li>
                                    <li>Battery Type: Li-Po 5000mAh, non-removable (Fast charging 15W)</li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="add_to_cart">Add to cart</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-6 col-lg-4">
            <div class="card">
                <div class="one class_for_list">
                    <div class="icon_group">
                        <div class="heart"><i class="far fa-heart"></i></div>
                        <div class="eye emargin"><i class="far fa-eye"></i></div>
                    </div>
                    <div class="product_image"><a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><img class="p_img" src="{{asset('laraecomm/assets/images/oppo-reno6-pro-plus.jpg')}}" alt=""></a></div>
                    <div class="apart_for_list">
                    <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><div class="product_title">Samsung Galaxy S21 5G</div></a>
                        <div class="rating">
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span><span class="ratingcolor9">(0)</span>
                        </div>
                        <div class="taka"><div class="triangle-left"></div><div class="circle_trns disinline1"></div> <div class="t_icon">&#2547;</div>1,39,000</div>
                        <div class="list_all_text">
                            <div class="list_all_text_title">
                                Samsung Galaxy S21 5G 8GB/256GB
                            </div>
                            <div class="list_all_text_description">
                                {{-- <ul>
                                    <li>OS: Android 10</li>
                                    <li>Chipset: Mediatek MT6765 Helio P35 (12nm)</li>
                                    <li>CPU: Octa-core (4x2.35 GHz Cortex-A53 & 4x1.8 GHz Cortex-A53)</li>
                                    <li>GPU: PowerVR GE8320</li>
                                    <li>RAM: 4GB</li>
                                    <li>ROM: 64GB</li>
                                    <li>Back Camera: 48MP+5MP+2MP+2MP</li>
                                    <li>Front Camera: 8MP</li>
                                    <li>Display Size: 6.5” (PLS IPS Display)</li>
                                    <li>Display Resolution: 720 x 1600 pixels, 20:9 ratio (~270 ppi Density)</li>
                                    <li>Build: Glass Front, Plastic Back, Plastic Frame</li>
                                    <li>Connectivity: Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot; Bluetooth: 5.0 A2DP, LE; GPS: Yes, with</li>
                                    <li>A-GPS, GLONASS, GALILEO, BDS; NFC: YES; Radio: FM Radio, RDS, Recording; USB: Type-C 2.0</li>
                                    <li>Sensors: Fingerprint (side-mounted), accelerometer</li>
                                    <li>Battery Type: Li-Po 5000mAh, non-removable (Fast charging 15W)</li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="add_to_cart">Add to cart</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-6 col-lg-4">
            <div class="card">
                <div class="one class_for_list">
                    <div class="icon_group">
                        <div class="heart"><i class="far fa-heart"></i></div>
                        <div class="eye emargin"><i class="far fa-eye"></i></div>
                    </div>
                    <div class="product_image"><a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><img class="p_img" src="{{asset('laraecomm/assets/images/samsung-galaxy-s21-5g-r.jpg')}}" alt=""></a></div>
                    <div class="apart_for_list">
                    <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><div class="product_title">Samsung Galaxy S21 5G</div></a>
                        <div class="rating">
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span><span class="ratingcolor9">(0)</span>
                        </div>
                        <div class="taka"><div class="triangle-left"></div><div class="circle_trns disinline1"></div> <div class="t_icon">&#2547;</div>1,39,000</div>
                        <div class="list_all_text">
                            <div class="list_all_text_title">
                                Samsung Galaxy S21 5G 8GB/256GB
                            </div>
                            <div class="list_all_text_description">
                                {{-- <ul>
                                    <li>OS: Android 10</li>
                                    <li>Chipset: Mediatek MT6765 Helio P35 (12nm)</li>
                                    <li>CPU: Octa-core (4x2.35 GHz Cortex-A53 & 4x1.8 GHz Cortex-A53)</li>
                                    <li>GPU: PowerVR GE8320</li>
                                    <li>RAM: 4GB</li>
                                    <li>ROM: 64GB</li>
                                    <li>Back Camera: 48MP+5MP+2MP+2MP</li>
                                    <li>Front Camera: 8MP</li>
                                    <li>Display Size: 6.5” (PLS IPS Display)</li>
                                    <li>Display Resolution: 720 x 1600 pixels, 20:9 ratio (~270 ppi Density)</li>
                                    <li>Build: Glass Front, Plastic Back, Plastic Frame</li>
                                    <li>Connectivity: Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot; Bluetooth: 5.0 A2DP, LE; GPS: Yes, with</li>
                                    <li>A-GPS, GLONASS, GALILEO, BDS; NFC: YES; Radio: FM Radio, RDS, Recording; USB: Type-C 2.0</li>
                                    <li>Sensors: Fingerprint (side-mounted), accelerometer</li>
                                    <li>Battery Type: Li-Po 5000mAh, non-removable (Fast charging 15W)</li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="add_to_cart">Add to cart</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-6 col-lg-4">
            <div class="card">
                <div class="one class_for_list">
                    <div class="icon_group">
                        <div class="heart"><i class="far fa-heart"></i></div>
                        <div class="eye emargin"><i class="far fa-eye"></i></div>
                    </div>
                    <div class="product_image"><a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><img class="p_img" src="{{asset('laraecomm/assets/images/samsung-galaxy-s21-5g-r.jpg')}}" alt=""></a></div>
                    <div class="apart_for_list">
                    <a href="{{route('product_details','Samsung Galaxy S21 5G')}}"><div class="product_title">Samsung Galaxy S21 5G</div></a>
                        <div class="rating">
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span>
                            <span class="far fa-star checked"></span><span class="ratingcolor9">(0)</span>
                        </div>
                        <div class="taka"><div class="triangle-left"></div><div class="circle_trns disinline1"></div> <div class="t_icon">&#2547;</div>1,39,000</div>
                        <div class="list_all_text">
                            <div class="list_all_text_title">
                                Samsung Galaxy S21 5G 8GB/256GB
                            </div>
                            <div class="list_all_text_description">
                            {{-- <ul>
                                    <li>OS: Android 10</li>
                                    <li>Chipset: Mediatek MT6765 Helio P35 (12nm)</li>
                                    <li>CPU: Octa-core (4x2.35 GHz Cortex-A53 & 4x1.8 GHz Cortex-A53)</li>
                                    <li>GPU: PowerVR GE8320</li>
                                    <li>RAM: 4GB</li>
                                    <li>ROM: 64GB</li>
                                    <li>Back Camera: 48MP+5MP+2MP+2MP</li>
                                    <li>Front Camera: 8MP</li>
                                    <li>Display Size: 6.5” (PLS IPS Display)</li>
                                    <li>Display Resolution: 720 x 1600 pixels, 20:9 ratio (~270 ppi Density)</li>
                                    <li>Build: Glass Front, Plastic Back, Plastic Frame</li>
                                    <li>Connectivity: Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot; Bluetooth: 5.0 A2DP, LE; GPS: Yes, with</li>
                                    <li>A-GPS, GLONASS, GALILEO, BDS; NFC: YES; Radio: FM Radio, RDS, Recording; USB: Type-C 2.0</li>
                                    <li>Sensors: Fingerprint (side-mounted), accelerometer</li>
                                    <li>Battery Type: Li-Po 5000mAh, non-removable (Fast charging 15W)</li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="add_to_cart">Add to cart</div>
                    </div>
                </div>
            </div>
        </div>
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
        <hr class="hrclass"/>
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
        </div>
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
<script src="{{asset('laraecomm/alljs/category.js')}}"></script>

@endsection