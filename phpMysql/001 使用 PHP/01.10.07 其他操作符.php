<pre>
  逗号操作符 "," 是用来分割函数参数和其他列表项的
  new 和 -> 用来初始化类的实例 和 访问类的成员.
<?php
?>
<h3>1. 三元操作符</h3>

  condition ? if true : if false

<h3>2. 错误抑制操作符</h3>
<?php
    $a = 5 / 0;
    @$b = 5 /0;
?>

<h3>3. 执行操作符</h3>
<?php
    $cmd = `dir`;
    var_dump( iconv('gbk', 'utf-8', $cmd) );
?>

<h3>4. 数组操作符</h3>
1. 数组联合操作符, 返回所有不同的键值对.
注意: 如果数组中有相同的键,则取左边的键值对
2. 其他 ===, !==, ==, !=,
3. 注意: 数组的比较是转换为 标量类型 后进行比较. (即: 将每个键值对的"值"进行比较)

<?php
    // 联合
    $c1 = ['1', '2'];
    $c2 = ['3', '4', '5'];
    $c3 = $c1 + $c2;

    $d1 = [
      'name' => 'feng',
      'sex' => '男',
    ];
    $d2 = [
      'sex' => '女',
      'hobby' => 'boll'
    ];
    $d3 = $d1 + $d2;
    var_dump($c3, $d3);
?>

<h3>5. 类型操作符</h3>
instanceof 操作符用来检测一个对象是否为一个类的实例;
<?php
    class SimpleObject {};
    class OtherObject {};
    $myObj = new SimpleObject();
    var_dump( $myObj instanceof SimpleObject ); // => true
    var_dump( $myObj instanceof OtherObject ); // => false
?>

