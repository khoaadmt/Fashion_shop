<?php
    $sql_sua="SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $result_sua= mysqli_query($connect,$sql_sua);
?>

<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Sửa danh mục sản phẩm</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
    <table>
            <thead>
				<tr>
				<th></th>
				<th></th>
				</tr>
			</thead>
            <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
                <?php
                    while($dong =mysqli_fetch_array($result_sua)){
                ?>
                <tr>
                    <td>Tên danh mục</td>
                    <td><input type="text" name="tendanhmuc" value="<?php echo $dong['tendanhmuc'] ?>" ></td>
                </tr>
                <tr>
                    <td>Thứ tự</td>
                    <td><input type="text" name="thutu" value="<?php echo $dong['thutu']?>"></td>
                </tr>
                <tr>

                    <td colspan="2"><input type="submit" value="Sửa sản phẩm" name="suadanhmuc"></td>
                </tr>
                <?php
                    }
                ?>
            </form>
    </table>
				</div>
</div>