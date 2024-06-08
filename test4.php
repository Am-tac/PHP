<?php 
abstract class Amir{
    abstract public function amir ();
}

class MY extends Amir{
    public function amir(){
        echo ucwords("my names aMIR") ;
    }
}

$amir = new MY ();
$amir->amir();
echo "\n";

interface Omid {
    public function omid();
}
interface ali {
    public function ali();
}
class name implements Omid,ali{
 public function omid(){
    echo ucwords("omid");
 }
 public function ali(){
    echo ucwords("\nali");
 }
}


$name = new name ();
$name->omid () ;
$name -> ali();
?>