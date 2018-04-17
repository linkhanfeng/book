<pre>
continue: 跳过本次循环
break: 结束循环
exit: 终止脚本
<?php
    for ($i=0; $i <= 5; $i++) {
      if($i === 2){
        continue;
      }
      elseif( $i === 4){
        break;
      }
      echo $i."\n";
    }

    exit('结束之后的脚本');
    echo 123;
?>
