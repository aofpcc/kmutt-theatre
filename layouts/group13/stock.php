
<h1>Stock</h1>
<?php
  $test="test2";
  global $database;
  $conn = $database->getConnection();
  $sql = "select Remain,stockName from G13_FNB_Stock";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $num = $stmt->rowCount();
  $row = $stmt->fetchAll(PDO::FETCH_BOTH);
  // echo "<pre>";
  // var_dump($row);
  // echo "</pre>";
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">name</th>
      <th scope="col">remain</th>

    </tr>
  </thead>
  <tbody>
    <?php
    for($i=0;$i<$num;$i++){
    ?>
      <tr>
          <td>
            <?php
              echo $row[$i]["stockName"];
            ?>
            <!-- test -->
          </td>
          <td>
            <?php
              echo $row[$i]["Remain"];
            ?>
            <!-- test -->
          </td>
      </tr>
      <?php
        }
      ?>
    </tbody>

</table>
