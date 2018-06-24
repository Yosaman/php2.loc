<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 24.06.2018
 * Time: 19:31
 */

namespace App;


class Config
{
    
    public $data;

    protected static $instance;

    protected function __construct()
    {
        $this->data['db'] = [
            'host' => 'localhost',
            'dbname' => 'php2',
            'user' => 'root',
            'password' => ''
        ];
    }

    public static function instance()
    {
        if (self::$instance == null){
            self::$instance = new self;
        }
        return self::$instance;
    }

}