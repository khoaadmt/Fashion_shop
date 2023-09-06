<?php
require('../../../tfpdf/tfpdf.php');
$severname = "localhost";
$username = "root";
$database = "bandongho";

$connect = new mysqli($severname, $username, "", $database);

$id = $_GET['iddonhang'];
$pdf = new tFPDF();
$pdf->AddPage("0");
$pdf->AddFont('DejaVu', '', 'DejaVuSansCondensed.ttf', true);

$pdf->SetFont('DejaVu', '', 24);
$pdf->Cell(0, 10, "HÓA ĐƠN BÁN HÀNG", 0, 1, "C");

$pdf->SetFont('DejaVu', '', 14);

$sql = "SELECT * FROM tbl_giohang ,tbl_dangky  WHERE tbl_giohang.id_khachhang=tbl_dangky.id_khachhang 
                                                                and tbl_giohang.code_cart = $id";
$query = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($query)) {
    $pdf->Cell(0, 10, "Tên khách hàng: " . $row['hovaten'] .
        "                                                                  Địa chỉ: " . $row['diachi'], 0, 1, "L");
    $pdf->Cell(0, 10, "Email: " . $row['email'], 0, 1, "L");
}
$pdf->Ln(10);

$width_cell = array(5, 35, 80, 20, 30, 40);

$pdf->SetFillColor(235, 236, 236);
$pdf->Cell($width_cell[0], 10, 'ID', 1, 0, 'C', true);
$pdf->Cell($width_cell[1], 10, 'Mã hàng', 1, 0, 'C', true);
$pdf->Cell($width_cell[2], 10, 'Tên sản phẩm', 1, 0, 'C', true);
$pdf->Cell($width_cell[3], 10, 'Số lượng', 1, 0, 'C', true);
$pdf->Cell($width_cell[4], 10, 'Giá', 1, 0, 'C', true);
$pdf->Cell($width_cell[5], 10, 'Thành tiền', 1, 1, 'C', true);

$fill = false;
$i = 0;
$sql_lietke_dh = "SELECT * FROM tbl_cart_detail ,tbl_sanpham  WHERE tbl_cart_detail.id_sanpham=tbl_sanpham.id_sanpham 
                                                                and tbl_cart_detail.code_cart = $id";
$query_lietke_dh = mysqli_query($connect, $sql_lietke_dh);
$tongtien = 0;
while ($row = mysqli_fetch_array($query_lietke_dh)) {
    $i++;
    $pdf->Cell($width_cell[0], 10, $i, 1, 0, 'C', $fill);
    $pdf->Cell($width_cell[1], 10, $row['code_cart'], 1, 0, 'C', $fill);
    $pdf->Cell($width_cell[2], 10, $row['tensanpham'], 1, 0, 'C', $fill);
    $pdf->Cell($width_cell[3], 10, $row['soluongmua'], 1, 0, 'C', $fill);
    $pdf->Cell($width_cell[4], 10, number_format($row['giasanpham']), 1, 0, 'C', $fill);
    $pdf->Cell($width_cell[5], 10, number_format($row['soluongmua'] * $row['giasanpham']), 1, 1, 'C', $fill);
    $tongtien += $row['soluongmua'] * $row['giasanpham'];
    $fill = !$fill;
}

$pdf->Cell($width_cell[0] + $width_cell[1] + $width_cell[2] + $width_cell[3] + $width_cell[4], 10, "Tổng tiền:", 1, 0, 'C', $fill);
$pdf->Cell($width_cell[5], 10, number_format($tongtien), 1, 1, 'C', $fill);

$ngay = date("d");
$thang = date("m");
$nam = date("Y");
$chuoiNgayThangNam = "Ngày $ngay tháng $thang năm $nam                ";

$pdf->Cell(0, 10, " ", 0, 1, "R");
$pdf->Cell(0, 10, "Hà Nội, " . $chuoiNgayThangNam, 0, 1, "R");

$pdf->Ln(10);

$pdf->Output();
?>
?>