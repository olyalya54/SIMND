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
    
    <title>Works</title>
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
                
                
                <h1 class="page__title">Мои работы</h1>
                
                
                <article class="work">
                    <div class="work__preview">
                        <picture>
                            <source srcset="https://placehold.it/575x150" media="(max-width: 575px)">
                            <img src="assets/images/works/work-1.jpg" alt="">
                        </picture>
                    </div>
                
                    <div class="work__content">
                        <h2 class="work__title">
                            <a href="#" target="_blank">Fanta</a>
                        </h2>
                
                        <div class="work__description">
                            <p>Создал такую рекламу летом 20-го года. </p>
                        </div>
                
                        <ul class="tags">
                            <li class="tags__item">дизайн</li>
                            <li class="tags__item">реклама</li>
                        </ul>
                
                        <div class="work__footer">
                            <a class="btn  btn--blue  btn--rounded  btn--sm" href="https://www.fanta.com/" target="_blank">Перейти на сайт</a>
                        </div>
                    </div>
                </article>
                
                <article class="work">
                    <div class="work__preview">
                        <picture>
                            <source srcset="https://placehold.it/575x150/333" media="(max-width: 575px)">
                            <img src="assets/images/works/work-2.jpg" alt="">
                        </picture>
                    </div>
                
                    <div class="work__content">
                        <h2 class="work__title">
                            <a href="#" target="_blank">Actimel</a>
                        </h2>
                
                        <div class="work__description">
                            <p>Компания, производящая мой любимый напиток заказала у меня его рекламу. По правде говоря, я был на седьмом небе от счастья!</p>
                        </div>
                
                        <ul class="tags">
                            <li class="tags__item">дизайн</li>
                            <li class="tags__item">реклама</li>
                        </ul>
                
                        <div class="work__footer">
                            <a class="btn  btn--blue  btn--rounded  btn--sm" href="https://actimel.ru/" target="_blank">Перейти на сайт</a>
                        </div>
                    </div>
                </article>
                
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
