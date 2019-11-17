$(() => {
    $('div.navbar-collapse ul li a').click(() => {
        $('div.navbar-collapse').removeClass("show");
        $("img.visible").removeClass('visible');
        $("button span img").attr("src", "img/bars2.png");
    });
    window.onscroll = function() {
        navbarFunction();
        dodajAnimu();
    }

    function navbarFunction() {
        if (document.documentElement.scrollTop > 70) {
            var navbar = document.getElementById('my-navbar');
            navbar.classList.add('my-fixed-top');
            navbar.style.opacity = "1";
            var section = document.getElementsByClassName('hero-sec')[0].style.marginTop = '0';
        }
    }
    var toggler = document.getElementById('my-toggler');
    var navbar = document.getElementById('my-nav');

    toggler.addEventListener('click', () => {

        toggler.getElementsByTagName('img')[0].classList.toggle('visible');
        $("button span img").attr("src", "img/bars2.png");
        $("img.visible").attr("src", "img/znak.png");
    });
    $("#services ul li").click((e) => {
        $.each($(".tekst"), function() { $(this).css("display", "none") });
        $.each($(".tekst"), function() {
            if ($(e.target).attr('target') === $(this).attr("id")) {
                $(this).css("display", "block");
            }
        });
    });

    var isMobile;
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        isMobile = true;
    }

    $("#hero .ml-auto>img").css("opacity", "1");
    var windowHeight = (window.innerHeight * 5) / 10;
    var services = document.getElementById("services");
    var law = services.getElementsByClassName("col-12 col-md-8")[0];
    var about = document.getElementById("about");
    var contact = document.getElementById("contact");
    var footer = document.getElementsByTagName("footer")[0];


    function dodajAnimu() {
        var positionS = services.getBoundingClientRect().top;
        var positionL = law.getBoundingClientRect().top;
        var positionA = about.getBoundingClientRect().top;
        var positionC = contact.getBoundingClientRect().top;
        var positionF = footer.getBoundingClientRect().top;


        if (windowHeight >= positionS) {
            services.getElementsByTagName("h2")[0].classList.add("anima-up-down");
            services.getElementsByTagName("img")[0].classList.add("small-in");
            services.getElementsByClassName("row")[0].classList.add("anima-left");
        }
        if (windowHeight >= positionL) {
            law.classList.add("small-in");
        }
        if (windowHeight >= positionA) {
            about.getElementsByClassName("row")[0].classList.add("anima-left");
            about.getElementsByTagName("img")[0].classList.add("small-in");
            about.getElementsByTagName("h2")[0].classList.add("anima-up-down");
        }
        if (windowHeight >= positionC) {
            contact.getElementsByTagName("h2")[0].classList.add("anima-up-down");
            contact.getElementsByClassName("col-12 col-md-6")[0].classList.add("anima-right");
            contact.getElementsByClassName("col-12 col-md-6")[1].classList.add("anima-right");
        }
        if (window.innerHeight - 100 >= positionF) {
            contact.getElementsByClassName("col-12 m-auto")[0].classList.add("anima-down-up");
            footer.getElementsByClassName("row no-gutters flex-column text-center")[0].classList.add("anima-left");
        }
    }
})