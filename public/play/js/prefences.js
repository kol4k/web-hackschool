$(document).ready(function() {

    cookievalue = 'Rafi' + ";";
    document.cookie = "name=" + cookievalue;
    console.log("ok");
    document.getElementById("materi").selectedIndex = getCookie("materi");
    document.getElementById("pengaturan").checked = getCookie("checkBox");
});


function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function checkCookie() {
    var user = getCookie("username");
    if (user != "") {
        alert("Welcome again " + user);
    } else {
       user = prompt("Please enter your name:","");
       if (user != "" && user != null) {
           setCookie("username", user, 30);
       }
    }
}

function checkPrefencesGuru(checkboxElem) {
    if(checkboxElem.checked) {
        var checkBox = document.getElementById("pengaturan").checked;
        var materi = document.getElementById("materi").value;
        setCookie("materi", materi, 365);
        setCookie("checkBox", checkBox, 365);
    } else if(!checkboxElem.checked) {
        setCookie("materi", materi, 0);
        setCookie("checkBox", checkBox, 0);
    }
}