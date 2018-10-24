<ul>
<?php
foreach($this->allMovies as $key => $value) {
    ?>
    <li><?=$value["name"]?></li>
    <?php
}
?>
</ul>