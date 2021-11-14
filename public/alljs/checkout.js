

    // term and condition 
    var terms = document.getElementById('terms_ac');
    var div_term = document.getElementById('terms_and_condition');
    terms.addEventListener('click', function(){
        div_term.classList.toggle('terms_show');
    });

    // for payment_method_check_system

    function checkTestPayment(a){
        var check1 = document.getElementById('flexCheckDefault_payment');
        var check2 = document.getElementById('flexCheckDefault_payment1');
        var check3 = document.getElementById('flexCheckDefault_payment2');
        check1.checked = false;
        check2.checked = false;
        check3.checked = false;
        var head1 = document.getElementById('payment_head1');
        var head2 = document.getElementById('payment_head2');
        var head3 = document.getElementById('payment_head3');
        head1.classList.remove('show_pay_height_toggle');
        head2.classList.remove('show_pay_height_toggle');
        head3.classList.remove('show_pay_height_toggle_spe');

        a.checked = true;
        if(a == flexCheckDefault_payment)
        {
            head1.classList.add('show_pay_height_toggle')
        }
        if(a == flexCheckDefault_payment1)
        {
            head2.classList.add('show_pay_height_toggle')
        }
        if(a == flexCheckDefault_payment2)
        {
            head3.classList.add('show_pay_height_toggle_spe')
        }


    }

    // for-copy-pass-from-account
    var dd = document.getElementById('eye_open1');
    var ee = document.getElementById('eye_close1');
    var ff = document.getElementById('pass');
    dd.addEventListener('click',function(){
        dd.style.display = 'none';
        ee.style.display = 'block';
        ff.type='text';
    });
    ee.addEventListener('click',function(){
        dd.style.display = 'block';
        ee.style.display = 'none';
        ff.type='password';
    });



    var returning = document.getElementById('re_sec');
    var tab_return = document.getElementById('returning_tab');
    returning.addEventListener('click',function(){
        tab_return.classList.toggle('show_return_tab');
    });
    
    // var returning1 = document.getElementById('login_em2');
    // var tab_return1 = document.getElementById('returning_tab');
    // returning1.addEventListener('click',function(){
    //     tab_return1.classList.toggle('show_return_tab');
    // });

    // login_eye
    var a = document.getElementById('eye_open_return');
    var b = document.getElementById('eye_close_return');
    var c = document.getElementById('exampleInputPassword1_return');
    a.addEventListener('click',function(){
        a.style.display = 'none';
        b.style.display = 'block';
        c.type='text';
    });
    b.addEventListener('click',function(){
        a.style.display = 'block';
        b.style.display = 'none';
        c.type='password';
    });




    // for-data-list-from-cart




//     class DataList1 {
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
