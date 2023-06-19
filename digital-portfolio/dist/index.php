<?php
include 'path.php';
include 'users.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.min.css">

    <!-- Useful meta tags -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">

    <title>Home</title>
</head>
<body>
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
<div class="page" id="page">
    <!-- Header -->

    <!-- Sidebar -->

    <!-- Main -->
    <main class="main">
        <div class="container">

            <!-- Stories -->
            <div class="stories">
                <div class="stories__item" data-modal="story-modal">
                    <img class="stories__preview" src="assets/images/stories/stories-1.png" alt="">
                    <div class="stories__title">Fanta</div>
                    <time class="stories__date" datetime="2023-04-19 17:25">19.04.2023</time>
                </div>

                <div class="stories__item" data-modal="story-modal">
                    <img class="stories__preview" src="assets/images/stories/stories-2.png" alt="">
                    <div class="stories__title">Cappy</div>
                    <time class="stories__date" datetime="2022-09-12 17:25">12.09.2022</time>
                </div>

                <div class="stories__item" data-modal="story-modal">
                    <img class="stories__preview" src="assets/images/stories/stories-3.png" alt="">
                    <div class="stories__title">Actimel</div>
                    <time class="stories__date" datetime="2021-09-11 17:25">11.09.2021</time>
                </div>

                <div class="stories__item" data-modal="story-modal">
                    <img class="stories__preview" src="assets/images/stories/stories-4.png" alt="">
                    <div class="stories__title">Pepsi</div>
                    <time class="stories__date" datetime="2020-08-10 17:25">10.08.2020</time>
                </div>
            </div><!-- /.stories -->



            <!-- Add post -->
            <div class="add-post">
                <form class="add-post__form" action="/" method="post">
                    <textarea class="add-post__textarea" name="post-text" placeholder="Напишите что-нибудь" data-autoresize></textarea>

                    <div class="add-post__form-actions">
                        <label class="add-post__file" for="add-post-file">
                            <input type="file" id="add-post-file">
                        </label>
                        <button class="add-post__send" type="submit">
                            Отправить
                        </button>
                    </div>
                </form>
            </div>



            <div class="post">
                <div class="post__content">
                    <p class="post__description">Великолепный художник. Все его работы качественные. Желаю успехов и будущих побед!</p>
                </div>

                <div class="post__footer">
                    <ul class="post__data">
                        <li class="post__data-item">
                            <time datetime="2022-09-21 17:25">21.09.2022</time>
                        </li>
                    </ul>
                </div>
            </div><!-- /.post -->


            <article class="post">
                <div class="post__header  post__header--preview">
                    <a href="post.php">
                        <img class="post__preview" src="assets/images/post-2.jpg" alt="Трудоустройство?">
                    </a>
                </div>

                <div class="post__content">
                    <h2 class="post__title">
                        <a href="post.php">Трудоустройство</a>
                    </h2>
                    <p class="post__description">Как найти работу начинающему художнику? Вопрос, которым задаются многие.</p>
                </div>

                <div class="post__footer">
                    <ul class="post__data">
                        <li class="post__data-item">
                            <time datetime="2021-03-10 17:25">10.03.2021</time>
                        </li>
                        <li class="post__data-item">
                            <a href="#">работа</a>
                        </li>
                    </ul>

                    <a class="post__read" href="post.php">читать</a>
                </div>
            </article><!-- /.post -->



            <article class="post">
                <div class="post__header">
                    <div class="embed">
                        <iframe src="https://www.youtube.com/embed/z92H1DzfUa0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="post__content">
                    <h2 class="post__title">
                        <a href="post1.php">Графические планшеты</a>
                    </h2>
                </div>

                <div class="post__footer">
                    <ul class="post__data">
                        <li class="post__data-item">
                            <time datetime="2020-06-21 17:25">21.06.2020</time>
                        </li>
                        <li class="post__data-item">
                            <a href="#">девайсы</a>
                        </li>
                    </ul>

                    <a class="post__read" href="post1.php">читать</a>
                </div>
            </article><!-- /.post -->




            <article class="post">
                <div class="post__header  post__header--preview">
                    <a href="post.php">
                        <img class="post__preview" src="assets/images/post-3.jpg" alt="Как не перегореть?">
                    </a>
                </div>

                <div class="post__content">
                    <h2 class="post__title">
                        <a href="post2.php">Как не перегореть?</a>
                    </h2>
                    <p class="post__description">Одна из самых проблемных вещей в жизни каждого художника - перегорание. Я сам неоднократно сталкивался с этим и понял несколько важных советов, которые помогут не попасть в это состояние.</p>
                </div>

                <div class="post__footer">
                    <ul class="post__data">
                        <li class="post__data-item">
                            <time datetime="2021-03-20 17:25">20.03.2021</time>
                        </li>
                        <li class="post__data-item">
                            <a href="#">здоровье</a>
                        </li>
                    </ul>

                    <a class="post__read" href="post2.php">читать</a>
                </div>
            </article><!-- /.post -->


            <!-- Pagination -->
            <ul class="pagination">
                <li class="pagination__item">
                    <a class="pagination__link" href="#">&lt;</a>
                </li>
                <li class="pagination__item">
                    <a class="pagination__link" href="#">1</a>
                </li>
                <li class="pagination__item">
                    <a class="pagination__link  active" href="#">2</a>
                </li>
                <li class="pagination__item">
                    <a class="pagination__link" href="#">3</a>
                </li>
                <li class="pagination__item">
                    <a class="pagination__link" href="#">&gt;</a>
                </li>
            </ul



        </div>
    </main>
