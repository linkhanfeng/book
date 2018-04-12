<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>目录</title>
</head>
  <body>
  <ol>
  <?php
  $list = scandir('./');
  foreach ($list as $k1 => $v1) {
    if($v1 === '.' || $v1 === '..') continue;
    echo "<li><a href='./$v1'>$v1</a></li>";
  }
  ?>
  </ol>
</body>
</html>