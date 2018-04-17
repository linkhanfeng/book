<pre>
<h1>按行读取</h1>
<?php
    $filename = '../data/order.txt';
    $fp = fopen($filename, 'rb'); // 二进制 只读 方式打开
    flock($fp, LOCK_SH); // 锁定文件
    if(!$fp) exit('不能够打开文件 '. $filename);

    while (!feof($fp)) { // feof (file end of file) 检测是否到文件末尾, 持续读文件, 直到遇到 EOF
      $order = fgets($fp); // fgets 每次读取一行数据
      // $order = fgetcsv($fp, 0, "\t"); // fgets 每次读取一行数据并将数据根据标识符分割为数组
      var_dump($order);
      // echo htmlspecialchars($order) ."<br>";
    }
    flock($fp, LOCK_UN); // 解锁文件
    fclose($fp); // 关闭文件
?>

<h3>读取整个文件</h3>
<?php
    echo "1. readfile 输出文件<hr>";
    $fileLength = readfile($filename); // 将文件内容 回显到标准输出
    var_dump($fileLength); // 返回文件长度

    echo "2. fpassthru 输出文件指针处的所有剩余数据<hr>";
    $fp = fopen($filename, 'rb');
    $fileLength = fpassthru($fp); // 将文件内容 回显到标准输出
    fclose($fp);
    var_dump($fileLength); // 返回文件长度

    echo "3. file 读入一个数组中<hr>";
    $fileArr = file($filename); // 将文件内容 读入一个数组中
    print_r($fileArr);

    echo "3. file_get_contents<hr>";
    $fileStr = file_get_contents($filename); // 与 readfile() 相同,不同的是将文件内容以字符串形式返回, 而不是 回显到标准输出
    echo($fileStr);
?>

<h3>按字符方式读取 fgetc()</h3>
<?php
    $fp = fopen($filename, 'rb');
    $n = 0;
    while (!feof($fp)) {
      // echo "string";
      $char = fgetc($fp);
      echo $char == "\n" ? '<hr>' : $char;
      $n++;
    }
    var_dump('一共读取了多少个字符:: '. $n);
    fclose($fp);
?>

<h3>读取任意长度 fread()</h3>
<?php
    $fp = fopen($filename, 'rb');
    $someFile = fread($fp, 10);
    fclose($fp);

    var_dump($someFile);
?>
