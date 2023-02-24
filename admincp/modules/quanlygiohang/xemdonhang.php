<?php
    $idgiohang=$_GET['idgiohang'];
    $sql_chitiet = "SELECT * FROM tbl_giohang_chitiet INNER JOIN tbl_sanpham ON tbl_giohang_chitiet.id_sanpham=tbl_sanpham.id_sanpham WHERE id_giohang='".$idgiohang."'";
    $query_chitiet = mysqli_query($mysqli, $sql_chitiet);

    $sql_giaohang="SELECT * FROM tbl_giaohang WHERE id_giohang='$idgiohang'";
    $query_giaohang = mysqli_query($mysqli, $sql_giaohang);
    $row_giaohang=mysqli_fetch_array($query_giaohang);
?>
<p>Chi tiết đơn hàng</p>
<div>
    <div>
        <p style="margin: 12px 0;margin-left: 10%;"><b>Tên người nhận:</b> <?php echo $row_giaohang['tenNguoiNhan'] ?></p>
        <p style="margin: 12px 0;margin-left: 10%;"><b>Số điện thoại liên hệ:</b> <?php echo $row_giaohang['soDienThoai1'] ?></p>
        <p style="margin: 12px 0;margin-left: 10%;"><b>Số điện thoại liên hệ (Dự phòng):</b> <?php if(isset($row_giaohang['soDienThoai2'])&&$row_giaohang['soDienThoai2']!=''){echo $row_giaohang['soDienThoai2'];}else{echo 'Không có';} ?></p>
        <p style="margin: 12px 0;margin-left: 10%;"><b>Địa chỉ giao hàng:</b> <?php echo $row_giaohang['diaChi'] ?></p>
        <p style="margin: 12px 0;margin-left: 10%;"><b>Hình thức thanh toán:</b> <?php echo $row_giaohang['hinhThucThanhToan'] ?></p>
    </div>
</div>
<table border="1" width='50%'>
    <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
    </tr>
    <?php
    $total_price=0;
    while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
        $total_price+=$row_chitiet['soLuongMua']*$row_chitiet['gia'];
    ?>
        <tr>
            <td><?php echo $row_chitiet['id_giohang'] ?></td>
            <td><?php echo $row_chitiet['tenSanPham'] ?></td>
            <td><?php echo $row_chitiet['soLuongMua'] ?></td>
            <td><?php echo number_format($row_chitiet['gia'],0,',','.').'đ' ?></td>
            <td><?php echo number_format($row_chitiet['soLuongMua']*$row_chitiet['gia'],0,',','.').'đ' ?></td>
        </tr>
    <?php
    }
    ?>
    <tr>
        <td colspan="5">Thành tiền : <?php echo number_format($total_price,0,',','.').'đ' ?></td>
    </tr>
</table>