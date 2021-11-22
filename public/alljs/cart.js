let virtualProductAmount = 0;
let regularProductAmount = 0;
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

//if in cart only virtual product remove select are
if (regularProductAmount == 0 && virtualProductAmount) {
    // alert(1);
    document.getElementById('ship_p_select').style.display = 'none';

}

    
    
    // var ship = document.getElementById('cal_shipping');
    // var s_cal =document.getElementById('cal_modal_toggle');
    // ship.addEventListener('click',function(){
    //     s_cal.classList.toggle('show_cal_modal');
    // });

    function sendShippingData(){

        var shipping_data ={
             countery : document.getElementById('datalist-input').value,
             city : document.getElementById('datalist-input1').value,
             town : document.getElementById('town').value,
             zip : document.getElementById('zip').value,
        }
        console.log(shipping_data);
    }


// var ship = document.getElementById('cal_shipping');
//     var s_cal = $('#cal_modal_toggle');
//     ship.addEventListener('click',function(){
//         s_cal.toggle('slow',function(){
//             s_cal.addClass('show_cal_modal');
//         });
//     });



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
    
    name = $(this).attr('name');
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



    // for data-list

//     class DataList {
// 	constructor(containerId, inputId, listId, options) {
// 		this.containerId = containerId;
// 		this.inputId = inputId;
// 		this.listId = listId;
// 		this.options = options;
// 	}

// 	create(filter = "") {
// 		const list = document.getElementById(this.listId);
// 		const filterOptions = this.options.filter(
// 			d => filter === "" || d.text.includes(filter)
// 		);

// 		if (filterOptions.length === 0) {
// 			list.classList.remove("active");
// 		} else {
// 			list.classList.add("active");
// 		}

// 		list.innerHTML = filterOptions
// 			.map(o => `<li id=${o.value}>${o.text}</li>`)
// 			.join("");
// 	}

// 	addListeners(datalist) {
// 		const container = document.getElementById(this.containerId);
// 		const input = document.getElementById(this.inputId);
// 		const list = document.getElementById(this.listId);
// 		container.addEventListener("click", e => {
// 			if (e.target.id === this.inputId) {
// 				container.classList.toggle("active");
// 			} else if (e.target.id === "datalist-icon") {
// 				container.classList.toggle("active");
// 				input.focus();
// 			}
// 		});

// 		input.addEventListener("input", function(e) {
// 			if (!container.classList.contains("active")) {
// 				container.classList.add("active");
// 			}

// 			datalist.create(input.value);
// 		});

// 		list.addEventListener("click", function(e) {
// 			if (e.target.nodeName.toLocaleLowerCase() === "li") {
// 				input.value = e.target.innerText;
// 				container.classList.remove("active");
// 			}
// 		});
// 	}
// }

// const data = [
// 	{ value: "bn", text: "Bangladesh" },
// 	// { value: "2", text: "222 - 222" },
// 	// { value: "3", text: "333 - 333" },
// 	// { value: "4", text: "444 - 444" },
// 	// { value: "5", text: "555 - 555" },
// 	// { value: "6", text: "666 - 666" },
// 	// { value: "7", text: "777 - 777" },
// 	// { value: "8", text: "888 - 888" }
// ];

// const datalist = new DataList(
// 	"datalist",
// 	"datalist-input",
// 	"datalist-ul",
// 	data
// );
// datalist.create();
// datalist.addListeners(datalist);






// // for second data-list


// class DataList1 {
// 	constructor(containerId, inputId, listId, options) {
// 		this.containerId1 = containerId;
// 		this.inputId1 = inputId;
// 		this.listId1 = listId;
// 		this.options1 = options;
// 	}

// 	create(filter = "") {
// 		const list1 = document.getElementById(this.listId1);
// 		const filterOptions1 = this.options1.filter(
// 			d => filter === "" || d.text.includes(filter)
// 		);

// 		if (filterOptions1.length === 0) {
// 			list1.classList.remove("active");
// 		} else {
// 			list1.classList.add("active");
// 		}

// 		list1.innerHTML = filterOptions1
// 			.map(o => `<li id=${o.value}>${o.text}</li>`)
// 			.join("");
// 	}

