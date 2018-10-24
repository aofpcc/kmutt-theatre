<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title><?=$this->pageTitle ?></title>
</head>
<body>
  <ul>
    <?php
    foreach ($this->allMovies as $key => $value) {
    ?>
    <li><?=$value["name"] ?></li>
    <?php
    }
    ?>
  </ul>
</body>
</html>
