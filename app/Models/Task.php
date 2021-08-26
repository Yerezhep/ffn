<?php

namespace App\Models;
use App\Services\Builder;

class Task extends Builder{

    public $table = 'tasks';
    static $instance;
    static public function getInstance()
    {
        if(is_null(self::$instance)){
            self::$instance = new self();

        }
        return self::$instance;
    }


}
