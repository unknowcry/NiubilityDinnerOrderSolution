<?php
class debugManager{
    private $status;
    public function __construct(){
        if(!file_exists('./config/debug.ini')){
            file_put_contents('./config/debug.ini',"0");
            $this->status=0;
        }else{
            $this->status=file_get_contents('./config/debug.ini');
        }
    }
    public function switchDebug(){
        if($this->status==1){
            $this->debugOff();
        }else{
            $this->status=1;
            $this->debugOn();
        }
    }
    public function debugOn(){
        $this->status=1;
        file_put_contents('./config/debug.ini',"1");
    }
    public function debugOff(){
        $this->status=0;
        file_put_contents('./config/debug.ini',"0");
    }
    public function isDebugOn(){
        if($this->status==1){
            return true;
        }else{
            return false;
        }
    }
    public function debugPrintR($array){
        print("<br>");
        print_r($array);
        print("<br>");
    }
}


$debugManager = new debugManager();
$debugManager->debugOn();

