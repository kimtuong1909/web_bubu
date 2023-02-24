<?php
    $sql_sua_danhmucsp="SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]'";
    $query_sua_danhmucsp=mysqli_query($mysqli,$sql_sua_danhmucsp);
    $dong=mysqli_fetch_array($query_sua_danhmucsp);
?>
<div>
    <p>Sửa danh mục sản phẩm</p>
    <form action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']; ?>" method="POST">
        <div>
        <label for="name">Tên danh mục:</label>
        <br>
        <input class="danhmuc_them-ip" id="name" type="text" value="<?php echo $dong['tenDanhMuc']?>" name="tendanhmuc" >
        </div>
        <div>
        <br>   
        <label for="index">Thứ tự:</label>
        <br>
        <input class="danhmuc_them-ip" id="index" type="text" name="thutu" placeholder="<?php echo $dong['thuTu']?>">
        <br>   
        </div>
        <div>
            <br>
            <input class="danhmuc_them-btn" name="suadanhmuc" type="submit" value="Sửa danh mục sản phẩm">
        </div>
    </form>
</div>