
    var a = document.getElementById('eye_open');
    var b = document.getElementById('eye_close');
    var c = document.getElementById('exampleInputPassword1');
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

    var d = document.getElementById('eye_open1');
    var e = document.getElementById('eye_close1');
    var f = document.getElementById('pass');
    d.addEventListener('click',function(){
        d.style.display = 'none';
        e.style.display = 'block';
        f.type='text';
    });
    e.addEventListener('click',function(){
        d.style.display = 'block';
        e.style.display = 'none';
        f.type='password';
    });





$(document).ready(function(){
    // login register toggle
    var a = $('.login');
    var b = $('.register');
    a.click(function(){
        $('.register_modal').hide();
        $('.login_modal').show();
        a.css('color','black');
        b.css('color','#bbb');     
    });
    b.click(function(){
        $('.login_modal').hide();
        $('.register_modal').show();
        b.css('color','black');
        a.css('color','#bbb');
    });
});
