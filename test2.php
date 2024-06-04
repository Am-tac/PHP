<?php

class costum
{
    protected $faname;

    public function __construct($faname){
         $this->faname = $faname;
    }
}
class vip extends costum {
    public function get_formatted_name(){
        return ucwords($this->faname);
    }
}

$amir = new vip ("amir hosein nosrati");
echo $amir -> get_formatted_name();

echo "\n" ;

$amir =new vip ("ali\n") ; 
echo $amir ->get_formatted_name();

