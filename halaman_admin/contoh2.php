<?php

	include "connect.php";

  $tanggal = getdate();
	$tahun = $tanggal['year'];

	$pendapatan1 = $con->query("SELECT SUM(biaya_perawatan) AS jumlahbiaya FROM riwayat WHERE YEAR(tanggal_dateng)='$tahun' AND MONTH(tanggal_dateng)='1'");
	$pendapatan2 = $con->query("SELECT SUM(biaya_perawatan) AS jumlahbiaya FROM riwayat WHERE YEAR(tanggal_dateng)='$tahun' AND MONTH(tanggal_dateng)='2'");

	$jumlah1 = mysqli_fetch_assoc($pendapatan1);
	$jumlah2 = mysqli_fetch_assoc($pendapatan2);

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Bulan', 'Pendapatan (Rp)'],
          ['Jan', <?php echo $jumlah1['jumlahbiaya']; ?>],
          ['Feb', <?php echo $jumlah2['jumlahbiaya']; ?>],
        ]);

        var options = {
          title: 'Grafik Pendapatan',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
