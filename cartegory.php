<?php
include "header.php";
echo "<div style='padding-top: 100px'></div>";
include "leftside.php"
    ?>
<?php
if (isset($_GET['loaisanpham_id']) || $_GET['loaisanpham_id'] != NULL) {
    $loaisanpham_id = $_GET['loaisanpham_id'];
}
$get_loaisanphamA = $index->get_loaisanpham($loaisanpham_id);

?>

<div class="cartegory-right">
    <div class="row">
        <div class="col-4">
            <div class="cartegory-right-top row">
                <div class="cartegory-right-top-item pt-5">
                    <h3>LỰU CHỌN SẢN PHẨM PHÙ HỢP NHẤT DÀNH CHO BẠN</h3>
                    <p>Miễn phí vận chuyển toàn cầu cho tất cả đơn hàng trên 500.00đ – Hoàn trả và đổi hàng trong vòng
                        100 ngày
                    </p>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="cartegory-right-content row">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php
                    if ($get_loaisanphamA && count($get_loaisanphamA) > 0) {
                        foreach ($get_loaisanphamA as $resultB) {
                            $sanpham_id = $resultB['sanpham_id'];
                            $ten_sanpham = $resultB['sanpham_tieude'];
                            $so_luong = $resultB['so_luong'];
                            $gia = number_format($resultB['sanpham_gia']);
                            $anh_sanpham = $resultB['sanpham_anh'];

                            if ($so_luong > 0) {
                                ?>
                                <div class="col">
                                    <div class="card">
                                        <img src="./admin/admin/uploads/<?php echo $anh_sanpham; ?>" class="card-img-top"
                                            alt="<?php echo htmlspecialchars($ten_sanpham); ?>">
                                        <div class="card-body">
                                            <a href="product.php?sanpham_id=<?php echo $sanpham_id ?>">
                                                <h5 class="card-title"><?php echo htmlspecialchars($ten_sanpham); ?></h5>
                                            </a>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                                dignissimos
                                                accusantium amet similique velit iste.</p>
                                        </div>
                                        <div class="mb-2 p-3 d-flex flex-column justify-content-around">
                                            <h3><?php echo $gia; ?>đ</h3>
                                            <button class="btn btn-primary">Buy Now</button>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>

<!-- -------------------------Footer -->
<?php
include "footer.php"
    ?>