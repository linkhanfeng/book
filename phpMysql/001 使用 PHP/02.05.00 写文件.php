<pre>
fwrite() / fputs()
file_put_contents() 不需要调用 fopen() 和 fclose() 函数; 与之匹配的是 file_get_contents()
</pre>

<h3>1. fwrite() 的参数</h3>
<pre>
  第三个参数, (int) 字符串长度; 当使用 二进制模式执行写操作的时候, 使用第三个参数可以避免一些跨平台的兼容性问题
  fwrite($fp, $writestring, strlen($writestring))
</pre>

<h3>2. 文件格式</h3>
<?php
    $writestring = date('Y-m-d H:i:s') ."\t". time() ."\n";
    $fp = fopen('../data/order.txt', 'ab');
    fwrite($fp, $writestring, strlen($writestring));
    fclose($fp);
?>

<h3>3. 关闭文件</h3>
<pre>
  fclose($fp);
</pre>
