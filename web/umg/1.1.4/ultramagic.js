if (typeof (getURLParameter) !== 'function') {
    function getURLParameter(name) {
        return decodeURI(
            (RegExp(name + '=' + '(.*?)(&|$)').exec(location.search) || [, null])[1] || ''
        );
    }
}

function magic() {
    var buildQuery = function (obj) {
        var str = [];
        for (var p in obj)
            if (obj.hasOwnProperty(p)) {
                str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
            }
        return str.join("&");
    };

    var reportEvent = function (key, value) {
        var urlParams = {};
        urlParams[key] = value;

        if (typeof uclick === "undefined")
            uclick = getURLParameter('uclick');
        if (uclick !== "")
            urlParams.uclick = uclick;

        if (typeof clickid === "undefined")
            clickid = getURLParameter('clickid');
        if (clickid !== "")
            urlParams.clickid = clickid;

        var reportingUrl = trackerUrl + '?' + buildQuery(urlParams);

        var pixel = document.createElement("img");

        pixel.setAttribute("width", "0");
        pixel.setAttribute("height", "0");
        pixel.setAttribute("style", "width:0;height:0;position: absolute;left: -30000px;");
        pixel.setAttribute("src", reportingUrl);
        document.body.appendChild(pixel);
    };

    window.isMove = 0;
    window.social = 0;

    document.addEventListener('DOMContentLoaded', function () {
        var loadTime = (performance.now()) / 1000;
        if (loadTime < 0) loadTime = 0;
        if (loadTime > 20) loadTime = 20;
        loadTime = Number((loadTime).toFixed(1));
        reportEvent('event8', loadTime);
        var networks = [{
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
            var img = document.createElement('img');
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

    var reported15sec = false;
    var reported30sec = false;
    var timeReported = 1;
    reportEvent('event7', timeReported);
    var date = new Date();
    var startTime = date.getTime();
    var timeOnLanderInterval = setInterval(function () {
        var date = new Date();
        var endTime = date.getTime();
        var timeOnLander = Math.round((endTime - startTime) / 1000) + 1;
        if (timeReported < 360) {
            if (reported15sec && reported30sec && (timeOnLander - timeReported) >= 30) {
                timeReported = timeOnLander;
                reportEvent('event7', timeReported);
            } else if (!reported15sec && timeOnLander >= 15) {
                reported15sec = true;
                timeReported = timeOnLander;
                reportEvent('event7', timeReported);
            } else if (!reported30sec && timeOnLander >= 30) {
                reported30sec = true;
                timeReported = timeOnLander;
                reportEvent('event7', timeReported);
            }
        }
        if (timeOnLander >= 360 && timeReported !== 360) {
            if (timeReported !== 360) {
                timeReported = 360;
                reportEvent('event7', timeReported);
            }
            clearInterval(timeOnLanderInterval);
        }
    }, 1000);


    function mouseMove(event) {
        if (!window.isMove) {
            window.isMove = 1;
            reportEvent('event9', window.isMove)
          if(event.type === "mousemove" || event.type === "touchstart" ) {
            window['on' + event.type] = null
          }
        }
    }

    var el = document.getElementsByTagName("body")[0];
    el.addEventListener("touchmove", mouseMove, {once:true});
    el.addEventListener("touchstart", mouseMove, {once:true});
    el.addEventListener("touchend", mouseMove, {once:true});
    el.addEventListener("touchforcechange", mouseMove, {once:true});
    el.addEventListener("mouseover", mouseMove, {once:true});
    el.addEventListener("mouseenter", mouseMove, {once:true});
    el.addEventListener("wheel", mouseMove, {once:true});
    el.addEventListener("mousewheel", mouseMove, {once:true});
    window.onmousemove = mouseMove;
    if (window.hasOwnProperty('ontouchstart')) {
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
