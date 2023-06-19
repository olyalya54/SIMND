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
    
    <title>Как не перегореть?</title>
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
                
                
                <article class="post">
                    <div class="post__actions">
                        <a href="index.php">вернуться назад</a>
                        <a href="#">
                            поделиться<img class="post__actions-icon" src="assets/images/share.svg" alt="поделиться">
                        </a>
                    </div>
                
                    <div class="post__header  post__header--open">
                        <h1 class="post__title  post__title--open">Как не перегореть?</h1>
                        <ul class="post__data">
                            <li class="post__data-item">
                                <time datetime="2021-03-10 17:25">10.03.2021</time>
                            </li>
                            <li class="post__data-item">
                                <a href="#">здоровье</a>
                            </li>
                        </ul>
                    </div>
                
                    <div class="post__content">
                        <div class="post__text">
                            <p>Вдохновение, эмоции, по 12 часов за компьютером в поисках идеального решения — если работаешь в креативной индустрии, тебе это хорошо знакомо. Обратная сторона — переутомление, апатия, желание просто лежать и чтобы тебя никто не трогал. Нет, это не лень. Психологи доказали, что такое состояние не просто усталость — это эмоциональное выгорание. Главное — вовремя заметить проблему. Как только вы начали чувствовать беспричинную усталость, снижение продуктивности или резкое нежелание что-либо делать, пора снизить обороты и прислушаться к себе.</p>
                
                            <p>
                                <img src="assets/images/post-3.jpg" alt="">
                            </p>
                
                        </div><!-- /.post__text -->
                
                        <div class="related">
                            <h3 class="post__subtitle">Это интересно</h3>
                
                            <ul class="related__list">
                                <li class="related__list-item">
                                    <h4 class="related__list-title">
                                        <a href="post1.php">Графические планшеты</a>
                                    </h4>
                                    <time class="related__list-date" datetime="2021-03-15 17:25">15.03.2021</time>
                                </li>
                                <li class="related__list-item">
                                    <h4 class="related__list-title">
                                        <a href="post.php">Трудоустройство</a>
                                    </h4>
                                    <time class="related__list-date" datetime="2021-03-20 19:21">20.03.2021</time>
                                </li>
                            </ul>
                        </div><!-- /.related -->
                
                
                        <h3 class="post__subtitle">Обсуждение</h3>
                
                        <form class="form" action="/" method="post">
                            <div class="form__group">
                                <textarea class="form__control  form__control--textarea" name="comment-text" placeholder="Текст комментария" data-autoresize></textarea>
                                <span class="form__line"></span>
                            </div>
                            <button class="btn  btn--blue  btn--rounded  btn--sm" type="submit">Отправить</button>
                        </form>
                
                        <ul class="comments">
                            <li class="comments__item">
                                <div class="comments__header">
                                    <img class="comments__avatar" src="assets/images/yura.png" alt="">
                
                                    <div class="comments__author">
                                        <div class="comments__name">Юрий Морозов</div>
                                        <time class="comments__pubdate" datetime="2020-12-21 19:21">1 неделю назад</time>
                                    </div>
                                </div>
                
                                <div class="comments__text">Отличный текст. Спасибо) </div>
                                <button class="comments__reply" type="button">ответить</button>
                
                                <ul class="comments">
                                    <li class="comments__item">
                                        <div class="comments__header">
                                            <img class="comments__avatar" src="assets/images/oleg.png" alt="">
                
                                            <div class="comments__author">
                                                <div class="comments__name">Олег Графов</div>
                                                <time class="comments__pubdate" datetime="2020-12-21 19:21">1 неделю назад</time>
                                            </div>
                                        </div>
                
                                        <div class="comments__text">Полностью с вами согласен!</div>
                                        <button class="comments__reply" type="button">ответить</button>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                
                    </div><!-- /.post__content -->
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
