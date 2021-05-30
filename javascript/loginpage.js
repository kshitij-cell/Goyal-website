var initial = null;
var color = 'rgb(255, 255, 255)';


function change(valu) {
    if (initial) {
        document.getElementById(initial).style.backgroundColor = "rgb(255,255,255)"
    }
    document.getElementById(valu).style.backgroundColor = "rgb(255,255,255)";
    initial = valu;
}


function choose(the) {
    var target = document.getElementById(the);
    change(the);
    dislighting(the);
}

function dislighting(the) {
    var shadow = document.getElementById(the);
    if (shadow.parentElement.lastElementChild.innerHTML !== "") {
        shadow.parentElement.lastElementChild.innerHTML = "";
    }
}