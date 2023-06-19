---
layout: default
title: Signup
---


<h1 class="page__title  page__title--center">Регистрация</h1>


<form class="form  form--auth" action="/" method="post">
    <div class="form__group  form__group--md">
        <input class="form__control" type="text" placeholder="Ваше имя">
        <span class="form__line"></span>
    </div>

    <div class="form__group  form__group--md">
        <input class="form__control" type="email" placeholder="Ваш e-mail">
        <span class="form__line"></span>
    </div>

    <div class="form__group  form__group--md">
        <input class="form__control" type="password" placeholder="Пароль">
        <span class="form__line"></span>
    </div>

    <div class="form__group  form__group--md">
        <input class="form__control" type="password" placeholder="Подтвердите пароль">
        <span class="form__line"></span>
    </div>

    <div class="form__footer  form__footer--center">
        <div class="form__group  form__group--md">
            <button class="btn  btn--blue  btn--rounded  btn--sm" type="submit">Регистрация</button>
        </div>

        <ul class="form__footer-list">
            <li>
                <a href="signin.php">войти</a>
            </li>
            <li>
                <a href="reset.html">восстановить</a>
            </li>
        </ul>
    </div>
</form>
