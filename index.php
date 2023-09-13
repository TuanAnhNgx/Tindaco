<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tindaco </title>

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

    <!-- Banner -->
    <?php include "includes/banner.php" ?>


    <section class="w3l-call-to-action_9">
        <div class="call-w3">
            <div class="container">
                <div class="booking-form-content">
                    <div class="main-titles-head ">
                        <h3 class="header-name">Đồng Hành Cùng TINDACO
                        </h3>
                        <p class="tiltle-para editContent ">Hãy để lại thông tin liên lạc của bạn
                            để đội ngũ nhân viên của TINDACO sẽ liên lạc tư vấn cho bạn ngay hôm nay!
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
    <section class="w3l-specification-6">
        <div class="specification-layout editContent">
            <div class="container-fluid">
                <div class="row text-left img-grids">
                    <div class="col-lg-6 p-0">
                        <div class="images-right">
                            <div class="p-md-5 p-3">
                                <h4><a href="#url">Du Lịch Mộc Châu</a></h4>
                                <p>Khám phá vẻ đẹp mộc mạc và hùng vĩ tại Mộc Châu - điểm đến lý tưởng cho hành trình thư giãn và khám phá thiên nhiên. </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 p-0">
                        <div class="four-grids">
                            <div class="images-text">
                                <div class="ser-bg1">
                                    <div class="p-md-5 p-3">
                                        <h4><a href="#url">Du Lịch Hạ Long</a></h4>
                                        <p>Hạ Long - Kỳ quan thiên nhiên hùng vĩ. </p>

                                    </div>
                                </div>
                            </div>
                            <div class="images-text">
                                <div class="ser-bg4">
                                    <div class="p-md-5 p-3">
                                        <h4><a href="#url">Du Lịch Tràng An</a></h4>
                                        <p>Hành trình khám phá phong cảnh thần tiên. </p>

                                    </div>
                                </div>
                            </div>
                            <div class="images-text">
                                <div class="ser-bg2">
                                    <div class="p-md-5 p-3">
                                        <h4><a href="#url">Du Lịch Tam Cốc</a></h4>
                                        <p>Đắm chìm trong cảnh quan thiên nhiên tuyệt đẹp. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="images-text">
                                <div class="ser-bg3">
                                    <div class="p-md-5 p-3">
                                        <h4><a href="#url">Tham Quan Chùa Bái Đính</a></h4>
                                        <p>Kỳ quan tâm linh đỉnh núi hùng vĩ. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w3l-covers-18">
        <div class="covers-main editContent">
            <div class="container">
                <div class="main-titles-head ">
                    <h3 class="header-name">Dịch Vụ Thuê Xe Du Lịch
                    </h3>
                    <p class="tiltle-para editContent ">TINDACO mang đến trải nghiệm tuyệt vời qua dịch vụ thuê xe du lịch trọn gói.</p>
                    <p class="tiltle-para editContent "> Nơi mọi chi tiết được điều chỉnh tỉ mỉ để hòa quyện với hành trình của bạn.</p>
                </div>
                <div class="gallery-image row">
                    <div class="col-lg-4 col-md-6">
                        <div class="img-box">
                            <img src="https://thuexegianggia.com/wp-content/uploads/2020/12/thue-xe-45-cho-universe-luxury.jpg" alt="product" class="img-responsive ">
                            <h5 class="my-2"><a href="news.php">Thuê Xe 45 chỗ ngồi</a></h5>
                            <div class="blog-date">
                                <p class="pos-date"><span class="fa fa-clock-o mr-1"></span>7 Ngày</p>
                                <p class="pos-date text-right"><span class="fa fa-users mr-1"></span>Tối Đa: 45 Người</p>
                            </div>
                            <p class="para">Phù hợp cho chuyến du lịch, công tác của cơ quan tổ chức</p>
                            <div class="top-gap">
                                <h5>Giá Chỉ Từ 1.000.000</h5>
                                <a href="#url" class="icon text-center"><span class="fa fa-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 top-top2">
                        <div class="img-box">
                        
                            <img src="assets/images/tin16s.png" alt="product" class="img-responsive ">
                            <h5 class="my-2"><a href="news.php">Thuê Xe 16 Chỗ</a></h5>
                            <div class="blog-date">
                                <p class="pos-date"><span class="fa fa-clock-o mr-1"></span>7 Ngày</p>
                                <p class="pos-date text-right"><span class="fa fa-users mr-1"></span>Tối Đa: 16 Người</p>
                            </div>
                            <p class="para">Phù hợp với đại gia đình khi muốn đi chơi xa cùng nhau.</p>
                            <div class="top-gap">
                            <h5>Giá Chỉ Từ 1.000.000</h5>
                                <a href="#url" class="icon text-center"><span class="fa fa-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 top-top">
                        <div class="img-box">
                            <img src="https://m.baotuyenquang.com.vn/media/images/2020/01/img_20200130145708.jpg" alt="product" class="img-responsive ">
                            <h5 class="my-2"><a href="news.php">Thuê Xe Con 5 chỗ</a></h5>
                            <div class="blog-date">
                                <p class="pos-date"><span class="fa fa-clock-o mr-1"></span>7 Ngày</p>
                                <p class="pos-date text-right"><span class="fa fa-users mr-1"></span>Tối Đa: 5 Người</p>
                            </div>
                            <p class="para">Là sự lựa chọn tuyệt vời cho gia đình nhỏ của bạn khi đi chơi xa</p>
                            <div class="top-gap">
                            <h5>Giá Chỉ Từ 1.000.000</h5>
                                <a href="#url" class="icon text-center"><span class="fa fa-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="w3l-teams-15">
        <div class="team-single-main editContent">
            <div class="container">

                <div class="row">
                    <div class="column2 col-lg-6">

                        <img src="https://xedongnam.com/wp-content/uploads/2021/03/xe-dua-don-san-bay-tai-can-tho.jpg" alt="product" class="img-responsive ">
                    </div>
                    <div class="nature-row  coloum4 col-lg-6">
                        
                        <h3>Dịch Vụ Xe Đưa Đón Khách Đi Sân Bay </h3>
                        <p class="para editContent text ">
                        Chào mừng đến với Dịch Vụ Xe Đưa Đón Khách Đi Sân Bay. Chúng tôi cam kết cung cấp hành trình thuận tiện, an toàn và đáng tin cậy. 
                        Với đội ngũ tài xế chuyên nghiệp và đa dạng về phương tiện, chúng tôi sẽ đảm bảo bạn có trải nghiệm vận chuyển suôn sẻ và thoải mái.</p>
                        <a href="blank.php?id=1" class="action-button btn mt-lg-5 mt-4">Tìm Hiểu Thêm</a>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="w3l-clients" id="client">
        <div class="call-w3">
            <div class="container text-center">
                <div class="title-head">
                    <h3>Hãy Đăng Ký Đồng Hành Cùng TINDACO <br>Ngay Hôm Nay</h3>
                    <a class="btn btn-theme2 mt-lg-5 mt-4" href="booking.php">Đặt Vé Ngay</a>
                </div>

            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include "includes/footer.php" ?>

</body>

</html>