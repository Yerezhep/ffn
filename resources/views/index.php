<!doctype html>
<html lang="en">
    <?php
    $title = 'Главная страница';
    include $_SERVER['DOCUMENT_ROOT']."/resources/views/includes/head.php"?>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT']."/resources/views/includes/header.php"?>

    <div class="container">
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal">Главная страница</h1>
            <p class="fs-5 text-muted">Список всех задач</p>
            <a href="/create" class="btn btn-primary">Добавить</a>
        </div>
    </div>

    <div class="container">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col" ><a href="?col=author&&sort=<?=$_GET['sort']=='ASC'?'DESC':'ASC'?>">Имя пользователя</a></th>
                <th scope="col"> <a href="?col=email&&sort=<?=$_GET['sort']=='ASC'?'DESC':'ASC'?>">Email</a></th>
                <th scope="col"><a href="?col=title&&sort=<?=$_GET['sort']=='ASC'?'DESC':'ASC'?>">Задачи</a></th>
                <th scope="col"><a href="?col=status&&sort=<?=$_GET['sort']=='ASC'?'DESC':'ASC'?>">Статус</a></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($tasks as $task): ?>
            <tr>
                <th scope="row"><?=$num++?></th>
                <td class="col1"><?=$task['author']?></td>
                <td><?=$task['email']?></td>
                <td><?=$task['title']?></td>
                <td><?= $task['status']==1?'<p class="text-success">выполнено</p>':'<p class="text-danger">Невыполнено</p>' ?></td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        <?php if($count>limit): ?>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php for ($i=1; $i<=$total_pages; $i++): ?>
                <li class="page-item"><a class="page-link" href="
                <?php
                    if(isset($_GET['sort'])){
                        echo "?col=$_GET[col]&&sort=$_GET[sort]&&page=$i";
                    }else
                        {
                          echo  "?page=$i";
                        }

                    ?>
                    "><?=$i?></a></li>
                <?php endfor; ?>

            </ul>
        </nav>
        <?php endif;?>
    </div>




</body>
</html>