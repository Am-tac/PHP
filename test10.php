<?php
class str
{
    private $string = " ";

    private $functions = [
        'length' => 'strlen',
        'upper' => 'strtoupper',
        'lower' => 'strtolower' ,
        'uc' => 'ucwords'
    ];

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function __call($method, $args)
    {
        if (in_array($method, array_keys($this->functions))) {
            array_unshift($args, $this->string);
            return call_user_func_array($this->functions[$method], $args);
        }
    }
}

$str = new str ("wEbsite.ir");

echo $str->uc() . "\n";
echo $str->length() . "\n" ;
echo $str->upper() . "\n";
echo $str->lower() . "\n";

