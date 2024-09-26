<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
    <div class="theitems coffee">
        <div class="coffee_tainha"><p>Cà Phê Tại Nhà</p></div>
        <div class="items"><img src="img/caphe1.jpg" alt="">
        <a href="#">Cà Phê Đen Đá Hộp (14 gói x 16g)</a>
        <p>58.000 đ</p>
        </div>
        <div class="items"><img src="img/caphe2.jpg" alt="">
        <a href="#">Cà Phê Đen Đá Túi (30 gói x 16g)</a>
        <p>110.000 đ</p>
        </div>
        <div class="items"><img src="img/caphe3.jpg" alt="">
            <a href="#">Thùng Cà Phê Sữa Espresso</a>
            <p>336.000 đ</p>
        </div>
        <div class="items"><img src="img/caphe4.jpg" alt="">
            <a href="#">Combo 6 Lon Cà Phê Espresso</a>
            <p>29.000 đ</p>
        </div>
        <div class="items"><img src="img/caphe5.jpg" alt="">
            <a href="#">Cà Phê Rang Xay Original 1KG</a>
            <p>235.000 đ</p>
        </div>
        <div class="items"><img src="img/caphe6.jpg" alt="">
            <a href="#">Cà Phê Rang Xay Original 250g</a>
            <p>60.000 đ</p>
        </div>
        <div class="items"><img src="img/caphe7.jpg" alt="">
            <a href="#">Cà Phê Sữa Đá Hòa Tan (10 gói)</a>
            <p>44.000 đ</p>
        </div>
        <div class="items"><img src="img/caphe8.jpg" alt="">
            <a href="#">Cà Phê Sữa Đá Hòa Tan Túi 22G</a>
            <p>99.000 đ</p>
        </div>
        <div class="items"><img src="img/caphe9.jpg" alt="">
            <a href="#">Cà Phê Hoà Tan Đậm Vị Việt (18 gói x 16 gam)</a>
            <p>48.000 đ</p>
        </div>
        <div class="items"><img src="img/caphe10.jpg" alt="">
            <a href="#">Cà Phê Hòa Tan Đậm Vị Việt Túi 40x16G</a>
            <p>99.000 đ</p>
        </div>
        <div class="items"><img src="img/caphe11.jpg" alt="">
            <a href="#">Cà Phê Sữa Đá Pack 6 Lon</a>
            <p>84.000 đ</p>
        </div>
        <div class="items"><img src="img/caphe12.jpg" alt="">
            <a href="#">Thùng 24 Lon Cà Phê Sữa Đá</a>
            <p>336.000 đ</p>
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