// const { default: axios } = require("axios");

  let SELECTED_OPTION = '';

//   for off-canvas

  $( function() {
    $( "#slider-range2" ).slider({
      range: true,
      min: 0,
      max: 200000,
      values: [ 0, 200000 ],
      slide: function( event, ui ) {
        $( "#amount2" ).val( "৳" + ui.values[ 0 ] + " - ৳" + ui.values[ 1 ] );
        // console.log(ui.values[ 0 ],ui.values[ 1 ]);
        //laraecomm will be removed
        let formData = new FormData();
        formData.append('min',ui.values[ 0 ]);
        formData.append('max',ui.values[ 1 ]);
        axios.post('/laraecomm/api/product/filter',formData).then(res=>{
          console.log(res);
        });
      }
    });
    $( "#amount2" ).val( "৳" + $( "#slider-range2" ).slider( "values", 0 ) +
      " - ৳" + $( "#slider-range2" ).slider( "values", 1 ) );
  } );


//   $('select').each(function(){
//     var $this = $(this), numberOfOptions = $(this).children('option').length;
  
//     $this.addClass('select-hidden'); 
//     $this.wrap('<div class="select"></div>');
//     $this.after('<div class="select-styled"></div>');

//     var $styledSelect = $this.next('div.select-styled');
//     $styledSelect.text($this.children('option').eq(0).text());
  
//     var $list = $('<ul />', {
//         'class': 'select-options'
//     }).insertAfter($styledSelect);
  
//     for (var i = 0; i < numberOfOptions; i++) {
//         $('<li />', {
//             text: $this.children('option').eq(i).text(),
//             rel: $this.children('option').eq(i).val()
//         }).appendTo($list);
        
//     }
  
//     var $listItems = $list.children('li');
  
//     $styledSelect.click(function(e) {
//         e.stopPropagation();
//         $('div.select-styled.active').not(this).each(function(){
//             $(this).removeClass('active').next('ul.select-options').hide();
//         });
//         $(this).toggleClass('active').next('ul.select-options').toggle();
        
//     });
  
//     $listItems.click(function(e) {
        
//         $('.select-options').find('li').each(function(){
//             $(this).attr("style","color:black");
//         });
//         let a= $('.select-styled.active').text();
//         SELECTED_OPTION = a;
        
//         let b = e.target;
//         b.style.color = '#FF5137';
//         // console.log(a);
//         e.stopPropagation();
//         $styledSelect.text($(this).text()).removeClass('active');
//         $this.val($(this).attr('rel'));
//         $list.hide();
//         //console.log($this.val());
//     });
  
//     $(document).click(function() {
//         $styledSelect.removeClass('active');
//         $list.hide();
//     });

// });

// list-grid-script start


function showList(e) {
  var $gridCont = $('.grid-container');
  e.preventDefault();
  $gridCont.hasClass('list-view') ? $gridCont.addClass('list-view') : $gridCont.addClass('list-view');
  $('.btn-grid').removeClass('orange');
  $('.btn-list').addClass('orange');
}
function gridList(e) {
  var $gridCont = $('.grid-container')
  e.preventDefault();
  $gridCont.removeClass('list-view');
  $('.btn-grid').addClass('orange');
  $('.btn-list').removeClass('orange');
}

$(document).on('click', '.btn-grid', gridList);
$(document).on('click', '.btn-list', showList);




// showing products with filter 
let path = location.pathname;
let mainPath = path.substring(27);
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

//get max min array
function show(min,max,path) {
    let formData = new FormData();
    formData.append('min',min);
    formData.append('max',max);
    formData.append('path',path);
    axios.post('/laraecomm/api/product/filter',formData).then(res=>{
        showingProducts(res.data);
    });
}
show(0,500000,mainPath);


function filter2(option) {
    const SELECTED_VALUE = option.options[option.selectedIndex].value;
    let desc = 0;
    let orderBy = 'id';

    switch (SELECTED_VALUE) {
        case 'sort-by-letest':
            desc = 1;
            orderBy= 'id';
            break;
        case 'price-low-to-high':
            orderBy = 'price';
            desc = 0;
            break;
        case 'price-high-to-low':
            orderBy = 'price';
            desc = 1;
            break;
        default:
            orderBy = 'id';
            desc = 0;
            break;
    }
    let formData = new FormData();
    formData.append('orderBy',orderBy);
    formData.append('desc',desc);
    axios.post('/laraecomm/api/product/orderfilter',formData).then(res=>{
        showingProducts(res.data);
    });
}


function getMaxMin() {
    let range = document.getElementById('amount').value;
    let MAX_MIN_VALUE_ARRAY = range.replaceAll('৳','').split('-');
    let min = parseInt(MAX_MIN_VALUE_ARRAY[0],10);
    let max = parseInt(MAX_MIN_VALUE_ARRAY[1],10);
    window.show(min,max,mainPath);
}
let ProductsForBrandFilterArray = [];
function getCategoryQuantity() {
    axios.get('/laraecomm/api/V1/product/filter').then(res=>{
        let all= '';
        ProductsForBrandFilterArray = res.data;
        for (let index = 0; index < res.data.length; index++) {
        const element = JSON.parse(res.data[index]);
        let elementArray =  JSON.parse(element.items);
        all += `
            <li onclick="filterByBrand(${index})">${element.cname} <span> (${elementArray.length})</span></li>
        `;
        }
        document.getElementById('ullist').innerHTML = all;
    });    
}
getCategoryQuantity();

function filterByBrand(index) {
  let ProductArray  = JSON.parse(JSON.parse(ProductsForBrandFilterArray[index]).items);
  showingProducts(ProductArray);
}

//showing products

function showingProducts(arrayGun) {
  if (arrayGun.length) {
    let allp = '';
    for (let index = 0; index < arrayGun.length; index++) {
        const element = arrayGun[index];
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
                    <div class="add_to_cart" onclick="viewDetails('${element.slug}')">View Details</div>
                </div>
            </div>
        </div>                
        `;
    }
    document.getElementById('main_card').innerHTML = allp;
  } else {
    document.getElementById('main_card').innerHTML = 'No products';
  }
    
}


function viewDetails(slugName) {
location.href = `/laraecomm/Product/${slugName}`;
}