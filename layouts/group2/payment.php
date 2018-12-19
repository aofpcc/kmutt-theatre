<?php

?>



<head>


  <style type="text/css">
    svg,
    img {
      width: 20px;
    }
  </style>
  <link rel="preload" href="/layouts/group2/js/payment/manifest.86920d2276921dc8f875.js" as="script">
  <link rel="preload" href="/layouts/group2/js/payment/vendor.eb91d5bf77b2c769fcc2.js" as="script">
  <link rel="preload" href="/layouts/group2/js/payment/app.baa2eadcab44e34fea36.js" as="script">
  <link rel="prefetch" href="/layouts/group2/js/payment/2.1a387b47ee125ca353f8.js">
  <link rel="prefetch" href="/layouts/group2/js/payment/5.b3f4836c4ad2b717a7fa.js">
  <link rel="stylesheet" href="/layouts/group2/css/maincss/common.baa2eadcab44e34fea36.css">

  <script type="text/javascript" charset="utf-8" async="" src="/layouts/group2/js/payment/5.b3f4836c4ad2b717a7fa.js"></script>
  <script type="text/javascript" charset="utf-8" async="" src="/layouts/group2/js/payment/2.1a387b47ee125ca353f8.js"></script>

  <style type="text/css">

  </style>

</head>

<body>



  <div id="app" class="is-grayscale">

    <div id="main" class="page-payment">
      <div class="step-bar">
        <div class="container">
          <ul class="desktop">
            <li class="step-item pass"><a href="/emp/group2/home_page/select_movie">
                <div class="no">1</div>
                <div class="step-name">Showtime</div>
              </a></li>
            <li class="step-item pass"><a href="/emp/group2/home_page/select_movie/select_showtime">
                <div class="no">2</div>
                <div class="step-name">Seat Selection</div>
              </a></li>
            <li class="step-item active"><a href="https://www.sfcinemacity.com/showtime/movie/HO00000074/9912#">
                <div class="no">3</div>
                <div class="step-name">Payment</div>
              </a></li>
            <li class="step-item"><a href="https://www.sfcinemacity.com/showtime/movie/HO00000074/9912#">
                <div class="no">4</div>
                <div class="step-name">Done</div>
              </a></li>
          </ul>

        </div>
      </div>
      <div class="section-movie-detail">
        <div class="box-movie-detail">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="detail-box clearfix">
                  <div class="poster"><img src="/layouts/group2/images/payment/unnamed.jpg"></div>
                  <div class="movie-detail">
                    <div class="main-detail">
                      <?php foreach ($this->movietitle as $movietitle) { ?>
                      <h1 class="name">
                        <?=$movietitle ?>
                      </h1>
                      <?php } ?>
                      <ul class="movie-detail-list movie-date-time">
                        <li class="list-item"><span class="date">13 December 2018</span></li>
                        <li class="list-item"><span class="time">13:20</span></li>
                      </ul>
                    </div>

                    <ul class="movie-detail-list movie-theater">
                      <li class="list-item theater"><span class="cinema-text">Theatre no.</span><span class="cinema-number">4</span></li>
                      <li class="list-item"><svg viewBox="0 0 405.88 359.77" class="sf-icon sound">
                          <defs></defs>
                          <title>sound</title>
                          <path d="M226.08,359.77a11.5,11.5,0,0,1-6.9-2.3L112.91,277.7C107.14,274,93,264.48,93,248.58V111.87c0-14.3,10.53-23.39,19.81-29.72L219.17,2.3a11.5,11.5,0,0,1,6.9-2.3,26.53,26.53,0,0,1,26.5,26.5V333.27A26.53,26.53,0,0,1,226.08,359.77ZM228.55,24L126.4,100.7,126,101c-6.7,4.55-10,8.11-10,10.85V248.58c0,1.39,1.27,4.53,9.76,10,0.22,0.14.44,0.29,0.65,0.45l102.15,76.67a3.49,3.49,0,0,0,1-2.48V26.5A3.49,3.49,0,0,0,228.55,24Z"
                            class="cls-1"></path>
                          <path d="M104.5,261.94h-78C11.89,261.94,0,251.41,0,238.47V121.3c0-12.94,11.89-23.47,26.5-23.47h78a11.5,11.5,0,0,1,11.5,11.5V250.44A11.5,11.5,0,0,1,104.5,261.94ZM23,237.9a5.59,5.59,0,0,0,3.5,1H93V120.82H26.5a5.59,5.59,0,0,0-3.5,1v116Z"
                            class="cls-1"></path>
                          <path d="M323.7,313.84a11.5,11.5,0,0,1-6-21.3,136.47,136.47,0,0,0,5-229.53A11.5,11.5,0,1,1,335.6,43.94a159.44,159.44,0,0,1-5.9,268.2A11.45,11.45,0,0,1,323.7,313.84Z"
                            class="cls-1"></path>
                          <path d="M289.25,269.35a11.5,11.5,0,0,1-5.35-21.69,80.75,80.75,0,0,0,7.68-138.47,11.5,11.5,0,1,1,12.88-19.06A103.75,103.75,0,0,1,294.58,268,11.45,11.45,0,0,1,289.25,269.35Z"
                            class="cls-1"></path>
                        </svg> TH</li>
                    </ul>
                    <div class="summary-selected-seat">
                      <div class="selected-seat">
                        <h3 class="heading">Seat no.</h3>
                        <p>
                          <?php

                          $arry = json_decode(json_encode($this->seats), true);
                          foreach ($arry as $result) {
                          echo 'row: ', $result['row'],'   seat: ', $result['seat'],'<br/>';
                              }
                            ?>
                        </p>
                      </div>
                      <div class="selected-seat-total">
                        <h3 class="heading">Total</h3>
                        <p>440 THB</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="info-bar">
        <div class="container">
          <div class="info-bar-inner">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                <div class="total-price">
                  <p><span>Total</span> 440 THB</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="section-payment">
        <div class="container">
          <div class="box-payment">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="tab-button togged">
                  <button type="button" class="button button-buy active">KMUTT Thetre</button>
                </div>
                <div class="box-wrapper">
                  <div class="heading">Purchase Payment Confirmation ?</div>

                  <br>

                  <form action="/emp/group2/check_card_no" method="post">

                    <input type="text" placeholder="Card no." name="card_no" maxlength="3" class="input form-control">
                    <input type="tel" placeholder="Phone no." name="phone_no" maxlength="10" class="input form-control">


                    <div class="heading">Payment Method</div>
                    <div class="btn-wrapper">
                      <div class="payment-method">

                        <div class="inner">
                          <div class="method k-plus active"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 84 84" xml:space="preserve"
                              class="sf-icon k-plus">
                              <path fill="#404148" d="M74.4,2.5C71.3,0.9,68.3,0,60,0h-36C15.6,0,12.6,0.9,9.6,2.5c-3,1.6-5.5,4.1-7.1,7.1                   C0.9,12.6,0,15.6,0,24v36c0,8.3,0.9,11.3,2.5,14.4c1.6,3,4.1,5.5,7.1,7.1c3,1.6,6.1,2.5,14.4,2.5h36c8.3,0,11.3-0.9,14.4-2.5
