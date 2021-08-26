<?php

namespace App\Controllers;

use App\Models\Task;
use App\Interfaces\EditInterface;


class AdminController extends Controller implements EditInterface
{


    public function index()
    {
        $num = 1;
        $tasks = Task::getInstance()->get();
        include $this->template.'admin/dashboard.php';
    }

    public function edit()
    {
        if(!isset($_GET['task'])){
            include '404.php';
            die();
        }
        $id = $_GET['task'];
        $task = Task::getInstance()->find($id);
        include $this->template.'admin/edit.php';

    }
    public function update()
    {
        $id = $_GET['id'];
        $task = new Task;
        $data = $_POST;
        if(!isset($data['status']))
        {
            $data['status']="0";
        }
        $task->update($data,$id);
        header("Location:/admin");
    }


}