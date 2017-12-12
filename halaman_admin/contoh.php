<?php

	include "connect.php";
	$usia1 = $con->query("SELECT * FROM  data_pasien WHERE usia_pasien<='20'");
	$usia2 = $con->query("SELECT * FROM  data_pasien WHERE usia_pasien>'20'");
	
	$jumlah_usia1 = mysqli_num_rows($usia1);
	$jumlah_usia2 = mysqli_num_rows($usia2);

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Usia', 'Jumlah Pasien'],
          ['jumlah pasien1', <?php echo $jumlah_usia1; ?>],
          ['jumlah pasien2', <?php echo $jumlah_usia2; ?>],
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>