c3-1.6,5.5-4.1,7.1-7.1c1.6-3,2.5-6.1,2.5-14.4V24c0-8.3-0.9-11.3-2.5-14.4C79.8,6.5,77.4,4.1,74.4,2.5z"
                                class="fill"></path>

                              <rect fill="#fff" id="Rectangle" x="25" y="30" width="7.8" height="34.2"></rect>

                              <rect fill="#fff" id="Rectangle" x="12" y="24" width="34.2" height="7.8"></rect>

                              <polygon fill="#fff" points="73.1,45.8 64.5,45.8 64.5,37.2 59.8,37.2 59.8,45.8 51.3,45.8 51.3,50.4 59.8,50.4
                                                            59.8,59 64.5,59 64.5,50.4 73.1,50.4 "></polygon>



                            </svg><span class="method-label">Cash</span></div>
                        </div>


                        <div class="inner">
                          <div class="method"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 412.145 271.744"
                              enable-background="new 0 0 412.145 271.744" xml:space="preserve" class="sf-icon credit">
                              <g>
                                <defs>
                                  <rect id="SVGID_1_" width="412.145" height="271.744"></rect>
                                </defs>5
                                <clippath id="SVGID_2_">
                                  <use xlink:href="#SVGID_1_" overflow="visible"></use>
                                </clippath>
                                <path clip-path="url(#SVGID_2_)" fill="#404148" d="M385.279,0H26.865C12.032,0,0,12.025,0,26.865v27.414h412.145V26.865C412.145,12.025,400.12,0,385.279,0"
                                  class="fill"></path>
                                <path clip-path="url(#SVGID_2_)" fill="#404148" d="M0,108.256V244.88c0,14.84,12.032,26.864,26.865,26.864H385.28c14.84,0,26.864-12.024,26.864-26.864V108.256H0z M90.822,235.275c0,4.4-3.6,8-8,8h-52c-4.4,0-8-3.6-8-8v-25c0-4.399,3.6-8,8-8h52c4.4,0,8,3.601,8,8V235.275z"
                                  class="fill"></path>
                              </g>
                            </svg><span class="method-label">Credit / Debit Cards</span></div>
                        </div>
                      </div>
                      <!-- send to done page -->
                      <input type="submit" enabled="active" class="button btn-block button-blue button-purchase" value="Pay 440฿">

                  </form>
                </div>


              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="/layouts/group2/js/payment/manifest.86920d2276921dc8f875.js" defer=""></script>
  <script src="/layouts/group2/js/payment/app.baa2eadcab44e34fea36.js" defer=""></script>


  < <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=702701463411428&amp;ev=PageView&amp;noscript=1"></noscript>

    <script type="text/javascript" id="">
      var oldPage = window.location.pathname;
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        event: "previousPage",
        oldPage: oldPage
      });
    </script>


</body>