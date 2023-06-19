---
layout: default
title: Profile
---


<h1 class="page__title">Профиль</h1>

<form class="form" action="/" method="post">
    <div class="cabinet">
        <div class="cabinet__form">
            <div class="form__group  form__group--md">
                <input class="form__control" type="text" placeholder="Ваше имя" value="Николай Минеев">
                <span class="form__line"></span>
            </div>

            <div class="form__group  form__group--md">
                <input class="form__control" type="email" placeholder="Ваш e-mail" value="kolya_minya@gmail.com">
                <span class="form__line"></span>
            </div>

            <div class="form__group  form__group--md">
                <input class="form__control" type="password" placeholder="Новый пароль">
                <span class="form__line"></span>
            </div>

            <div class="form__group  form__group--md">
                <input class="form__control" type="password" placeholder="Подтвердите пароль">
                <span class="form__line"></span>
            </div>
        </div>

        <div class="cabinet__avatar">
            <img src="https://placehold.it/150" alt="">

            <label class="cabinet__file">
                <input type="file">
                выбрать  аватар
            </label>
        </div>
    </div>

    <div class="form__footer">
        <button class="btn  btn--blue  btn--rounded  btn--sm" type="submit">Сохранить</button>
    </div>
</form>
