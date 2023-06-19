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

    <div class="form__footer  form__footer--center">
        <div class="form__group  form__group--md">
            <button class="btn  btn--blue  btn--rounded  btn--sm" type="submit">Восстановить</button>
        </div>

        <ul class="form__footer-list">
            <li>
                <a href="signin.php">вход</a>
            </li>
            <li>
                <a href="signup.php">регистрация</a>
            </li>
        </ul>
    </div>
</form>
