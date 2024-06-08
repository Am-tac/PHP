<?php 
interface data {
    public function conect($data);
}
class con1 implements data {
    public function conect($data){
        echo " conected to $data database in internet \n" ;
    }
}
class con2 implements data {
    public function conect($data){
        echo " conected to $data database in server \n" ;
    }
}
class con3 implements data {
    public function conect($data){
        echo " conected to $data database in ping \n" ;
    }
}
$con1 = new con1 () ;
$con1 -> conect("detabase-1 : " . ucwords("internet")) ;
$con2 = new con2 () ;
$con2 -> conect("detabase-2 : " . ucwords("server")) ;
$con3 = new con3 () ;
$con3 -> conect("detabase-3 : " . ucwords("ping")) ;