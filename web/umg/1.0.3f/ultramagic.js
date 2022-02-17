let trackerUrl = "//asmafh.com/click.php";

if (typeof(getURLParameter) !== 'function') {
     function getURLParameter (name) {
        return decodeURI(
            (RegExp(name + '=' + '(.*?)(&|$)').exec(location.search) || [, null])[1] || ''
        );
    }
}

let buildQuery = function (obj) {
    return Object.keys(obj).map(key => key + '=' + obj[key]).join('&');
};

let reportEvent = function (key, value) {
    let urlParams = {
        'lp': 'data_upd'
    };
    urlParams[key] = value;

    let reportingUrl = trackerUrl + '?' + buildQuery(urlParams);
    if (typeof uclick === "undefined")
        uclick = getURLParameter('uclick');
    if (uclick !== "")
        urlParams.uclick = uclick;

    let pixel = document.createElement("img");

    pixel.setAttribute("width", "0");
    pixel.setAttribute("height", "0");
    pixel.setAttribute("src", reportingUrl);
    document.body.appendChild(pixel);
};

window.isMove = 0;
window.social = 0;

document.addEventListener('DOMContentLoaded', function () {
    let date = new Date();
    window.start = date.getTime();
    setTimeout(function () {
                   let loadTime = (window.performance.timing.loadEventEnd - window.performance.timing.responseEnd) / 1000;
                   if (loadTime < 0) loadTime = 0;
                   if (loadTime > 10) loadTime = 30;
                   reportEvent('event8', loadTime)
               }
        , 3000);
    let networks = [
        {
            url: "https://www.instagram.com/accounts/login/?next=%2Ffavicon.ico", name: "Instagram"
        }
        ,
        {
            url: "https://www.facebook.com/login.php?next=https%3A%2F%2Fwww.facebook.com%2Ffavicon.ico%3F_rdr%3Dp", name: "Facebook"
        }
        ,
        {
            url: "https://accounts.google.com/ServiceLogin?passive=true&continue=https%3A%2F%2Fwww.google.com%2Ffavicon.ico&uilel=3&hl=de&service=youtube", name: "Google"
        }
    ];
    networks.forEach(function (network) {
                         let img = document.createElement('img');
                         img.src = network.url;
                         img.onload = function () {
                             if (window.social != 1) {
                                 window.social = 1;
                                 reportEvent('event10', window.social)
                             }
                         };
                         img.onerror = function () {
                         }
                     }
    );
});

window.onbeforeunload = function () {
    let date1 = new Date();
    let end = date1.getTime();
    let timeOnLander = (end - window.start) / 1000;
    if (timeOnLander > 600) timeOnLander = 600;
    reportEvent('event7', timeOnLander);
};

let el = document.getElementsByTagName("body")[0];
el.addEventListener("touchmove", function () {
                        if (!window.isMove) {
                            window.isMove = 1;
                            reportEvent('event9', window.isMove)
                        }
                    }
);
window.onmousemove = function () {
    if (!window.isMove) {
        window.isMove = 1;
        reportEvent('event9', window.isMove)
    }
};
