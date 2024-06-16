<?php
class Hello
{
    public static function Welcome()
    {
        echo "Hello World !";
    }
    public static function get_name()
    {
        self::Welcome();
    }
}

class Hi
{
    public function Hi()
    {
        Hello::Welcome();
    }
}

class Salam extends Hello
{
    public $Helo_1 ;
    public function __construct()
    {
        $this->Helo_1 = parent :: Welcome();
        
    }

}
$salam = new Salam();
echo $salam -> Helo_1 ;
echo "\n";
Hello::Welcome();
echo "\n";
Hello::get_name();
echo "\n";
$hi = new Hi();
$hi->Hi();
