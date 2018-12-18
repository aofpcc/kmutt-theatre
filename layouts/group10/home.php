  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="/layouts/group10/css/ads.css">
    <script src="/layouts/group10/js/ads.js"></script>
  </head>
    <div name="header" class="head">
      <h1>KMUTT Theatre</h1>
      <h3><a href="/emp/group10/ads">Ads management</a></h3>
      <h3><a href="/emp/group10/logs">Logs</a></h3>
    </div>
    <div name="body" class="main-body">
      <?php if($this->isManagementPage) { ?>
        <div class="list">
          <h2>Advertisement List</h2>
          <div class="table-scroll">
            <table>
              <thead>
                <tr>
                  <th class="list-id">ID</th>
                  <th class="list-stat">Status</th>
                  <th class="list-name">Name</th> 
                  <th class="list-type">Type</th>
                  <th class="list-date">Start date</th>
                  <th class="list-date">End date</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  for($i = 0; $i < count($this->list); $i++) { 
                ?>
                  <tr>
                    <td id="id<?=$this->list[$i]['id'] ?>"><?=$this->list[$i]['id'] ?></td>
                    <?php 
                      $status = $this->list[$i]['status'];
                      if($status == 'on') { 
                    ?>
                        <td id='status<?=$this->list[$i]['id'] ?>' style='color:green'>on</td>
                    <?php  
                      }
                      else {
                    ?>
                        <td id='status<?=$this->list[$i]['id'] ?>' style='color:red'>off</td>
                    <?php
                      }
                    ?>
                    <td style="text-align: left"><a class="name" id="name<?=$this->list[$i]['id'] ?>" href="#"><?=$this->list[$i]['name'] ?></a></td>
                    <td id="type<?=$this->list[$i]['id'] ?>"><?=$this->list[$i]['type'] ?></td>
                    <td id="st-date<?=$this->list[$i]['id'] ?>"><?=$this->list[$i]['start_date'] ?></td>
                    <td id="en-date<?=$this->list[$i]['id'] ?>"><?=$this->list[$i]['end_date'] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="ads">
          <form action="/emp/group10/upload" method="post" class="form" enctype="multipart/form-data">
            <div class="ads-head">
              <h2>Ads <h2><input type="text" name="id" id="id" readonly></h2></h2>
            </div>
            <div class="form-item" style="margin-top: 0">
              <h4>Name:</h4>
              <input type="text" name="ads-name" id="ads-name" placeholder=" advertisment" required>
            </div>
            <div class="form-item" style="margin-top: 0">
              <h4>URL:</h4>
              <input type="text" name="link" id="link" placeholder=" .com" required>
            </div>
            <div class="form-upload">
              <h4>Upload:</h4>
              <input type="file" name="ads-banner" id="ads-banner">
            </div>
            <div class="form-item">
              <div class="form-img">
                <img src="/layouts/group10/img/placeholder-image.jpg" alt="preview-image" id="pre-img" onchange="readURL(input)">
              </div>
            </div>
            <div class="form-item">
              <h4>Start:</h4>
              <input type="date" name="start-date" id="start-date" required>
            </div>
            <div class="form-item">
              <h4>End:</h4>
              <input type="date" name="end-date" id="end-date" required>
            </div>
            <div class="form-status">
              <h4>Status:</h4>
              <label class="switch">
                  <input type="checkbox" name="status" id="status" value="on" checked>
                  <span class="slider round"></span>
              </label>
              <input type="submit" name="submit" value="submit" id="submit">
              <input type="reset" name="reset" value="reset" id="reset" onclick="resetImg()">
              <button name="delete" value="delete" id="delete">delete</button>
            </div>
          </form>
        </div>
      <?php } else if ($this->isLogsPage) { ?>
        <div class="logs">
          <h2>Logs</h2>
          <div class="table-scroll">
            <table>
              <thead>
                <tr>
                  <th class="logs-id"> Ads ID</th>
                  <th class="logs-user">Edit by</th>
                  <th class="logs-act">Action</th> 
                  <th class="logs-date">Date</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  for($i = 0; $i < count($this->list); $i++) { 
                ?>
                  <tr>
                    <td><?=$this->list[$i]['id'] ?></td>
                    <td><?=$this->list[$i]['username'] ?></td>
                    <?php 
                      $action = $this->list[$i]['action'];
                      if($action == 'add') { 
                    ?>
                        <td style='color:green'>add</td>
                    <?php  
                      } else if ($action == 'delete') {
                    ?>
                        <td style='color:red'>delete</td>
                    <?php
                      } else if ($action == 'edit') {
                    ?>
                        <td style='color:brown'>edit</td>
                    <?php  } ?>
                    <td><?=$this->list[$i]['date'] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      <?php } ?>
    </div>