// 	addListeners(datalist1) {
// 		const container1 = document.getElementById(this.containerId1);
// 		const input1 = document.getElementById(this.inputId1);
// 		const list1 = document.getElementById(this.listId1);
// 		container1.addEventListener("click", e => {
// 			if (e.target.id === this.inputId1) {
// 				container1.classList.toggle("active");
// 			} else if (e.target.id === "datalist-icon1") {
// 				container1.classList.toggle("active");
// 				input1.focus();
// 			}
// 		});

// 		input1.addEventListener("input", function(e) {
// 			if (!container1.classList.contains("active")) {
// 				container1.classList.add("active");
// 			}

// 			datalist1.create(input1.value);
// 		});

// 		list1.addEventListener("click", function(e) {
// 			if (e.target.nodeName.toLocaleLowerCase() === "li") {
// 				input1.value = e.target.innerText;
// 				container1.classList.remove("active");
// 			}
// 		});
// 	}
// }

// const data1 = [
// 	{ value: "Dhaka", text: "Dhaka" },
// 	{ value: "Jessore", text: "Jessore" },
// 	{ value: "Khulna", text: "Khulna" },
// 	{ value: "Chuadanga", text: "Chuadanga" },
// 	{ value: "Norail", text: "Norail" },
// 	{ value: "Pabna", text: "Pabna" },
// 	{ value: "Sylhet", text: "Sylhet" },
// 	{ value: "Borisal", text: "Borisal" }
// ];

// const datalist1 = new DataList1(
// 	"datalist1",
// 	"datalist-input1",
// 	"datalist-ul1",
// 	data1
// );
// datalist1.create();
// datalist1.addListeners(datalist1);

// dynamic js start from here 


function renderCart() {
    let cartDetails = JSON.parse(localStorage.getItem('cart'));
    // console.log(JSON.parse(cartDetails[0].pimage)[0]);
    let totcart = '';
    for (let cartDet = 0; cartDet < cartDetails.length; cartDet++) {
        const element = cartDetails[cartDet];
        const img = JSON.parse(element.pimage)[0];
        let total1 = parseInt(element.quantity,10) * parseInt(element.price,10);
        let formatValue1 = new Intl.NumberFormat('en-IN').format(total1);
        let checkedd = (element.checked == true) ? 'checked':'';
        totcart +=`
        <tr style="border-bottom:1px solid rgba(0,0,0,0.2);height:100px;">
            <td style="width:60px; display:flex;align-items:center;padding-top:20px;">
                <input type="checkbox" id="${element.id}" style="cursor:pointer;margin-right:5px;" onchange="selectDeselect(${element.id})" ${checkedd}>
                <img class="cart_img" src="${'/laraecomm'+img}" alt="">
            </td>
            <td style="width:400px;">
                <div class="naming_p">
                    ${element.name}
                </div>
                <div class="cart_t_p">
                ৳ ${element.price}
                </div>
            </td>
            <td  style="width:180px;">
                <div class="center">
                    <div class="input-group total_pm">
                        <span class="input-group-btn minuss">
                            <div type="button" id="${'btnn'+element.id}" class="btn-number" onclick="minus(${element.id})">
                                -
                            </div>
                        </span>
                        <input type="text" name="quant[2]" class="form-control input-number" value="${element.quantity}" min="1" max="${element.totalQuantity}">
                        <span class="input-group-btn pluss">
                            <div id="${'btnn2'+element.id}" class="btn-number" onclick="plus(${element.id},${element.totalQuantity})">
                                +
                            </div>
                        </span>
                    </div>
                </div>
            </td>
            <td>
                <div class="totall">
                ৳ ${formatValue1}
                </div>
                <span class="icon_del" onclick="delCartItem(${element.id})">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                </span>
            </td>
        </tr>
        `;
        
    }
    document.getElementById('cartBoard').innerHTML = totcart;
}
renderCart();
function delCartItem(id) {
    let cartDetails = JSON.parse(localStorage.getItem('cart'));
    let getIndex = cartDetails.findIndex(item=> item.id == id);
    if (getIndex != -1) {
        cartDetails.splice(getIndex,1);
        console.log(cartDetails);
        localStorage.setItem('cart',JSON.stringify(cartDetails));
        document.getElementById('lblCartCount2').innerHTML = cartDetails.length;
        renderCart();
        totalcartvalue();
        autocart();
    }
}

// end left part dom loop

