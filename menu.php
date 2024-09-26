<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@500&family=Open+Sans:wght@500&family=Poppins:wght@500;600;700;800;900&display=swap');
      </style>
    <div class="top">
        <div class="top_icon">
            <ion-icon name="navigate-circle-outline"></ion-icon><p>149 Cửa hàng khắp cả nước</p>
        </div>
        <div class="top_icon">
            <ion-icon name="call-outline"></ion-icon><p>Đặt hàng: 1800.6936</p>
        </div>
    </div>

    <div class="menu_an">
        <button class="icon_close"><ion-icon name="close"></ion-icon></button>
        <div id="menu_doc">
    
            <li><a href="coffee.php" id="home">Cà phê</a></li>
            <li><a href="tea.php" id="About">Trà</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="camhung.php">Cảm hứng CloudFee</a></li>
            <li><a href="#footer">Chuyện nhà</a></li>
            <li><a href="#footer">Cửa hàng</a></li>
            <li><a class="btnLogin-popup1">Đăng nhập</a></li>
        </div>
    </div>

    <header id="header">
        <button class="menu11"><ion-icon name="menu-outline"></ion-icon></button>
        <a href="index.php" class="logo">THE COFFEE HOUSE</a>
        <nav class="navigation">
            <a href="coffee.php" id="home">Cà phê</a>
            <a href="tea.php" id="About">Trà</a>
            <a href="menu.php">Menu</a>
            <a href="camhung.php">Cảm hứng CloudFee</a>
            <a href="#footer" id="camhung">Chuyện nhà</a>
            <a href="#footer">Cửa hàng</a>
            <button class="btnLogin-popup">Đăng Nhập</button>
        </nav>
    </header>

    <!-- login -->
    <div class="voboclogin">
        <span class="icon-close"><ion-icon name="close"></ion-icon>
        </span>
        <div class="from-box login">
            <h2>Đăng Nhập</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" required>
                        <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required minlength="8">
                        <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Lưu Đăng Nhập</label>
                    <a href="#">Quên mật khẩu?</a>
                </div>
                <button type="submit" class="btn">Đăng Nhập</button>
                <div class="login-register">
                    <p>không có tài khoản? <a href="#" class="linkdangky">
                        Đăng Ký
                    </a></p>
                </div>
            </form>
        </div>
        <div class="from-box register">
            <h2>Đăng Ký</h2>
            <form action="#">

                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="finger-print"></ion-icon>
                    </span>
                        <input type="text" id="registerPhone" name="registerPhone" required>
                        <label>Số điện thoại</label>
                        <span id="phoneError" class="error-message"></span>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" required>
                        <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required minlength="8">
                        <label>Password</label>
                        
                        <!-- <label for="registerMedia">Media:</label>
      <input type="file" id="registerMedia" name="registerMedia" accept="image/*, video/*"> -->
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Tôi đồng ý với tất cả điều khoản</label>
                </div>
                <button type="submit" class="btn">Đăng Ký</button>
                <div class="login-register">
                    <p>Bạn đã có tài khoản? <a href="#" class="linkdangnhap">
                        Đăng Nhập
                    </a></p>
                </div>
            </form>
        </div>
    </div>


    <!--  -->
    <div class="menu_coffee">
        <div class="menu">
        <div class="menu_left">
        <p>Tất Cả</p>
        <a href="#">Cà Phê</a>
        <a href="#">Trà</a>
        <a href="#">Cloud</a>
        <a href="#">Hi-Tea-Healthy</a>
        <a href="#">Trà Xanh - Sô cô la</a>
        <a href="#">Thức uống đá xay</a>
        <a href="#">Bánh & Snack</a>
        <a href="#">Thưởng Thức Tại Nhà</a>
        </div>
    </div>

    <div class="coffee_highligt">
    <e>Cà Phê Highlight</e>
    <div class="items itemss"><img src="img/menu1.jpg" alt="">
    <a href="#">Phin Sữa Tươi Bánh Flan</a>
    <p>49.000 đ</p>
    </div>
    <div class="items itemss"><img src="img/menu2.jpg" alt="">
    <a href="#">Trà Xanh Espresso Marble</a>
    <p>49.000 đ</p>
    </div>
    
