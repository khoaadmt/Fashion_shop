<?php
$sql_lietke_dh = "SELECT * FROM tbl_giohang ,tbl_dangky  WHERE tbl_giohang.id_khachhang=tbl_dangky.id_khachhang ORDER BY id_cart DESC";
$result_lietke_dh = mysqli_query($connect, $sql_lietke_dh);
?>
<table class="tr-hover">
    <thead>
        <tr>
            <th style="padding-right: 10px;">ID</th>
            <th>Mã đơn hàng</th>
            <th>Tên khách hàng</th>
            <th>Địa chỉ</th>
            <th>Tài khoản</th>
            <th>Hình thức TT</th>
            <th>Điện thoại</th>
            <th>Tinh Trạng </th>
            <th>Quản lý </th>
            <th>In hóa đơn</th>
        </tr>
    </thead>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result_lietke_dh)) {
        $i++;

    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['code_cart'] ?></td>
            <td><?php echo $row['hovaten'] ?></td>
            <td><?php echo $row['diachi'] ?></td>
            <td><?php echo $row['taikhoan'] ?></td>
            <td><?php echo $row['cart_payment'] ?></td>
            <td><?php echo $row['sodienthoai'] ?></td>
            <td>
                <?php if ($row['cart_status'] == 1) {
                    echo '<a href="modules/quanlydonhang/xuly.php?code=' . $row['code_cart'] . '">Mới</a>';
                } else {
                    echo 'Đã xem';
                }
                ?>
            </td>
            <td>
                <a href="index.php?action=quanlydonhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem</a>|
                <a href="modules/quanlydonhang/xuly.php?iddonhang=<?php echo $row['code_cart'] ?>">Xóa</a>
            </td>
            <td>
                <a href="modules/quanlydonhang/inhoadon.php?iddonhang=<?php echo $row['code_cart'] ?>">In hóa đơn</a>
            </td>
        </tr>

    <?php
    }
    ?>
</table>