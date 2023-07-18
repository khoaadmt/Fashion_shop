<?php
    $sql_lietke_sp="SELECT * FROM tbl_sanpham ,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $result_lietke_sp= mysqli_query($connect,$sql_lietke_sp);
?>
 <table class="tbl_lietKe displayNone"> 
     <tr>
         <td>ID</td>
         <td>Tên sản phảm</td>
         <td>Hình ảnh </td>
         <td>Giá sản phẩm</td>
         <td>Số lượng</td>
         <td>Danh mục</td>
         <td>Mã sản phẩm</td>
         <td>Tóm tăt</td>
         <td>Trạng thái</td>
         <td>Quản lý</td>
     </tr>
     <?php
    $i=0;
    while($row=mysqli_fetch_array($result_lietke_sp)){
        $i++;
    
     ?>
     <tr>
         <td><?php echo $i ?></td>
         <td style="width:80px;height:150px; text-align: center;">
                            <?php echo $row['tensanpham'] ?>   
         </td>
         
         <td style="width:150px;height:150px;" >
                            <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?> " width="100%" >   
         </td>

         <td style="width:150px;text-align: center;">
                            <?php echo number_format($row['giasanpham'],0,',','.').'VNĐ'  ?>   
         </td>
         <td><?php echo $row['soluong'] ?>      </td>
         <td><?php echo $row['tendanhmuc'] ?>      </td>
         <td><?php echo $row['masanpham'] ?>    </td>
         <td><?php echo $row['tomtat'] ?>       </td>
         <td><?php if($row['trangthai']==1){
                echo "Mới";
         }else{
                echo "Cũ";
         }?>
         </td>
         <td>
            <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Xóa</a>|
             <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">Sửa</a>
         </td>
     </tr>

     <?php
    }
    ?>
 </table>

 <button class="btnThemSP displayNone">Thêm sản phẩm</button>
 <script>
    var btnThemSP = document.querySelector(".btnThemSP");
        btnThemSP.onclick = function(){
            var tbl_themSP = document.querySelector('.tbl_themSP');
            tbl_themSP.classList.remove("displayNone")

            var tbl_lietKe = document.querySelector(".tbl_lietKe");
            tbl_lietKe.classList.add('displayNone');

            var btnHienThiDSSP = document.querySelector(".hienThiDanhSachSanPham");
            btnHienThiDSSP.classList.remove('displayNone');
            btnThemSP.classList.add('displayNone');
    }
 </script>