</div>
    <div class="coffee_highligt">
        <e>Cà Phê Việt Nam</e>
    <div class="items itemss"><img src="img/menu3.jpg" alt="">
    <a href="#">Đường Đen Sữa Đá</a>
    <p>45.000 đ</p>
    </div>
    <div class="items itemss"><img src="img/menu4.jpg" alt="">
        <a href="#">The Coffee House Sữa Đá</a>
        <p>39.000 đ</p>
    </div>
    <div class="items itemss"><img src="img/menu5.jpg" alt="">
        <a href="#">Cà Phê Sữa Đá</a>
        <p>29.000 đ</p>
    </div>
    <div class="items itemss"><img src="img/menu6.jpg" alt="">
        <a href="#">Cà Phê Sữa Nóng</a>
        <p>39.000 đ</p>
    </div>
    <div class="items itemss"><img src="img/menu7.jpg" alt="">
        <a href="#">Bạc Sỉu</a>
        <p>29.000 đ</p>
    </div>
    <div class="items itemss"><img src="img/menu8.jpg" alt="">
        <a href="#">Bạc Sỉu Nóng</a>
        <p>39.000 đ</p>
    </div>
    <div class="items itemss"><img src="img/menu9.jpg" alt="">
        <a href="#">Cà Phê Đen Đá</a>
        <p>29.000 đ</p>
    </div>
    <div class="items itemss"><img src="img/menu10.jpg" alt="">
        <a href="#">Cà Phê Đen Nóng</a>
        <p>39.000 đ</p>
    </div>
    <div class="items itemss"><img src="img/menu11.jpg" alt="">
        <a href="#">Cà Phê Sữa Đá Chai Fresh 250ML</a>
        <p>75.000 đ</p>
    </div>

    </div>
    
    
    </div>

    <!--  -->
    <footer>
        <div id="container">
            <div id="footer-content">
                <h3>Liên Hệ Chúng Tôi</h3>
                <p>Email: hi@thecoffeehouse.vn</p>
                <p>Đặt hàng: 1800 6936</p>
                <p>Tầng 3-4 Hub Building
                    195/10E Điện Biên Phủ, P.15,
                    Q.Bình Thạnh, TP.Hồ Chí Minh</p>
            </div>
            <div id="footer-content">
                <h3>Đường Dẫn Nhanh</h3>
                 <ul id="list">
                    <li><a href="index.html">Trang Chủ</a></li>
                    <li><a href="coffee.html">Cà Phê</a></li>
                    <li><a href="tea.html">Trà</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="chuyennha.html">Chuyện Nhà</a></li>
                 </ul>
            </div>
            <div id="footer-content">
                <h3>Theo Dõi Chúng Tôi</h3>
                <ul id="social-icons">
                 <li><a href=""><i class="fab fa-facebook"><ion-icon name="logo-facebook"></ion-icon></i></a></li>
                 <li><a href=""><i class="fab fa-twitter"><ion-icon name="logo-twitter"></ion-icon></i></a></li>
                 <li><a href=""><i class="fab fa-instagram"><ion-icon name="logo-instagram"></ion-icon></i></a></li>
                 <li><a href=""><i class="fab fa-linkedin"><ion-icon name="logo-youtube"></ion-icon></i></a></li>
                 <div class="fb-page" data-href="https://www.facebook.com/The.Coffee.House.2014?ref=embed_page" data-tabs="timeline" data-width="240px" data-height="140px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/The.Coffee.House.2014?ref=embed_page" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/The.Coffee.House.2014?ref=embed_page">The Coffee House</a></blockquote></div>
                </ul>
                </div>
        </div>
        <div id="bottom-bar">
            <p>&copy; 2023 your company . All rights reserved</p>
        </div>
    </footer>
    
 
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v18.0&appId=979068873510229" nonce="Nq5pniLn"></script>

    
    <script src="js.js"></script>
    <script script  type = "module"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"> </script> 
<script script  nomodule  src = "https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js"> </script>
</body>
</html>