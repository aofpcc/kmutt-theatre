<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><br>Statistics</h1>
  </div>
  <div style="margin-center:0 auto"></div>
  <!-- Code finance here -->

  <!-- Button -->
  <?php include('layouts/group11/component/layout/buttons.php'); ?>
  <!-- Button ends -->

  <br><br>

  <div id="chartShowtime" style="height: 300px; width: 100%;"></div>

  <div id="chartGene" style="height: 300px; width: 100%;"></div>

  <div id="chartSnack" style="height: 300px; width: 100%;"></div>

<!-- Stop here -->
</main>

<!-- Chart Showtime -->
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
window.onload = function () {

<?php
	$Round = [];
	foreach($this->morning as $value){
		$temp = [
			"y" => $value["morning"],
			"label" => 'morning'
		  ];
		array_push($Round, $temp);
	}
	foreach($this->afternoon as $value){
		$temp = [
			"y" => $value["afternoon"],
			"label" => 'afternoon'
		  ];
		array_push($Round, $temp);
	}
	foreach($this->evening as $value){
		$temp = [
			"y" => $value["evening"],
			"label" => 'evening'
		  ];
		array_push($Round, $temp);
	}
	foreach($this->midnight as $value){
		$temp = [
			"y" => $value["midnight"],
			"label" => 'midnight'
		  ];
		array_push($Round, $temp);
	}
	?>
	var round = <?php echo json_encode($Round); ?>;
	console.log(round);
var chart = new CanvasJS.Chart("chartShowtime", {

	animationEnabled: true,
	title:{
		text: "Movie showtime",
		horizontalAlign: "left"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: round
	}]
});

<?php
	$gerne = [];
	foreach($this->gene as $value){
		$temp = [
			"y" => $value["amount"],
			"label" => $value["label"]
		  ];
		array_push($gerne, $temp);
	}
	?>
	var gerne = <?php// echo json_encode($gerne); ?>;

var chart3 = new CanvasJS.Chart("chartGene", {
	animationEnabled: true,
	title:{
		text: "Movie genre",
		horizontalAlign: "left"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: gerne
	}]
});

<?php
	$snack = [];
	foreach($this->productName as $value){
		$temp = [
			"y" => $value["amount"],
			"label" => $value["label"]
		  ];
		array_push($snack, $temp);
	}
	?>
	var snack = <?php echo json_encode($snack); ?>;


	console.log(snack);
var chart4 = new CanvasJS.Chart("chartSnack", {
	animationEnabled: true,
	title:{
		text: "Snack",
		horizontalAlign: "left"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: snack
	}]
});
chart.render();
chart3.render();
chart4.render();

}
</script>
<!--Chart Showtime end -->

<!-- Chart Snack end -->
