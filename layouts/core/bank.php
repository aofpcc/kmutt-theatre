<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.design-process-section .text-align-center {
  line-height: 25px;
  margin-bottom: 12px;
}
.design-process-content {
  border: 1px solid #e9e9e9;
  position: relative;
  padding: 16px 34% 30px 30px;
}
.design-process-content img {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 0;
  max-height: 100%;
}
.design-process-content h3 {
  margin-bottom: 16px;
}
.design-process-content p {
  line-height: 26px;
  margin-bottom: 12px;
}
.process-model {
  list-style: none;
  padding: 0;
  position: relative;
  max-width: 600px;
  margin: 20px auto 26px;
  border: none;
  z-index: 0;
}
.process-model li::after {
  background: #e5e5e5 none repeat scroll 0 0;
  bottom: 0;
  content: "";
  display: block;
  height: 4px;
  margin: 0 auto;
  position: absolute;
  right: -30px;
  top: 33px;
  width: 85%;
  z-index: -1;
}
.process-model li.visited::after {
  background: #57b87b;
}
.process-model li:last-child::after {
  width: 0;
}
.process-model li {
  display: inline-block;
  width: 18%;
  text-align: center;
  float: none;
}
.nav-tabs.process-model > li.active > a, .nav-tabs.process-model > li.active > a:hover, .nav-tabs.process-model > li.active > a:focus, .process-model li a:hover, .process-model li a:focus {
  border: none;
  background: transparent;

}
.process-model li a {
  padding: 0;
  border: none;
  color: #606060;
}
.process-model li.active,
.process-model li.visited {
  color: #57b87b;
}
.process-model li.active a,
.process-model li.active a:hover,
.process-model li.active a:focus,
.process-model li.visited a,
.process-model li.visited a:hover,
.process-model li.visited a:focus {
  color: #57b87b;
}
.process-model li.active p,
.process-model li.visited p {
  font-weight: 600;
}
.process-model li i {
  display: block;
  height: 68px;
  width: 68px;
  text-align: center;
  margin: 0 auto;
  background: #f5f6f7;
  border: 2px solid #e5e5e5;
  line-height: 65px;
  font-size: 30px;
  border-radius: 50%;
}
.process-model li.active i, .process-model li.visited i  {
  background: #fff;
  border-color: #57b87b;
}
.process-model li p {
  font-size: 14px;
  margin-top: 11px;
}
.process-model.contact-us-tab li.visited a, .process-model.contact-us-tab li.visited p {
  color: #606060!important;
  font-weight: normal
}
.process-model.contact-us-tab li::after  {
  display: none;
}
.process-model.contact-us-tab li.visited i {
  border-color: #e5e5e5;
}



@media screen and (max-width: 560px) {
  .more-icon-preocess.process-model li span {
    font-size: 23px;
    height: 50px;
    line-height: 46px;
    width: 50px;
  }
  .more-icon-preocess.process-model li::after {
    top: 24px;
  }
}
@media screen and (max-width: 380px) {
  .process-model.more-icon-preocess li {
    width: 16%;
  }
  .more-icon-preocess.process-model li span {
    font-size: 16px;
    height: 35px;
    line-height: 32px;
    width: 35px;
  }
  .more-icon-preocess.process-model li p {
    font-size: 8px;
  }
  .more-icon-preocess.process-model li::after {
    top: 18px;
  }
  .process-model.more-icon-preocess {
    text-align: center;
  }
}
</style>

