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

    <style>
    @media (max-width: 768px) {
        .img-responsive {
            max-width: 100%;
            height: auto;
        }
    }
</style>

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
                        <li class="right-side propClone"><a href="index.php" class="editContent">Trang Chủ <span
                                    class="fa fa-angle-right" aria-hidden="true"></span></a>
                            <p>
                        </li>
                        <li class="active editContent">Giới thiệu</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- breadcrumbs //-->

    <section class="w3l-content-with-photo-4" id="about">
    <div class="content-with-photo4-block editContent">
        <div class="container">
            <!-- Hiển thị thông tin bài viết ở đây -->
            <h2 class="content-with-photo4-title">Chào mừng bạn đến với Tindaco - Đối tác đáng tin cậy trong hành trình khám phá thế giới</h2>
            <br>
            <img src="./assets/images/Logo.png" alt="Tindaco - Khám phá thế giới cùng chúng tôi" class="img-responsive" />

            <p>Bạn đang tìm kiếm những trải nghiệm du lịch tuyệt vời, một hành trình thú vị đến với những danh lam thắng cảnh đẹp và hấp dẫn? Hãy để Tindaco là người bạn đồng hành tin cậy trên mỗi chuyến đi của bạn. Với hơn một thập kỷ hoạt động, Tindaco đã xây dựng lên một tên tuổi uy tín trong việc cung cấp dịch vụ cho thuê xe du lịch và đặt phòng khách sạn hàng đầu.</p>
            <img src="./assets/images/linhvuc.png" alt="Tindaco - Khám phá thế giới cùng chúng tôi" class="img-responsive" />
            <h3>Lĩnh vực hoạt động đa dạng</h3>
            <p>Tindaco hoạt động trong lĩnh vực cung cấp dịch vụ cho thuê xe du lịch và đặt phòng khách sạn. Chúng tôi hiểu rõ rằng việc di chuyển và lưu trú là một phần quan trọng của trải nghiệm du lịch hoàn hảo. Với sứ mệnh mang lại sự an toàn, tiện lợi và thích thú cho khách hàng, chúng tôi luôn tận tâm và nỗ lực để đáp ứng mọi nhu cầu của bạn.</p>
            <br>
            <h3>Dịch vụ đa dạng và linh hoạt</h3>
            <p>Chất lượng dịch vụ là ưu tiên hàng đầu của chúng tôi. Đội ngũ nhân viên giàu kinh nghiệm của Tindaco cùng với hệ thống xe đa dạng và sẵn sàng, chúng tôi sẽ luôn đồng hành cùng bạn trong mọi hành trình. Dù bạn là cá nhân, gia đình hay đại diện cho cơ quan tổ chức, Tindaco cam kết mang đến cho bạn những trải nghiệm du lịch tốt nhất.</p>
            <br>
            <img src="./assets/images/improve.png" alt="Tindaco - Khám phá thế giới cùng chúng tôi" class="img-responsive" />
            <br>
            <br>
            <h3>Sự phát triển không ngừng</h3>
            <p>Với hơn 10000 tour du lịch đã được tổ chức thành công, Tindaco tự hào là người bạn đáng tin cậy của cả khách hàng trong và ngoài nước. Chúng tôi không ngừng cải tiến và phát triển để mang đến những chuyến đi hoàn hảo nhất, để bạn có cơ hội khám phá thế giới một cách độc đáo và đầy kỷ niệm.</p>
            <br>
            <br>
            <img src="https://datxanhservices.vn/wp-content/uploads/2021/03/nguon-nhan-luc-hung-hau-chia-khoa-vang-the-hien-tam-co-dat-xanh-services-3.jpg" alt="Tindaco - Khám phá thế giới cùng chúng tôi" class="img-responsive" />
            <br>
            <br>
            <h3>Đội ngũ đẳng cấp</h3>
            <p>Đằng sau thành công của Tindaco là đội ngũ nhân viên với hơn 1000 người, được đào tạo chuyên nghiệp và tận tâm với khách hàng. Với hơn 500 xe đa dạng và hiện đại, chúng tôi tự tin rằng luôn đáp ứng được mọi yêu cầu từ bạn.</p>

            <p>Những giá trị mà chúng tôi mang lại không chỉ là một chuyến đi, mà còn là một cuộc hành trình đáng nhớ và ý nghĩa. Hãy để Tindaco đồng hành cùng bạn trên mọi nẻo đường, mỗi chuyến đi sẽ trở thành một kỷ niệm đáng nhớ.</p>
            <br>
            <br>
            <img src="./assets/images/contact.png" alt="Tindaco - Khám phá thế giới cùng chúng tôi" class="img-responsive"/>
            <br>
            <br>
            <h3><a href="./contact.php">Liên hệ với chúng tôi</a></h3>
            <p>Hãy liên hệ với chúng tôi để biết thêm về các dịch vụ của Tindaco và để chúng tôi có cơ hội phục vụ bạn trong hành trình khám phá thế giới của bạn. Cùng Tindaco, mọi điều là có thể!</p>

            <address>
                Địa chỉ: LK 6/7 Ngô Thì Nhậm, Hà Cầu, Hà Đông, Hà Nội.<br>
                Số điện thoại: 0988 569 394<br>
                Email: huong.gdtindaco@gmail.com<br>
                Website: <a href = "https://tindaco.vn">https://tindaco.vn</a>
            </address>
            <div class="map-iframe ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.8484892022338!2d105.76601083540898!3d20.969542746542277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313453276764aef9%3A0xe656a6d9ad1cc811!2zbGnhu4FuIGvhu4EsIDIzIE5nw7QgVGjDrCBOaOG6rW0sIExhIEtow6osIEjDoCDEkMO0bmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1691678873646!5m2!1svi!2s"
                            width="100%" height="300" frameborder="0" style="border: 0px; pointer-events: none;"
                            allowfullscreen=""></iframe>
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