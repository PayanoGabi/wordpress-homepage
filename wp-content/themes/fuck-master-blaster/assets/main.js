// JavaScript source code

const myHeading = document.querySelector('btn-default');
myHeading.textContent = 'Hello Girl!';

function winAlert() {
    alert("Hello World :)");
}

   

function myFunction() {
    document.getElementById("sample").style.display = "none";
    document.getElementById("hidden-section").style.display = "block";
}


function exitWindows() {
    document.getElementById("hidden-section").style.display = "none";
    document.getElementById("sample").style.display = "revert";
}

$(document).ready(function () {
    $('.shape-left,.shape-right,.shape-top').hover(function (e) {
        if ($(this)[0].className == 'shape-left') {
            $('.shape-left-outer').css('z-index', 5);
        }
        else if ($(this)[0].className == 'shape-right') {
            $('.shape-right-outer').css('z-index', 5);
        }
        else if ($(this)[0].className == 'shape-top') {
            $('.shape-top-outer').css('z-index', 5);
        }

    }, function (e) {
        if ($(this)[0].className == 'shape-left') {
            $('.shape-left-outer').css('z-index', 1);
        }
        else if ($(this)[0].className == 'shape-right') {
            $('.shape-right-outer').css('z-index', 1);
        }
        else if ($(this)[0].className == 'shape-top') {
            $('.shape-top-outer').css('z-index', 0);
        }

    });
});



/*
    var myObject = {
        firstName: "John",
        lastName: "Doe",
        fullName: function () {
            return this;
        }
    }
    myObject.fullName();
    */