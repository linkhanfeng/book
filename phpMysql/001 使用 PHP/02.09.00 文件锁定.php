<pre>
为了避免多个人同时一个相同的文件,造成文件的内容不可知, 需要在一个文件打开且进行读写操作前进行锁定操作.

<?php
    $filename = '../data/order.txt';
    $fp = fopen($filename, 'rb');
    flock($fp, LOCK_SH); // 读操作 锁定
    $oneRow = fgets($fp);
    var_dump($oneRow);
    flock($fp, LOCK_UN);
    fclose($fp);
?>

现在代码更加健壮, 但是还不完美. 如果有两个脚本同事对一个文件申请加锁.
这将导致竞争条件的问题. 无法确定哪一个进程会成功.
使用数据库管理系统 (DBMS), 可以很好的解决这个问题.
