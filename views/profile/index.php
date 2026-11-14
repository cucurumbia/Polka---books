<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
    <?php echo $this->render('_header.php'); ?>  
    <section id="profile-content" class="profile-content">
      <div class="book-grid">
        <article class="book-card"><a href="book.html?id=1" class="book-cover cover-dark"><span>Четвёртое крыло</span></a><a class="book-title" href="book.html?id=1">Четвёртое крыло</a>
          <p class="book-author">Ребекка Яррос</p>
          <div class="rating">★ 4.8</div>
        </article>
        <article class="book-card"><a href="book.html?id=2" class="book-cover cover-warm"><span>Двор шипов и роз</span></a><a class="book-title" href="book.html?id=2">Двор шипов и роз</a>
          <p class="book-author">Сара Дж. Маас</p>
          <div class="rating">★ 4.5</div>
        </article>
        <article class="book-card"><a href="book.html?id=5" class="book-cover cover-dark"><span>Девушка с татуировкой дракона</span></a><a class="book-title" href="book.html?id=5">Девушка с татуировкой дракона</a>
          <p class="book-author">Стиг Ларссон</p>
          <div class="rating">★ 4.7</div>
        </article>
        <article class="book-card"><a href="book.html?id=7" class="book-cover cover-warm"><span>Мастер и Маргарита</span></a><a class="book-title" href="book.html?id=7">Мастер и Маргарита</a>
          <p class="book-author">Михаил Булгаков</p>
          <div class="rating">★ 4.9</div>
        </article>
      </div>
    </section>
    <div class="profile-actions"><a class="button button-outline" href="notes.html">Все заметки</a><button class="button button-ghost" id="logout-btn" type="button">Выйти</button></div>

  </main>

  <footer class="footer"><span>© 2026 «Полка домашней библиотеки»</span><span>Твои книги. Твои истории.</span></footer>
  <nav class="bottom-nav" aria-label="Мобильная навигация">
    <a href="index.html">⌂<small>Главная</small></a><a href="catalog.html">▤<small>Библиотека</small></a><a href="<?= Url::to(["profile/favorite"]) ?>">♡<small>Избранное</small></a><a href="<?= Url::to(["profile/index"]) ?>">◉<small>Профиль</small></a>
  </nav>

</div>