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
        <div class="about-inner contact">
            <div class="breadcrumbs-sub">
                <ul class="breadcrumbs-custom-path">
                    <li class="right-side propClone"><a href="index.php" class="editContent">Trang chủ <span
                                class="fa fa-angle-right" aria-hidden="true"></span></a>
                        <p>
                    </li>
                    <li class="active editContent">
                        Liên Lạc</li>
                </ul>
            </div>
        </div>
        </div>
    </section>
    <!-- breadcrumbs //-->
    <section class="w3l-contact-info-main" id="contact">
        <div class="contact-sec	editContent">
            <div class="container">
                <div class="map-content-9 mb-5 ">
                    <form action="#" method="post">
                        <div class="twice-two">
                            <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Họ và Tên"
                                required="">
                            <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Email"
                                required="">
                            <input type="text" class="form-control" name="phone" id="phone"
                                placeholder="Số Điện Thoại" required="">
                        </div>
                        <textarea name="message" class="form-control" id="message" placeholder="Tin Nhắn"
                            required=""></textarea>

                        <div class="text-right">
                            <button type="submit" class="btn btn-contact">Gửi Tin Nhắn</button>
                        </div>
                    </form>
                </div>

                <div class="d-grid contact-view">

                    <div class="cont-details">
                        <h3 class="sub-title">Thông Tin Liên Lạc</h3>
                        <p class="para mt-3 mb-4">Mọi thông tin chi tiết vui lòng liên hệ với chúng tôi.</p>
                        <div class="cont-top">
                            <div class="cont-left text-center">
                                <span class="fa fa-phone text-secondary"></span>
                            </div>
                            <div class="cont-right">
                                <p class="para"><a href="tel:(+84)988569394">0988 569 394</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-envelope-o text-secondary"></span>
                            </div>
                            <div class="cont-right">
                                <p class="para"><a href="mailto:huong.gdtindaco@gmail.com" class="mail">huong.gdtindaco@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-map-marker text-secondary"></span>
                            </div>
                            <div class="cont-right">
                                <p class="para"> LK 6/7 Ngô Thì Nhậm, Hà Cầu,
                                    <br> Hà Đông, Hà Nội.
                                    
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="map-iframe ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.8484892022338!2d105.76601083540898!3d20.969542746542277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313453276764aef9%3A0xe656a6d9ad1cc811!2zbGnhu4FuIGvhu4EsIDIzIE5nw7QgVGjDrCBOaOG6rW0sIExhIEtow6osIEjDoCDEkMO0bmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1691678873646!5m2!1svi!2s"
                            width="100%" height="300" frameborder="0" style="border: 0px; pointer-events: none;"
                            allowfullscreen=""></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- footer -->
    <?php include "includes/footer.php" ?>

</body>

</html>