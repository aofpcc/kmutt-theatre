
<div class="demo">
  <div id="seat-map">
    <div class="front">SCREEN</div>
  </div>
  <div class="booking-details">
    <ul class="book-left">
      <!-- <li>Movie </li>
          <li>Time </li> -->
      <li>Tickets</li>
      <li>Total</li>
    </ul>
    <ul class="book-right">
      <!-- <li>: Gingerclown</li>
          <li>: April 3, 21:00</li> -->
      <li>: <span id="counter">0</span></li>
      <li>: <b><i>$</i><span id="total">0</span></b></li>
    </ul>
    <div class="clear"></div>
    <ul id="selectedSeats" class="scrollbar scrollbar1"></ul>
    <button id="book_now" name="book_seat" value="book_seat" id="book_seat" class="checkout-button">Book now</button>
    <button id="close" class="checkout-button">Close</button>

    <div id="legend"></div>
  </div>
  <div style="clear:both"></div>
</div>


<script>
  var price = 10; //price
  var selectedSeatJa = [];

  $("#book_now").click(function (e) {
    if (selectedSeatJa.length == 0) {
      alert("Please Select Seat First");
      return;
    }
    $.post("/emp/ticket/showtime/buy/"+<?=$this->showtime_id?>, {
      "selectedSeat" : selectedSeatJa
    }).done(function(e){
      if(e.result) {
        alert("Buy Seat Success");
        console.log(e.code);
        $(".modal").hide();
      }else{
        alert("Fail");
      }
    });
  });

  $("#close").click(function () {
    $(".modal").hide();
  })

  $(document).ready(function () {
    var $cart = $('#selectedSeats'), //Sitting Area
      $counter = $('#counter'), //Votes
      $total = $('#total'); //Total money

    var sc = $('#seat-map').seatCharts({
      // map: [  //Seating chart
      //   'aaaaaaaaaa',
      //   'aaaaaaaaaa',
      //   '__________',
      //   '__aaaaaa__',
      //   'aaaaaaaaaa',
      //   'aaaaaaaaaa',
      //   'aaaaaaaaaa',
      //   'aaaaaaaaaa',
      //   'aaaaaaaaaa',
      //   '__aaaaaa__'
      // ],
      map: <?=json_encode($this->seatMap)?>,
      naming: {
        top: false,
        getLabel: function (character, row, column) {
          return column;
        }
      },
      legend: { //Definition legend
        node: $('#legend'),
        items: [
          ['a', 'available', 'Available'],
          ['a', 'unavailable', 'Sold'],
          ['a', 'selected', 'Selected']
        ]
      },
      focus: function () {
        if (this.status() == 'available') {
          if ($("#" + this.settings.id).is(":hover")) {
            return "focused";
            console.log("5555555");
          }
          //if seat's available, it can be focused
          return this.style();
        } else {
          //otherwise nothing changes
          return this.style();
        }
      },
      blur: function () {
        //The only place where you should return actual seat status
        //console.log("5556665");
        return this.status();
      },
      click: function () { //Click event
        if (this.status() == 'available') { //optional seat
          // $("<li><input class='' name='selectedSeats[]' value='" + this.settings.id + "' type='hidden'>Row" +
          //     (this.settings.row + 1) + " Seat" + this.settings.label + "</input></li>")
          //   .attr('id', 'cart-item-' + this.settings.id)
          //   // .attr('name', 'cart-item-'+this.settings.id)
          //   .attr('value', this.settings.id)
          //   // .attr('name', 'selectedSeats[]')
          //   .data('seatId', this.settings.id)
          //   .appendTo($cart);
          selectedSeatJa.push(this.settings.id);
          // console.log(this.settings.id);

          $counter.text(sc.find('selected').length + 1);
          $total.text(recalculateTotal(sc) + price);

          return 'selected';
        } else if (this.status() == 'selected') { //Checked
          //Update Number
          $counter.text(sc.find('selected').length - 1);
          //update totalnum
          $total.text(recalculateTotal(sc) - price);

          //Delete reservation
          // $('#cart-item-' + this.settings.id).remove();
          var index = selectedSeatJa.indexOf(this.settings.id);
          if (index > -1) {
            selectedSeatJa.splice(index, 1);
          }

          //optional
          return 'available';
        } else if (this.status() == 'unavailable') { //sold
          return 'unavailable';
        } else {
          return this.style();
        }
      }
    });

    var soldSeat = <?=json_encode($this->soldSeat)?>;
    sc.get(soldSeat).status('unavailable');
  });
  //sum total money
  function recalculateTotal(sc) {
    var total = 0;
    sc.find('selected').each(function () {
      total += price;
    });

    return total;
  }
</script>