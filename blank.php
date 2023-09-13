<?php
// Kết nối đến cơ sở dữ liệu
include('./backend/config.php');
?>

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
    <section class="w3l-header-4 header-sticky">
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

    <?php
            // Lấy ID bài viết từ URL hoặc form
            $postID = isset($_GET['id']) ? $_GET['id'] : null;

            // Truy vấn dữ liệu từ bảng 'post' dựa trên ID bài viết
            $query = "SELECT * FROM post WHERE id = '$postID'";
            $result = mysqli_query($conn, $query);

            // Kiểm tra xem có dữ liệu hay không
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $title = $row['title'];
                ?>
    <!-- breadcrumbs -->
    <section class="w3l-inner-banner-main">
        <div class="about-inner about editContent">
            <div class="container">
                <div class="breadcrumbs-sub">
                    <ul class="breadcrumbs-custom-path">
                        <li class="right-side propClone"><a href="index.php" class="editContent">Home <span
                                    class="fa fa-angle-right" aria-hidden="true"></span></a>
                            <p>
                        </li>
                        <li class="active editContent"><?php echo ($title); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumbs //-->

    <section class="w3l-content-with-photo-4" id="about">
    <div class="content-with-photo4-block editContent">
        <div class="container">
            <?php
                
                // echo "<h2>" . $row['title'] . "</h2>";

                // Chuyển đổi Markdown thành HTML và hiển thị
                require_once './parsedown/Parsedown.php';
                $parsedown = new Parsedown();
                echo $parsedown->text($row['content_markdown']);
            } else {
                echo "<script>window.location.href = 'error.php';</script>";
                exit();
            }
            

            // Đóng kết nối
            mysqli_close($conn);
            ?>
        </div>
    </div>
</section>

    
    <!-- footer -->
    <?php include "includes/footer.php" ?>

</body>

</html>
