
<h1>Stock</h1>
<?php
  $test="test2";
  global $database;
  $conn = $database->getConnection();
  $sql = "select Remain,stockName,StockID from G13_FNB_Stock";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $num = $stmt->rowCount();
  $row = $stmt->fetchAll(PDO::FETCH_BOTH);
  // echo "<pre>";
  // var_dump($row);
  // echo "</pre>";
  for($i=0;$i<$num;$i++){
    if (substr($row[$i]["StockID"],0,2) == "DR"){
      $unit[$i] = 'Liter';
    };
    if (substr($row[$i]["StockID"],0,2) == "PC"){
      $row[$i]["Remain"] = $row[$i]["Remain"]/1000;
      $unit[$i] = 'Kilogram';
    };
    if (substr($row[$i]["StockID"],0,2) == "SN"){
      $unit[$i] = 'Piece';
    };
  }
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Remain</th>
      <th scope="col"></th>

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
          </td>
          <td>
            <?php
              echo $row[$i]["Remain"];
            ?>
          </td>
          <td>
            <?php
              echo $unit[$i];
            ?>
          </td>
      </tr>
      <?php
        }
      ?>
    </tbody>

</table>
