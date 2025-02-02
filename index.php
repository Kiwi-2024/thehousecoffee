<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>COFFEE</title>
</head>
<body>
<?php
// Kiểm tra nếu có tham số 'success' trong URL và giá trị là 1
if (isset($_GET['success']) && $_GET['success'] == 1) {
    $message = "Đăng ký Thành công";
    echo "<script>alert('$message');</script>";

    // Xóa lịch sử duyệt để không hiển thị thông báo khi người dùng làm chuyển hướng hoặc làm mới trang
    echo "<script>history.replaceState({}, document.title, '" . $_SERVER['PHP_SELF'] . "');</script>";
}
?>
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
            <a href="camhung.php" id="camhung">Cảm hứng CloudFee</a>
            <a href="#footer">Chuyện nhà</a>
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
            <form action="reg.php" method="post">

                <div class="input-box">
                    <span class="icon">
                    <ion-icon name="person"></ion-icon>
                    </span>
                        <input type="text" id="username" name="username" required>
                        <label>Tên Tài Khoản</label>
                        <span id="phoneError" class="error-message"></span>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="password" required minlength="8">
                        <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Tôi đồng ý với tất cả điều khoản</label>
                </div>
                <button type="submit" class="btn" name="btn-reg" value="Đăng Ký">Đăng Ký</button>
                <div class="login-register">
                    <p>Bạn đã có tài khoản? <a href="#" class="linkdangnhap">
                        Đăng Nhập
                    </a></p>
                </div>
            </form>
        </div>
    </div>


    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="img/banner1.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/banner2.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/banner3.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/banner4.jpg" alt="">
            </div>
        </div>

        <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>

        </div>

            <ul class="dots">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
    </div>
    <div class="theitems">
        <div class="itemchu"><img src="img/items.jpg" alt=""></div>
        <div class="items"><img src="img/items1.jpg" alt="">
        <a href="#">CloudFee Hạnh Nhân Nướng</a>
        <p>49.000 đ</p>
        </div>
        <div class="items"><img src="img/items2.jpg" alt="">
        <a href="#">The Coffee House Sữa Đá</a>
        <p>39.000 đ</p>
        </div>
        <div class="items"><img src="img/item3.jpg" alt="">
            <a href="#">Hi-Tea Vải</a>
            <p>49.000 đ</p>
        </div>
        <div class="items"><img src="img/items4.jpg" alt="">
            <a href="#">Cà Phê Sữa Đá</a>
            <p>29.000 đ</p>
        </div>
        <div class="items"><img src="img/items5.jpg" alt="">
            <a href="#">Bánh Mì VN Thịt Nguội</a>
            <p>35.000 đ</p>
        </div>
        <div class="items"><img src="img/items6.jpg" alt="">
            <a href="#">Mochi Kem Chocolate</a>
            <p>19.000 đ</p>
        </div>
    </div>
    <div class="taybac">
        <div class="hinhanh"><img src="img/coffee.png" alt=""></div>
        <div class="taybac_p"><img src="img/traxanhtaybac.jpg" alt="" >
            <p class="text">Được trồng trọt và chăm chút kỹ lưỡng, nuôi dưỡng từ thổ nhưỡng phì nhiêu, 
            nguồn nước mát lành, bao bọc bởi mây và sương cùng nền nhiệt độ mát mẻ quanh năm,
            những búp trà ở Tây Bắc mập mạp và xanh mướt, hội tụ đầy đủ dưỡng chất, sinh khí, 
            và tinh hoa đất trời.Chính khí hậu đặc trưng cùng phương pháp canh tác của đồng bào dân 
            tộc nơi đây đã tạo ra Trà Xanh vị mộc dễ uống, dễ yêu, 
            không thể trộn lẫn với bất kỳ vùng miền nào khác.</p>
            <button class="thungay">Thử ngay</button>
        </div>
        <div class="hinhanh1"><img src="img/taybac2.png" alt=""></div>

    </div>
    <div class="textcoffee">
        <p>The Coffee House <br>
        Grand View</p>
        <t>Nhà mới Quận 7 tọa lạc tại khu đô thị The Grand<br>View, với những khu phố hiện đại, sàm uất và<br>nhộn nhịp <br></t>
        <button class="buttoncoffee">Tìm hiểu thêm</button>
    </div>

    <div class="slider1">
        <div class="list1">
            <div class="item1">
                <img src="img/slide1.jpg" alt="">
            </div>
            <div class="item1">
                <img src="img/slider2.jpg" alt="">
            </div>
            <div class="item1">
                <img src="img/slider3.jpg" alt="">
            </div>
            <div class="item1">
                <img src="img/slider4.jpg" alt="">
            </div>
            <div class="item1">
                <img src="img/slider5.jpg" alt="">
            </div>
        </div>

        <div class="buttons1">
            <button id="prev1"><</button>
            <button id="next1">></button>
        </div>
        <ul class="dots1">
            <li class="active1"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    
    <div class="container1">
        <div class="center">
            <t><ion-icon name="fast-food-outline"></ion-icon> Chuyện nhà</t>
            <li>Coffeeholic</li>
        <div class="chuyennha"><img src="img/img1.jpg" alt="">
            <t>16/01/2023</t>
            <a href="#">SIGNATURE-BIỂU TƯỢNG VĂN HÓA CÀ PH..</a>
            <p>Mới đây, các "tín đồ" cà phê đang bàn tán xôn xao về<br>
                SIGNATURE-Biểu tượng văn hóa cà phê của The <br>
                Cofee House đã quy trở lại. Một lời...
            </p>
            </div>
            <div class="chuyennha"><img src="img/img2.jpg" alt="">
                <t>16/08/2022</t>
            <a href="#">UỐNG GÌ KHI TỚI SIGNATURE BY THE...</a>
            <p>Vừa qua, The Cofee House chính thức khai trương cửa <br>
                hàng SIGNATURE by The Cofee House, chuyên phục <br>
                vụ cà phê đặc sản, các món ăn đa bản sắc ấy...
            </p>
            </div>
            <div class="chuyennha"><img src="img/img3.jpg" alt="">
                <t>12/08/2022</t>
            <a href="#">CÀ PHÊ SỮA ÉPRESSO THE COFEE HOUS..</a>
            <p>Cà phê sưadx Épresso là một lon cà phê sữa giải khát <br>
                với hương vị cà phê đậm đà từ 100% cà phê <br>
                Robusta cùng vị sữa béo nhẹ cho bạn một trải nghiệm..
            </p>
            </div>
    
            
            <div class="chuyennha1"><img src="img/img4.jpg" alt="">
                <t>16/08/2023</t>
            <a href="#">BỘ SƯU TẬP CẦU TOÀN KÈO THƠM:"VÍA"...</a>
            <p>Tết nay vãn giống Tết xưa, không hề mai một nét văn <br>
                hóa truyền thống mà còn thêm vào những hoạt động <br>
                "xin vía" hiênh đại, trẻ trung. Ví như...
            </p>
            </div>
            <div class="chuyennha1"><img src="img/img5.jpg" alt="">
                <t>10/07/2023</t>
            <a href="#">"KHUẤY ĐỂ THẤY TRĂNG"-KHUẤY LÊN...</a>
            <p>Năm 2022 là một năm đề cao sức khỏe tinh thần giới <br>
                trẻ muốn tận hưởng một Trung Thu với nhều trải <br> 
                nghệm mới mẻ, rôm rả cùng bạn bè...
            </p>
            </div>
            <div class="chuyennha1"><img src="img/img6.jpg" alt="">
                <t>01/07/2023</t>
            <a href="#">"KHUẤY ĐỂ THẤY TRĂNG"-HOT TREND M...</a>
            <p>"Khuấy để thấy trăng"-trải nghiệm có 1 không 2 <br>
                được The Coffee House tung ra cho trung thua năm <br>
                nay, hứa hẹn làm giới trẻ háo hức
            </p>
            </div>
        </div>
        
    </div>

    <footer id="footer___">
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

    <script src="script.js"></script>
    <script script  type = "module"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"> </script> 
<script script  nomodule  src = "https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js"> </script>
</body>
</html>