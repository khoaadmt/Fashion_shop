<div class="table-data">
				<div class="order">
                    <div class="head">
						<h3>Thêm danh mục</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Tên danh mục</th>
								<th>Thứ tự</th>
							</tr>
						</thead>
						<tbody>
                        <form id="themDM_form" method="POST" action="modules/quanlydanhmucsp/xuly.php">
                        <tr>
                            <td>Tên danh mục</td>
                            <td><input type="text" name="tendanhmuc" ></td>
                        </tr>
                        <tr>
                            <td>Thứ tự</td>
                            <td><input type="number" name="thutu" oninput="validateInput(this)"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
								<button type="submit" name="themdanhmuc">Thêm danh mục sản phẩm</button>
								<!-- <input type="submit" value="Thêm danh mục sản phẩm" name="themdanhmuc"> -->
							</td>
                        </tr>
                        </form>
						</tbody>
					</table>
				</div>
</div>