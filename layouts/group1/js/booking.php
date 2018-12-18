<link href="/layouts/group1/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/layouts/group1/css/onStyle.css">
<script src="/layouts/group1/js/jquery-1.11.0.min.js"></script>
<script src="/layouts/group1/js/jquery.seat-charts.js"></script>

<script>
  <?php
  // // var_dump($request->showtime_id);
  // // die;
  // $id = $request->showtime_id;
  // // var_dump($id);
  // // die;
  //
  // $query_showtime = $conn->query("select movie_id from G04_MSRnB_showingroom where id = $id;")->
  // fetchAll(PDO::FETCH_ASSOC);
  // $id_movie = $query_showtime[0]["movie_id"];
  //
  // $query_price = $conn->query("select st.seat_price as price
  // from G04_MSRnB_room r, G14_Branch b, G04_MSRnB_showingroom s, G04_MSRnB_theaterInfo ti, G04_MSRnB_seattype st
  // where s.room_id = r.id and r.theaterinfo_id = ti.id and ti.seattype_id = st.id and r.branch_id = b.BranchID and
  // s.id = '$request->showtime_id' and s.movie_id = $id_movie;")->fetchAll(PDO::FETCH_ASSOC);
  //
  // $price = $price[0]["price"];
   ?>
  //price
  var price = <?= $this->price ?>;
  $(document).ready(function() {
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
      naming : {
        top : false,
        getLabel : function (character, row, column) {
          return column;
        }
      },
      legend : { //Definition legend
        node : $('#legend'),
        items : [
          [ 'a', 'available',   'Available' ],
          [ 'a', 'unavailable', 'Sold'],
          [ 'a', 'selected', 'Selected']
        ]
      },
      focus  : function() {
        if (this.status() == 'available') {
          if( $("#"+this.settings.id).is(":hover") ) {
            return "focused";
            console.log("5555555");
          }
          //if seat's available, it can be focused
          return this.style();
        } else  {
          //otherwise nothing changes
          return this.style();
        }
      },
      blur   : function() {
        //The only place where you should return actual seat status
        //console.log("5556665");
        return this.status();
      },
      click: function () { //Click event
        if (this.status() == 'available') { //optional seat

          $("<li><input class='' name='selectedSeats[]' value='" + this.settings.id + "' type='hidden'>Row"+(this.settings.row+1)+" Seat"+this.settings.label+"</input></li>")
          .attr('id', 'cart-item-'+this.settings.id)
          // .attr('name', 'cart-item-'+this.settings.id)
          .attr('value', this.settings.id)
          // .attr('name', 'selectedSeats[]')
          .data('seatId', this.settings.id)
          .appendTo($cart);

          $counter.text(sc.find('selected').length+1);
          $total.text(recalculateTotal(sc)+price);

          return 'selected';
        } else if (this.status() == 'selected') { //Checked
          //Update Number
          $counter.text(sc.find('selected').length-1);
          //update totalnum
          $total.text(recalculateTotal(sc)-price);

          //Delete reservation
          $('#cart-item-'+this.settings.id).remove();
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
