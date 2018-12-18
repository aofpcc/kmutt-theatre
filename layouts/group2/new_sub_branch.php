<?php foreach($this->showtimes as $showtime) { ?>
<button class="btn box-showtime" onclick="selectShowTime(<?=$showtime['showtime_id']?>);">
<?="Room No:".$showtime['room_no']?><br>
<?="[".$showtime['roomtype']."]"?><br>
<?=(new DateTime($showtime['startTime']))->format("d M")?><br>
<?=(new DateTime($showtime['startTime']))->format("H:i")."-".(new DateTime($showtime['EndTime']))->format("H:i")?>
</button>
<?php } ?>