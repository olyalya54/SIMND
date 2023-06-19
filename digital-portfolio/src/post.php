---
layout: default
title: Трудоустройство
---


<article class="post">
    <div class="post__actions">
        <a href="index.php">вернуться назад</a>
        <a href="#">
            поделиться<img class="post__actions-icon" src="assets/images/share.svg" alt="поделиться">
        </a>
    </div>

    <div class="post__header  post__header--open">
        <h1 class="post__title  post__title--open">Трудоустройство</h1>
        <ul class="post__data">
            <li class="post__data-item">
                <time datetime="2021-03-10 17:25">10.03.2021</time>
            </li>
            <li class="post__data-item">
                <a href="#">работа</a>
            </li>
        </ul>
    </div>

    <div class="post__content">
        <div class="post__text">
            <p>Как найти работу начинающему художнику? Вопрос, которым задаются многие. У вас должно быть сформировано портфолио. Сколько точно нужно артов в портфолио — сказать невозможно. Если говорить о примерных цифрах, то в среднем арт-директору хватит семи ваших работ, чтобы понять ваш уровень. Можно больше, если вы уверены в каждой. Стоит понимать, что вас будут оценивать по самому слабому арту — это ваш гарантированный минимальный уровень.</p>

            <p>
                <img src="assets/images/image.jpg" alt="">
            </p>

        </div><!-- /.post__text -->

        <div class="related">
            <h3 class="post__subtitle">Это интересно</h3>

            <ul class="related__list">
                <li class="related__list-item">
                    <h4 class="related__list-title">
                        <a href="post1.html">Графические планшеты</a>
                    </h4>
                    <time class="related__list-date" datetime="2021-03-15 17:25">15.03.2021</time>
                </li>
                <li class="related__list-item">
                    <h4 class="related__list-title">
                        <a href="post2.html">Как не перегореть?</a>
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
