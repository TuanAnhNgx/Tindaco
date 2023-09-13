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
        <div class="about-inner about editContent">
            <div class="container">
                <div class="breadcrumbs-sub">
                    <ul class="breadcrumbs-custom-path">
                        <li class="right-side propClone"><a href="index.php" class="editContent">Trang chủ <span
                                    class="fa fa-angle-right" aria-hidden="true"></span></a>
                            <p>
                        </li>
                        <li class="active editContent">Tin Tức</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- breadcrumbs //-->

    <section class="w3l-content-with-photo-4" id="about">
        <div class="content-with-photo4-block editContent">
            <div class="container">

                <div class="my-bio">
                    <img src="assets/images/card visit-01.png" alt="product" class="img-responsive about-me">
                    <h3 class="mt-lg-4 mt-3">A Gondola Ride is the One Venetian Tourist Trap Everyone Falls Into.</h3>
                    <p class="para mb-3">Lorem ipsum dolor sit amet deleniti dolore sequi labore similique vitae
                        .inventore deleniti dolore sequi labore similique vitae quae est.Cum quo maiores asperiores
                        sequi error alias molli aliquid pr Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.inventore deleniti dolore sequi labore similique vitae.</p>
                    <p class="para mb-lg-3">Cum quo maiores asperiores sequi error alias molli aliquid pr Lorem ipsum
                        dolor sit amet consectetur adipisicing elit.inventore deleniti dolore sequi labore similique
                        vitae.</p>
                </div>

            </div>
        </div>
        </div>
    </section>
    <section class="w3l-stats">
        <div class="main-w3 ">
            <div class="container">
                <div class="right-side">
                    <h3 class="title-big">consectetur adipisicing elit. Odio molestiae explicabo nostrum recus andae.
                    </h3>
                    <p class="mt-4 para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, soluta impedit.
                        Consequatur,
                        quasi mollitia? Adipisci exercitationem amet dolore expedita repudiandae voluptatem impedit ipsa
                        vero
                        repellendus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio molestiae ex aut
                        possimus atque explicabo nostrum recusandae ab quisquam at!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-recent-work">
        <div class="jst-two-col">
            <div class="container">
                <div class="row">
                    <div class="my-bio cwp4-text col-lg-6">
                        <h3>Modern and Luxury Architecture and Interior Designers for you</h3>
                        <p class="para mt-3 mb-lg-4 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo,
                            soluta impedit. Consequatur, quasi mollitia? Adipisci exercitationem amet dolore expedita
                            repudiandae voluptatem impedit ipsa vero repellendus? Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Odio molestiae ex aut possimus atque explicabo nostrum
                            recusandae ab quisquam.</p>
                        <a href="about.php" class="action-button btn mt-4">Read more <span
                                class="fa fa-angle-double-right"></span></a>
                    </div>
                    <div class="col-lg-6 ">
                        <img src="assets/images/card visit-04.png" alt="product" class="img-responsive about-me">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-team-main-6" id="team">
        <!-- /team-grids -->
        <div class="team-content-page editContent ">

            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-3 col-md-6 col-sm-6 column">
                        <a href="#url"><img class="img img-responsive" src="assets/images/t1.jpg" alt=""></a>
                        <h4><a href="#url">John watson</a></h4>
                        <div class="w3l-team-7_bottom">
                            <div class="w3l-team-7_bottom-left">
                                <h6>Founder of company</h6>
                            </div>
                            <ul class="social_7 mt-3">
                                <li><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#twitter"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 column">
                        <a href="#url"><img class="img img-responsive" src="assets/images/t2.jpg" alt=""></a>
                        <h4><a href="#url">Alexander</a></h4>
                        <div class="w3l-team-7_bottom">
                            <div class="w3l-team-7_bottom-left">
                                <h6>Co-Founder of company</h6>
                            </div>
                            <ul class="social_7 mt-3">
                                <li><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#twitter"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 column">
                        <a href="#url"><img class="img img-responsive" src="assets/images/t3.jpg" alt=""></a>
                        <h4><a href="#url">Steve smith</a></h4>
                        <div class="w3l-team-7_bottom">
                            <div class="w3l-team-7_bottom-left">
                                <h6>Manager of company</h6>
                            </div>
                            <ul class="social_7 mt-3">
                                <li><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#twitter"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 column">
                        <a href="#url"><img class="img img-responsive" src="assets/images/t4.jpg" alt=""></a>
                        <h4><a href="#url">Steve smith</a></h4>
                        <div class="w3l-team-7_bottom">
                            <div class="w3l-team-7_bottom-left">
                                <h6>Manager of company</h6>
                            </div>
                            <ul class="social_7 mt-3">
                                <li><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#twitter"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /team-grids -->
    </section>
    <!-- footer -->
    <?php include "includes/footer.php" ?>

</body>

</html>