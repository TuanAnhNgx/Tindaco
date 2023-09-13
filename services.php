<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tindaco</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>

<body id="home">
    <section class=" w3l-header-4 header-sticky">
        <!--header-->
        <?php include "includes/header.php" ?>
        <?php require_once("includes/config.php"); ?>
        <!--/header-->
    </section>
    <script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
    <!--bootstrap working-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--bootstrap working//-->
    <!--/MENU-JS-->
    <script>
    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
    </script>
    <!--//MENU-JS-->
    <!-- disable body scroll which navbar is in active -->
    <script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
    </script>
    <!-- disable body scroll which navbar is in active -->
    <!--theme switcher dark and light mode script-->
    <script>
    const bodyElement = document.querySelector('body');
    const themeToggle = document.querySelector('#themeToggle');
    const darkModeMql = window.matchMedia('(prefers-color-scheme: dark)');

    const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : userPreference(darkModeMql);

    if (currentTheme) {
        bodyElement.classList.add(currentTheme);

        if (currentTheme === 'dark') {
            themeToggle.checked = true;
        }
    }

    function userPreference(e) {
        if (e.matches) {
            bodyElement.classList.add("dark");
            return "dark"
        } else {
            bodyElement.classList.remove("dark");
            return ""
        }
    }

    darkModeMql.addListener(userPreference);

    function themeSwitcher(e) {
        if (e.target.checked) {
            bodyElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        } else {
            bodyElement.classList.remove('dark');
            localStorage.setItem('theme', '');
        }
    }

    themeToggle.addEventListener('change', themeSwitcher);
    </script>
    <!--theme switcher dark and light mode script//-->



    <!-- breadcrumbs -->
    <section class="w3l-inner-banner-main">
        <div class="about-inner services editContent">
            <div class="container">

                <div class="breadcrumbs-sub">
                    <ul class="breadcrumbs-custom-path">
                        <li class="right-side propClone"><a href="index.html" class="editContent">Trang chủ <span
                                    class="fa fa-angle-right" aria-hidden="true"></span></a>
                            <p>
                        </li>
                        <li class="active editContent">Khám Phá</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumbs //-->
    <section class="w3l-recent-work-hobbies" id="services">
        <div class="recent-work editContent">
            <div class="container">
                <div class="row service-service">
                    <div class="col-lg-4 col-md-6 propClone about-line-top ">
                        <div class="color-white editContent">
                            <div class="icon-back"><span class="fa fa-plane"></span></div>

                            <h5><a href="#url" class="editContent">
                                    Air Service</a></h5>
                            <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam
                                corporis, dolores
                                quos, nobis culpa est</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 propClone about-line-top ">
                        <div class="color-white editContent">
                            <div class="icon-back"><span class="fa fa-bus"></span></div>

                            <h5><a href="#url" class="editContent">Bus Service</a></h5>
                            <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam
                                corporis, dolores
                                quos, nobis culpa est </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 propClone about-line-top ">
                        <div class="color-white editContent">
                            <div class="icon-back"> <span class="fa fa-handshake-o"></span></div>

                            <h5><a href="#url" class="editContent">Tourist Guide</a></h5>
                            <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam
                                corporis, dolores
                                quos, nobis culpa est</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 propClone about-line-top ">
                        <div class="color-white editContent">
                            <div class="icon-back"> <span class="fa fa-random"></span></div>

                            <h5><a href="#url" class="editContent">
                                    Guide Service</a></h5>
                            <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam
                                corporis, dolores
                                quos, nobis culpa est</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 propClone about-line-top ">
                        <div class="color-white editContent">
                            <div class="icon-back"> <span class="fa fa-smile-o"></span></div>

                            <h5><a href="#url" class="editContent">Travel Insurance</a></h5>
                            <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam
                                corporis, dolores
                                quos, nobis culpa est </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 propClone about-line-top ">
                        <div class="color-white editContent">
                            <div class="icon-back"><span class="fa fa-building"></span></div>
                            <h5><a href="#url" class="editContent">Hotel Service</a></h5>
                            <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam
                                corporis, dolores
                                quos, nobis culpa est</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-services-two" id="services">
        <div class="service-single-page editContent">
            <div class="container">
                <div class="gallery-image row">
                    <div class="img-box col-lg-4 col-md-6">
                        <img src="assets/images/b2.jpg" alt="product" class="img-responsive ">
                        <h5 class="mt-2"><a href="about.html">Turkey Grenada</a></h5>
                        <p class="para">4 Tours available</p>
                    </div>
                    <div class="img-box col-lg-4 col-md-6">
                        <img src="assets/images/b1.jpg" alt="product" class="img-responsive ">
                        <h5 class="mt-2"><a href="about.html">Colosseum, Rome</a></h5>
                        <p class="para">9 Tours available</p>
                    </div>
                    <div class="img-box col-lg-4 col-md-6">
                        <img src="assets/images/b3.jpg" alt="product" class="img-responsive ">
                        <h5 class="mt-2"><a href="about.html">Australia Nature</a></h5>
                        <p class="para">10 Tours available</p>
                    </div>
                    <div class="img-box col-lg-4 col-md-6">
                        <img src="assets/images/b4.jpg" alt="product" class="img-responsive ">
                        <h5 class="mt-2"><a href="about.html">French-Polynesia
                            </a></h5>
                        <p class="para">8 Tours available</p>
                    </div>
                    <div class="img-box col-lg-4 col-md-6">
                        <img src="assets/images/b5.jpg" alt="product" class="img-responsive ">
                        <h5 class="mt-2"><a href="about.html">South Island</a></h5>
                        <p class="para">5 Tours available</p>
                    </div>
                    <div class="img-box col-lg-4 col-md-6">
                        <img src="assets/images/b6.jpg" alt="product" class="img-responsive ">
                        <h5 class="mt-2"><a href="about.html">Bora Bora</a></h5>
                        <p class="para">7 Tours available</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <?php include "includes/footer.php" ?>

</body>

</html>