</div>


<div class="modal" id="story-modal">
    <div class="modal__content  modal__content--story">
        <video class="modal__video" src="" poster="https://placehold.it/420x580"></video>
    </div>
</div>
<div class="modal" id="contact-modal">
    <div class="modal__content  modal__content--contact">
        <button class="modal__close" type="button">
            <img src="assets/images/close.svg" alt="Закрыть">
        </button>

        <form class="form" action="/" method="post">
            <div class="form__group  form__group--md">
                <input class="form__control" type="text" placeholder="Ваше имя">
                <span class="form__line"></span>
            </div>

            <div class="form__group  form__group--md">
                <input class="form__control" type="email" placeholder="Ваш e-mail">
                <span class="form__line"></span>
            </div>

            <div class="form__group  form__group--md">
                <textarea class="form__control  form__control--textarea" placeholder="Текст сообщения"></textarea>
                <span class="form__line"></span>
            </div>

            <div class="form__footer">
                <div class="form__group  form__group--md">
                    <button class="btn  btn--blue  btn--rounded  btn--sm" type="submit">Отправить</button>
                </div>
            </div>
        </form>

        <ul class="modal__footer">
            <li>
                e-mail: <a href="mailto:kolya_minya@gmail.com">kolya_minya@gmail.com</a>
            </li>
            <li>
                тел: <a href="tel:+94624678911">+946-246-789-11</a>
            </li>
        </ul>
    </div><!-- /.modal__content -->
</div><!-- /.modal -->
<div class="modal">
    <div class="modal__content">
        <button class="modal__close" type="button">
            <img src="assets/images/close.svg" alt="Закрыть">
        </button>

        <ul class="social">
            <li class="social__item">
                <a class="social__link" href="#">
                    <img src="assets/images/share/facebook.svg" alt="">
                </a>
            </li>

            <li class="social__item">
                <a class="social__link" href="#">
                    <img src="assets/images/share/twitter.svg" alt="">
                </a>
            </li>

            <li class="social__item">
                <a class="social__link" href="#">
                    <img src="assets/images/share/vk.svg" alt="">
                </a>
            </li>

            <li class="social__item">
                <a class="social__link" href="#">
                    <img src="assets/images/share/copy.svg" alt="">
                </a>
            </li>
        </ul>

    </div><!-- /.modal__content -->
</div><!-- /.modal -->



<!-- JS -->
<script src="assets/js/app.js"></script>
</body>
</html>

