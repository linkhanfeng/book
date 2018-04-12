<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>order Results</title>
  <style type="text/css">
    table td{
      border: 1px solid #ccc;
    }
  </style>
</head>
<body>
  <h1>汽车零售店</h1>
  <h2>订单结果</h2>
  <?php
    echo '<p>处理此订单的时间是：' . date('Y-m-d H:i:s') .'</p>';
    echo '订单内容：<br>';

    $tireqty = $_GET['tireqty'];
    $oilqty = $_GET['oilqty'];
    $sparkqty = $_REQUEST['sparkqty'];
    $findme = $_REQUEST['find'];

    $total_goods = $tireqty + $oilqty + $sparkqty;
    if($total_goods == 0){
      EE('没有购买任何商品');
    }
    else{
      EE('购买商品总数量：' . $total_goods);
    }

    // 折扣-购买数量
    if($total_goods < 10){
      $discount = 0;
    }
    else if( ($total_goods >= 10) && ($total_goods <= 49) ){
      $discount = 5;
    }
    else{
      $discount = 10;
    }
    // 折扣-调查推广效果
    if($findme != 0){
      $discount += 1;
    }

    // 调查推广效果
    switch ($findme) {
      case 'a':
        EE('通过朋友介绍');
        break;
      case 'b':
        EE('通过电视广告');
        break;
      case 'c':
        EE('通过网络广告');
        break;
      default:
        EE('没有参与调查活动，参与活动可打折奥。');
        break;
    }

    // 运费表
    echo "运费表：<table><tr><td>距离</td><td>价格</td></tr>";
    $distance = 50;
    while ( $distance <= 250) {
      echo '<tr><td>' . $distance . '</td><td>' . $distance / 10 . '</td></tr>';
      $distance += 50;
    }
    echo "<table>";

    echo $tireqty.' 个轮胎<br>' .
         $oilqty.' 升汽油<br>' .
         $sparkqty.' 个活塞<br>';

    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPARKPRICE', 5);

    $totalamount = $tireqty * TIREPRICE +
                   $oilqty * OILPRICE +
                   $sparkqty * SPARKPRICE;

    // 折扣
    $totalamount_zhekou = $totalamount * ( (100 - $discount) / 100);
    echo '总金额： $' . number_format($totalamount, 2) . '<br>';
    echo '折扣后总金额： $' . number_format($totalamount_zhekou, 2) . '<br>';

    $taxrate = 0.1;
    $total_amount_tax = $totalamount * (1 + $taxrate);
    echo '税后总金额： $' . $total_amount_tax;


    echo '<pre>';
    var_dump($_REQUEST);
    echo '</pre>';

    $totalqty = 0;
    $totalamount = 0.14;
  ?>
  <hr><hr>
  <h2>变量：</h2>
  <?php
    function EE($var)
    {
      echo $var . '<br>';
    }
    echo 'php是弱类型语言, 1. 可以不用声明变量类型。 2. 可以改变变量的类型。 3.可以改变变量的名称。';
    $varName = 'totalamount';
    echo '<br>例如：' . $$varName;
  ?>
  <h2>声明和使用常量：</h2>
  <?php
    define('OIL', 101);
    echo OIL;
    echo '<p>预定义常量:phpinfo();</p>';
  ?>
  <h2>变量作用域：</h2>
  <ol>
    <li>全局可见： 内置超全局变量</li>
    <li>全局可见： 常量</li>
    <li>全局可见： 在一个脚本声明的 全局变量</li>
    <li>函数内部可见： 函数内部创建的变量</li>
    <li>函数内部可见，并保持该值： 函数内部创建并声明的静态变量</li>
  </ol>
  <h2>操作符： 1元，2元，3元</h2>
  <pre>
    一元操作符 --- 一个运算对象或操作数 的操作符 eg: -1 负数操作符 取反操作符 !false
    二元操作符 --- 两个运算对象或操作数 的操作符 eg: $a = 1; 赋值操作符 $b = 6 + ($a = 5)
    三元操作符 --- 一个运算对象或操作数 的操作符 eg: true ? 1 : 0  ?:
  </pre>

  <h2>复合赋值操作符</h2>
  <pre>
    <?php
      $a = 4;
      echo $a++ . '<br>';
      echo $a. '<hr>';

      $b = 4;
      echo ++$b .'<br>';
      echo $b;
    ?>
  </pre>
  <h2>引用操作符</h2>
  <?php
    $a = 7;
    $b = $a;
    $c = &$a;
    echo $a,$b,$c;
    $a = 8;
    echo $a,$b,$c;
  ?>
  <h2>执行操作符</h2>
  <pre>
  <?php
    $shell = `dir c:`;
    echo $shell;
  ?>
  </pre>
  <h2>数组操作符 + == === ！= 等</h2>
  <?php
    $arr1 = [1];
    $arr2 = ['a','b'];
    print_r($arr1 + $arr2);
  ?>
  <h2>类型操作符 instanceof</h2>
  <h2>类型检测</h2>
  <?php
    $a = 56;
    EE( gettype($a) );
    settype($a, 'float');
    EE( gettype($a) );
  ?>
</body>
</html>
