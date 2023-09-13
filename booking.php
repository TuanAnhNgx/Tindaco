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
                    <li class="right-side propClone"><a href="index.html" class="editContent">Home <span
                                class="fa fa-angle-right" aria-hidden="true"></span></a>
                        <p>
                    </li>
                    <li class="active editContent">
                        Đặt Vé</li>
                </ul>
            </div>
        </div>
        </div>
    </section>
    <!-- breadcrumbs //-->
    <section class="w3l-call-to-action_9">
        <div class="call-w3">
            <div class="container">
                <div class="booking-form-content">
                    <div class="main-titles-head ">
                        <h3 class="header-name">Đồng Hành Cùng Tindaco
                        </h3>
                        <p class="tiltle-para editContent ">Hãy để lại thông tin liên lạc của bạn
                            để đội ngũ nhân viên của Tindaco sẽ liên lạc tư vấn cho bạn ngay hôm nay!
                        </p>
                    </div>
                    <?php
                        if (isset($_SESSION['success_message'])) {
                            echo '<div class="success-message" style = "color: red; font-weight: 900; text-align: center">' . $_SESSION['success_message'] . '</div>';
                            }

                        ?>     
                        </br>
                        </br>
                    <form action="booking-status.php" method="post" class="booking-form">
                        <div class="row book-form">
                            <div class="form-input col-md-4">
                                <label>Họ và Tên</label>
                                <input type="text" name="name" placeholder="Họ và Tên" required="">
                            </div>
                            <div class="form-input col-md-4">
                            <label>Số Điện Thoại</label>
                            <input type="text" name="phone" placeholder="Số Điện Thoại" required="">
                            </div>
                            <div class="form-input col-md-4">
                                <label>Điểm Đến</label>
                                <select name="destination" class="selectpicker">
                                    <option value="">Chọn Địa Điểm</option>
                                    <option value="hanoi">Hà Nội</option>
                                    <option value="mocchau">Mộc Châu</option>
                                    <option value="sonla">Sơn La</option>
                                    <option value="hagiang">Hà Giang</option>
                                    <option value="bavi">Ba Vì</option>
                                    <option value="sanbay">Sân Bay</option>
                                </select>

                            </div>
                            <!-- <div class="form-input col-md-4">-->
                                <div class="form-input col-md-4 mt-3">
                                <label>Hoạt Động Thêm</label>
                                <select name="activity" class="selectpicker">
                                    <option value="">Hoạt Động</option>
                                    <option value="city-tours">Du Lịch Quanh Thành Phố</option>
                                    <option value="cultural-thematic-tours">Tham Quan Văn Hóa Địa Phương</option>
                                    <option value="family-friendly-tours">Du Lịch Gia Đình</option>
                                    <option value="holiday-seasonal-tours">Du Lịch Ngày Lễ Hoặc Theo Mùa</option>
                                    <option value="indulgence-luxury-tours">Du Lịch Sang Trọng</option>
                                    <option value="outdoor-activites">Tham Gia Hoạt Động Ngoài Trời</option>
                                    <option value="relaxation-tours">Du Lịch Thư Giãn</option>
                                    <option value="wild-adventure-tours">Du Lịch Khám Phá</option>
                                    <option value="airport-trip-1-way">Đi Sân Bay 1 Chiều</option>
                                    <option value="airport-trip-2-ways">Đi Sân Bay 2 Chiều</option>
                                </select>

                            </div> 
                            <div class="form-input col-md-4 mt-3">

                                <label>Ngày Bắt Đầu</label>
                                <input type="date" name="startDate" placeholder="Chọn Ngày" required="">

                            </div>
                            <div class="form-input col-md-4 mt-3">
                                <label>Ngày Kết Thúc</label>
                                <input type="date" name="endDate" placeholder="Chọn Ngày">
                            </div>
                            <div class="bottom-btn col-md-12 mt-3"> 
                                               
                                <button class="btn btn-style btn-primary w-100 btn-style">Gửi Thông Tin</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <?php include "includes/footer.php" ?>

</body>

</html>