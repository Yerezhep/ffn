<!doctype html>
<html lang="en">
<?php
$title = 'Редактировать задачу';
include $_SERVER['DOCUMENT_ROOT']."/resources/views/includes/head.php"?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/resources/views/includes/header.php"?>

<div class="container">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Редактировить задачу</h1>
    </div>
</div>

<div class="container">
    <form action="/task/update?id=<?=$task['id']?>" method="POST">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="mb-3">
                    <label for="email" class="form-label">Логин</label>
                    <input type="email" class="form-control" id="email" name="email" value=" <?=$task['email']?>">

                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Имя пользователя</label>
                    <input type="text" class="form-control" id="name" name="author" value="<?=$task['author']?>">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Имя пользователя</label>
                    <textarea name="title" id="title" cols="30" rows="5" class="form-control"><?=$task['title']?></textarea>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="status" name="status" value="1" <?=$task['status']==1?'checked':''?>>
                    <label class="form-check-label" for="status" > Выполнено</label>
                </div>
                <button type="submit" class="btn btn-primary">Обновить</button>
            </div>
        </div>

    </form>
</div>
</body>
</html>