<?php

namespace App\Controllers;

use App\Models\Task;


class HomeController extends Controller
{


    public function index()
    {

        $num = 1;

        //пагинация
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 3;
        $offset = $limit * ($page - 1);
        $count = Task::getInstance()->count();
        $total_pages = ceil($count[0] / $limit);
//        dd($total_pages);

        // для сортировки
        $sort = $_GET['sort'];
        $col = $_GET['col'];
        if(isset($col))
        {
            $tasks = Task::getInstance()->orderBy($col,$sort)->limit($limit,$offset)->get();

        }else{
            $tasks = Task::getInstance()->limit($limit,$offset)->get();
        }
        include $this->template.'index.php';
    }

    public function create()
    {
        include $this->template.'create.php';
    }
    public function store()
    {

        $task = new Task();
        $status = ['status' => 0];
        $data = array_merge($_POST,$status);
        $task->create($data);
        header('Location: /');
    }
    public function edit()
    {

    }
}