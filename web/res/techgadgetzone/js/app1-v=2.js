document.addEventListener('DOMContentLoaded', () => {

    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(el => {
        el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
    const $target = document.getElementById(target);

    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    el.classList.toggle('is-active');
    $target.classList.toggle('is-active');

});
});
}

function onMouseOut(event) {
    // If the mouse is near the top of the window, show the popup
    if (event.clientY < 50) {
        // Remove this event listener
        document.removeEventListener("mouseout", onMouseOut);

        // Show the popup
        document.getElementById("popup1").classList.add('is-active');
    }
}

document.addEventListener("mouseout", onMouseOut);


});

$(document).ready(function () {
    let mobile = !$('.mobile-check').is(':visible')

    $('#popup1 .hide-overlay').click(function () {
        $('#popup1').css('display', 'none');
    })

    if (mobile) {
        let scroll_status = 0;
        let scroll_lowest = 99999;
        let scroll = 0;
        $(window).scroll(function (event) {
            if (scroll_status == 0) {
                scroll_new = $(window).scrollTop();
                if (scroll_new > scroll) {
                    scroll_lowest = scroll_new
                }
                scroll = scroll_new
                if (scroll_lowest - scroll > 100  && scroll_new < 100) {
                    setTimeout(function(){
                        scroll_status = 1;
                        $('#popup1').addClass('is-active')
                    }, 250)
                }
            }
        });
    }
})