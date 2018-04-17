<?php
    // 用于测试代码. 没执行 n 行代码调用一次方法.
    declare(ticks=3);
    function tick_handler()
    {
        echo 'tick_handler 函数 called<br>' ;
    }
    register_tick_function('tick_handler');
    echo '2-----';
    echo '3-----';
    echo '4-----';
    echo '5-----';
    echo '6-----';
?>
