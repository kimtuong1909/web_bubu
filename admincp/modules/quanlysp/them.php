<div>
    <p>Thêm sản phẩm</p>
    <form action="modules/quanlysp/xuly.php" method="POST" enctype="multipart/form-data">
        <div>
        <label for="name">Tên sản phẩm:</label>
        <br>
        <input class="danhmuc_them-ip" id="name" type="text" name="tensanpham" placeholder="Nhập tên sản phẩm">
        </div>
        <div>
        <br>   
        <label for="code">Mã sản phẩm:</label>
        <br>
        <input class="danhmuc_them-ip" id="code" type="text" name="masanpham" placeholder="Nhập mã sản phẩm">
        <br>   
        </div>
        <div>
        <br>   
        <label for="price">Giá:</label>
        <br>
        <input class="danhmuc_them-ip" id="price" type="text" name="gia" placeholder="Nhập giá">
        <br>   
        </div>
        <div>
        <br>   
        <label for="number">Số lượng:</label>
        <br>
        <input class="danhmuc_them-ip" id="number" type="text" name="soluong" placeholder="Nhập số lượng">
        <br>   
        </div>
        <div>
        <br>   
        <label for="picture">Hình ảnh:</label>
        <br>
        <input type="file" name="hinhanh" id="picture">
        <br>   
        </div>
        <div>
        <br>   
        <label for="summary">Tóm tắt:</label>
        <br>
        <textarea class="danhmuc_them-ip" id="summary" name="tomtat"></textarea>
        <br>   
        </div>
        <!-- <textarea class="editor" name="editor"> </textarea> -->
        <div>
        <br>   
        <label for="content">Nội dung:</label>
        <br>
        <textarea class="danhmuc_them-ip" id="content" name="noidung"></textarea>
        <br>   
        </div>
        <div>
        <br>   
        <label>Danh mục sản phẩm:</label>
        <br>
        <select name="danhmucsp" id="">
            <?php
                $sql_danhmuc="SELECT * FROM tbl_danhmuc";
                $query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
                while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
            ?>
                <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tenDanhMuc']?></option>
                <?php 
                }
                ?>
        </select>
        <br>   
        </div>
        <div>
        <br>   
        <label for="status">Tình trạng:</label>
        <br>
        <select name="tinhtrang" id="status">
            <option value="1">ON</option>
            <option value="0">OFF</option>
        </select>
        <br>   
        </div>
        <div>
            <br>
            <input class="danhmuc_them-btn" name="themsanpham" type="submit" value="Thêm sản phẩm">
        </div>
    </form> 
</div>