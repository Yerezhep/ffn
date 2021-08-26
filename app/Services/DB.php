<?php

namespace App\Services;

abstract class DB {

    public $connect;
    public function __construct()
    {
        $this->connect = mysqli_connect('localhost','root','root','ffn');
    }


    abstract public function get();
    abstract public function first();
    abstract public function assoc($data);
    abstract public function find($id);
    abstract public function where($key,$value);
    abstract public function create($request);
    abstract public function update($request,$id);
    abstract public function orderBy($col,$orderBy);
    abstract public function limit($limit,$offset);
    abstract public function numRows();
    abstract public function count();

}