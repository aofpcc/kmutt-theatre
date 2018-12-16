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
	$MorningRound = [];
	foreach($this->morning as $value){
		array_push($MorningRound, $value["morning"]);
	}
	$AfternoonRound = [];
	foreach($this->afternoon as $value){
		array_push($AfternoonRound, $value["afternoon"]);
	}
	$EveningRound = [];
	foreach($this->evening as $value){
		array_push($EveningRound, $value["evening"]);
	}
	$MidnightRound = [];
	foreach($this->midnight as $value){
		array_push($MidnightRound, $value["midnight"]);
	}
	?>
	var morning = <?php echo json_encode($MorningRound); ?>;
	var afternoon = <?php echo json_encode($AfternoonRound); ?>;
	var evening = <?php echo json_encode($EveningRound); ?>;
	var midnight = <?php echo json_encode($MidnightRound); ?>;
	console.log(morning);
	console.log(afternoon);
	console.log(evening);
	console.log(midnight)
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
		dataPoints: [
			{ y: morning, label: "Morning" },
			{ y: afternoon, label: "Afternoon" },
			{ y: evening, label: "Evening" },
			{ y: midnight, label: "Midnight"},
		]
	}]
});


var chart3 = new CanvasJS.Chart("chartGene", {
	animationEnabled: true,
	title:{
		text: "Movie gene",
		horizontalAlign: "left"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 67, label: "Inbox" },
			{ y: 28, label: "Archives" },
			{ y: 10, label: "Labels" },
			{ y: 7, label: "Drafts"},
			{ y: 15, label: "Trash"},
			{ y: 6, label: "Spam"}
		]
	}]
});

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
		dataPoints: [
			{ y: 67, label: "Inbox" },
			{ y: 28, label: "Archives" },
			{ y: 10, label: "Labels" },
			{ y: 7, label: "Drafts"},
			{ y: 15, label: "Trash"},
			{ y: 6, label: "Spam"}
		]
	}]
});
chart.render();
chart3.render();
chart4.render();

}
</script>
<!--Chart Showtime end -->

<!-- Chart Snack end -->
