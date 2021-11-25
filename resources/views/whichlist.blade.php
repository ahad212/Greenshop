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
            <style>
                .custom{
                    display: flex;
                    flex-flow: row wrap;
                    grid-column-gap: 5px !important;
                }
                .divfornowish{
                    height:300px;
                    width:100%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                
            </style>
            <div class="divfornowish" id="divfornowish">
                No wishlist available
            </div>
            <div class="sell-slider">
                <div class="custom" id="carosoul" style="margin-top:40px;">
                    {{-- auto injected --}}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{asset('laraecomm/alljs/wishlist.js')}}"></script>
<script>
    
    function renderWishlist() {
        let userId = localStorage.getItem('userID');
        if (userId) {
            let formdata = new FormData();
            formdata.append('userId',userId);
            let all= '';
            axios.post('/laraecomm/api/wishlist/check',formdata).then(res=> {
                let list = JSON.parse(res.data);
                for (let index = 0; index < list.length; index++) {
                    const element = list[index];
                    const img = JSON.parse(element.pimage)[0];
                    const formatValue = new Intl.NumberFormat('en-IN').format(element.price);
                    let stock = '';
                    if (element.quantity) {
                        stock = '<div class="stock_y_n">In Stock</div>';
                    } else {
                        stock = '<div class="stock_y_n">Stock Out</div>'
                    }
                    
                    all += `
                        <div class="one">
                            // <div class="icon_group">
                            //     <div class="heart"><i class="far fa-eye"></i></div>
                            //     <div class="eye"><i class="far fa-heart"></i></div>
                            // </div>
                            <a href="/laraecomm/Product/${element.slug}"><figure><img src="${'/laraecomm/'+img}" alt=""></figure></a>
                            <a href="/laraecomm/Product/${element.slug}"><figcaption>${element.name}</figcaption></a>
                            <!-- <div class="rating">
                                <span style="color:rgba(0,0,0,0.6);">(0)</span>
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span>
                                <span class="far fa-star checked"></span>
                            </div> -->
                            <div class="taka">${formatValue} <span>&#2547;</span></div>
                            ${stock}
                            <div class="add_to_cart">Add to cart</div>
                            <div class="remove_wish" onclick= "removeWish(${element.id})">
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
                    `; 
                }
                if (all == '') {
                    document.getElementById('divfornowish').style.display = 'flex';
                    document.getElementById('carosoul').innerHTML = '';

                } else {
                    document.getElementById('carosoul').innerHTML = all;
                    document.getElementById('divfornowish').style.display = 'none';

                }
            });
        }
    }
    renderWishlist();
    function removeWish(itemId) {
        let userId = localStorage.getItem('userID');
        let productId = itemId;
        let formdata = new FormData();
        formdata.append('userId',userId);
        // formdata.append('productId',productId);
        if (userId) {
            axios.post('/laraecomm/api/wishlist/check',formdata).then(res=> {
                let data = JSON.parse(res.data);
                let indCheck = data.findIndex(res => res.id == productId);
                data.splice(indCheck,1);
                let formdata1 =new FormData();
                formdata1.append('userId',userId);
                formdata1.append('productArray',JSON.stringify(data));
                axios.post('/laraecomm/api/wishlist/update',formdata1).then(res=>{
                    renderWishlist();
                    listwish();
                    iziToast.success({
                        title: 'Success',
                        message: res.data,
                        position: 'topCenter',
                    });

                    // location.reload();
                });
            });
        }
    }
</script>
@endsection