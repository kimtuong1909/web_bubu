<div>
    <p>Thêm bài viết</p>
    <form action="modules/quanlybaiviet/xuly.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="name">Tên bài viết:</label>
            <br>
            <input class="danhmuc_them-ip" id="name" type="text" name="tenbaiviet" placeholder="Nhập tên bài viết">
        </div>
        <div>
            <br>
            <label for="picture">Hình ảnh:</label>
            <br>
            <input id="picture" type="file" name="hinhanh">
            <br>
        </div>
        <div>
            <br>
            <label for="summary">Tóm tắt:</label>
            <br>
            <textarea class="danhmuc_them-ip" id="summary" name="tomtat"></textarea>
            <br>
        </div>
        <div>
            <br>
            <label for="content">Nội dung:</label>
            <br>
            <textarea class="danhmuc_them-ip" id="content" name="noidung"></textarea>
            <br>
        </div>
        <div>
            <br>
            <label>Danh mục bài viết:</label>
            <br>
            <select name="danhmuc">
                <?php
                $sql_danhmucbv = "SELECT * FROM tbl_danhmuc_baiviet ORDER BY id_danhmucbv DESC";
                $query_danhmucbv = mysqli_query($mysqli, $sql_danhmucbv);
                while ($row = mysqli_fetch_array($query_danhmucbv)) {
                ?>
                    <option value="<?php echo $row['id_danhmucbv'] ?>"><?php echo $row['tenDanhMucBV'] ?></option>
                <?php
                }
                ?>
            </select>
            <br>
        </div>
        <div>
            <br>
            <label for="state">Tình trạng:</label>
            <br>
            <select name="tinhtrang">
                <option value="1">ON</option>
                <option value="0">OFF</option>
            </select>
            <br>
        </div>
        <div>
            <br>
            <input class="danhmuc_them-btn" name="thembaiviet" type="submit" value="Thêm bài viết">
        </div>
    </form>
</div>