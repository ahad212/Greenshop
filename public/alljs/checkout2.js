
let cart = JSON.parse(localStorage.getItem('cart'));
let totalcart = '';
let allTotalPrice = 0;
if (cart) {
    for (let index = 0; index < cart.length; index++) {
        const element = cart[index];
        if (element.checked) {
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

    }
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
    if (allPA) {
        for (let index = 0; index < allPA.length; index++) {
            const element = allPA[index];
            totalCost += parseInt(element.shipping,10);
        }
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
    if (cartCache) {
        for (let index = 0; index < cartCache.length; index++) {
            const element = cartCache[index];
            totalValue += parseInt(element.quantity) * parseInt(element.price);
        }
    }
    totalValuewihShiping = totalValue + totalCosting;
    let formatValue = new Intl.NumberFormat('en-IN').format(totalValuewihShiping);
    document.getElementById('totalVal').innerHTML = `৳ ${formatValue}`;
}
allFinalValue();


// check returning 

// let userToken = localStorage.getItem('usertoken');
// if (userToken) {
//     let returning = document.getElementById('returning');
//     let returningHr = document.getElementById('returningHr');
//     returning.style.display = 'none';
//     returningHr.style.display = 'none';
// }


// address script 







let modal = document.getElementById('main_modal');
let popupshed = document.getElementById('add_popup_shadow');
function openM() {
    modal.classList.toggle('content_visible');
    popupshed.style.display = 'block';
    document.body.classList.add('bodyblur');

}
function closeM() {
    popupshed.style.display = 'none';
    modal.classList.toggle('content_visible');
    document.body.classList.remove('bodyblur');
}
async function sendadd() {
    let name = document.getElementById('addName').value;
    let number = document.getElementById('addNum').value;
    let cityOption = document.getElementById('selectL');
    let city = cityOption.options[cityOption.selectedIndex].text;
    let address = document.getElementById('addADD').value;
    let home = document.getElementById('inlineRadio1');
    let office = document.getElementById('inlineRadio2');
    let addrObj = {name:name,number:number,city:city,address:address};
    // let formdata = new FormData();
    // formdata.append('name',name);
    // formdata.append('number',number);
    // formdata.append('city',city);
    // formdata.append('address',address);
    if (home.checked == true) {
        addrObj.adjloc = home.value;
    } else {
        addrObj.cityOption = office.value;

    }
    let addressArray;
    let userID = localStorage.getItem('userID');
    let formdataId = new FormData();
    formdataId.append('userID',userID);
    await axios.post('/laraecomm/api/address/getAddr',formdataId).then( res=> {
        let allAddress = JSON.parse(res.data.address_arr);
        addressArray = allAddress;
    });
    // check already address available in database
    if (!Array.isArray(addressArray)) {
        let addressArray = [];
        addressArray.push(addrObj);
        let addString = JSON.stringify(addressArray);
        let formdata = new FormData();
        formdata.append('address',addString);
        formdata.append('userID',userID);
        axios.post('/laraecomm/api/address/update',formdata).then( res=> {
            console.log(res.data);
            if (res.data.error) {
                iziToast.error({
                    title: 'Failed',
                    message: res.data.message,
                    position: 'topCenter',
                });
            } else {
                iziToast.success({
                    title: 'Success',
                    message: res.data.message,
                    position: 'topCenter',
                });
            }
            getAddress();
        });
    } else {
        addressArray.push(addrObj);
        let addString = JSON.stringify(addressArray);
        let formdata = new FormData();
        formdata.append('address',addString);
        formdata.append('userID',userID);
        axios.post('/laraecomm/api/address/update',formdata).then( res=> {
            console.log(res.data);
            if (res.data.error) {
                iziToast.error({
                    title: 'Failed',
                    message: res.data.message,
                    position: 'topCenter',
                });
            } else {
                iziToast.success({
                    title: 'Success',
                    message: res.data.message,
                    position: 'topCenter',
                });
            }
            getAddress();
        });
    }


}


function getAddress() {
    let userID = localStorage.getItem('userID');
    let formdata = new FormData();
    formdata.append('userID',userID);
    axios.post('/laraecomm/api/address/getAddr',formdata).then( res=> {
        let allAddress = JSON.parse(res.data.address_arr);
        console.log(allAddress);
        let all = '';
        for (let index = 0; index < allAddress.length; index++) {
            const element = allAddress[index];
            all += `
            <label>
                <input type="radio" name="address" style="display: none">
                <div  class="add1">
                    <div class="el1" style="margin-left:4px;">
                        <i class="fas fa-map-marker"></i> <span> ${element.city}</span>
                    </div>
                    <div class="el2">
                        <i class="fas fa-home"></i> <span> ${element.address}</span>
                    </div>
                    <div class="el3">
                        <i class="fas fa-mobile-alt" style="margin-left:3px;"></i> <span style="margin-left:-5px;"> ${element.number}</span>
                    </div>
                </div>
            </label>
            `;
        }
        document.getElementById('showAddress').innerHTML = all;
    });
}
getAddress();