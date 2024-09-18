var food = document.querySelector('.food');
var fExpdate = document.querySelector('.fExpdate');
var fQuantity = document.querySelector('.fQuantity');

var clothsType = document.querySelector('.clothsType');
var clothesSize = document.querySelector('.clothesSize');
var clothesQuantity = document.querySelector('.clothesQuantity');

var equipments = document.querySelector('.equipments');
var gymProduct = document.querySelector('.gymProduct');
var equipmentsQuantity = document.querySelector('.equipmentsQuantity');

var studyMaterial = document.querySelector('.studyMaterial');
var forSchoolorClg = document.querySelector('.forSchoolorClg');
var materialQuantity = document.querySelector('.materialQuantity');

var medicinesType = document.querySelector('.medicinesType');
var diseaseDetails = document.querySelector('.diseaseDetails');
var medicineExpiryDate = document.querySelector('.medicineExpiryDate');

var equipmentsType = document.querySelector('.equipmentsType');
var equipmentsName = document.querySelector('.equipmentsName');
var equipmentsQuantity = document.querySelector('.equipmentsQuantity');

var bookName = document.querySelector('.bookName');
var forChildrenandOld = document.querySelector('.forChildrenandOld');
var bookQuantity = document.querySelector('.bookQuantity');

var donateWhat = document.querySelector('.donateWhat');
var thingName = document.querySelector('.thingName');
var quantityOthers = document.querySelector('.quantityOthers');

var form1 = document.querySelector('#form1');
var form2 = document.querySelector('#form2');
var form3 = document.querySelector('#form3');
var form4 = document.querySelector('#form4');
var form5 = document.querySelector('#form5');
var form6 = document.querySelector('#form6');
var form7 = document.querySelector('#form7');
var form8 = document.querySelector('#form8');

var Next1 = document.querySelector('#Next1');
var Next2 = document.querySelector('#Next2');
var Next3 = document.querySelector('#Next3');
var Next4 = document.querySelector('#Next4');
var Next5 = document.querySelector('#Next5');
var Next6 = document.querySelector('#Next6');
var Next7 = document.querySelector('#Next7');
var Next8 = document.querySelector('#Next8');

var Back2 = document.querySelector('#Back2');
var Back3 = document.querySelector('#Back3');
var Back4 = document.querySelector('#Back4');
var Back5 = document.querySelector('#Back5');
var Back6 = document.querySelector('#Back6');
var Back7 = document.querySelector('#Back7');
var Back8 = document.querySelector('#Back8');

var col1 = document.querySelector('#col1');
var col2 = document.querySelector('#col2');
var col3 = document.querySelector('#col3');
var col4 = document.querySelector('#col4');
var col5 = document.querySelector('#col5');
var col6 = document.querySelector('#col6');
var col7 = document.querySelector('#col7');
var col8 = document.querySelector('#col8');

var progress = document.querySelector('#progress');

function n1(){
    form1.style.left = "-400px";
    form2.style.left = "10px";
    progress.style.width = "300px";

    var food = document.getElementById('food').value;
    var fExpdate = document.getElementById('fExpDate').value;
    var fQuantity = document.getElementById('fQuantity').value;

    console.log(food);
    console.log(fExpdate);
    console.log(fQuantity);
}

function n2(){
    form2.style.left = "-400px";
    form3.style.left = "10px";
    col1.style.left = "-150px";
    col2.style.left = "0px";
    col3.style.left = "150px";
    col4.style.left = "300px";

    var clothsType = document.getElementById('clothsType').value;
    var clothesSize = document.getElementById('clothesSize').value;
    var clothesQuantity = document.getElementById('clothesQuantity').value;

    console.log(clothsType);
    console.log(clothesSize);
    console.log(clothesQuantity);
}

function n3(){
    form3.style.left = "-400px";
    form4.style.left = "10px";
    col2.style.left = "-150px";
    col3.style.left = "0px";
    col4.style.left = "150px";
    col5.style.left = "300px";

    var equipments = document.getElementById('equipments').value;
    var gymProduct = document.getElementById('gymProduct').value;
    var equipmentsQuantity = document.getElementById('equipmentsQuantity').value;

    console.log(equipments);
    console.log(gymProduct);
    console.log(equipmentsQuantity);
}

