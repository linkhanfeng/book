<pre>
<h3>1. 检测和设置变量的 类型</h3>
<?php
    $a = 0;
    $c = 1;
    var_dump( gettype($a) );
    settype($a, 'float');
    var_dump( gettype($a) );

    // 其他特定测试函数 is_long, is_int, is_integer, is_bool 等
    var_dump( is_array($a) );
?>

<h3>2. 检测变量的 状态</h3>
<?php
    var_dump( isset($a) );
    var_dump( isset($b) );
    var_dump( isset($a, $b) );
    var_dump( empty($a) .'/'. empty($b) .'/'. (int)empty($c) );
?>

<h3>3. 转换变量的 类型</h3>
<?php
    $d = 'ff';
    var_dump( intval($d, 16) );
    var_dump( (string)$d );
?>