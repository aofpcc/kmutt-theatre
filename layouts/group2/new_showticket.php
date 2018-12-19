<style>
    .ticket-ja {
        border: 1px solid black;
        padding-left: 20px;
    }
</style>
<?php foreach($this->tickets as $ticket) { ?>
<div class="card ticket-ja" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            Movie  : <?=$this->movieTitle?><br>
            Branch : <?=$this->branch?><br>
            Room   : <?=$this->room_no?><br>
            Time   : <?=$this->startTime." - ".$this->endTime?><br>
    </h5>
        <p class="card-text">
            <?php
            $str = explode("_", $ticket["seat_ticket"]);
            ?>
            ROW : <?=$str[0]?>
            <br>SEAT : <?=$str[1]?>
        </p>
    </div>
</div>
<?php } ?>