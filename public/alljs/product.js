

// for_increase_quantity 

$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            var a = $('#btn2')[0];
            a.removeAttribute("disabled");   
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }
            else{
                $(this).removeAttr('disabled');
            }

        } else if(type == 'plus') {

            var a = $('#btn')[0];
            a.removeAttribute("disabled");
            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});


$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    let name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

// for sticky top_nav_for_webView_fixed

window.onscroll = function(){
    var a = $('.top_fixed_for_pc_only')[0];
    a.classList.toggle('show_sticky',window.scrollY >600);
    
}


//select city for deliver reload but still show
// $(function() {
//     if (localStorage.getItem('cust_select')) {
//         $("#cust_select").val(localStorage.getItem('cust_select'));
//     }

//     $("#cust_select").on('change', function() {
//         localStorage.setItem('cust_select', $('option:selected', this).index());
//     });
// });






    // $(document).ready(function(){
    //     var good;
    //     $.get('https://amaderhospital.com/api//Location/get',function(res){

    //         for(i=0;i<res.result.length;i++){
    //           good   += '<div class="good">'+ res.result[i].name +'</div>';
    //         }

    //         $('#show').html(good.substring(9))
    //     });

    // });


    function orderplace() {
        let tokenExist = localStorage.getItem('usertoken');
        if (!tokenExist) {
            iziToast.error({
                title: 'Error',
                message: 'Please Login First',
                position: 'topCenter',
            });
            return;       
        }
        let colorId = document.getElementById('coloring');
        let sizeId = document.getElementById('sizing');
        if(colorId || sizeId) {
            if (!colorId.value) {
                iziToast.error({
                    title: 'Error',
                    message: 'Select Color is required',
                    position: 'topCenter',
                });
                return;
            }
            if (!sizeId.value) {
                iziToast.error({
                    title: 'Error',
                    message: 'Select Size is required',
                    position: 'topCenter',
                });
                return;
            } 
        } else {
            console.log('color or size is missing');
        }

        if (shipcost == 'abc') {
            iziToast.error({
                title: 'Error',
                message: 'Select Your City',
                position: 'topCenter',
            });
            return;
        } else {
            let quantity = document.getElementById('quantitynum').value;
            let price = '';
            if (currentProduct.discount_price > 0) {
                price = currentProduct.discount_price;
            } else {
                price = currentProduct.price;
            }
            let orderObj = {id: currentProduct.id, name: currentProduct.name, quantity: quantity, price: price ,pimage : currentProduct.pimage, shipping: totalShippingCost,shipping: currentProduct.shipping_charge,totalQuantity:currentProduct.quantity};
            if (colorId) {
                orderObj.color = colorId.value; 
            } 
            if (sizeId) {
                orderObj.size = sizeId.value;
            }
            let cartExist = localStorage.getItem('cart');
            let findingind = '';


            if (cartExist) { 
                let jsonArray = JSON.parse(cartExist);
                findingind = jsonArray.findIndex(x => x.id == currentProduct.id);
            }


            if (!cartExist) {
                let cartArray = [];
                cartArray.push(orderObj);
                localStorage.setItem('cart',JSON.stringify(cartArray));
                iziToast.success({
                    title: 'Success',
                    message: 'Product add to cart',
                    position: 'topCenter',
                });
                document.getElementById('lblCartCount2').innerHTML = 1;
                let total = 0;
                for (let index = 0; index < cartArray.length; index++) {
                    const element = cartArray[index];
                    let totalwithquan = parseInt(element.quantity) * parseInt(element.price);
                    total += totalwithquan;
                }
                let formatValue = new Intl.NumberFormat('en-IN').format(total);
                document.getElementById('totalCart').innerHTML = formatValue;
                document.getElementById('sub_amounRight').innerHTML = formatValue;

                let totalcart = '';
                for (let caring = 0; caring < cartArray.length; caring++) {
                    const element = cartArray[caring];
                    const imageFirst = JSON.parse(element.pimage);
                    let totalwithquanRight = parseInt(element.price);
                    let formatValueRight = new Intl.NumberFormat('en-IN').format(totalwithquanRight);
                    totalcart += `
                    <div class="cart_item_list">
                        <div class="car_item_image">
                            <img src="${'/laraecomm'+imageFirst[0]}" alt="">
                        </div>
                        <div class="item_all_info">
                            <div class="info_name">
                                ${element.name}
                            </div>
                            <div class="count_which">${element.quantity}x <span>৳ ${formatValueRight}</span></div>
                        </div>
                        <div class="action_items" onclick="splititem(${element.id})">
                            <i class="far fa-trash-alt"></i>
                        </div>
                    </div>
                    `;
                }
                document.getElementById('cartItemList').innerHTML = totalcart;

                
            } else if (findingind != -1) {
                let jsonArray = JSON.parse(cartExist);
                let oldQuantity = jsonArray[findingind].quantity;
                let totalQuantityNow = parseInt(orderObj.quantity) + parseInt(oldQuantity);
                if ( totalQuantityNow > currentProduct.quantity ) {
                    orderObj.quantity = parseInt(oldQuantity);
                    iziToast.error({
                        title: 'Failed',
                        message: 'Exceed available quantity',
                        position: 'topCenter',
                    });  
                    return;
                } else {
                    orderObj.quantity = totalQuantityNow;
                }
                jsonArray.splice(findingind,1,orderObj);
                localStorage.setItem('cart',JSON.stringify(jsonArray));
                iziToast.success({
                    title: 'Success',
                    message: 'Cart Updated',
                    position: 'topCenter',
                });
                document.getElementById('lblCartCount2').innerHTML = jsonArray.length;
                let total = 0;
                for (let index = 0; index < jsonArray.length; index++) {
                    const element = jsonArray[index];
                    let totalwithquan = parseInt(element.quantity) * parseInt(element.price);
                    total += totalwithquan;
                }
                let formatValue = new Intl.NumberFormat('en-IN').format(total);
                document.getElementById('totalCart').innerHTML = formatValue;
                document.getElementById('sub_amounRight').innerHTML = formatValue;

                let totalcart = '';
                for (let caring = 0; caring < jsonArray.length; caring++) {
                    const element = jsonArray[caring];
                    const imageFirst = JSON.parse(element.pimage);
                    let totalwithquanRight = parseInt(element.price);
                    let formatValueRight = new Intl.NumberFormat('en-IN').format(totalwithquanRight);
                    totalcart += `
                    <div class="cart_item_list">
                        <div class="car_item_image">
                            <img src="${'/laraecomm'+imageFirst[0]}" alt="">
                        </div>
                        <div class="item_all_info">
                            <div class="info_name">
                                ${element.name}
                            </div>
                            <div class="count_which">${element.quantity}x <span>৳ ${formatValueRight}</span></div>
                        </div>
                        <div class="action_items" onclick="splititem(${element.id})">
                            <i class="far fa-trash-alt"></i>
                        </div>
                    </div>
                    `;
                }
                document.getElementById('cartItemList').innerHTML = totalcart;

            } else {
                let jsonArray = JSON.parse(cartExist);
                jsonArray.push(orderObj);
                localStorage.setItem('cart',JSON.stringify(jsonArray));
                iziToast.success({
                    title: 'Success',
                    message: 'Product add to cart',
                    position: 'topCenter',
                });
                document.getElementById('lblCartCount2').innerHTML = jsonArray.length;
                let total = 0;
                for (let index = 0; index < jsonArray.length; index++) {
                    const element = jsonArray[index];
                    let totalwithquan = parseInt(element.quantity) * parseInt(element.price);
                    total += totalwithquan;
                }
                let formatValue = new Intl.NumberFormat('en-IN').format(total);
                document.getElementById('totalCart').innerHTML = formatValue;
                document.getElementById('sub_amounRight').innerHTML = formatValue;

                let totalcart = '';
                for (let caring = 0; caring < jsonArray.length; caring++) {
                    const element = jsonArray[caring];
                    const imageFirst = JSON.parse(element.pimage);
                    let totalwithquanRight = parseInt(element.price);
                    let formatValueRight = new Intl.NumberFormat('en-IN').format(totalwithquanRight);
                    totalcart += `
                    <div class="cart_item_list">
                        <div class="car_item_image">
                            <img src="${'/laraecomm'+imageFirst[0]}" alt="">
                        </div>
                        <div class="item_all_info">
                            <div class="info_name">
                                ${element.name}
                            </div>
                            <div class="count_which">${element.quantity}x <span>৳ ${formatValueRight}</span></div>
                        </div>
                        <div class="action_items" onclick="splititem(${element.id})">
                            <i class="far fa-trash-alt"></i>
                        </div>
                    </div>
                    `;
                }
                document.getElementById('cartItemList').innerHTML = totalcart;
                
            }
        }

    }


    function splititem(splId) {
        let cartForRight = JSON.parse(localStorage.getItem('cart'));
        let getSpid = cartForRight.findIndex(x => x.id == splId);
        cartForRight.splice(getSpid,1);
        localStorage.setItem('cart',JSON.stringify(cartForRight));
        let totalcart = '';
        for (let caring = 0; caring < cartForRight.length; caring++) {
            const element = cartForRight[caring];
            const imageFirst = JSON.parse(element.pimage);
            let totalwithquanRight = parseInt(element.price);
            let formatValueRight = new Intl.NumberFormat('en-IN').format(totalwithquanRight);
            totalcart += `
            <div class="cart_item_list">
                <div class="car_item_image">
                    <img src="${'/laraecomm'+imageFirst[0]}" alt="">
                </div>
                <div class="item_all_info">
                    <div class="info_name">
                        ${element.name}
                    </div>
                    <div class="count_which">${element.quantity}x <span>৳ ${formatValueRight}</span></div>
                </div>
                <div class="action_items" onclick="splititem(${element.id})">
                    <i class="far fa-trash-alt"></i>
                </div>
            </div>
            `;
        }
        document.getElementById('cartItemList').innerHTML = totalcart;
        document.getElementById('lblCartCount2').innerHTML = cartForRight.length;
    }