function n4(){
    form4.style.left = "-400px";
    form5.style.left = "10px";
    col3.style.left = "-150px";
    col4.style.left = "0px";
    col5.style.left = "150px";
    col6.style.left = "300px";

    var in1 = document.getElementById('in1').value;
    var in2 = document.getElementById('in2').value;
    var in3 = document.getElementById('in3').value;

    console.log(in1);
    console.log(in2);
    console.log(in3);
}

function n5(){
    form5.style.left = "-400px";
    form6.style.left = "10px";
    col4.style.left = "-150px";
    col5.style.left = "0px";
    col6.style.left = "150px";
    col7.style.left = "300px";

    var medicinesType = document.getElementById('medicinesType').value;
    var diseaseDetails = document.getElementById('diseaseDetails').value;
    var ExpMed = document.getElementById('ExpMed').value;

    console.log(medicinesType);
    console.log(diseaseDetails);
    console.log(ExpMed);
}

function n6(){
    form6.style.left = "-400px";
    form7.style.left = "10px";
    col5.style.left = "-150px";
    col6.style.left = "0px";
    col7.style.left = "150px";
    col8.style.left = "300px";

    var equipmentsType = document.getElementById('equipmentsType').value;
    var equipmentsName = document.getElementById('equipmentsName').value;
    var equipmentsQuantity = document.getElementById('equipmentsQuantity').value;

    console.log(equipmentsType);
    console.log(equipmentsName);
    console.log(equipmentsQuantity);
}

function n7(){
    form7.style.left = "-400px";
    form8.style.left = "10px";
    progress.style.width = "450px";

    var bookName = document.getElementById('bookName').value;
    var forChildrenandOld = document.getElementById('forChildrenandOld').value;
    var bookQuantity = document.getElementById('bookQuantity').value;

    console.log(bookName);
    console.log(forChildrenandOld);
    console.log(bookQuantity);
}

function submit(){
    form2.style.left = "-400px";
    form3.style.left = "10px"; 

    var donateWhat = document.getElementById('donateWhat').value;
    var thingName = document.getElementById('thingName').value;
    var quantityOthers = document.getElementById('quantityOthers').value;

    console.log(donateWhat);
    console.log(thingName);
    console.log(quantityOthers);

    window.location.href = "index.html";
}

function b2(){
    form1.style.left = "10px";
    form2.style.left = "420px";
    progress.style.width = "150px";

    var food = null;
    var fExpdate = null;
    var fQuantity = null;
}

function b3(){
    form2.style.left = "10px";
    form3.style.left = "420px";
    col1.style.left = "0px";
    col2.style.left = "150px";
    col3.style.left = "300px";
    col4.style.left = "450px";

    var clothsType = null;
    var clothesSize = null;
    var clothesQuantity = null;
}

function b4(){
    form3.style.left = "10px";
    form4.style.left = "420px";
    col2.style.left = "0px";
    col3.style.left = "150px";
    col4.style.left = "300px";
    col5.style.left = "450px";

    var equipments = null;
    var gymProduct = null;
    var equipmentsQuantity = null;            
}

function b5(){
    form4.style.left = "10px";
    form5.style.left = "420px";
    col3.style.left = "0px";
    col4.style.left = "150px";
    col5.style.left = "300px";
    col6.style.left = "450px";

    var in1 = null;
    var in2 = null;
    var in3 = null;            
}

function b6(){
    form5.style.left = "10px";
    form6.style.left = "420px";
    col4.style.left = "0px";
    col5.style.left = "150px";
    col6.style.left = "300px";
    col7.style.left = "450px";
    
    var medicinesType = null;
    var diseaseDetails = null;
    var ExpMed = null;
}

function b7(){
    form6.style.left = "10px";
    form7.style.left = "420px";
    col5.style.left = "0px";
    col6.style.left = "150px";
    col7.style.left = "300px";
    col8.style.left = "450px";
    
    var equipmentsType = null;
    var equipmentsName = null;
    var equipmentsQuantity = null;
}

function b8(){
    form7.style.left = "10px";
    form8.style.left = "420px";
    progress.style.width = "300px";

    var bookName = null;
    var forChildrenandOld = null;
    var bookQuantity = null;
}




