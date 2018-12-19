<?php
  global $database;
  $conn = $database->getConnection();
  
  $stmt = "SELECT * FROM G10_v_available_ads ORDER BY RAND() LIMIT 1";
  $list = $conn->query($stmt)->fetchAll(PDO::FETCH_BOTH);

  // var_dump($list[0]);
?>

<link rel="stylesheet" href="/layouts/group10/test_ads/style.css">
<!-- <button id="modal-btn" class="button">Click Here</button> -->
<div id="my-modal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Ads</h2>
    </div>
    <div class="modal-body">
      <a href="<?php echo "https://".$list[0]['url']; ?>" target="_blank">
      <img class="lozad" data-src="<?php echo "/layouts/group10".$list[0]['banner']; ?>" alt="ads"/>
      </a>
    </div>
    <div class="modal-footer"><h3>KMUTT-Theatre</h3></div>
  </div>
</div>
<!--<script>
    // var closebtns = document.getElementsByClassName("close");
    // var i;

    // for (i = 0; i < closebtns.length; i++) {
    //   closebtns[i].addEventListener("click", function() {
    //     this.parentElement.style.display = "none";
    //   });
    // }
</script>-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script src="/layouts/group10/test_ads/main.js"></script>