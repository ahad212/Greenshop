window.onload = function(){
    var width = window.innerWidth;
    if(width <= 414)
    {
        var figcap = document.getElementsByTagName('figcaption');
        for(var i=0;i<figcap.length;i++){
            var cutingf = figcap[i].innerText;
            var pstr = '..'+cutingf.substr(0,10);
            figcap[i].innerHTML = pstr;
        }
    }
}