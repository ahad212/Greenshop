
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    autoplay : true,
    margin:-2,
    nav:true,
    responsive:{
        0:{
            items:2
        },
        750:{
            items:3
        },
        1000:{
            items:4
        },
        1200:{
            items:5
        },
        1400:{
            items:6
        }
    }
});

});

window.onresize = function(){
    var a = window.innerWidth;
    if(a == 1000)
    {
        console.log(a);
    }
}

let loader = document.getElementById('loader');
loader.style.display = 'block';

setTimeout(() => {
    loader.style.display = 'none';
}, 1000);


function search() {
    let searchText = document.getElementById('searchText').value;
    console.log(searchText);
    let formdata = new FormData();
    formdata.append('Searchtext',searchText);
    axios.post('/laraecomm/api/product/search',formdata).then( res=>{
        const {data: allData} = res;
        let allsearchProducts = '';
        for (let index = 0; index < allData.length; index++) {
            const element = res.data[index];
            const elementImg = JSON.parse(element.pimage)[0];
            console.log(element);
            console.log(elementImg);
            allsearchProducts += `
            <div class="searchItem">
                <div class="ims">
                    <img class="imgs" src="${'/laraecomm'+elementImg}" alt="">
                </div>
                <div class="pname">
                    <a href="/laraecomm/Product/${element.slug}">${element.name}</a>
                </div>
            </div>
            `;
        }
        document.getElementById('allsearchShow').style.border = '1px solid black';
        document.getElementById('allsearchShow').innerHTML = allsearchProducts;
    });
}