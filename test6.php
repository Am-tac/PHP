<?php

trait Logger
{
    public function log($msg)
    {
        echo date(' y-m-d h:i:s ') . " : " . $msg . "\n";
    }
}
trait Notif {
    public function sms($phone , $msg) {
        echo $msg . "\n" ;
    }
    public function email($email , $msg) {
        echo $msg . "\n" ;
    }
}

class Post
{
    use Logger;

    public function create($title)
    {
        echo "create '$title' post \n";
        $this->log("one post was created");
    }
    public function deleted($title)
    {
        echo "deleted '$title' post \n";
        $this->log("one post was deleted");
    }
}

class User {
    use Logger , Notif ; 
    public function create($username){
        echo "craete '$username' user \n" ;
        $this->log("one user was created") ;
        $this->sms("09123456789" , "Welcome to WebsiteMe \n Your PASSWORDE in 123456 . \n");
        $this->email("email@emile.com" , "Welcom to WebsiteMe \n your PASSWORDE in 123456 . \n");
    }
}
$user = new User();
$user -> create("Amir hossein Nosrati") ;
echo"\n";
$post = new Post() ;
$post->create("This is a post");
