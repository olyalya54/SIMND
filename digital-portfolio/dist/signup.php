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
    
    <title>Signup</title>
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
                
                
                <h1 class="page__title  page__title--center">Регистрация</h1>
                <div class="form__group  form__group--md page__title--center err">
                    <p><?=$errMsg?></p>
                </div>
                
                
                <form class="form  form--auth" action="signup.php" method="post">
                    <div class="form__group  form__group--md">
                        <input name = "login" value = "<?=$login?>" class="form__control" type="text" placeholder="Ваш логин">
                        <span class="form__line"></span>
                    </div>
                
                    <div class="form__group  form__group--md">
                        <input name = "mail" value = "<?=$email?>" class="form__control" type="email" placeholder="Ваш e-mail">
                        <span class="form__line"></span>
                    </div>
                
                    <div class="form__group  form__group--md">
                        <input name = "pass-first" class="form__control" type="password" placeholder="Пароль">
                        <span class="form__line"></span>
                    </div>
                
                    <div class="form__group  form__group--md">
                        <input name = "pass-second" class="form__control" type="password" placeholder="Подтвердите пароль">
                        <span class="form__line"></span>
                    </div>
                
                    <div class="form__footer  form__footer--center">
                        <div class="form__group  form__group--md">
                            <button type="submit" class="btn  btn--blue  btn--rounded  btn--sm" name="button-reg">Регистрация</button>
                        </div>
                
                        <ul class="form__footer-list">
                            <li>
                                <a href="signin.php">войти</a>
                            </li>
                            <li>
                                <a href="reset.php">восстановить</a>
                            </li>
                        </ul>
                    </div>
                </form>
                
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
