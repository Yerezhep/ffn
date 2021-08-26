<div class="container">
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <span class="fs-4">Task</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="/">Главная страница</a>
                <?php if ($_COOKIE['login']): ?>
                <a class="me-3 py-2 text-dark text-decoration-none" href="/admin">Кабинет  админа</a>
                    <form action="/logout" method="POST">
                        <button class="btn btn-link ">Выйти</button>
                    </form>
                <?php else: ?>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="/login">Войти</a>
                <?php endif; ?>


            </nav>
        </div>


    </header>
</div>