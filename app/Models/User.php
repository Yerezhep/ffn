<?php

namespace app\Models;
use app\Services\Builder;

class User extends Builder{

    public $table = 'users';
    static $instance;
    static public function getInstance()
    {
        if(is_null(self::$instance)){
            self::$instance = new self();

        }
        return self::$instance;
    }


}