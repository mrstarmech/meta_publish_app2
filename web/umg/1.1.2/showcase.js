document.addEventListener('DOMContentLoaded', function () {
    if (typeof showcaseOptions === "undefined" || typeof showcaseOptions.url === 'undefined') {
        console.warn("Showcase not configured. You should define the 'showcaseOptions' object");
    } else {
        let showcaseTimeout = false;

        if (showcaseOptions.showOnClick) {
            let anchors = document.getElementsByTagName("a");
            for (let i = 0; i < anchors.length; i++) {
                anchors[i].setAttribute("target", "_blank");
                anchors[i].addEventListener('click', function () {
                    if (typeof showcaseOptions.timeout !== "undefined") {
                        showcaseTimeout = setTimeout(function () {
                            window.location.href = showcaseOptions.url;
                        }, showcaseOptions.timeout);
                    } else {
                        window.location.href = showcaseOptions.url;
                    }
                });
            }
        }

        if (showcaseOptions.cancelOnFocus) {
            window.onfocus = function () {
                clearTimeout(showcaseTimeout);
            };
        }

        if (showcaseOptions.showOnBack) {
            window.onpopstate = function () {
                window.location.href = showcaseOptions.url;
            };
        }
    }
});