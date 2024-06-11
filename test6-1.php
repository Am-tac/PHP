<?php
trait FileLog
{
    public function log($msg)
    {
        echo "File logger " . date('y-n-d h:i:s') . " : " . "$msg" . "\n" ;
    }
}
trait DataLog
{
    public function log($msg)
    {
        echo "Databace logger " . date('y-n-d h:i:s') . " : " . "$msg" . "\n" ;
    }
}

class Logger {
    use FileLog, DataLog {
        DataLog :: log as log_to_Data ;
        FileLog :: log insteadof DataLog ;
    }
}

$logger = new Logger ();
$logger->log("Test logger File #1 ") ;
$logger -> log_to_Data ("Test logger Data #1") ;