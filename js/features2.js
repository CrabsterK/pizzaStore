function appendFun(){
    "use strict";
    var elem = document.createElement("P");
    var text = document.createTextNode("Ten tekst został utworzony dzięki metodzie createTextNode, dołączony do elementu <p> (createElement) metodą appendChild");
    elem.appendChild(text);
    elem.style.color = "orange";
    document.getElementById("appendExample").appendChild(elem);
}

function beforeFun(){
    "use strict";
    var elem = document.createElement("LI");
    var text = document.createTextNode("Nowa pozycja");
    elem.appendChild(text);
    elem.style.textDecoration = "underline overline";
    elem.style.cssFloat = "none";
    
    var list = document.getElementById("beforeId");
    list.insertBefore(elem, list.childNodes[0]);
}

function replaceFun(){
    "use strict";
    var oldImg = document.getElementById("imgToReplace");
    var newImg = document.createElement("IMG");
    newImg.setAttribute("src", "img/cat2.jpg");
    newImg.style.width = "20%";
                        
    var parentDiv = oldImg.parentNode;
    parentDiv.replaceChild(newImg, oldImg);
    
    var btn = document.getElementById("replaceButton");
    btn.style.display = "none";
}

function removeFun(){
    "use strict";
    var parent = document.getElementById("divImg");
    var childToRemove = document.getElementById("imgToRemove");
    
    parent.removeChild(childToRemove);
    
    var btn = document.getElementById("removeButton");
    btn.style.display = "none";
}