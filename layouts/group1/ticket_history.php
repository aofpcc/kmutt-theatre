

<div class="table-scroll">
  <table id="ads-table">
    <thead>
      <tr>
        <th class="list-id">seat_ticket</th>
        <th class="list-stat">Room </th>
        <th class="list-name">Name</th>

      </tr>
    </thead>
    <tbody>
      <?php
      for($i = 0;$i < count($this->ticket_id);$i++){
      ?>

      <tr>
        <td id="id<?=$this->ticket_id[$i]['seat_ticket'] ?>"><?=$this->ticket_id[$i]['seat_ticket'] ?></td>
          <td id="id<?=$this->ticket_id[$i]['room_id'] ?>"><?=$this->ticket_id[$i]['room_id'] ?></td>
          <td id="id<?=$this->ticket_id[$i]['name'] ?>"><?=$this->ticket_id[$i]['name'] ?></td>
        </td>
      </tr>
      <?php
      }
       ?>
    </tbody>
  </table>
</div>
