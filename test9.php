<?php

class Bank 
{
    
    private $accont ;
    private $balance ;

    public function __construct($accont , $balance)
    {
        $this -> accont = $accont ;
        $this -> balance = $balance ;

    }

    public function __toString()
    {
        return " Bank Accont:  $this->accont "." Balance: $this->balance ";
    }

}

$accontname = new Bank ("123456789" , "100,000") ;

echo $accontname ;