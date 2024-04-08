
function style_change() {
    var border_R = document.getElementById("border_R").value;
    var border_G = document.getElementById("border_G").value;
    var border_B = document.getElementById("border_B").value;
    var border_width = document.getElementById("border_width").value;
    var background_R = document.getElementById("background_R").value;
    var background_G = document.getElementById("background_G").value;
    var background_B = document.getElementById("background_B").value;

    var tag = document.getElementById("paragraph");
    tag.style.borderColor = `rgb(${border_R},${border_G},${border_B})`;
    tag.style.borderWidth = border_width
    tag.style.backgroundColor = `rgb(${background_R},${background_G},${background_B})`;
}
