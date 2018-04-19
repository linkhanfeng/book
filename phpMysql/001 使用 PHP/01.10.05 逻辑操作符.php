<pre>
  && 与    都是 true 时结果为真, 其他假
  ||  或    任意一个为 true 结果为真, 其他假
  !   非    取反
  and 优先级比 && 低
  or  优先级比 || 低
  xor 两者不相同为真, 两者相同为假
</pre>
<?php
    // 真
    var_dump( 0 xor 1 );
    var_dump( 1 xor 0 );

    // 假
    var_dump( 1 xor 1 );
    var_dump( 0 xor 0 );
?>
