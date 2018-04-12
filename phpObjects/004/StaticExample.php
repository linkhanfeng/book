<?php
// php -S localhost:7777
class StaticExample {
  static public $aNum = 0;
  static public function sayHi(){
    print 'Hi';
    self::$aNum++;
    print self::$aNum;
  }
}
echo StaticExample::$aNum;
StaticExample::sayHi();