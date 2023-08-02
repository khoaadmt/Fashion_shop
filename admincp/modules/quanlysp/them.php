 <table class="tbl_themSP">
   <form id="themSP_form" method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
    <tr>
        <td>Tên sản phẩm</td>
        <td><input type="text" name="tensanpham" ></td>
    </tr>
    <tr>
        <td>Mã sản phẩm</td>
        <td><input type="text" name="masp" ></td>
    </tr>
    <tr>
        <td>Giá</td>
        <td><input type="number" name="giasp" oninput="validateInput(this)"></td>
    </tr>
    <tr>
        <td>Số lượng</td>
        <td><input type="text" name="soluong" ></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td><input type="file" name="hinhanh" ></td>
        
    </tr>
    <tr>
        <td>Tóm tắt</td>
        <td> <textarea name="tomtat"  rows="5" cols="50" style="resize: none;"></textarea> </td>
    </tr>
    <tr>
        <td>Nội dung</td>
        <td> <textarea name="noidung" rows="5"  cols="50" style="resize: none;"></textarea> </td>
    </tr>
    <tr>
        <td>Danh mục sản phẩm</td>
        <td>
          <select name="danhmuc">
                <?php
                    $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                    $query_danhmuc=mysqli_query($connect,$sql_danhmuc);
                    while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                ?>
                <!--dùng value thêm danh mục dựa vào địa chỉ id_danhmuc -->
                <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
            

                <?php
                    }
                ?>
          </select>
        </td>
    </tr>
    <tr>
        <td>Tình trạng </td>
        <td>
          <select name="hienthi">
                <option value="1">Mới</option>
                <option value="0">Cũ</option>
          </select>
        </td>
    </tr>
    <tr>
        <td>
            <button type="submit" name="themsanpham">Thêm sản phẩm</button>
            <!-- <input type="submit" value="Thêm sản phẩm" name="themsanpham"> -->
        </td>
    </tr>
</form>
 </table>
 <br>
 <br>
 <button class="hienThiDanhSachSanPham">Hiển thị danh sách sản phẩm </button>
 <script>
    var btnHienThiDSSP = document.querySelector(".hienThiDanhSachSanPham");
    btnHienThiDSSP.onclick = function(){
        var tbl_themSP = document.querySelector('.tbl_themSP');
        tbl_themSP.classList.add("displayNone")

        var tbl_lietKe = document.querySelector(".tbl_lietKe");
        tbl_lietKe.classList.remove('displayNone');

        btnHienThiDSSP.classList.add('displayNone');
        
        var btnThemSP = document.querySelector(".btnThemSP");
        btnThemSP.classList.remove('displayNone');
    }
 </script>