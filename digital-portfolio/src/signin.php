---
layout: default
title: Signin
---


<h1 class="page__title  page__title--center">Вход</h1>


<form class="form  form--auth" action="/" method="post">
    <div class="form__group  form__group--md">
        <input class="form__control" type="email" placeholder="Ваш e-mail">
        <span class="form__line"></span>
    </div>

    <div class="form__group  form__group--md">
        <input class="form__control" type="password" placeholder="Пароль">
        <span class="form__line"></span>
    </div>

    <div class="form__footer  form__footer--center">
        <div class="form__group  form__group--md">
            <button name="button-log" class="btn  btn--blue  btn--rounded  btn--sm" type="submit">Войти</button>
        </div>

        <ul class="form__footer-list">
            <li>
                <a href="signup.php">регистрация</a>
            </li>
            <li>
                <a href="reset.php">восстановить</a>
            </li>
        </ul>
    </div>
</form>
