<?php
if(isset($_GET['admin_id'])){
    Session::destroyAdmin();
}
?>

<section class="admin-content row space-between">
    <div class="admin-content-left">
        <div class="header-top-left">
            <a href="index.php">
                <img src="./icon/logoHongPhuc.jpg" alt="">
            </a>
        </div>
        <ul>
            <li><a href="#">Chào: <span
                        style="color:blueviolet; font-size:22px"><?php echo Session::get('admin_name') ?></span></a>
            <li><a href="#">Đơn hàng</a>
                <ul>
                    <li><a href="orderlist.php">Chưa hoàn thành</a></li>
                    <li><a href="orderlistdone.php">Đã hoàn thành</a></li>
                    <li><a href="orderlistall.php">Tất cả Đơn hàng</a></li>
                </ul>
            </li>
            <li><a href="#">Danh Mục</a>
                <ul>
                    <li><a href="cartegorylist.php">Danh sách</a></li>
                    <li><a href="cartegoryadd.php">Thêm</a></li>
                </ul>
            </li>
            <li><a href="#">Loại Sản Phẩm</a>
                <ul>
                    <li><a href="brandlist.php">Danh sách</a></li>
                    <li><a href="brandadd.php">Thêm</a></li>
                </ul>
            </li>
            <li><a href="#">Màu sắc</a>
                <ul>
                    <li><a href="colorlist.php">Danh sách</a></li>
                    <li><a href="coloradd.php">Thêm</a></li>
                </ul>
            </li>
            <li><a href="#">Sản phẩm</a>
                <ul>
                    <li><a href="productlist.php">Danh sách</a></li>
                    <li><a href="productadd.php">Thêm</a></li>
                </ul>
            </li>
            <li><a href="#">Ảnh Sản phẩm</a>
                <ul>
                    <li><a href="anhsanphamlists.php">Danh sách</a></li>
                    <li><a href="anhsanphamadds.php">Thêm</a></li>
                </ul>
            </li>
            <li><a href="#">Size Sản phẩm</a>
                <ul>
                    <li><a href="sizesanphamlists.php">Danh sách</a></li>
                    <li><a href="sizesanphamadds.php">Thêm</a></li>
                </ul>
            </li>

            <li><a href="?admin_id=<?php echo Session::get('admin_id') ?>"> Đăng Xuất</a>

            </li>
        </ul>
    </div>