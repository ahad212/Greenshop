@extends('welcome')


@section('content')
<link rel="stylesheet" href="{{asset('laraecomm/allcss/wishlist.css')}}">
<style>


</style>



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

<script src="{{asset('laraecomm/alljs/wishlist.js')}}"></script>
@endsection