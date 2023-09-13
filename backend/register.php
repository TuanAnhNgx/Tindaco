<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="style.css">
     <!-- Template CSS -->
     <link rel="stylesheet" href="../assets/css/style-starter.css">
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
<section class=" w3l-header-4 header-sticky">
        <!--header-->
        <header id="site-header" class="fixed-top">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark stroke">
				<h1><a class="navbar-brand" href="../index.php">
					<span class="fa fa-map-signs"></span> TINDACO
				</a></h1>
				<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
					<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					
				</button>
	  
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-lg-5">
						<li class="nav-item active">
							<a class="nav-link" href="../index.php">Trang Chủ <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item @@about__active">
							<a class="nav-link" href="../about.php">Tin Tức</a>
						</li>
						<li class="nav-item @@services__active">
							<a class="nav-link" href="../services.php">Khám Phá</a>
						</li>
						<li class="nav-item @@contact__active">
							<a class="nav-link" href="../contact.php">Liên Lạc</a>
						</li>
					</ul>
				<ul class="navbar-nav ml-auto">
						<li class="nav-item ml-4">
							<a class="nav-link phone" href="tel:+(21)-234-9999"><span class="fa fa-phone"></span> 032 850 1599</a>
						</li>
				<div class="search-right">
				</div>
					<!--Login -->
					<li class="nav-item" title="User"><a href="register.php" class="nav-link">
						<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
							<style>svg{fill:#ffffff}</style><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 
							128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
					</span></a></li>
					</ul>
				</div>
			</nav>
		</div>
	  </header>
        <!--/header-->
</section>
    
    <?php require_once("config.php"); ?>

    <!-- Đăng Ký -->
    <?php 
        if (isset($_POST["btn_submit"])) 
        {
            //lấy thông tin
            $username = $_POST["username"];
            $password = $_POST["password"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            //kiểm tra
            if ($username == "" || $password == "" || $email == "" || $phone == "")
            {
                echo "Bạn vui lòng nhập đầy đủ thông tin !";
            }else {
                $sql = "INSERT INTO users(username, password, email, phone) VALUES ('$username', '$password','$email','$phone')";
                mysqli_query($conn,$sql);
                echo "Chúc mừng bạn đăng ký tài khoản thành công .";
            }
        }
    ?>
    <!-- Đăng Nhập -->
    <?php
        //kiểm tra 
        if (isset($_POST["btn_submit_in"]))
        {
            print_r($_POST);
            //lấy thông tin
            $username = $_POST["name"];
            $password = $_POST["pass"];

            if ($username == "" || $password == "") {
                echo "username or password bạn không được để trống!";
            } else {
                    $sql = "select * from users where username = '$username' and password = '$password' ";
                    echo $sql;
                    $query = mysqli_query($conn,$sql);
                    $num_rows = mysqli_num_rows($query);
                if ($num_rows==0) {
                    echo "Tên đăng nhập hoặc mật khẩu không đúng !";
                }else{
                    // Lấy thông tin
                    while ($data = mysqli_fetch_array($query)) {
                        $_SESSION["id_user"] = $data["id_user"];
                        $_SESSION["username"] = $data["username"];
                        $_SESSION["password"] = $data["password"];
                        $_SESSION["role"] = $data["role"];
                    }
                    echo "Đăng nhập thành công!";
                    if ($_SESSION["role"] == 1) {
                        header('Location: admin.php');
                    } else {
                        header('Location: user.php');
                    }
                }
            }
        }
    ?>

    <div class="container-sign">

        <input type="radio" name="tab" id="signin" checked="checked" />
        <input type="radio" name="tab" id="register" />
        <div class="pages">
            <div class="page" style="padding-top: 60px;">
                <form action="register.php" method="POST">
                    <div class="input">
                        <div class="title">
                            <h1 style = "text-align: center">Đăng Nhập</h1>
                            </br>
                            </br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <style>
                                svg {
                                    fill: #fff
                                }
                                </style>
                                <path
                                    d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                            </svg>
                            TÀI KHOẢN
                        </div>
                        <input class="text" name="name" type="text" placeholder="" />
                    </div>
                    <div class="input">
                        <div class="title">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <style>
                                svg {
                                    fill: #fff
                                }
                                </style>
                                <path
                                    d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z" />
                            </svg>
                            MẬT KHẨU
                        </div>
                        <input class="text" name="pass" type="password" placeholder="" />
                    </div>
                    <div class="input">
                        <input type="submit" name="btn_submit_in" value="Đăng Nhập" />
                    </div>
                    </from>
            </div>

            <div class="page signup">
                <form action="register.php" method="POST">
                    <div class="input">
                        <div class="title">
                        </br>
                            </br>
                        <h1 style = "text-align: center">Đăng Ký Tài Khoản</h1>
                            </br>
                            </br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <style>
                                svg {
                                    fill: #fff
                                }
                                </style>
                                <path
                                    d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                            </svg>
                            TÀI KHOẢN
                        </div>
                        <input class="text" name="username" type="text" placeholder="" />
                    </div>
                    <div class="input">
                        <div class="title">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <style>
                                svg {
                                    fill: #fff
                                }
                                </style>
                                <path
                                    d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z" />
                            </svg>
                            MẬT KHẨU
                        </div>
                        <input class="text" name="password" type="password" placeholder="" />
                    </div>
                    <div class="input">
                        <div class="title">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <style>
                                svg {
                                    fill: #ffffff
                                }
                                </style>
                                <path
                                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                            </svg>
                            EMAIL
                        </div>
                        <input class="text" name="email" type="email" placeholder="" />
                    </div>
                    <div class="input">
                        <div class="title">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <style>
                                svg {
                                    fill: #ffffff
                                }
                                </style>
                                <path
                                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                            </svg>
                            SỐ ĐIỆN THOẠI
                        </div>
                        <input class="text" name="phone" type="phone" placeholder="" />
                    </div>
                    <div class="input">
                        <input type="submit" name="btn_submit" value="Đăng Ký" />
                    </div>
                    </from>
            </div>
        </div>
        <div class="tabs">
            <label class="tab" for="signin">
                <div class="text">Đăng Nhập</div>
            </label><label class="tab" for="register">
                <div class="text">Đăng Ký Tài Khoản</div>
            </label>
        </div>
    </div>
    <script>
    var signin = document.querySelector('#signin')
    var register = document.querySelector('#register')

    </script>
    <?php include('../includes/footer.php');  ?>
</body>

</html>