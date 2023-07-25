<?php
    $sql_lietke="SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $result_lietke= mysqli_query($connect,$sql_lietke);
?>

<div class="table-data tr-hover">
				<div class="order">
					<div class="head">
						<h3>Quản lý danh mục</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>Tên danh mục</th>
								<th>Thứ tự</th>
							</tr>
						</thead>
						<tbody>
												<?php
							$i=0;
							while($row=mysqli_fetch_array($result_lietke)){
								$i++;
							
							?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $row['tendanhmuc'] ?></td>
								<td><?php echo $row['thutu']?></td>
								<td>
									<a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a>|
									<a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">Sửa</a>
								</td>
							</tr>

							<?php
							}
							?>
						</tbody>
					</table>
				</div>
</div>