<?php
// __get magic method

class NameSchool
{
    private $students = [] ;

    private $class ;

    public function __construct($class)
    {
        $this->class = $class ;
    }

    public function __set($name , $age)
    {
        $this -> students[$name] = $age ;
    }
    
    public function __get($name)
    {
        if (array_key_exists($name , $this->students)){
            return $this->students[$name] ;
        }

        else {
            echo "ERORR 404" ;
        }
    }
    public function getclass($classname = '')
    {
        $amir = "<" . $this->class ;

        foreach ($this->students as $student =>$age ) {
            $amir .= ' ' . $student . '="' . $age . '"' ;
        }

        $amir .= ' >' ;
        $amir .= $classname ;
        $amir .="</" . $this ->class . ">" ;

        return $amir ;
    }


}


$div = new NameSchool('div');

$div->id="page" ;
$div->class="light" ;

$div -> name = ucwords("amir") ;

 echo $div->getclass() ;

 echo "\n" . $div-> name;

// var_dump($div) ;