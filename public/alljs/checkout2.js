let virtualProductAmount = 0;
let regularProductAmount = 0;
document.getElementById('vartualPmail').style.display = 'none';
let cart = JSON.parse(localStorage.getItem('cart'));
for (let vartu = 0; vartu < cart.length; vartu++) {
    const element = cart[vartu];
    if (element.checked == true) {
        if (element.virtualP) {
            virtualProductAmount += 1;
        } else {
            regularProductAmount += 1;
        }
    }
}

//here two conditions for two things 
//first one for only virtual products
//second one for only virtual & physical products both
if (regularProductAmount == 0 && virtualProductAmount) {
    // alert(1);
    document.getElementById('shipping_select').style.display = 'none';
    document.getElementById('shipping_amount').style.display = 'none';
    document.getElementById('vartualPmail').style.display = 'block';
}
console.log(virtualProductAmount);
console.log(regularProductAmount);
if (regularProductAmount && virtualProductAmount) {
    // alert(2);
    document.getElementById('vartualPmail').style.display = 'block';
}


let totalcart = '';
let allTotalPrice = 0;
if (cart) {
    for (let index1 = 0; index1 < cart.length; index1++) {
        const element = cart[index1];
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
    document.getElementById('selectL0').innerHTML = allLoc;
    document.getElementById('selectL1').innerHTML = allLoc;
    
});


