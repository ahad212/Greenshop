// const { default: axios } = require("axios");



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


  $('select').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length;
  
    $this.addClass('select-hidden'); 
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());
  
    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);
  
    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
        
    }
  
    var $listItems = $list.children('li');
  
    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
        
    });
  
    $listItems.click(function(e) {
        
        $('.select-options').find('li').each(function(){
            $(this).attr("style","color:black");
        });
        let a= $('.select-styled.active').text();
        let b = e.target;
        b.style.color = '#FF5137';
        console.log(a);
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        //console.log($this.val());
    });
  
    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});

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