<section class="design-process-section" id="process-tab">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <!-- design process steps-->
        <!-- Nav tabs -->
        <center>
          <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">

            <li role="presentation" class="active"><a href="#checkout" aria-controls="checkout" role="tab" data-toggle="tab"><i class="fa fa-credit-card" aria-hidden="true"></i>
              <p>Chekout</p>
            </a></li>

            <li role="presentation"><a href="#payment" aria-controls="payment" role="tab" data-toggle="tab"><i class="fa fa-file" aria-hidden="true"></i>
              <p>Confirm</p>
            </a></li>

            <li role="presentation"><a href="#finish" aria-controls="finish" role="tab" data-toggle="tab"><i class="fa fa-check" aria-hidden="true"></i>
              <p>Finish</p>
            </a></li>
          </ul>
        </center>
        <!-- end design process steps-->
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="checkout">
            <div class="design-process-content">
              <h3 class="semi-bold">Payment detail</h3>
              <!-- payment fill -->


              <div class="panel-body">
                <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="form-group">
                        <label for="cardNumber">CARD NUMBER</label>
                        <div class="input-group">
                          <input
                          type="tel"
                          pattern="[0-9]{10}"
                          maxlength="16"
                          class="form-control"
                          name="cardNumber"
                          placeholder="Valid Card Number"
                          autocomplete="cc-number"
                          required autofocus
                          />
                          <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-7 col-md-7">
                      <div class="form-group">
                        <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                        <input
                        type="month"
                        class="form-control"
                        name="cardExpiry"
                        placeholder="MM / YY"
                        autocomplete="cc-exp"
                        required
                        />
                      </div>
                    </div>
                    <div class="col-xs-5 col-md-5 pull-right">
                      <div class="form-group">
                        <label for="cardCVC">CV CODE</label>
                        <input
                        type="password"
                        maxlength="3"
                        class="form-control"
                        name="cardCVC"
                        placeholder="CVC"
                        autocomplete="cc-csc"
                        required
                        />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12">
                      <button class="subscribe btn btn-success btn-lg btn-block" type="button">Next</button>
                    </div>
                  </div>
                  <div class="row" style="display:none;">
                    <div class="col-xs-12">
                      <p class="payment-errors"></p>
                    </div>
                  </div>
                </form>
              </div>




            </div>
          </div>

          <div role="tabpanel" class="tab-pane" id="payment">
            <div class="design-process-content">
              <h3 class="semi-bold">Confirm</h3>
              <!-- confirm -->

              <div class="container">
                  <div class="row">
                      <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                          <div class="row">
                              <div class="col-xs-6 col-sm-6 col-md-6">
                                  <address>
                                      <strong>Elf Cafe</strong>
                                      <br>
                                      2135 Sunset Blvd
                                      <br>
                                      Los Angeles, CA 90026
                                      <br>
                                      <abbr title="Phone">P:</abbr> (213) 484-6829
                                  </address>
                              </div>
                              <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                                  <p>
                                      <em>Date: 1st November, 2013</em>
                                  </p>
                                  <p>
                                      <em>Receipt #: 34522677W</em>
                                  </p>
                              </div>
                          </div>
                          <div class="row">
                              <div class="text-center">
                                  <h1>Receipt</h1>
                              </div>
                              </span>
                              <table class="table table-hover">
                                  <thead>
                                      <tr>
                                          <th>Product</th>
                                          <th>#</th>
                                          <th class="text-center">Price</th>
                                          <th class="text-center">Total</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td class="col-md-9"><em>Baked Rodopa Sheep Feta</em></h4></td>
                                          <td class="col-md-1" style="text-align: center"> 2 </td>
                                          <td class="col-md-1 text-center">$13</td>
                                          <td class="col-md-1 text-center">$26</td>
                                      </tr>
                                      <tr>
                                          <td class="col-md-9"><em>Lebanese Cabbage Salad</em></h4></td>
                                          <td class="col-md-1" style="text-align: center"> 1 </td>
                                          <td class="col-md-1 text-center">$8</td>
                                          <td class="col-md-1 text-center">$8</td>
                                      </tr>
                                      <tr>
                                          <td class="col-md-9"><em>Baked Tart with Thyme and Garlic</em></h4></td>
                                          <td class="col-md-1" style="text-align: center"> 3 </td>
                                          <td class="col-md-1 text-center">$16</td>
                                          <td class="col-md-1 text-center">$48</td>
                                      </tr>
                                      <tr>
                                          <td>   </td>
                                          <td>   </td>
                                          <td class="text-right">
                                          <p>
                                              <strong>Subtotal: </strong>
                                          </p>
                                          <p>
                                              <strong>Tax: </strong>
                                          </p></td>
                                          <td class="text-center">
                                          <p>
                                              <strong>$6.94</strong>
                                          </p>
                                          <p>
                                              <strong>$6.94</strong>
                                          </p></td>
                                      </tr>
                                      <tr>
                                          <td>   </td>
                                          <td>   </td>
                                          <td class="text-right"><h4><strong>Total: </strong></h4></td>
                                          <td class="text-center text-danger"><h4><strong>$31.53</strong></h4></td>
                                      </tr>
                                  </tbody>
                              </table>
                              <button type="button" class="btn btn-success btn-lg btn-block">
                                  Pay Now   <span class="glyphicon glyphicon-chevron-right"></span>
                              </button></td>
                          </div>
                      </div>
                  </div>
                </div>



            </div>
          </div>

          <div role="tabpanel" class="tab-pane" id="finish">
            <div class="design-process-content">
              <h3>Invoice</h3>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
  // script for tab steps
  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

    var href = $(e.target).attr('href');
    var $curr = $(".process-model  a[href='" + href + "']").parent();

    $('.process-model li').removeClass();

    $curr.addClass("active");
    $curr.prevAll().addClass("visited");
  });
  // end  script for tab steps
</script>
