<pre>
<h3>3.1 什么是数组</h3>
是用来存储一系类变量值的命名区域;

<h3>3.2 (索引数组) 数字索引数组</h3>
<?php
    // 1. 初始化
    $arr1 = array('a' , 'b');
    $arr2 = ['c', 'd'];
    $arr3 = range('a', 'c');
    var_dump($arr1, $arr2, $arr3);
    // 2. [] 访问数组
    echo "$arr1[0] $arr2[0]" . '<br>';
    // 3. 遍历: 使用 for 循环 或 foreach 循环
    for ($i=0; $i < count($arr1); $i++) {
    echo $arr1[$i]. '->';
    }
?>

<h3>3.3 (关联数组) 使用不同索引的数组</h3>
<hr>
<?php
    // 1. 初始化
    $arr4 = array('name' => 'han feng', 'age' => 18, 'sex' => 19 );
    // 2. 访问
    // 3. 遍历::: list() 或 each() 结构;
    // list() php 7 弃用此结构
    while ($element = each($arr4)) {
        var_dump($element);
        echo $element['key']. '->' .$element['value']. '<br>';
    }
    echo "<hr>";
    // each 和 list 结合使用
    reset($arr4); // 用过一次 each 之后 需要将指针复位
    while (list($key, $val) = each($arr4)) { // list($key, $val) 将 each 取出的当前元素数组的 第 0, 1两个元素赋值为 $key, $val 两个变量
        echo "$key => $val\n";
    }
?>

<h3>3.4 数组操作符</h3>
<?php
    // + 联合操作符
    $arr5 = [
        'a' => '111->',
        'b' => '222->',
    ];
    $arr6 = [
        'b' => 'bbb->',
        'c' => 'ccc->',
    ];
    var_dump($arr5 + $arr6);
    // 其他  == 等价, 恒等, 不等
?>

<h3>3.5 多维数组</h3>
<h3>3.6 数组排序</h3>
<?php
    $arr7 = ['file1.txt', 'flie10.txt', 'file2.txt'];
    sort($arr7);
    print_r($arr7);
    // print_r(sort($arr7, SORT_NATURAL));
?>
