<!doctype html>
<html lang="en">
<?php
$title = 'Добавить задачу';
include $_SERVER['DOCUMENT_ROOT']."/resources/views/includes/head.php"?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/resources/views/includes/header.php"?>

<div class="container">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Добавить задачу</h1>

    </div>
</div>

<div class="container">
    <form action="/task/store" method="POST">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="mb-3">
                    <label for="email" class="form-label">Логин</label>
                    <input type="email" class="form-control" id="email" name="email">

                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Имя пользователя</label>
                    <input type="text" class="form-control" id="name" name="author">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Имя пользователя</label>
                    <textarea name="title" id="title" cols="30" rows="5" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </div>

    </form>
</div>
</body>
</html>