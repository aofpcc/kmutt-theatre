<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="/layouts/group5/register-makeup.css">
  <link rel="stylesheet" href="/layouts/group5/css/change.css">
</head>

<body>

<div class="container">
  <div class="py-5 text-center">
    <p class="mb-1"></p>
    <h2>Point Transactions</h2>
    <p class="lead">Just one more steps and you're done!
      We hate paperwork, too.</p>
  </div>
  </div>
<div class="table-responsive">
            <table class="table table-striped table-sm">
              <!-- head -->
              <thead>
                <tr>
                  <th>#</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Transaction</th>
                  <th>Point</th>
                </tr>
              </thead>
              <!-- end head -->

              <!-- body -->
              <tbody>
                <?php
                $count = 1;
                foreach($this->list as $list) { ?>
                <tr class="<?=$list['prefix'] == "+" ? "table-success" : "table-danger" ?>">
                  <td><?=$count++?></td>
                  <td><?=$list["date"]?></td>
                  <td><?=$list["time"]?></td>
                  <td><?=$list["type"]?></td>
                  <td><?=$list["point"]?></td>
                </tr>
                <?php } ?>
              </tbody>
              <!-- end body -->
            </table>

            <div
            <div class="py-5 text-center" style="margin: auto; width: 15%;">
            <button style="width:100%; background-color: #DC143C; color: #FFFFFF; border-radius: 8px;" class="cancel-block gap" onclick="location='/customer/membership'" type="submit">Back</button></div>
          </div>

</body>
