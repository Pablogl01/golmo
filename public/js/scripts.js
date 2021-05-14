
function showPassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function changeButton(){
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if(email != "" && password != ""){
        document.getElementById("button").style.width = "100%";
        document.getElementById("button").style.marginBottom = "5px";
        document.getElementById("button").style.border = "2px solid #D3D3D3";
        document.getElementById("button").style.backgroundColor = "#D3D3D3";
        document.getElementById("button").style.outline = "none";
        document.getElementById("button").style.color = "transparent";
        document.getElementById("button").style.fontSize = "18px";
    }
}