<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Happy Monkey' rel='stylesheet'>
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
    <div class="cloudfee">
        <div class="banner-top">
            <img src="https://hrv.hstatic.net/s_1000266602/_KV-marvel-2.jpg" alt="Cloudfee - Thế hệ cà phê mới">
        </div>
        <div class="cloudfee-bg">
            <div class="top-desc text-center">
                <br>
    Được kết hợp từ <b>Cloud</b> (đám mây) và cof<b>Fee</b> (cà phê), <b>CloudFee</b> gợi mở<br>về một thế hệ cà phê mới, êm mượt như mây.
            </div>
            <div class="cloudfee-block">
                <div class="container">
                    <div class="row flex-box flex-w align-c justify-s">
                        <div class="info-block">
                            <span class="subtitle">CLOuDFEE</span>
                            <div class="main-title">Creme Brulee</div>
                            <div class="cloud-desc"><b>Thức uống "chiều chuộng bản thân" bậc nhất</b> cho những ai thích vị ngọt ngào hay muốn thưởng thức sự kết hợp độc đáo giữa món tráng miệng và thức uống.  </div>
                            <a class="flex-box align-c cloud-btn">
                                <span>Êm mượt như mây, Chill là ghiền ngay!</span>
                                <svg width="6" height="13" viewBox="0 0 6 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 6.5L0 12.5V0.5L6 6.5Z" fill="#FEBF3E"></path></svg>
                            </a>
                        </div>
                        <div class="img-block">
                            <img src="https://hrv.hstatic.net/s_1000266602/_creme-brulee.png" alt="Creme Brulee">
                        </div>
                    </div>
                </div>
            </div>
            <div class="cloudfee-block right">
                <div class="container">
                    <div class="row flex-box flex-w align-c justify-s">
                        <div class="info-block">
                            <span class="subtitle">CLOuDFEE</span>
                            <div class="main-title2">Creamy</div>
                            <div class="cloud-desc"><b>Thức uống "đánh thức" năng lượng ngày mới </b>hợp cho những ai mới bước vào thế giới cà phê hoặc ghiền cà phê nhưng muốn khám phá thêm nhiều hương vị mới.</div>
                            <a class="flex-box align-c cloud-btn">
                                <span>Êm mượt như mây, Tươi ngày mới ngay!</span>
                                <svg width="6" height="13" viewBox="0 0 6 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 6.5L0 12.5V0.5L6 6.5Z" fill="#FEBF3E"></path></svg>
                            </a>
                        </div>
                        <div class="img-block">
                            <img src="https://hrv.hstatic.net/s_1000266602/_creamy.png" alt="Creamy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="video">
                <div class="container">
                    <div class="video-title text-center">CÀ PHÊ CÓ DÀNH CHO TẤT CẢ MỌI NGƯỜI?</div>
                    <div class="video-box">
                        <div class="box-frame"><iframe width="560" height="315" src="https://www.youtube.com/embed/t5I96ycncPA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
                    </div>
                    <div class="cloud-desc">Bạn có biết, mỗi ngày có hơn 2 tỷ cốc cà phê được uống trên toàn thế giới? 
    
    Có người pha cùng sữa, có người rót thêm kem béo, hay kết hợp cùng… rượu whiskey, nhưng không phải ai cũng có thể thưởng thức cà phê một cách ngon lành. Bằng niềm khao khát mang ẩm thực thế giới vào từng ly cà phê bản địa, Edward Teonadi - Giám đốc phát triển sản phẩm tại The Coffee House đã tạo nên thế hệ cà phê mới mang tên CloudFee. Và giờ đây, bất kỳ ai ghé Nhà cũng có thể tìm thấy hương vị cà phê cho riêng mình.</div>
                    <div class="text-center flex-box justify-c">
                        <a class="flex-box align-c cloud-btn read-more-modal">
                            <span> Đọc trọn câu chuyện</span>
                            <svg width="6" height="13" viewBox="0 0 6 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 6.5L0 12.5V0.5L6 6.5Z" fill="#FEBF3E"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="story">
                <div class="story-container">
                    <div class="story-item flex-box flex-w align-c justify-s">
                        <div class="story-img">
                            <img src="https://file.hstatic.net/1000075078/file/thinh_93cf92a5395043a2b634af4de08c0163.png">
                        </div>
                        <div class="story-info">
                            <div class="story-title">CÀ PHÊ NGON CHỈ CÓ VỊ ĐẮNG?</div>
                            <div class="cloud-desc">Từ ý tưởng về CloudFee của Edward, anh Phạm Phúc Thịnh - barista của The Coffee House nhận ra: Cà phê không nhất thiết phải đắng, phải chua thì mới ngon. Đôi khi một chút biến tấu, một chút ngọt ngào để yêu chiều bản thân mới thật sự quan trọng. Và đó là cách CloudFee Creme Brulee ra đời.</div>
                            <a class="cloud-btn2" href="#">Xem video nghe Thịnh kể chuyện</a>
                        </div>
                    </div>
                    <div class="story-item right flex-box flex-w align-c justify-s">
                        <div class="story-img">
                            <img src="https://file.hstatic.net/1000075078/file/hieu_ed120096122f4c279ff41696f8b97eb3.png" alt="CÀ PHÊ ĐÂU CHỈ LÀ THỨC UỐNG">
                        </div>
                        <div class="story-info">
                            <div class="story-title">CÀ PHÊ ĐÂU CHỈ LÀ THỨC UỐNG</div>
                            <div class="cloud-desc">Trong ly cà phê dành cho người mình thương có gì?
    
    Khi nghe Edward chia sẻ về thế hệ cà phê mới CloudFee, anh Nguyễn Hoàng Hiếu - barista của The Coffee House chợt nhớ tới vợ mình. Cô ngại vị đắng của cà phê, nhưng cần một thức uống tỉnh táo mỗi sáng. Và CloudFee Creamy là món quà anh tặng cho người phụ nữ anh yêu. </div>
                            <a class="cloud-btn2" href="#">Hiếu bật mí trong video này</a>
                        </div>
                    </div>
                </div>
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