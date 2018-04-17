<?php
    $filename = '../data/order.txt';
    $fp = fopen($filename, 'rb'); // 二进制 只读 方式打开
    flock($fp, LOCK_SH); // 锁定文件
    if(!$fp) exit('不能够打开文件 '. $filename);

    while (!feof($fp)) { // feof (file end of file) 检测是否到文件末尾, 持续读文件, 直到遇到 EOF
      $order = fgets($fp); // fgets 每次读取一行数据
      echo htmlspecialchars($order) ."<br>";
    }
    flock($fp, LOCK_UN); // 解锁文件
    fclose($fp); // 关闭文件
?>
