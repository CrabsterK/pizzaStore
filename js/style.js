//https://www.w3schools.com/js/js_strict.asp
//http://blog.kamilbrenk.pl/javascript-i-strict-mode/

function backgroundFun() {
    "use strict";
    var options = document.getElementById("backgroundOptions");
    var selected = options.selectedIndex;
    document.getElementById("styleExample").style.backgroundColor = options.options[selected].text;
}
function fontColorFun() {
    "use strict";
    var options = document.getElementById("fontColorOptions");
    var selected = options.selectedIndex;
    document.getElementById("styleExample").style.color = options.options[selected].text;
}

function fontStyleFun() {
    "use strict";
    var options = document.getElementById("fontStyleOptions");
    var selected = options.selectedIndex;
    document.getElementById("styleExample").style.fontStyle = options.options[selected].text;
}