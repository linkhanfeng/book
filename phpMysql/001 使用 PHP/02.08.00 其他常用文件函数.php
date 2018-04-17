<pre>
<h3>1. 检测文件是否存在 file_exists()</h3>
<?php
    $filename = '../data/order.txt';
    $filename2 = '../data/order2.txt';
    var_dump( file_exists($filename) );
?>

<h3>2. 文件大小 filesize()</h3>
<?php
    echo filesize($filename);
?>

<h3>3. 删除文件 unlink()</h3>
<?php
    var_dump( unlink($filename2) );
?>

<h3>在文件中定位</h3>
