document.body.onmouseout = function (event) {
    if (event.clientY <= 0) {
        document.getElementById('comeback').style.display = 'block';
    }
};

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('comeback').onclick = function (event) {
        if (event.target.id === "comeback") {
            document.getElementById('comeback').style.display = 'none';
        }
    };
});

let stateObj = {foo: "bar"};
let curURL = window.location.href;
let curTitle = document.title;
history.pushState(stateObj, curTitle, curURL);

window.onpopstate = function () {
    history.pushState(stateObj, curTitle, curURL);
    document.getElementById('comeback').style.display = 'block';
};
