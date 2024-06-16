<?php

use name as GlobalName;

class Web {
    
    public static $PI = 3.14 ;

    public static function get_Pi (){
        echo self::$PI . "\n" ;
    }
     
}
Web :: get_Pi();
echo web::$PI;

echo "\n" ;


class Name{
    protected static $name = "Ali" ;

    public static function getname(){
        return static :: $name ;
    }
}
class User extends Name{
    protected static $name = "Amir" ;
}

echo user::getname();


