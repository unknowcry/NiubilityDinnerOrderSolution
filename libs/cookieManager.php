<?php

class cookieManager{
    private $cookiePath;
    private $cookieTime;
    private $cookieName;
    private $cookieValue;
    public function __construct($cookieName,$cookieVal){
        $this->cookiePath='/';
        $this->cookieTime=time()+3600;
        $this->cookieName=$cookieName;
        $this->cookieValue=$cookieVal;
        setcookie($this->cookieName,$this->cookieValue,$this->cookieTime,$this->cookiePath);
    }
}