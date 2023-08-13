<ul class="box-info">
          <li>
            <i class="bx bxs-calendar-check"></i>
            <span class="text">
              <h3>1020</h3>
              <p>New Order</p>
            </span>
          </li>
          <li>
            <i class="bx bxs-group"></i>
            <span class="text">
              <h3>2834</h3>
              <p>Visitors</p>
            </span>
          </li>
          <li>
            <i class="bx bxs-dollar-circle"></i>
            <span class="text">
              <h3>$2543</h3>
              <p>Total Sales</p>
            </span>
          </li>
</ul>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="graph">
  <canvas id="myChart"></canvas>
</div>

<?php
    $query = "
    SELECT 
        MONTH(cd.ngaymua) AS thang,
        SUM(sp.giasanpham * cd.soluongmua) AS tongtien
    FROM 
        tbl_cart_detail cd
    JOIN 
        tbl_sanpham sp ON cd.id_sanpham = sp.id_sanpham
    GROUP BY
        thang;
    ";

  $result = mysqli_query($connect,$query);

  $data = array(
    "thang" => array(),
    "tongtien" => array()
  );

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data["thang"][] = $row["thang"];
        $data["tongtien"][] = $row["tongtien"];
    }
  }


  $jsonData = json_encode($data);
  $file = './data.json';
  file_put_contents($file, $jsonData);
?>

<script>
	const ctx = document.getElementById('myChart');
if (ctx) {
    console.log("Dashboard page");
    fetch('data.json')
        .then(response => response.json())
        .then(data => {
            var thangArray = data.thang;
            var tongtienArray = data.tongtien;

            // Tạo biểu đồ bên trong khối .then()
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: thangArray,
                    datasets: [{
                        label: '# of Votes',
                        data: tongtienArray,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
}
</script>