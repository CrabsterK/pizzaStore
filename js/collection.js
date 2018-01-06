function imagiesFun(){
    "use strict";
    var collection = document.images;
    var result = "";
    var i;
    for(i = 0; i < collection.length; i+=1) {
        result = result +  collection[i].src + "<br>";
    }
    document.getElementById("imagiesResult").innerHTML = result;
}

function linksFun(){
    "use strict";
    var collection = document.links;
    var result = "";
    var i;
    for(i = 0; i < collection.length; i+=1) {
        result = result +  collection[i].href + "<br>";
    }
    document.getElementById("linksResult").innerHTML = result;
}

function anchorsFun(){
   "use strict"; document.getElementById("achorsResult").innerHTML = document.anchors.length;
}

function itemFun(){
    "use strict";
    var max = document.getElementsByTagName("P").length;
    var userNumber = prompt("Wprowadź liczbę: 0-"+max);
    var p = document.getElementsByTagName("P").item(userNumber).innerHTML;
    document.getElementById("itemResult").innerHTML = p;
}

function namedItemFun(){
    "use strict";
    var collection = document.images;
    var result = "";
    var i;
    for (i = 0; i < collection.length; i+=1) {
        if(collection[i].getAttribute("id")  !== null){
            result = result +  collection[i].getAttribute("id") + ", "; 
        }
        
    }
    
    var userId = prompt("Wpisz wybrane id: " + result);
    var src = document.images.namedItem(userId).src;
    
    var element = document.createElement("IMG");
    element.setAttribute("src", src);
    element.style.width = "20%";
    document.getElementById("namedItemResult").appendChild(element);
}