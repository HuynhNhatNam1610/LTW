<?php
// Define image base path
$imagePath = '../img';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ - Cửa Hàng Giày</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</head>
<body>
    <div id="header-container">
        <?php include 'header.html'; ?>
    </div>
    <div class="container">
        <!-- Banner quảng cáo -->
        <div class="promo-banner">
            <img src="promo-banner.webp" alt="Promo Banner">
            <div class="promo-text">
                <h2>GIÁ CHỈ TỪ 299K</h2>
                <h3>MIỄN PHÍ GIAO HÀNG TOÀN QUỐC</h3>
                <p>Trang phục thi đấu chính thức<br>của đội tuyển bóng đá quốc gia Việt Nam</p>
                <p class="hotline">HOTLINE: 0823.885.888</p>
            </div>
        </div>

        <!-- Tiêu đề -->
        <div class="header">
            <h1>NEW ARRIVALS!</h1>
        </div>

        <!-- Danh sách sản phẩm giày -->
        <div class="products">
            <div class="product">
                <img src="<?php echo $imagePath; ?>shoe1.webp" alt="Giày Nam Promax Muran Navy">
                <div class="discount">GIẢM SỐC</div>
                <h3>Giày thể thao Nam Promax Muran "Navy"</h3>
                <p class="price">599.000đ <span class="old-price">666.000đ</span> <span class="discount-percentage">-10%</span></p>
                <button class="btn">Còn hàng</button>
            </div>
            <div class="product">
                <img src="shoe2.webp" alt="Giày Nam Promax Muran Black">
                <div class="discount">GIẢM SỐC</div>
                <h3>Giày thể thao Nam Promax Muran "Black"</h3>
                <p class="price">599.000đ <span class="old-price">666.000đ</span> <span class="discount-percentage">-10%</span></p>
                <button class="btn">Còn hàng</button>
            </div>
            <div class="product">
                <img src="shoe3.webp" alt="Giày Nữ Promax Muran Blue">
                <div class="discount">GIẢM SỐC</div>
                <h3>Giày thể thao Nữ Promax Muran "Blue"</h3>
                <p class="price">599.000đ <span class="old-price">666.000đ</span> <span class="discount-percentage">-10%</span></p>
                <button class="btn">Còn hàng</button>
            </div>
            <div class="product">
                <img src="shoe4.webp" alt="Giày Nữ Promax Muran White/Red">
                <div class="discount">GIẢM SỐC</div>
                <h3>Giày thể thao Nữ Promax Muran "White/Red"</h3>
                <p class="price">599.000đ <span class="old-price">666.000đ</span> <span class="discount-percentage">-10%</span></p>
                <button class="btn">Còn hàng</button>
            </div>
            <div class="product">
                <img src="shoe5.webp" alt="Giày Nữ Promax Muran Lt.Blue">
                <div class="discount">GIẢM SỐC</div>
                <h3>Giày thể thao Nữ Promax Muran "Lt.Blue"</h3>
                <p class="price">599.000đ <span class="old-price">666.000đ</span> <span class="discount-percentage">-10%</span></p>
                <button class="btn">Còn hàng</button>
            </div>
        </div>

        <!-- Dịch vụ -->
        <div class="services">
            <div class="service">
                <span class="icon">🚚</span>
                <p>Vận chuyển SIÊU TỐC<br>Khư vực TOÀN QUỐC</p>
            </div>
            <div class="service">
                <span class="icon">✅</span>
                <p>Cam kết CHÍNH HÃNG<br>Sản phẩm TRÒN ĐỜI</p>
            </div>
            <div class="service">
                <span class="icon">💳</span>
                <p>Tiện nhanh THANH TOÁN<br>Với nhiều PHƯƠNG THỨC</p>
            </div>
            <div class="service">
                <span class="icon">💰</span>
                <p>100% HOÀN TIỀN<br>Nếu sản phẩm lỗi</p>
            </div>
        </div>

        <!-- Danh sách phụ kiện -->
        <div class="section-title">
            <h2>Sản phẩm - Phụ kiện thể thao</h2>
            <button class="view-more">XEM THÊM</button>
        </div>
        <div class="accessories">
            <div class="product">
                <img src="cap1.webp" alt="Mũ đội tuyển quốc gia Việt Nam 2024 Đen">
                <h3>Mũ đội tuyển quốc gia Việt Nam 2024 "Đen"</h3>
                <p class="price">145.000đ</p>
            </div>
            <div class="product">
                <img src="cap2.jpg" alt="Mũ đội tuyển quốc gia Việt Nam 2024 Trắng">
                <h3>Mũ đội tuyển quốc gia Việt Nam 2024 "Trắng"</h3>
                <p class="price">145.000đ</p>
            </div>
            <div class="product">
                <img src="bag1.webp" alt="Túi thể thao Đông Lực Jogarbbola Đen">
                <div class="discount-percentage">-16%</div>
                <h3>Túi thể thao Đông Lực Jogarbbola "Đen"</h3>
                <p class="price">249.000đ <span class="old-price">295.000đ</span></p>
            </div>
            <div class="product">
                <img src="bag2.webp" alt="Túi đựng giày đội tuyển quốc gia Việt Nam">
                <h3>Túi đựng giày đội tuyển quốc gia Việt Nam</h3>
                <p class="price">145.000đ</p>
            </div>
            <div class="product">
                <img src="backpack.webp" alt="Balo Thể Thao Jogarbbola Xanh">
                <div class="discount-percentage">-15%</div>
                <h3>Balo Thể Thao Jogarbbola "Xanh"</h3>
                <p class="price">419.000đ <span class="old-price">495.000đ</span></p>
            </div>
        </div>

        <!-- Danh mục thể thao -->
        <div class="categories">
            <div class="category">
                <img src="volleyball.webp" alt="Volleyball">
                <h3>Volleyball</h3>
            </div>
            <div class="category">
                <img src="badminton.webp" alt="Badminton">
                <h3>Badminton</h3>
            </div>
            <div class="category">
                <img src="billiard.webp" alt="Billiard">
                <h3>Billiard</h3>
            </div>
        </div>

        <!-- Thời trang nam -->
        <div class="section-title">
            <h2>Thời trang nam</h2>
            <button class="view-more">XEM THÊM</button>
        </div>
        <div class="fashion-men">
            <div class="banner">
                <img src="men-banner.webp" alt="Men Fashion Banner">
                <h3>MEN FASHION</h3>
            </div>
            <div class="fashion-products">
                <div class="product">
                    <img src="men1.webp" alt="Áo Khoác Đội Tuyển Việt Nam 2023 Grand Sport">
                    <h3>Áo Khoác Đội Tuyển Việt Nam 2023 Grand Sport</h3>
                    <p class="price">1.655.000đ</p>
                </div>
                <div class="product">
                    <img src="men2.webp" alt="Áo Tập Luyện Đội Tuyển Việt Nam 2023 Grand Sport">
                    <h3>Áo Tập Luyện Đội Tuyển Việt Nam 2023 Grand Sport</h3>
                    <p class="price">615.000đ</p>
                </div>
                <div class="product">
                    <img src="men3.webp" alt="Áo thi đấu Đông Lực Jogarbbola Classic Đen/Xanh">
                    <div class="discount-percentage">-15%</div>
                    <h3>Áo thi đấu Đông Lực Jogarbbola Classic "Đen/Xanh"</h3>
                    <p class="price">345.000đ <span class="old-price">405.000đ</span></p>
                </div>
                <div class="product">
                    <img src="men4.webp" alt="Bộ quần áo tập luyện đội tuyển quốc gia Việt Nam">
                    <h3>Bộ quần áo tập luyện đội tuyển quốc gia Việt Nam</h3>
                    <p class="price">279.000đ</p>
                </div>
            </div>
        </div>

        <!-- Thời trang nữ -->
        <div class="section-title">
            <h2>Thời trang nữ</h2>
            <button class="view-more">XEM THÊM</button>
        </div>
        <div class="fashion-women">
            <div class="fashion-products">
                <div class="product">
                    <img src="women1.webp" alt="Áo Hoodie Nữ Đông Lực Jogarbbola">
                    <h3>Áo Hoodie Nữ Đông Lực Jogarbbola "Xanh"</h3>
                    <p class="price">350.000đ</p>
                </div>
                <div class="product">
                    <img src="women2.webp" alt="Áo Phông Cầu Lông Nữ Đông Lực Promax">
                    <h3>Áo Phông Cầu Lông Nữ Đông Lực Promax "Đỏ"</h3>
                    <p class="price">175.000đ</p>
                </div>
                <div class="product">
                    <img src="women3.webp" alt="Bộ thi đấu bóng chuyền Sao Vàng Combat Trắng">
                    <h3>Bộ thi đấu bóng chuyền Sao Vàng Combat "Trắng"</h3>
                    <p class="price">165.000đ</p>
                </div>
                <div class="product">
                    <img src="women4.webp" alt="Bộ thi đấu bóng chuyền Sao Vàng Combat Tím Thắm">
                    <h3>Bộ thi đấu bóng chuyền Sao Vàng Combat "Tím Thắm"</h3>
                    <p class="price">165.000đ</p>
                </div>
            </div>
            <div class="banner">
                <img src="women-banner.webp" alt="Women Fashion Banner">
                <h3>WOMEN FASHION</h3>
            </div>
        </div>

        <!-- Tin tức thể thao -->
        <div class="section-title">
            <h2>Tư vấn thể thao</h2>
        </div>
        <div class="news">
            <div class="news-item">
                <img src="news1.webp" alt="News 1">
                <h3>Tất tần tật về bóng chuyền kinh nghiệm, kỹ thuật và lợi khuyên</h3>
                <p>Bộ môn bóng chuyền là một trong những môn thể thao phổ biến trên thế giới...</p>
            </div>
            <div class="news-item">
                <img src="news2.webp" alt="News 2">
                <h3>Cách chọn môn quà bóng rổ tốt nhất và va phù hợp với bạn</h3>
                <p>Bạn có biết cách chọn một quả bóng rổ phù hợp với bản thân không...</p>
            </div>
            <div class="news-item">
                <img src="news3.webp" alt="News 3">
                <h3>Đánh bóng chuyền nên đi giày gì? Lựa chọn giày bóng chuyền tốt...</h3>
                <p>Khi chơi bóng chuyền, việc lựa chọn đôi giày phù hợp sẽ giúp bạn...</p>
            </div>
            <div class="news-item">
                <img src="news4.webp" alt="News 4">
                <h3>Tư vấn cách đánh bóng chuyền chuyên mục dành cho người mới tập</h3>
                <p>Nếu bạn là người mới bắt đầu chơi bóng chuyền, hãy tham khảo...</p>
            </div>
            <div class="news-item">
                <img src="news5.webp" alt="News 5">
                <h3>Bộ tùi ngay 3 cách chọn đồ bóng đá phù hợp với "chân không căng"</h3>
                <p>Đối với những người có đôi chân không cân đối, việc chọn đồ...</p>
            </div>
            <div class="news-item">
                <img src="news6.webp" alt="News 6">
                <h3>Cách chọn môn quà bóng rổ tốt nhất và va phù hợp với bạn</h3>
                <p>Bạn có biết cách chọn một quả bóng rổ phù hợp với bản thân không...</p>
            </div>
            <div class="news-item">
                <img src="news7.webp" alt="News 7">
                <h3>Đánh bóng chuyền nên đi giày gì? Lựa chọn giày bóng chuyền tốt...</h3>
                <p>Khi chơi bóng chuyền, việc lựa chọn đôi giày phù hợp sẽ giúp bạn...</p>
            </div>
        </div>
    </div>
    <!-- Footer will be loaded here -->
    <div id="footer-container"></div>

    <!-- Scripts for loading header and footer -->
    <script>
        $(document).ready(function(){
            $("#header-container").load("header.html");
            $("#footer-container").load("footer.html");
        });
    </script>    
</body>
</html>