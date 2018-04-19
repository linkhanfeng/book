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
    // var_dump( unlink($filename2) );
?>

<h3>在文件中定位</h3>
<?php
    $fp = fopen($filename, 'rb');
    $data = fgets($fp, 15); // fgets($fp, length) 返回长度最多为 length - 1 字节的字符串
    var_dump($data);
    echo 'position:: ' . ftell($fp); // 14 length - 1
    echo "<hr>";
    rewind($fp); // 将指针复位到开始位置 0
    echo "position:: " . ftell($fp); // 0
    echo "<hr>";
    // fseek() 在文件指针中定位
    fseek($fp, 11);
    $timeStr = fread($fp, 8); // 读取行 指定的位置.
    var_dump($timeStr);
    fclose($fp);
?>
