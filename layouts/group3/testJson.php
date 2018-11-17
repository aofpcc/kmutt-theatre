<html>
   <body>
   
      <?php
         $emp = [["id"=> 1,"name"=>"Tonson","addr" => "bangkok"],["id"=> 2,"name"=>"muta","addr" => "udon"]];
         $json = json_encode($emp);
         echo "<div id='emp' style='display:none;'> " . $json . "</div>";
      ?>
      
   </body>
   <script type="text/javascript">
       var emps = JSON.parse(document.getElementById('emp').innerHTML);
       emps.forEach(function(emp) {
        console.log(emp.id + ' ' + emp.name + ' ' + emp.addr);   
           
       }
       )
       
   </script>
</html>