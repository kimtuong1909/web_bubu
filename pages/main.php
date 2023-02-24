            <?php
            if (isset($_GET["quanly"])) {
                $tam = $_GET["quanly"];
            } else {
                $tam = "";
            }
            if ($tam == "danhmuc") {
                include("main/danhmuc.php");
            } else if ($tam == "sanpham") {
                include("sanpham/sanpham.php");
            } else if ($tam == "giohang") {
                include("main/giohang.php");
            } else if ($tam == "donhangcuatoi") {
                include("main/donhangcuatoi.php");
            } else if ($tam == "xemdonhang") {
                include("main/xemdonhang.php");
            } else if ($tam == "dathang") {
                include("main/dathang.php");
            } else if ($tam == "tintuc") {
                include("main/tintuc.php");
            } else if ($tam == "baiviet") {
                include("main/baiviet.php");
            } else if ($tam == "lienhe") {
                include("main/lienhe.php");
            } else if ($tam == "dangky") {
                include("main/dangky.php");
            } else if ($tam == "thanhtoan") {
                include("main/thanhtoan.php");
            } else if ($tam == "timkiem") {
                include("main/timkiem.php");
            } else if ($tam == "camon") {
                include("main/camon.php");
            } else if ($tam == "doimatkhau") {
                include("main/doimatkhau.php");
            } else {
                include("main/index.php");
            }
            ?>


