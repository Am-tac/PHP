<?php

class student
{
    private $name;
    private $age;

    public function __construct( $age , $name) {
        
        $this->name = $name;
        $this->age = $age; 
    }
    /*{
        $this->age = $age;
    }
    public function set_name($name)
    {
        $this->name = $name;
    }
*/

    public function get_age()
    {
        return $this->age;
    }
    public function get_name()
    {
        return $this->name;
    }
}
class amir extends student{}

$amir = new student("18" , "AmirHossein Nosrati" );
//$amir->get_age("AmirHossein Nosrati");
//$amir->get_age("18");

echo $amir->get_name();
echo ("\tage student\t") ;
echo $amir->get_age();
