<?php
include 'navbar.php';

require_once('config.php');

$query = "select nom, count(*) as nombre from traiter group by nom";
$step = $bdd->prepare($query);
if ($step->execute()) {
	$php_data_array = $step->fetchAll(); //
	echo "<script>
        var my_2d = " . json_encode($php_data_array) . "
</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Statistiques</title>
	<link rel="stylesheet" href="../libs/bootstrap-5.0.2/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../css/style.css" />
</head>

<body class="mb-4">
	<div class="container">
		<h2 class="mb-4 mt-5">Voici les statistiques de nos développeurs</h2>
		<div id='chart_div' class="align-middle"></div>
		<script type="text/javascript" src="../js/loader.js"></script>
		<script type="text/javascript">
			google.charts.load('current', {
				packages: ['corechart', 'bar']
			});
			google.charts.setOnLoadCallback(draw_my_chart)

			function draw_my_chart() {
				var data = new google.visualization.DataTable();
				data.addColumn('string', 'Nom');
				data.addColumn('number', 'Nombre');
				for (i = 0; i < my_2d.length; i++)
					data.addRow([my_2d[i][0], parseInt(my_2d[i][1])]);
				var options = {
					title: 'Nombre de tickets traites par les developpeurs',
					hAxis: {
						title: 'Nom des développeurs',
						titleTextStyle: {
							color: '#333'
						}
					},
					vAxis: {
						minValue: 0
					},
					height: 550,
					width: 900,
					legend: {
						position: 'top'
					},
					animation: {
						'startup': true,
						duration: 1000,
						easing: 'out',
					},
				};
				var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
				chart.draw(data, options)
			}
		</script>

</body>

</html>