// for white space remove error from renato page speed


let wavailable = document.getElementById('warranty1');
let wnot = document.getElementById('warranty2');
let wi = document.getElementById('wainfo');
wi.style.display = 'none';
wavailable.addEventListener('click',function() {
    wi.style.display = 'block';
});
wnot.addEventListener('click',function() {
    wi.style.display = 'none';
});


// all funcions for multiple images

let imgArray = [];
let imgt = [];
let imgWithoutUrl = [];


document.getElementById('showimg').style.display = 'none';


function showing(file) {
    let imgd = URL.createObjectURL(file.files[0]);
    imgArray.push(imgd);

    sho();
}
function deleteImg(ed = 'Default') {
    imgArray.splice(ed,1);
    sho();
}
function editImage(fancy, old) {
    let imgd = URL.createObjectURL(fancy.files[0]);
    imgArray.splice(old,1,imgd);
    sho();
}
function sho() {
    if (imgArray.length > 0) {
        let all='';
        for (let i=0;i<imgArray.length;i++){
            all += `
            <img src="${imgArray[i]}" alt="" style="height:80px;width:100px;object-fit:contain;margin-bottom:-30px;"> <label for="${i}" class="btn btn-primary minebut">Edit</label><input type="file" style="display:none" id="${i}"  onchange="editImage(this,${i})"><a class="btn btn-danger minebut" onclick="deleteImg(${i})">Delete</a><br><br>
            `;
        }
        document.getElementById('showimg').style.display = 'block';
        document.getElementById('showimg').innerHTML = all;
    } else {
        document.getElementById('showimg').style.display = 'none';

    }
    
}

// all funcions for multiple images
async function test () {
    for (let index = 0; index < imgArray.length; index++) {
        const element = imgArray[index];
        let response = await fetch(element);
        let data = await response.blob();
        let metadata = {
            type: 'image/png'
        };
        let uid = Date.now();
        let file = new File([data], `test${uid}.png`, metadata);
        imgWithoutUrl.push(file);
    }
}


// let showVariant = document.getElementById('variant');
// let variant = [{color:'',image:''}];
// function addcolor () {
//     variant.push(2);
//     console.log(variant);
//     color();
// }
// function color () {
// let ob = '';
// for (let va = 0; va < variant.length; va++) {
//     const element = variant[va];
//     ob += `<div class="cover"><input type="text" class="form-control" style="width:50%; margin-bottom:3px;" placeholder="e.g. Red" value="${variant[va].color}">
//             <label for="${va}" style="height:40px;width:50%;display:flex;justify-content:center;border:1px dashed black;cursor:pointer;">Upload image</label><a class="btn btn-danger" style="padding:0px 10px;" title="remove section" onclick="colorMinus(${va})">-</a>
//             <input type="file" id="${va}" style="display:none;"></div>
            
//             `;
// }
// showVariant.innerHTML = ob;
// }
// color();
// function colorMinus(id) {
//     variant.splice(id,1);
//     color();
// }
