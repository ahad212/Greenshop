
    var ship = document.getElementById('cal_shipping');
    var s_cal =document.getElementById('cal_modal_toggle');
    ship.addEventListener('click',function(){
        s_cal.classList.toggle('show_cal_modal');
    });

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

    class DataList {
	constructor(containerId, inputId, listId, options) {
		this.containerId = containerId;
		this.inputId = inputId;
		this.listId = listId;
		this.options = options;
	}

	create(filter = "") {
		const list = document.getElementById(this.listId);
		const filterOptions = this.options.filter(
			d => filter === "" || d.text.includes(filter)
		);

		if (filterOptions.length === 0) {
			list.classList.remove("active");
		} else {
			list.classList.add("active");
		}

		list.innerHTML = filterOptions
			.map(o => `<li id=${o.value}>${o.text}</li>`)
			.join("");
	}

	addListeners(datalist) {
		const container = document.getElementById(this.containerId);
		const input = document.getElementById(this.inputId);
		const list = document.getElementById(this.listId);
		container.addEventListener("click", e => {
			if (e.target.id === this.inputId) {
				container.classList.toggle("active");
			} else if (e.target.id === "datalist-icon") {
				container.classList.toggle("active");
				input.focus();
			}
		});

		input.addEventListener("input", function(e) {
			if (!container.classList.contains("active")) {
				container.classList.add("active");
			}

			datalist.create(input.value);
		});

		list.addEventListener("click", function(e) {
			if (e.target.nodeName.toLocaleLowerCase() === "li") {
				input.value = e.target.innerText;
				container.classList.remove("active");
			}
		});
	}
}

const data = [
	{ value: "bn", text: "Bangladesh" },
	// { value: "2", text: "222 - 222" },
	// { value: "3", text: "333 - 333" },
	// { value: "4", text: "444 - 444" },
	// { value: "5", text: "555 - 555" },
	// { value: "6", text: "666 - 666" },
	// { value: "7", text: "777 - 777" },
	// { value: "8", text: "888 - 888" }
];

const datalist = new DataList(
	"datalist",
	"datalist-input",
	"datalist-ul",
	data
);
datalist.create();
datalist.addListeners(datalist);






// for second data-list


class DataList1 {
	constructor(containerId, inputId, listId, options) {
		this.containerId1 = containerId;
		this.inputId1 = inputId;
		this.listId1 = listId;
		this.options1 = options;
	}

	create(filter = "") {
		const list1 = document.getElementById(this.listId1);
		const filterOptions1 = this.options1.filter(
			d => filter === "" || d.text.includes(filter)
		);

		if (filterOptions1.length === 0) {
			list1.classList.remove("active");
		} else {
			list1.classList.add("active");
		}

		list1.innerHTML = filterOptions1
			.map(o => `<li id=${o.value}>${o.text}</li>`)
			.join("");
	}

	addListeners(datalist1) {
		const container1 = document.getElementById(this.containerId1);
		const input1 = document.getElementById(this.inputId1);
		const list1 = document.getElementById(this.listId1);
		container1.addEventListener("click", e => {
			if (e.target.id === this.inputId1) {
				container1.classList.toggle("active");
			} else if (e.target.id === "datalist-icon1") {
				container1.classList.toggle("active");
				input1.focus();
			}
		});

		input1.addEventListener("input", function(e) {
			if (!container1.classList.contains("active")) {
				container1.classList.add("active");
			}

			datalist1.create(input1.value);
		});

		list1.addEventListener("click", function(e) {
			if (e.target.nodeName.toLocaleLowerCase() === "li") {
				input1.value = e.target.innerText;
				container1.classList.remove("active");
			}
		});
	}
}

const data1 = [
	{ value: "Dhaka", text: "Dhaka" },
	{ value: "Jessore", text: "Jessore" },
	{ value: "Khulna", text: "Khulna" },
	{ value: "Chuadanga", text: "Chuadanga" },
	{ value: "Norail", text: "Norail" },
	{ value: "Pabna", text: "Pabna" },
	{ value: "Sylhet", text: "Sylhet" },
	{ value: "Borisal", text: "Borisal" }
];

const datalist1 = new DataList1(
	"datalist1",
	"datalist-input1",
	"datalist-ul1",
	data1
);
datalist1.create();
datalist1.addListeners(datalist1);

