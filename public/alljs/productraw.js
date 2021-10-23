
    // imei 
    
    // var emi_switch = document.getElementById('flexCheckDefaultimi');
    // var emi = document.getElementById('imei');
    // emi_switch.addEventListener('click',function(){
    //     emi.classList.toggle('imei_show');
    // });

    // change city delivery

    var cus_slect  = document.getElementById('cust_select');
    var cange_b  = document.getElementById('change_but_deli');
    var cancel_b = document.getElementById('cancel_but_deli');
    cange_b.addEventListener('click',function(){
        cange_b.style.display = 'none';
        cancel_b.style.display = 'block';
        cus_slect.classList.toggle('cust_select');
        cus_slect.focus();
    });
    cancel_b.addEventListener('click',function(){
        cancel_b.style.display = 'none';
        cange_b.style.display = 'block';
        cus_slect.classList.toggle('cust_select');
        cus_slect.blur();
    });
    function closeDiv(){
        cancel_b.style.display = 'none';
        cange_b.style.display = 'block';
        cus_slect.classList.toggle('cust_select');
        cus_slect.blur();
    }




//script for view emi    
var popup = document.getElementById('popup-wrapper');
var btn = document.getElementById("popup-btn");
var span = document.getElementById("close");
var rad_grop = document.getElementById("rad_group");
btn.onclick = function() {
    popup.classList.add('show');
}
span.onclick = function() {
    popup.classList.remove('show');
}
rad_grop.onclick = function() {
    popup.classList.remove('show');
}

window.onclick = function(event) {
    if (event.target == popup) {
        popup.classList.remove('show');
    }
}

    window.onload = function(){
        var width = window.innerWidth;
        if(width <= 414)
        {
            var figcap = document.getElementsByTagName('figcaption');
            for(var i=0;i<figcap.length;i++){
                var cutingf = figcap[i].innerText;
                var pstr = '..'+cutingf.substr(0,10);
                figcap[i].innerHTML = pstr;
                // console.log(pstr);
            }
        }
        else{
            // console.log('no');
        }
    }
