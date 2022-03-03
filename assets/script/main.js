

document.querySelectorAll('.main-navbar .dropdown-link').forEach((tab) => {
    tab.addEventListener('click', (e) => {
        const id = e.target.dataset.toggleMenu;
        document.querySelector('[data-menu="' + id + '"]').classList.add('shown')
    })
})

document.querySelectorAll('.get-back').forEach(back => {
    back.addEventListener('click', (e) => {
        const id = e.target.dataset.menu
        document.querySelector('[data-menu="' + id + '"]').classList.remove('shown')
    })
})

window.addEventListener('click', onClick);


function onClick(e) {
    if (window.innerWidth < 1199) {
        if (!document.getElementById('mainNavbarToggler').contains(e.target)
            && !document.getElementById('mainNavbar').contains(e.target)) {

            setTimeout(() => {
                document.body.classList.remove('navbar-shown');
            }, 300)

            $('#mainNavbar').collapse('hide')
        }
    }
}

/*const mainColor = getComputedStyle(document.documentElement).getPropertyValue('--logo').replace('px', '');
console.log(mainColor)*/

$('.categories-toggler').on('click', function () {
    body.toggleClass('categories-shown');
    $('.categories-menu').toggleClass('show');
});


$('.mon-toggler').on('click', function () {
    body.toggleClass('mon-shown');
    $('.mon-menu').toggleClass('show');
});

/*====================================================================================================================*/
/* Tooltip */
/*====================================================================================================================*/


$(function () {
    $('[data-toggle="tooltip"], .tooltip-toggle').tooltip({html: true})
});


/*====================================================================================================================*/
/* Append Overlay To Body */
/*====================================================================================================================*/


const body = $('body');

body.append('<div class="overlay" role="presentation"></div>');

$('*').on('click', function (e) {
    if (!$(e.target).is('.navbar-toggler')
        && !$(e.target).is('.navbar-toggler *')
        && !$(e.target).is('.navbar-collapse')
        && !$(e.target).is('.navbar-collapse *')) {
        closeNav()
    }
});

function closeNav() {
    $('.navbar-collapse').collapse('hide');
}

//swiper-slide-active

$(function () {
    $('[data-toggle="tooltip"], .tooltip-toggle').tooltip({html: true})
});



function mySearchFunction() {
    var x = document.getElementById("mySearch");
    if (x.style.display === "none") {
        x.style.display = "flex";
    } else {
        x.style.display = "none";
    }
}

function mySliderFunction() {
    var x = document.getElementById("mySlider");
    if (x.style.display === "none") {
        x.style.display = "flex";
    } else {
        x.style.display = "none";
    }
}

function mainVideoFunction() {
    var x = document.getElementById("video");
    if (x.style.display === "none") {
        x.style.display = "flex";
    } else {
        x.style.display = "none";
    }
}

$(document).ready(function () {

    const body = $('body');

    const mainHeader = $('.main-header');

    /*================================================================================================================*/
    /* Fixed Header */
    /*================================================================================================================*/

    $(window).scroll(function () {
        if ($(window).scrollTop() > 40) {
            body.addClass('scrolling');
            mainHeader.addClass('shadow')
        } else {
            body.removeClass('scrolling');
            mainHeader.removeClass('shadow')
        }
    });
});

