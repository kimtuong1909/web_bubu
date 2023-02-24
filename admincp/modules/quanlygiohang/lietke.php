<?php
$sql_lietke_dh = "SELECT * FROM tbl_giohang INNER JOIN tbl_khachhang ON tbl_giohang.id_customer=tbl_khachhang.id_customer ORDER BY id_giohang DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>
<p>Liệt kê giỏ hàng</p>
<table border="1" width='50%'>
    <tr>
        <th>ID giỏ hàng</th>
        <th>Tên khách hàng</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Tình trạng</th>
        <th>Quản lý</th>
        <th></th>
    </tr>
    <?php
    while ($row_dh = mysqli_fetch_array($query_lietke_dh)) {
    ?>
        <tr>
            <td><?php echo $row_dh['id_giohang'] ?></td>
            <td><?php echo $row_dh['name_user'] ?></td>
            <td><?php echo $row_dh['address_user'] ?></td>
            <td><?php echo $row_dh['email'] ?></td>
            <td><?php echo $row_dh['phone'] ?></td>
            <?php if ($row_dh['tinhTrang'] == 1) { ?>
                <td><a href="modules/quanlygiohang/xulytinhtrang.php?idgiohang=<?php echo $row_dh['id_giohang'] ?>">Đơn hàng mới</a></td>
            <?php
            }else{
            ?>
                <td><?php echo "Đã xem" ?></td>
            <?php
            }
            ?>
            <td><a href="index.php?action=donhang&query=xemdonhang&idgiohang=<?php echo $row_dh['id_giohang'] ?>">Xem chi tiết</a></td>
            <td><a href="modules/quanlygiohang/indonhang.php?idgiohang=<?php echo $row_dh['id_giohang'] ?>">In</a></td>
        </tr>
    <?php
    }
    ?>
</table>