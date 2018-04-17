<pre>
<h3>1. while</h3>
while ( condition ) expression;
通常用于 不知道所需要重复的次数时

<?php
    $num = 1;
    while ( $num < 5 ) {
      echo $num."\n";
      $num++;
    }
?>

<h3>2. for</h3>
for (初始化; 条件; 调整计数器) expression;

<?php
    for ($i=1; $i < 5; $i++) {
      echo $i."\n";
    }
?>

<h3>3. do...while</h3>
无论条件是否成立 都会执行一次循环体

<?php
    $j = 1000;
    do {
      echo $j."\n";
      $j++;
    } while ($j < 5);
?>
