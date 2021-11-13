
let cart = JSON.parse(localStorage.getItem('cart'));
let totalcart = '';
let allTotalPrice = 0;
for (let index = 0; index < cart.length; index++) {
const element = cart[index];
const img = JSON.parse(element.pimage)[0];
const totalPrice = parseInt(element.quantity) * parseInt(element.price);
allTotalPrice += totalPrice;
let formatValue1 = new Intl.NumberFormat('en-IN').format(totalPrice);

totalcart += `
<div class="heda_imidiate  custom_pad_inner">
<div class="c_p_img"><img src="${'/laraecomm'+img}" alt=""></div>
<div class="c_p_mid" style="color:black;">${element.name} <aside>(x ${element.quantity})</aside></div>
<div class="c_p_final">৳ ${formatValue1}</div>
</div>
`;
}

document.getElementById('productDetails').innerHTML = totalcart;

// product details end 


let formatValue2 = new Intl.NumberFormat('en-IN').format(allTotalPrice);
document.getElementById('subVal').innerHTML = `৳ ${formatValue2}`;

// subtotal end 



// all calculation here 


$('#selectL').select2();
$('#townSelect').select2();


axios.get('/laraecomm/api/V1/location').then( res=> {
    let location = res.data.data;
    let allLoc;
    let selectedLoc = localStorage.getItem('locationName');
    for (let indexLoc = 0; indexLoc < location.length; indexLoc++) {
        const element = location[indexLoc];
        if (element.name == selectedLoc) {
            allLoc += `
                <option value="${element.shippingcost}" selected>${element.name}</option>
            `;
        } else {
            allLoc += `
                <option value="${element.shippingcost}">${element.name}</option>
            `;
        }


    }
    allLoc = `<option value="00">Select Location</option>`+allLoc;
    document.getElementById('selectL').innerHTML = allLoc;
    
});


let totalPS = 0;
function shipingCostEval() {
    let allPA = JSON.parse(localStorage.getItem('cart'));
    let totalCost = 0;
    for (let index = 0; index < allPA.length; index++) {
        const element = allPA[index];
        totalCost += parseInt(element.shipping,10);
    }
    totalPS = totalCost;
}
shipingCostEval();

function shipcharge() {
    let costingLocalShiping = parseInt(localStorage.getItem('locationShipping'),10);
    if (!costingLocalShiping) {
        costingLocalShiping = 0;
    }
    let costingProductShiping = totalPS;
    let totalCosting = costingLocalShiping + costingProductShiping;
    document.getElementById('shipCharge').innerHTML = '৳ '+ totalCosting;
}
shipcharge();


function takeValue(costing) {
    let selectTedOption = costing.options[costing.selectedIndex];
    let text = selectTedOption.text;
    let value = selectTedOption.value;
    localStorage.setItem('locationShipping',value);
    localStorage.setItem('locationName',text);
    shipcharge();
    allFinalValue();
}

function allFinalValue() {
    let costingLocalShiping = parseInt(localStorage.getItem('locationShipping'),10);
    if (!costingLocalShiping) {
        costingLocalShiping = 0;
    }
    let costingProductShiping = totalPS;
    let totalCosting = costingLocalShiping + costingProductShiping;

    let totalValue = 0;
    let cartCache = JSON.parse(localStorage.getItem('cart'));
    for (let index = 0; index < cartCache.length; index++) {
        const element = cartCache[index];
        totalValue += parseInt(element.quantity) * parseInt(element.price);
    }
    totalValuewihShiping = totalValue + totalCosting;
    let formatValue = new Intl.NumberFormat('en-IN').format(totalValuewihShiping);
    document.getElementById('totalVal').innerHTML = `৳ ${formatValue}`;
}
allFinalValue();
