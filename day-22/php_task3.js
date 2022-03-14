let input = document.querySelectorAll('input');

let div = document.getElementsByClassName('error');

let exp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;



for (let i = 0; i < input.length; i++) {
    input[i].setAttribute("required","required");
    input[i].onblur = function () {
        if (input[i].value == "") {
            div[i].style.display = 'block';
        }
        else {
            div[i].style.display = 'none';
            
        }
        
    };
}
