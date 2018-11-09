<link href="/layouts/group1/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/layouts/group1/css/onStyle.css">
<script src="/layouts/group1/js/jquery-1.11.0.min.js"></script>
<script src="/layouts/group1/js/jquery.seat-charts.js"></script>

<script>
  var price = 10; //price
  $(document).ready(function() {
    var $cart = $('#selected-seats'), //Sitting Area
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
          $('<li>Row'+(this.settings.row+1)+' Seat'+this.settings.label+'</li>')
          .attr('id', 'cart-item-'+this.settings.id)
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
