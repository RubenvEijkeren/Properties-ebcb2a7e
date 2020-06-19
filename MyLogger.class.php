<?php  
/**
 * 
 */
class MyLogger
{
    
    public function log($message, $level)
    {
        $this->logWithTime($level . ": " . $message);
    }
    public function warning($message)
    {
        $this->log($message, "WARNING");
    }
    public function error($message)
    {
        $this->log($message, "ERROR");
    }
    public function info($message)
    {
        $this->log($message, "INFO");
    }
    public function debug($message)
    {
        $this->log($message, "DEBUG");
    }
    private function logWithTime($message)
    {
        date_default_timezone_set('Europe/Amsterdam');
        echo Date("Y-m-d H:i:s") . " " . $message;
    }
}
$logger = new MyLogger();
$logger->error("dit is een error");
?>