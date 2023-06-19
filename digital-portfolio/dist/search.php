<?php
include "path.php";
include "users.php";
include "header.php";
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
    
    <title>Search</title>
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
                
                <h1 class="page__title">Результаты поиска “Работа”</h1>
                
                <article class="post">
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
                
                        <a class="post__read" href="post.php">перейти</a>
                    </div>
                </article><!-- /.post -->
                
                
                
                
                
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
