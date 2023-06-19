<header class="header">
    <div class="header__left">
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item">
                    <a class="nav__link" href="index.php">Главная</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link  has-subnav" href="#">Статьи</a>

                    <ul class="subnav">
                        <li>
                            <a class="subnav__link" href="post.php">Трудоустройство</a>
                        </li>
                        <li>
                            <a class="subnav__link" href="post1.php">Графические планшеты</a>
                        </li>
                        <li>
                            <a class="subnav__link" href="post2.php">Как не перегореть?</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <button class="burger" type="button" id="sidebarToggle">
            <span>Открыть навигацию</span>
        </button>
    </div>

    <div class="header__right">
        <nav class="nav">
            <ul class="nav__list">
                <?php if (isset($_SESSION['id'])): ?>
                    <a href="#">
                        <li class="nav__item">
                            <a class="nav__link" href="profile.php"><?php echo $_SESSION['login']; ?></a>
                        </li>
                    </a>
                    <ul>
                        <li class="nav__item">
                            <a class="nav__link" href="<?php echo BASE_URL . "logout.php"; ?>">Выход</a>
                        </li>
                    </ul>
                <?php else: ?>
                    <a href="signin.php">
                        <li class="nav__item">
                            <a class="nav__link" href="<?php echo BASE_URL . "signin.php"; ?>">Войти</a>
                        </li>
                    </a>
                    <li class="nav__item">
                        <a class="nav__link" href="signup.php">Регистрация</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>

        <form class="search" action="search.html" method="get">
            <input class="search__input" type="text" placeholder="Поиск">
        </form>
    </div>
</header>
