<link rel="stylesheet" href="/layouts/group10/test_ads/style.css">
<button id="modal-btn" class="button">Click Here</button>
<div id="my-modal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Ads</h2>
    </div>
    <div class="modal-body">
      <a href="<?=$this->link?>" target="_blank">
      <img src="<?=$this->linkads ?>" alt="ads"/>
      </a>
    </div>
    <div class="modal-footer"><h3>Kmutt-Theatre</h3></div>
  </div>
</div>
<script>
    // var closebtns = document.getElementsByClassName("close");
    // var i;

    // for (i = 0; i < closebtns.length; i++) {
    //   closebtns[i].addEventListener("click", function() {
    //     this.parentElement.style.display = "none";
    //   });
    // }
</script>
  <script src="/layouts/group10/test_ads/main.js"></script>