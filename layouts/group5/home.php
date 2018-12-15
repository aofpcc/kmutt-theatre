<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?=$this->pageTitle ?></title>
  </head>
  <body>
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Duration</th>
      </tr>
      <?php
      foreach ($this->allMovies as $key => $value) {
        echo "<tr>";
        echo "<td>".$value['id']."</td>";
        echo "<td>".$value['name']."</td>";
        echo "<td>".$value['duration']."</td>";
        echo "</tr>";
      }
      ?>
    </table>

  </body>
</html>
