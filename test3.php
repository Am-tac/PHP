<?php
class amir
{
    public function greet()
    {
        return ucwords("hello");
    }
}

class ali extends amir
{
    public function greet()
    {
        $reza = parent::greet();
        return $reza . ucwords(" hi");
    }
}

$ali = new ali();
echo $ali->greet();
echo "\n";
$amir = new amir();
echo $amir->greet();
echo "\n";echo "\n";
echo "هنگام تعریف متد final تعریف";echo "\n";
#هنگام تعریف متد final تعریف
class robot
{
    public function amir()
    {
        return ucwords("helo");
    }
    final public function id()
    {
        return uniqid();
    }
}

class apple extends robot
{
    public function amir()
    {
        $hossein = parent::amir();
        return $hossein . ucwords("from apple");
    }
    public function a() //  استفاده شود با ارور مواجه میشویم id اگر از متد   
    {
        return uniqid("apple- ");
    }
}
$test = new apple();
echo $test->a();
echo "\n";
$test1 = new robot();
echo $test1->id();
echo "\n";echo "\n";
echo "constants تعریف";echo "\n";
#constants تعریف

class bmw {
    const ALI ="bwm x4";
    public function car() {
        echo "Car " . self::ALI . " Ali" ;
    }
}

echo bmw :: ALI ; echo "\n" ;
$car = new bmw ();
echo $car->car();
#یک ثابت تعریف میکند const
