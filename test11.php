<?php
class str
{
    private static $methods = [
        'upper' => 'strtoupper',
        'len' => 'strlen',
        'uc' => 'ucwords'
    ];

    public static function __callstatic(string $method, array $paramet)
    {
        if (array_key_exists($method, self::$methods)) {
            return call_user_func_array(self::$methods[$method], $paramet);
        }
    }
}

echo str::len("hello") . "\n";
echo str::upper("amir") . "\n";
echo str::uc("amir hossein") . "\n";
