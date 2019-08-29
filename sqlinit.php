<?php

require_once"./Medoo.php";

use Medoo\Medoo;

class sqlinit{
    private $database_type='mysql';
    private $database_name='database';
    private $server='127.0.0.1';
    private $username='root';
    private $passwd='passwd';
    private $charset='utf8';
    public function __construct(){
        return new Medoo([
            
        ]);
    }
}