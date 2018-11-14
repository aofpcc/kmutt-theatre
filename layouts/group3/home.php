<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title><?=$this->pageTitle ?></title>
    <link rel="stylesheet" href="/layouts/group3/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </head>
  <body>
    <div name="header" class="head">
      <h1>KMUTT Theatre</h1>
    </div>
    <div name="body" class="main-body">
      <div class="list">
        <h2>Report income</h2>
          <table>
            <thead>
              <tr>
                <th class="list-id">ID</th>
                <th>Department</th>
                <th>Date & Time</th>
                <th>Sold by</th>
                <th>Purchase by</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
              <?php
                for($i = 0; $i < count($this->list); $i++) {
              ?>
                <tr>
                  <td><?=$this->list[$i]['transactionId'] ?></td>
                  <td><?=$this->list[$i]['dName'] ?></td>
                  <td><?=$this->list[$i]['date'] ?></td>
                  <td><?=$this->list[$i]['empFN']." ".$this->list[$i]['empLN']?></td>
                  <td><?=$this->list[$i]['memFN']." ".$this->list[$i]['memLN'];?></td>
                  <td><?=$this->list[$i]['amount'] ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>

      </div>
    </div>
  </body>
</html>
