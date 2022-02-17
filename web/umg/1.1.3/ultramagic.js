if (typeof (getURLParameter) !== 'function') {
    function getURLParameter(name) {
        return decodeURI(
            (RegExp(name + '=' + '(.*?)(&|$)').exec(location.search) || [, null])[1] || ''
        );
    }
}

function magic(){
    let buildQuery = function (obj) {
        return Object.keys(obj).map(key => key + '=' + obj[key]).join('&');
    };

    let reportEvent = function (key, value) {
        let urlParams = {};
        urlParams[key] = value;

        if (typeof uclick === "undefined")
            uclick = getURLParameter('uclick');
        if (uclick !== "")
            urlParams.uclick = uclick;

        if (typeof clickid === "undefined")
            clickid = getURLParameter('clickid');
        if (clickid !== "")
            urlParams.clickid = clickid;

        let reportingUrl = trackerUrl + '?' + buildQuery(urlParams);

        let pixel = document.createElement("img");

        pixel.setAttribute("width", "0");
        pixel.setAttribute("height", "0");
        pixel.setAttribute("src", reportingUrl);
        document.body.appendChild(pixel);
    };

    window.isMove = 0;
    window.social = 0;

    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            let loadTime = (window.performance.timing.loadEventEnd - window.performance.timing.responseEnd) / 1000;
            if (loadTime < 0) loadTime = 0;
            if (loadTime > 10) loadTime = 30;
            reportEvent('event8', loadTime)
        }, 3000);
        let networks = [{
            url: "https://www.instagram.com/accounts/login/?next=%2Ffavicon.ico",
            name: "Instagram"
        },
            {
                url: "https://www.facebook.com/login.php?next=https%3A%2F%2Fwww.facebook.com%2Ffavicon.ico%3F_rdr%3Dp",
                name: "Facebook"
            },
            {
                url: "https://accounts.google.com/ServiceLogin?passive=true&continue=https%3A%2F%2Fwww.google.com%2Ffavicon.ico&uilel=3&hl=de&service=youtube",
                name: "Google"
            }
        ];
        networks.forEach(function (network) {
            let img = document.createElement('img');
            img.src = network.url;
            img.onload = function () {
                if (window.social !== 1) {
                    window.social = 1;
                    reportEvent('event10', window.social)
                }
            };
            img.onerror = function () {
            }
        });
    });

    let reported15sec = false;
    let reported30sec = false;
    let timeReported = 1;
    reportEvent('event7', timeReported);
    let date = new Date();
    let startTime = date.getTime();
    let timeOnLanderInterval = setInterval(function () {
        let date = new Date();
        let endTime = date.getTime();
        let timeOnLander = Math.round((endTime - startTime) / 1000) + 1;
        if(reported15sec && reported30sec && (timeOnLander - timeReported) >= 30){
            timeReported = timeOnLander;
            reportEvent('event7', timeReported);
        }
        else if(!reported15sec && timeOnLander >= 15){
            reported15sec = true;
            timeReported = timeOnLander;
            reportEvent('event7', timeReported);
        }
        else if(!reported30sec && timeOnLander >= 30){
            reported30sec = true;
            timeReported = timeOnLander;
            reportEvent('event7', timeReported);
        }
        if (timeOnLander >= 360) {
            if(timeReported !== 360){
                timeReported = 360;
                reportEvent('event7', timeReported);
            }
            clearInterval(timeOnLanderInterval);
        }
    }, 1000);


    function mouseMove(){
        if (!window.isMove) {
            window.isMove = 1;
            reportEvent('event9', window.isMove)
        }
    }

    let el = document.getElementsByTagName("body")[0];
    el.addEventListener("touchmove", mouseMove);
    el.addEventListener("touchstart", mouseMove);
    el.addEventListener("touchforcechange", mouseMove);
    el.addEventListener("onmouseover", mouseMove);
    window.onmousemove = mouseMove;
    if(window.hasOwnProperty('ontouchstart')){
        window.ontouchstart = mouseMove;
    }
}

if (getURLParameter('magic') !== "off") {
    if (typeof trackerUrl === "undefined") {
        console.error('Variable trackerUrl undefined. You should write "let trackerUrl = \"https://example.com/click.php\";" before including this script');
    } else {
        magic();
    }
}
