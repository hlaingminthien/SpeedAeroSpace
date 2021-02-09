<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <title>Speed Aerospace Singapore</title>
    <!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div>
            <div>
                <div class="col-12" style="background-color: white;">
                    <nav class="main-nav" style="font-size: 0.5em">
                        <!-- ***** Logo Start ***** -->
                        <img style="width: 200px;
                        margin: 22px;" src="assets/images/logo.png" />
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a style=" font-size: 1.5em;font-weight: bold;" href="index.php"
                            >Home</a></li>
                            <li class="scroll-to-section"><a style=" font-size: 1.5em;font-weight: bold;"
                                    href="aircraft.php">Aircraft/Helicopter Supported
                                </a></li>
                            <li class="scroll-to-section"><a style=" font-size: 1.5em;font-weight: bold;"
                            href="product.php">Products Supported
                                </a></li>
                            <li class="scroll-to-section"><a style=" font-size: 1.5em;font-weight: bold;"
                                    href="redbox.php">Redbox Ground Power and Tool Systems
                                </a></li>
                            <li class="scroll-to-section"><a style=" font-size: 1.5em;font-weight: bold;"
                                    href="callington.php">Callington Products
                                </a></li>
                            <li class="scroll-to-section"><a style=" font-size: 1.5em;font-weight: bold;"
                                    href="contactus.php">Contact Us
                                </a></li>
                            <li class="scroll-to-section"><a style=" font-size: 1.5em;font-weight: bold;"
                                 class="active" href="aboutus.php">About Us
                                </a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

<!-- Code start -->
<!-- ***** Product Supported ***** -->
<div class="aboutus-con">
    <div class="container aboutus">
        <h3 style="text-align: center;font-size: 20px;font-color: black;">About Us</h3>
        <p class="p-text">
                    Speed Aerospace is a small lean and mean company, registered in Singapore, engaging in
            supplying aircraft spares (components, airframe parts, hardware, consumables and bulk
            materials etc.) to regional airlines operating in and around South East Asia. We were first
            established in year 2014 and since steadily gained the recognition from our customers for our
            prompt and reliable service. We grow consecutively each year since establishment in the
            volume of sales as well as the number of customer too.
        </p>
        <p class="p-text">
                    Our goal is to provide customer’s satisfaction in shortest time associated with highly competitive
            pricing. We operate 24/7 and we have engaged world largest stockists at our finger tips to make
            instant search for the items you need.
        </p>
        <p class="p-text">
                    Our capabilities are not only limited to selling parts and items but also includes some technical
            services such as repair and overhaul of aircraft engines, propellers, landing gears and avionics
            items at world renown MROs. If you check our track record, you could find we have successfully
            performed for many of our customers.
        </p>
        <p class="p-text">
                    And location being at Singapore means the items you need could be in our hand within 24 hour
            from the minute you issued your confirmed purchase order. And it shall be forwarded to you in
            next available flight to your location. We could arrange and provide dedicated on-site services
            like engine Hot Section Inspection HSI, aircraft painting and weighing at your location.
        </p>
        <p class="p-text">
                    And we have expanded our capabilities to airline ground support equipment, airport ancillary
            equipment as well as infrastructure support.
        </p> 
    </div>
</div>
<!-- Code end -->
       <!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>
<script src="assets/js/mixitup.js"></script>
<script src="assets/js/accordions.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>
       document.getElementById("defaultOpen1").click();
    function openCity1(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent1");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks1");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
<!-- slide text -->
<script>
    var TxtRotate = function (el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtRotate.prototype.tick = function () {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 300 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function () {
            that.tick();
        }, delta);
    };

    window.onload = function () {
        var elements = document.getElementsByClassName('txt-rotate');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-rotate');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtRotate(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
        document.body.appendChild(css);
    };
</script>
<script>
    $(document).ready(function () {
        const menuBtn = $('.scroll-to-section');
        menuBtn.click(() => {
            setTimeout(() => {
                removeHash();
            }, 550);
        });

        function removeHash() {
            history.replaceState(null, document.title, window.location.origin + window.location.pathname);
        }
    })

    $('#pills-tab a').on('click', function (e) {
        var nowTab = e.target.href.split("#")[1];
        $(`#nav-home1`).hide();
        $(`#nav-profile1`).hide();
        // $(`#nav-contact1`).hide();

        console.log('nowTab is=>', nowTab);
        $(`#${nowTab}1`).show();
        console.log('nowTab111 is=>', nowTab);

        // $(`#${e.relatedTarget.href.split("#")[1]}1`).tab('hide');
        // e.preventDefault()
        // $(this).tab('show')
    });
</script>
<script>
    var slideIndex = 1;

    var myTimer;

    var slideshowContainer;

    window.addEventListener("load", function () {
        showSlides(slideIndex);
        myTimer = setInterval(function () { plusSlides(1) }, 4000);

        //COMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
        slideshowContainer = document.getElementsByClassName('slideshow-inner')[0];

        //UNCOMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
        // slideshowContainer = document.getElementsByClassName('slideshow-container')[0];

        slideshowContainer.addEventListener('mouseenter', pause)
        slideshowContainer.addEventListener('mouseleave', resume)
    })

    // NEXT AND PREVIOUS CONTROL
    function plusSlides(n) {
        clearInterval(myTimer);
        if (n < 0) {
            showSlides(slideIndex -= 1);
        } else {
            showSlides(slideIndex += 1);
        }

        //COMMENT OUT THE LINES BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME

        if (n === -1) {
            myTimer = setInterval(function () { plusSlides(n + 2) }, 4000);
        } else {
            myTimer = setInterval(function () { plusSlides(n + 1) }, 4000);
        }
    }

    //Controls the current slide and resets interval if needed
    function currentSlide(n) {
        clearInterval(myTimer);
        myTimer = setInterval(function () { plusSlides(n + 1) }, 4000);
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }

    pause = () => {
        clearInterval(myTimer);
    }

    resume = () => {
        clearInterval(myTimer);
        myTimer = setInterval(function () { plusSlides(slideIndex) }, 4000);
    }
</script>
<script src="navbar.js"></script>
</body>
</html>