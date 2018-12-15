<p>
  <?=$this->content ?>
</p>
<script type="text/javascript">
<?php
$this->errs = $this->flashes()["info"];
if ($this->errs) foreach ($this->errs as $key => $value): ?>
  alert("<?php echo $value; ?>");
<?php endforeach; ?>
</script>
