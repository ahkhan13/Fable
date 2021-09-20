<?php
  header('Content-Type: application/download');
  header('Content-Disposition: attachment; filename="codebycode/insert.php"');
  header("Content-Length: " . filesize("codebycode/insert.php"));
  $fp = fopen("codebycode/insert.php", "r");
  fpassthru($fp);
  fclose($fp);
?>