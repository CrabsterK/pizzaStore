function keyCodeFun(event){
    "use strict";
    var field = document.getElementById("keyCodeResult");
    var text = "";
    var code = event.keyCode;
    text = text + "Kod ASCII wciśniętego klawisza to " + code;
    field.innerHTML = text;

}

function keyPressedFun(event){
    "use strict";
    var field = document.getElementById("keyCodeResult");
    if (event.altKey) {
        field.innerHTML = "ALT wciśnięty";
    }
    if (event.shiftKey){
        field.innerHTML = "SHIFT wciśnięty, litery będą duże";
    }
    if (event.ctrlKey){
        field.innerHTML = "CTRL wciśnęty";
    }
    
}

function mouseOverFun(img){
    "use strict";
    img.style.width="100px";
}

function mouseOutFun(img){
    "use strict";
    img.style.width="50px";
}

function mouseMoveFun(event){
    "use strict";
    var x = event.screenX;
    var y = event.screenY;
    var result = x + " x " + y;
    document.getElementById("mousePosition").innerHTML = result;
}

function mouseDownFun(event){
    "use strict";
    var counter = document.getElementById("mouseDownCounter");
    var current = counter.textContent;
    current++;
    document.getElementById("mouseDownCounter").innerHTML = current;
    
    var cX = event.clientX;
    var cY = event.clientY;
    
    document.getElementById("mouseDivPosition").innerHTML = "Klinąłeś na pozycji " + cX + "px x " + cY + "px w DIV";
}

