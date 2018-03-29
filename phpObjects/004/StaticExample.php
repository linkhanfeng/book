<?php
// php -S localhost:7777
class StaticExample {
  static public $aNum = 0;
  static public function sayHi(){
    print 'Hi';
  }
}
echo StaticExample::$aNum;
StaticExample::sayHi();