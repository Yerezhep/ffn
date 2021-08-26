<!doctype html>
<html lang="en">
<?php
$title = 'Страница админа';
include $_SERVER['DOCUMENT_ROOT']."/resources/views/includes/head.php"?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/resources/views/includes/header.php"?>

<div class="container">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Страница админа</h1>
        <p class="fs-5 text-muted">Список всех задач</p>
        <a href="/create" class="btn btn-primary">Добавить</a>
    </div>
</div>

<div class="container mt-4">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя пользователя</th>
            <th scope="col">Email</th>
            <th scope="col">Задачи</th>
            <th scope="col">Статус</th>
            <th>Редактировать</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tasks as $task):?>
        <tr>
            <th scope="row"><?=$num++?></th>
            <td><?=$task['author']?></td>
            <td><?=$task['email']?></td>
            <td><?=$task['title']?></td>
            <td><?= $task['status']==1?'<p class="text-success">Ныполнено</p>':'<p class="text-danger">Невыполнено</p>' ?></td>
            <td><a href="/task/edit?task=<?=$task['id']?>" class="btn btn-success">Редактировать</a></td>

        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
</body>
</html>