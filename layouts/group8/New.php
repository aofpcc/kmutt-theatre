
    <div class="container">

    
     <h2 class="text-center">Your Code->
    <input id="codeContent" type="text" value="<?php echo $this->rand; ?>" disabled />
    <!-- <button id="btn1">Sent</button> -->
    <?php
        if ($this->rand) {
            // echo 'YES';
        } 
        else {
            echo "<a class='button' href='/group8/gen'>Send</a>";
        }
    ?>
</h2>
</div>
  


    <script>
        $("#btn1").click(function()){
            alert('clicked!!');
            $.post("/group8/gen").done(function(data)){
                // $("#codeContent").val(data);
                alert(data);
            });
        });
    </script>
      <?php
        echo  "<center><a  class='btn btn-primary btn-lg' href='/emp/group8'>Back &raquo;</a></center>";
      ?>

</html>