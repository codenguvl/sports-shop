<?php
include "header.php";
?>
<div style="padding-top: 100px"></div>
<section id="home" class="hero bg-primary text-white text-center d-flex align-items-center justify-content-center py-5">
    <div class="container">
        <h1 class="display-4">Chào Mừng Đến Với Cửa Hàng Quần Áo Thể Thao</h1>
        <p class="lead">Nơi cung cấp trang phục thể thao chất lượng cao cho mọi nhu cầu</p>
    </div>
</section>

<!-- About Us Section -->
<section id="about" class="about py-5">
    <div class="container">
        <h2 class="text-center mb-5">Về Chúng Tôi</h2>
        <p class="text-center">Cửa hàng quần áo thể thao của chúng tôi cam kết cung cấp các sản phẩm chất lượng, thoải
            mái và thời trang cho mọi lứa tuổi và giới tính. Với nhiều năm kinh nghiệm trong ngành, chúng tôi hiểu rõ
            nhu cầu của khách hàng và luôn nỗ lực để mang lại những sản phẩm tốt nhất.</p>
    </div>
</section>

<!-- Featured Products Section -->
<section id="products" class="products py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Sản Phẩm Nổi Bật</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="image/clothes/clothes-1.jpg" class="card-img-top" alt="Áo Thể Thao">
                    <div class="card-body">
                        <h5 class="card-title">Áo Thể Thao Chuyên Nghiệp</h5>
                        <p class="card-text">Áo thể thao chất lượng cao, thoáng mát và thoải mái.</p>
                        <h3>250.000đ</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/clothes/clothes-2.jpg" class="card-img-top" alt="Quần Thể Thao">
                    <div class="card-body">
                        <h5 class="card-title">Quần Thể Thao Đa Năng</h5>
                        <p class="card-text">Quần thể thao với chất liệu co giãn, phù hợp cho mọi hoạt động.</p>
                        <h3>300.000đ</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/clothes/clothes-3.jpg" class="card-img-top" alt="Giày Thể Thao">
                    <div class="card-body">
                        <h5 class="card-title">Giày Thể Thao Thoải Mái</h5>
                        <p class="card-text">Giày thể thao êm ái, hỗ trợ tốt cho bàn chân khi luyện tập.</p>
                        <h3>500.000đ</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section id="why-choose-us" class="why-choose-us py-5">
    <div class="container">
        <h2 class="text-center mb-5">Tại Sao Chọn Chúng Tôi?</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <i class="fas fa-star fa-3x mb-3"></i>
                <h4>Sản Phẩm Chất Lượng</h4>
                <p>Chúng tôi cam kết cung cấp các sản phẩm thể thao chất lượng cao, đáp ứng mọi nhu cầu của khách hàng.
                </p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-shipping-fast fa-3x mb-3"></i>
                <h4>Giao Hàng Nhanh Chóng</h4>
                <p>Chúng tôi đảm bảo giao hàng nhanh chóng và đúng hẹn tới khách hàng trên toàn quốc.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-smile fa-3x mb-3"></i>
                <h4>Dịch Vụ Khách Hàng Tận Tâm</h4>
                <p>Đội ngũ chăm sóc khách hàng của chúng tôi luôn sẵn sàng hỗ trợ và tư vấn cho bạn mọi lúc, mọi nơi.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Liên Hệ</h2>
        <div class="row">
            <div class="col-md-6">
                <h4>Thông Tin Liên Hệ</h4>
                <p>Email: info@sportsclothingstore.com</p>
                <p>Điện thoại: +123 456 7890</p>
                <p>Địa chỉ: 123 Sports Ave, Sportstown</p>
            </div>
            <div class="col-md-6">
                <h4>Gửi Tin Nhắn</h4>
                <form>
                    <div class="form-group">
                        <label for="name">Họ Tên</label>
                        <input type="text" class="form-control" id="name" placeholder="Nhập họ tên của bạn">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Nhập email của bạn">
                    </div>
                    <div class="form-group">
                        <label for="message">Tin Nhắn</label>
                        <textarea class="form-control" id="message" rows="4"
                            placeholder="Nhập tin nhắn của bạn"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include "footer.php"
    ?>