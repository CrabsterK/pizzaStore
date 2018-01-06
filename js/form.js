function focusFun(x) {
    "use strict";
    x.style.background = "darkgoldenrod";
    x.style.color = "grey";
    x.style.fontWeight = "bold";
    x.style.fontSize = "24px";
    
    var request = x.getAttribute("id") + "Request";
    document.getElementById(request).innerHTML = "Wypełnij to pole";
}

function blurFun(elem){
    "use strict";
    var id = elem.getAttribute("id");
    var request = id + "Request";
    document.getElementById(request).innerHTML = " ";
    
    
    var element = document.getElementById(id);
    element.style.width = "20%";
    element.style.backgroundColor = "white";
    element.style.color = "black";
    element.style.fontWeight = "normal";
    element.style.fontStyle = "italic";
    element.style.fontSize = "16px";
}

function onSubmitFun(){
    "use strict";
    alert("Formularz wysłany. \nDziękujemy!");
}

function onResetFun(){
    "use strict";
    alert("Formularz wyczyszczono");
}

function formCollection(){
    "use strict";
    var amount = document.forms.length;
    document.getElementById("formAmount").innerHTML = "Ilość formularzy na stronie " + amount;
}