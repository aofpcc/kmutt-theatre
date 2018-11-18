<?php
/**
 *
 */
class JavaScriptPart
{
  public function alert($string) {
    echo "<script type='text/javascript'>
      alert('$string');
    </script>";
  }
}
