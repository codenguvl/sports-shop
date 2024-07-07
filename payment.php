<!-- cập nhật thanh toán -->
<?php
include "header.php";
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $session_idA = session_id();
    $today = date("d/m/Y");
    $deliver_method = $_POST['deliver-method'];
    $method_payment = $_POST['method-payment'];

    $_SESSION['session_idA'] = $session_idA;
    $_SESSION['today'] = $today;
    $_SESSION['deliver_method'] = $deliver_method;
    $_SESSION['method_payment'] = $method_payment[0];

    if ($method_payment[0] == 'Thanh toán bằng thẻ ATM') {
        header('Location: thanh_toan_atm.php');
        exit();
    } elseif ($method_payment[0] == 'Thanh toán qrcode') {
        header('Location: thanh_toan_qr_code.php');
        exit();
    } elseif ($method_payment[0] == 'Thu tiền tận nơi') {
        $insert_payment = $index->insert_payment($session_idA, $deliver_method, $method_payment[0], $today);
    } else {
        //error
    }
}



?>

<!-- -----------------------PAYMENT---------------------------------------------- -->
<section class="payment">
    <div class="container">
        <div class="payment-top-wrap">
            <div class="payment-top">
                <div class="delivery-top-delivery payment-top-item">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="delivery-top-adress payment-top-item">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="delivery-top-payment payment-top-item">
                    <i class="fas fa-money-check-alt"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
        $today = date("d/m/Y");
        $session_id = session_id();
        $show_cart = $index->show_cart($session_id);
        if ($show_cart) {
            ?>
        <div class="payment-content row">
            <div class="payment-content-left">
                <form action="" method="POST">
                    <div class="payment-content-left-method-delivery">
                        <p style="font-weight: bold;">Phương thức giao hàng</p> <br>
                        <div class="payment-content-left-method-delivery-item">
                            <input name="deliver-method" value="Giao hàng chuyển phát nhanh" checked type="radio">
                            <label for="">Giao hàng chuyển phát nhanh</label>
                        </div>
                    </div>
                    <br>
                    <div class="payment-content-left-method-payment">
                        <p style="font-weight: bold;">Phương thức thanh toán</p> <br>
                        <p>Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu
                            lại.</p> <br>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="image/visa.png" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment[]" value="Thanh toán bằng thẻ ATM" type="radio">
                            <label for="">Thanh toán bằng thẻ ATM</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="image/vcb.png" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment[]" value="Thanh toán qrcode" type="radio">
                            <label for="">Thanh toán qrCode</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="image/momo.png" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment[]" value="Thu tiền tận nơi" type="radio">
                            <label for="">Thu tiền tận nơi</label>
                        </div>
                    </div>

                    <div class="payment-content-right-payment">
                        <button type="submit">HOÀN THÀNH</button>
                    </div>
                </form>
            </div>
            <div class="payment-content-right">
                <?php if (isset($_SESSION['user_login']) && $_SESSION['user_login'] == true): ?>
                <div class="payment-content-right-button">
                    <input type="number" id="points_to_use" placeholder="Nhập điểm tích lũy muốn sử dụng">
                    <button id="check_points_button">Kiểm tra điểm</button>
                </div>
                <div id="points-message"></div>
                <?php endif; ?>
                <br>
                <!-- <div class="payment-content-right-button">
                    <input type="text" placeholder="Mã cộng tác viên">
                    <button><i class="fas fa-check"></i></button>
                </div> -->
                <!-- <div class="payment-content-right-mnv">
                    <select name="" id="">
                        <option value="">Chọn mã nhân viên thân thiết</option>
                        <option value="">D345</option>
                        <option value="">C333</option>
                        <option value="">T567</option>
                        <option value="">D333</option>
                    </select>
                </div> -->
                <br>
                <table>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                    <?php
                        $session_id = session_id();
                        $SL = 0;
                        $TT = 0;
                        $show_cartB = $index->show_cartB($session_id);
                        if ($show_cartB) {
                            while ($result = $show_cartB->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                    <tr>
                        <td><?php echo $result['sanpham_tieude'] ?></td>
                        <td><?php $a = number_format($result['sanpham_gia']);
                                    echo $a ?></td>
                        <td><?php echo $result['quantitys'] ?></td>
                        <td>
                            <p><?php $a = $result['sanpham_gia'] * $result['quantitys'];
                                        $b = number_format($a);
                                        echo $b ?><sup>đ</sup>
                            </p>
                        </td>
                    </tr>
                    <?php
                            }
                        }
                        ?>
                    <tr style="border-top: 2px solid red">
                        <td style="font-weight: bold;border-top: 2px solid #dddddd" colspan="3">Tổng</td>
                        <td style="font-weight: bold;border-top: 2px solid #dddddd">
                            <p><?php if (Session::get('TT')) {
                                    echo Session::get('TT');
                                } ?><sup>đ</sup></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;" colspan="3">Tổng tiền hàng</td>
                        <td style="font-weight: bold;">
                            <p><?php if (Session::get('TT')) {
                                    echo Session::get('TT');
                                } ?><sup>đ</sup></p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <?php
        } else {
            echo "Bạn vẫn chưa thêm sản phẩm nào vào giỏ hàng, Vui lòng chọn sản phẩm nhé!";
        }
        ?>
    </div>
</section>

<!-- -------------------------Footer -->
<?php
include "footer.php"
    ?>
<script>
$(document).ready(function() {
    $('#check_points_button').click(function() {
        var user_id = <?php echo $_SESSION['user_id']; ?>;
        var points_to_use = $('#points_to_use').val();
        var total_amount = parseInt($('#total-amount').text().replace(/\D/g, ''),
            10);

        $.ajax({
            url: 'check_points.php',
            type: 'POST',
            data: {
                user_id: user_id,
                points_to_use: points_to_use
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    var new_total = total_amount - response.value;
                    $('#points-message').html('Bạn có thể sử dụng ' + response.points_used +
                        ' điểm, tương đương ' + response.value.toLocaleString() +
                        ' VND.');
                    $('#total-amount').text(new_total.toLocaleString() + ' VND');
                } else {
                    $('#points-message').html(response.message);
                }
            },
            error: function() {
                alert('Lỗi trong quá trình xử lý. Vui lòng thử lại sau.');
            }
        });
    });
});
</script>