$('#sss').select2();
let totalPS = '';
let totalPrice= 0;
function totalcartvalue() {
    let totalcost = JSON.parse(localStorage.getItem('cart'));
    let total = 0;
    if (totalcost) {
        for (let index = 0; index < totalcost.length; index++) {
            const element = totalcost[index];
            if (element.checked == true) {
                let totalwithquan = parseInt(element.quantity) * parseInt(element.price);
                total += totalwithquan;
            }
        }
    }
    let formatValue = new Intl.NumberFormat('en-IN').format(total);
    totalPrice = total;
    document.getElementById('r_tak').innerHTML = '৳ '+formatValue;
}
totalcartvalue();


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
    document.getElementById('sss').innerHTML = allLoc;
    
});

function takeValue(costing) {
    let selectTedOption = costing.options[costing.selectedIndex];
    let text = selectTedOption.text;
    let value = selectTedOption.value;
    localStorage.setItem('locationShipping',value);
    localStorage.setItem('locationName',text);
    shipcharge();
    totalCalculate();
}

function shipingCostEval() {
    let allPA = JSON.parse(localStorage.getItem('cart'));
    let totalCost = 0;
    for (let index = 0; index < allPA.length; index++) {
        const element = allPA[index];
        if (element.checked == true) {
            totalCost += parseInt(element.shipping,10) * parseInt(element.quantity,10);
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

function totalCalculate() {
    let costingLocalShiping = parseInt(localStorage.getItem('locationShipping'),10);
    if (!costingLocalShiping) {
        costingLocalShiping = 0;
    }
    let costingProductShiping = totalPS;
    let totalCosting = costingLocalShiping + costingProductShiping;
    let totalAddedPrice = totalCosting + totalPrice;
    let formatValue = new Intl.NumberFormat('en-IN').format(totalAddedPrice);
    document.getElementById('t_head_taka').innerHTML = formatValue;
}
totalCalculate();





function selectDeselect(id) {
    let inputElement = document.getElementById(id);
    if (inputElement.checked == false) {
        localStorage.setItem('allselect', '');
        let totalCart = JSON.parse(localStorage.getItem('cart'));
        let getIndex = totalCart.findIndex(res=> res.id == id);
        const item = totalCart[getIndex];
        item.checked = false;
        localStorage.setItem('cart',JSON.stringify(totalCart));
    } else {
        // localStorage.setItem('allselect','checked');
        let totalCart = JSON.parse(localStorage.getItem('cart'));
        let getIndex = totalCart.findIndex(res=> res.id == id);
        const item = totalCart[getIndex];
        item.checked = true;
        localStorage.setItem('cart',JSON.stringify(totalCart));
        allselectHave(); 
    }
    
    
    let totalcost = JSON.parse(localStorage.getItem('cart'));
    let total = 0;
    if (totalcost) {
        for (let index = 0; index < totalcost.length; index++) {
            const element = totalcost[index];
            if (element.checked == true) {
                let totalwithquan = parseInt(element.quantity) * parseInt(element.price);
                total += totalwithquan;
            }
        }
    }
    let formatValue = new Intl.NumberFormat('en-IN').format(total);
    totalPrice = total;
    document.getElementById('r_tak').innerHTML = '৳ '+formatValue;
    
    shipingCostEval();
    shipcharge();
    totalCalculate();
    // allselectHave();
    autoCheckedDetect();
}
//check if all items checkbox is checked then select all will be checked from here logic.
function allselectHave() {
	let cartDetails = JSON.parse(localStorage.getItem('cart'));
    let chccct = 1;
    for (let index = 0; index < cartDetails.length; index++) {
        const element = cartDetails[index];
        console.log(element.checked);
        chccct *= Number(element.checked);
        if (element.checked == false) {
            localStorage.setItem('allselect','');
        }
    }
    if (chccct) {
        localStorage.setItem('allselect','checked');
    }
}
// allselectHave();

function autoCheckedDetect() {
    let autocheck = localStorage.getItem('allselect');
    let st = `
        <input type="checkbox" name="" id="checking" onchange="selectAll()" ${autocheck}>
    `;
    document.getElementById('labelId2').innerHTML = st;
}
autoCheckedDetect();

// all items checked or not checked
function selectAll() {
    let checkBox = document.getElementById('checking');
	if (checkBox.checked == false) {
        localStorage.setItem('allselect','');
        let cartDetails1 = JSON.parse(localStorage.getItem('cart'));
        for (let uncheck = 0; uncheck < cartDetails1.length; uncheck++) {
            const element = cartDetails1[uncheck];
            element.checked = false;
        }
        console.log(cartDetails1);
        localStorage.setItem('cart',JSON.stringify(cartDetails1));
    } else {
        localStorage.setItem('allselect','checked');
        let cartDetails1 = JSON.parse(localStorage.getItem('cart'));
        for (let uncheck = 0; uncheck < cartDetails1.length; uncheck++) {
            const element = cartDetails1[uncheck];
            element.checked = true;
        }
        console.log(cartDetails1);
        localStorage.setItem('cart',JSON.stringify(cartDetails1));
    }
    
    let totalcost = JSON.parse(localStorage.getItem('cart'));
    let total = 0;
    if (totalcost) {
        for (let index = 0; index < totalcost.length; index++) {
            const element = totalcost[index];
            if (element.checked == true) {
                let totalwithquan = parseInt(element.quantity) * parseInt(element.price);
                total += totalwithquan;
            }
        }
    }
    let formatValue = new Intl.NumberFormat('en-IN').format(total);
    totalPrice = total;
    document.getElementById('r_tak').innerHTML = '৳ '+formatValue;
    
    shipingCostEval();
    shipcharge();
    totalCalculate();
    renderCart();
    autoCheckedDetect();
}


function minus(decreaseId) {
	let cartDetails = JSON.parse(localStorage.getItem('cart'));
	let searchInd = cartDetails.findIndex(ind=> ind.id == decreaseId);
	let quantityCheck = cartDetails[searchInd].quantity = cartDetails[searchInd].quantity-1;
	if (quantityCheck > 0) {
		localStorage.setItem('cart',JSON.stringify(cartDetails));
		renderCart();
		totalcartvalue();
		autocart();


        let totalcost = JSON.parse(localStorage.getItem('cart'));
        let total = 0;
        if (totalcost) {
            for (let index = 0; index < totalcost.length; index++) {
                const element = totalcost[index];
                if (element.checked == true) {
                    let totalwithquan = parseInt(element.quantity) * parseInt(element.price);
                    total += totalwithquan;
                }
            }
        }
        let formatValue = new Intl.NumberFormat('en-IN').format(total);
        totalPrice = total;
        document.getElementById('r_tak').innerHTML = '৳ '+formatValue;
        
        shipingCostEval();
        shipcharge();
        totalCalculate();
        selectquan();
        cartLength();
	}
}
function plus(increaseId,totalQuantity) {
	let cartDetails = JSON.parse(localStorage.getItem('cart'));
	let searchInd = cartDetails.findIndex(ind=> ind.id == increaseId);
	let quantityCheck = cartDetails[searchInd].quantity = parseInt(cartDetails[searchInd].quantity) + 1;
	if (quantityCheck <= totalQuantity) {
		localStorage.setItem('cart',JSON.stringify(cartDetails));
		renderCart();
		totalcartvalue();
		autocart();

        let totalcost = JSON.parse(localStorage.getItem('cart'));
        let total = 0;
        if (totalcost) {
            for (let index = 0; index < totalcost.length; index++) {
                const element = totalcost[index];
                if (element.checked == true) {
                    let totalwithquan = parseInt(element.quantity) * parseInt(element.price);
                    total += totalwithquan;
                }
            }
        }
        let formatValue = new Intl.NumberFormat('en-IN').format(total);
        totalPrice = total;
        document.getElementById('r_tak').innerHTML = '৳ '+formatValue;
        
        shipingCostEval();
        shipcharge();
        totalCalculate();

        
	} else {
		iziToast.error({
			title: 'Failed',
			message: 'Exceed available quantity',
			position: 'topCenter',
		});
	}
    selectquan();
    cartLength();
}


function selectquan() {
    let labelBox = document.getElementById('lebelId');
    let totalcost = JSON.parse(localStorage.getItem('cart'));
    let allQuantity = 0;
    if (totalcost) {
        for (let index = 0; index < totalcost.length; index++) {
            const element = totalcost[index];
             allQuantity += parseInt(element.quantity);
        }
    }
    labelBox.innerHTML = `SELECT ALL (${allQuantity} ITEM(S))`;
    
}
selectquan();