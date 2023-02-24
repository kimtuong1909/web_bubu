<?php
    include('../../config/config.php');
    $tenloaisp=$_POST['tendanhmuc'];
    $thutu=$_POST['thutu'];
    if(isset($_POST['themdanhmuc'])){
        $sql_them="INSERT INTO tbl_danhmuc(tenDanhMuc, thuTu) value('".$tenloaisp."','".$thutu."')";
        mysqli_query($mysqli,$sql_them);
        header('location: ../../index.php?action=quanlydanhmucsanpham&query=them');
    }
    else if(isset($_POST['suadanhmuc'])){
        $sql_sua="UPDATE tbl_danhmuc SET tenDanhMuc='".$tenloaisp."', thuTu='".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]' ";
        mysqli_query($mysqli,$sql_sua);
        header('location: ../../index.php?action=quanlydanhmucsanpham&query=them');
    }
    else{
        $id=$_GET['iddanhmuc'];
        $sql_xoa="DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('location: ../../index.php?action=quanlydanhmucsanpham&query=them');
    }
?>