let totalPS = 0;
let finalShippingCharge = 0;
function shipingCostEval() {
    let allPA = JSON.parse(localStorage.getItem('cart'));
    let totalCost = 0;
    if (allPA) {
        for (let index = 0; index < allPA.length; index++) {
            const element = allPA[index];
            if (element.checked == true) {
                totalCost += parseInt(element.shipping,10) * parseInt(element.quantity,10);
            }
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
    finalShippingCharge = totalCosting;
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
            if (element.checked == true) {
                totalValue += parseInt(element.quantity) * parseInt(element.price);
            }
        }
    }
    totalValuewihShiping = totalValue + totalCosting;
    // console.log(totalCosting);
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






// address related all script start from here 


let modal = document.getElementById('main_modal');
let popupshed = document.getElementById('add_popup_shadow');
function openM() {
    let userDetails = JSON.parse(localStorage.getItem('userDetails'));
    modal.classList.toggle('content_visible');
    popupshed.style.display = 'block';
    document.body.classList.add('bodyblur');
    document.getElementById('addName').value = userDetails.username;
    document.getElementById('addNum').value = userDetails.phone;
}
//entry to open add address modal
if (localStorage.getItem('usertoken')) {
    openM();
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
    let id = Date.now();
    let addrObj = {name:name,number:number,city:city,address:address,id:id,checked:false};
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
    // check already address array available in database, if then just push item.
    if (!Array.isArray(addressArray)) {
        let addressArray = [];
        addressArray.push(addrObj);
        let addString = JSON.stringify(addressArray);
        let formdata = new FormData();
        formdata.append('address',addString);
        formdata.append('userID',userID);
        axios.post('/laraecomm/api/address/update',formdata).then( res=> {
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

$('#selectL0').select2();
$('#selectL1').select2();
let allAddressOfUser;

let modal1 = document.getElementById('main_modal1');
let popupshed1 = document.getElementById('add_popup_shadow1');
// take item from edit onclick 
function openAddressedit(item) {
    let indexofaddress = allAddressOfUser.findIndex(index=> index.id == item);
    let mainItem = allAddressOfUser[indexofaddress];
    modal1.classList.toggle('content_visible');
    popupshed1.style.display = 'block';
    document.body.classList.add('bodyblur');
    let id = document.getElementById('hiddenField').value = mainItem.id;
    let name = document.getElementById('addName1').value = mainItem.name;
    let number = document.getElementById('addNum1').value= mainItem.number;
    let cityOption = document.getElementById('selectL1');
    let city = cityOption.options[cityOption.selectedIndex].text;
    let address = document.getElementById('addADD1').value = mainItem.address;
    let home = document.getElementById('inlineRadio11');
    let office = document.getElementById('inlineRadio21');
    let addrObj = {name:name,number:number,city:city,address:address};

    if (mainItem.adjloc == 'home') {
        home.checked = true;
    }
    if(mainItem.adjloc == 'office') {
        office.checked = true;
    }

}
function closeEditM() {
    popupshed1.style.display = 'none';
    modal1.classList.toggle('content_visible');
    document.body.classList.remove('bodyblur');
}

//edit adddress part
function editAdd() {
    let userID = localStorage.getItem('userID');
    let id = document.getElementById('hiddenField').value;
    let name = document.getElementById('addName1').value;
    let number = document.getElementById('addNum1').value;
    let cityOption = document.getElementById('selectL1');
    let city = cityOption.options[cityOption.selectedIndex].text;
    let address = document.getElementById('addADD1').value;
    let home = document.getElementById('inlineRadio11');
    let office = document.getElementById('inlineRadio21');
    let addrEditObj = {name:name,number:number,city:city,address:address,id:id};
    if (home.checked == true) {
        addrEditObj.adjloc = home.value;
    } else {
        addrEditObj.adjloc = office.value;

    }
    let indexofaddress = allAddressOfUser.findIndex(index=> index.id == id);
    allAddressOfUser.splice(indexofaddress,1,addrEditObj);
    //send finaledit arary in database
    let formdata = new FormData();
    formdata.append('address',JSON.stringify(allAddressOfUser));
    formdata.append('userID',userID);
    axios.post('/laraecomm/api/address/update',formdata).then( res=> {
        iziToast.success({
            title: 'Success',
            message: res.data.message,
            position: 'topCenter',
        });
        getAddress();
    });
}

//delete address part

function deleteAddressedit(id) {
    let userID = localStorage.getItem('userID');
    let indexofaddress = allAddressOfUser.findIndex(index=> index.id == id);
    allAddressOfUser.splice(indexofaddress,1);
    let formdata = new FormData();
    formdata.append('address',JSON.stringify(allAddressOfUser));
    formdata.append('userID',userID);
    axios.post('/laraecomm/api/address/update',formdata).then( res=> {
        iziToast.success({
            title: 'Success',
            message: 'Address deleted Successfully',
            position: 'topCenter',
        });
        getAddress();
    });
}

//get address part
function getAddress() {
    let userID = localStorage.getItem('userID');
    let formdata = new FormData();
    formdata.append('userID',userID);
    axios.post('/laraecomm/api/address/getAddr',formdata).then( res=> {
        const {data:{address_arr:address}} = res;
        if (address) {
            let allAddress = JSON.parse(address);
            allAddressOfUser = allAddress;
            let all = '';
            for (let index = 0; index < allAddress.length; index++) {
                const element = allAddress[index];
                const eleString = JSON.stringify(element);
                all += `
                <label>
                    <input type="radio" name="address" style="display: none">
                    <div  class="add1" onclick="selectaddr('${element.id}')">
                        <div class="editAddress">
                            <i class="far fa-edit"  onclick="openAddressedit('${element.id}')"></i>
                        </div>
                        <div class="deleteAddress">
                            <i class="far fa-trash-alt" onclick="deleteAddressedit('${element.id}')"></i>
                        </div>
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
        }

    });
}
getAddress();

//select address item function 

function selectaddr(addrId) {
    let indexofaddress = allAddressOfUser.findIndex(index=> index.id == addrId);
    let mainItem = allAddressOfUser[indexofaddress];
    // mainItem.checked = true;
    // let userID = localStorage.getItem('userID');
    // let formdata = new FormData();
    // formdata.append('address',JSON.stringify(mainItem));
    // formdata.append('userID',userID);
    // axios.post('/laraecomm/api/address/update',formdata).then( res=> {
    //     // iziToast.success({
    //     //     title: 'Success',
    //     //     message: 'Address deleted Successfully',
    //     //     position: 'topCenter',
    //     // });
    //     getAddress();
    // });
    localStorage.setItem('selectedaddr',JSON.stringify(mainItem));
}

//payment method
let paymentGateway = '';
function paymentMethod(thisElement) {
    paymentGateway = thisElement;
}


//place order 

function placeOrder() {
    let address = JSON.parse(localStorage.getItem('selectedaddr'));
    let userID = localStorage.getItem('userID');
    let token = localStorage.getItem('usertoken');
    let cart = JSON.parse(localStorage.getItem('cart'));
    let shippingAddress = localStorage.getItem('locationName');
    let actuallyBuyCart= [];
    if (!token) {
        //open login modal
        background.classList.add('shadowopen');
        model.classList.add('shadowopen');
        document.body.classList.add('bodyblur');
        document.getElementById('main_warp').classList.add('main-warp'); 
        //login notification
        iziToast.error({
            title: 'Error',
            message: 'Please login to purchase first',
            position: 'topCenter',
        });       
    }
    if (!cart.length) {
        iziToast.error({
            title: 'Error',
            message: 'Please purchase an item first',
            position: 'topCenter',
        });
        // window.location.href = "ProductCategory/Bestsell";
        return;     
    }
    if (!address) {
        iziToast.error({
            title: 'Error',
            message: 'Please select or add address',
            position: 'topCenter',
        });
        return;     
    }
    if (!shippingAddress) {
        iziToast.error({
            title: 'Error',
            message: 'Select shipping area',
            position: 'topCenter',
        });
        return;        
    }
    if (!paymentGateway) {
        iziToast.error({
            title: 'Error',
            message: 'Please Choose Payment Method',
            position: 'topCenter',
        });
        return;
    }
    for (let index = 0; index < cart.length; index++) {
        const element = cart[index];
        if (element.checked == true) {
            actuallyBuyCart.push(element);
            // cart.splice(index,1);
        }
    }
    if (!actuallyBuyCart.length) {
        iziToast.error({
            title: 'Error',
            message: 'Please select a purchase item from cart',
            position: 'topCenter',
        });
        return;        
    }
    let email = document.getElementById('vproductMail');
    if (virtualProductAmount) {
        if (!email.value) {
            iziToast.error({
                title: 'Error',
                message: 'Please Give your mail for sending product',
                position: 'topCenter',
            });
            return;              
        }
    }

    let formdata = new FormData();
    formdata.append('id',userID);
    formdata.append('address',JSON.stringify(address));
    // check product type and take address accordingly
    if (virtualProductAmount && regularProductAmount==0) {
        formdata.append('shippingAddress',email.value);
    }
    else if (virtualProductAmount && regularProductAmount){
        let total_address = `${shippingAddress} + virtual address: ${email.value}`;
        formdata.append('shippingAddress',total_address);
    } 
    else if (regularProductAmount && virtualProductAmount==0) {
        formdata.append('shippingAddress',shippingAddress);
    }

    formdata.append('finalShippingCharge',finalShippingCharge);
    formdata.append('allTotalPrice',allTotalPrice);
    formdata.append('totalValuewihShiping',totalValuewihShiping);
    formdata.append('paymentGateway',paymentGateway);
    formdata.append('actuallyBuyCart',actuallyBuyCart);
    formdata.append('actuallyBuyCartString',JSON.stringify(actuallyBuyCart));
    let congrat = document.getElementById('congrat');
    axios.post('/laraecomm/api/order/insert',formdata).then(res=>{
        // deduct products from localstorage
        for (let index3 = 0; index3 < actuallyBuyCart.length; index3++) {
            const element = actuallyBuyCart[index3];
            let indx = cart.findIndex(res=> res.id = element.id);
            cart.splice(indx,1);
        }
        //save new cart array after deducting
        localStorage.setItem('cart',JSON.stringify(cart));
        // console.log(res.data.message);
        congrat.style.display = 'flex';
        document.body.classList.add('bodyblur');
    });
}