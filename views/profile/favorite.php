<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php echo $this->render('_header.php'); ?>
<section id="profile-content" class="profile-content">
    <div class="book-grid">
        <article class="book-card"><a href="book.html?id=3" class="book-cover cover-light"><span>Грозовой перевал</span></a><a class="book-title" href="book.html?id=3">Грозовой перевал</a>
            <p class="book-author">Эмили Бронте</p>
            <div class="rating">★ 4.3</div>
        </article>
    </div>
</section>
<div class="profile-actions"><a class="button button-outline" href="notes.html">Все заметки</a>


    <?php echo Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline']).Html::submitButton(
            'Выйти',
            ['class' => 'button button-ghost']
        )
        . Html::endForm();

    ?>


</div>

</main>

<footer class="footer"><span>© 2026 «Полка домашней библиотеки»</span><span>Твои книги. Твои истории.</span></footer>
<nav class="bottom-nav" aria-label="Мобильная навигация">
    <a href="index.html">⌂<small>Главная</small></a><a href="catalog.html">▤<small>Библиотека</small></a><a href="<?= Url::to(["profile/favorite"]) ?>">♡<small>Избранное</small></a><a href="<?= Url::to(["profile/index"]) ?>">◉<small>Профиль</small></a>
</nav>

</div>