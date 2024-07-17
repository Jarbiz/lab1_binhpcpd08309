<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang web bán hàng</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('frontend/img/logo.jpg')}}" alt="Logo của trang web">
        </div>
        <nav>
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Khuyến mãi</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="#">Giỏ hàng</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Tìm kiếm sản phẩm...">
            <button type="submit">Tìm kiếm</button>
        </div>
        <nav>
        <ul>
        <li><a href="#">Đăng ký</a></li>
        <li><a href="#">Đăng nhập</a></li>
        </ul>
        </nav>
    </header>
    <footer>
        <div class="footer-container">
            <div class="footer-section about">
                <h2>Về chúng tôi</h2>
                <p>Chúng tôi là cửa hàng trực tuyến chuyên cung cấp các sản phẩm chất lượng cao với giá cả phải chăng. Sứ mệnh của chúng tôi là đem lại sự hài lòng cho khách hàng.</p>
            </div>
            <div class="footer-section links">
                <h2>Liên kết hữu ích</h2>
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><a href="#">Khuyến mãi</a></li>
                    <li><a href="#">Liên hệ</a></li>
                    <li><a href="#">Giỏ hàng</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h2>Liên hệ</h2>
                <ul>
                    <li><span>Địa chỉ:</span> 123 Đường ABC, Quận XYZ, Thành phố HCM</li>
                    <li><span>Điện thoại:</span> (0123) 456 789</li>
                    <li><span>Email:</span> info@website.com</li>
                </ul>
            </div>
            <div class="footer-section social">
                <h2>Theo dõi chúng tôi</h2>
                <ul>
                    <li><a href="#"><img src="facebook-icon.png" alt="Facebook"></a></li>
                    <li><a href="#"><img src="twitter-icon.png" alt="Twitter"></a></li>
                    <li><a href="#"><img src="instagram-icon.png" alt="Instagram"></a></li>
                    <li><a href="#"><img src="linkedin-icon.png" alt="LinkedIn"></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Website của bạn. Đã đăng ký bản quyền.</p>
        </div>
    </footer>
</body>
</html>