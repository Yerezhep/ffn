<?php
namespace App\Services;

class Builder extends DB{
    public $table;
    private $where;
    private $orderBy;
    private $limit;

    public function get()
    {
        return $result = mysqli_query($this->connect,"SELECT * FROM $this->table $this->where $this->orderBy $this->limit");
//        return mysqli_fetch_assoc($result);
    }
    public function first()
    {
        $result = mysqli_query($this->connect,"SELECT * FROM $this->table $this->where $this->orderBy");
        return mysqli_fetch_assoc($result);
    }
    public function assoc($data)
    {
        return mysqli_fetch_assoc($data);
    }

    public function find($id){
        $result = mysqli_query($this->connect,"SELECT * FROM $this->table WHERE id = '$id'");
        return $user = mysqli_fetch_assoc($result);
    }
    public function create($request)
    {

        $colums = '';
        $values = '';

        foreach ($request as $key => $value){
            $colums .= $key.',';
            $values .= "'$value'".',';

        }
        $colums = rtrim($colums, ',');
        $values = rtrim($values, ',');


        mysqli_query($this->connect, "INSERT INTO $this->table ($colums) VALUES ($values)");
    }
    public function update($request,$id)
    {
        $values = '';

        foreach ($request as $key => $value){
            $values .= "$key = '$value',";

        }

        $values = rtrim($values, ',');

        mysqli_query($this->connect, "UPDATE $this->table SET  $values WHERE id = $id");

    }
    public function where($key, $value){
        $this->where = "WHERE $key = '$value'";
        return $this;

    }
    public function orderBy($col, $orderBy)
    {
        $this->orderBy = "ORDER BY $this->table.`$col` $orderBy";
        return $this;
    }
    public function limit($limit, $offset)
    {
        $this->limit = "LIMIT $limit OFFSET $offset";
        return $this;
    }

    public function numRows()
    {
        $rows = $this->get();
        return mysqli_num_rows($rows);
    }
    public function count()
    {
        $result = mysqli_query($this->connect,"SELECT COUNT(*) FROM $this->table");
        return mysqli_fetch_row($result);
    }
}