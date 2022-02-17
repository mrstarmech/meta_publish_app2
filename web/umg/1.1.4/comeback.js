document.body.onmouseout = function (event) {
    if (event.clientY <= 0) {
        document.getElementById('comeback').style.display = 'block';
    }
};

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('comeback').onclick = function (event) {
        if (event.target.id === "comeback") {
            document.getElementById('comeback').style.display = 'none';
        }
    };
});

var stateObj = {foo: "bar"};
var curURL = window.location.href;
var curTitle = document.title;
history.pushState(stateObj, curTitle, curURL);

window.onpopstate = function () {
    history.pushState(stateObj, curTitle, curURL);
    document.getElementById('comeback').style.display = 'block';
};
