

<section class="hero">
  <div class="hero-copy"><p class="eyebrow">ТВОЯ ЛИЧНАЯ БИБЛИОТЕКА</p><h1>Книги — это путешествие,<br>которое всегда с тобой.</h1><p>Собирай прочитанное, сохраняй мысли и делись историями, которые остаются с тобой.</p><a class="button button-light" href="catalog.html">Открыть библиотеку <span>→</span></a></div>
  <h1>Привет, <?= Yii::$app->user->identity->username ?></h1>
  <div class="hero-art" role="img" aria-label="Книги на полке"><div class="hero-books"><i></i><i></i><i></i><i></i><i></i></div><span class="hero-quote">«Хорошая книга — это разговор, который продолжается»</span></div>
</section>
<section class="stats-grid" aria-label="Статистика библиотеки">
  <article class="stat-card"><span>♧</span><small>Всего книг</small><strong id="stat-total">24</strong></article>
  <article class="stat-card"><span>✓</span><small>Прочитано</small><strong id="stat-read">12</strong></article>
  <article class="stat-card"><span>⌛</span><small>В процессе</small><strong id="stat-progress">3</strong></article>
  <article class="stat-card"><span>♡</span><small>Хочу прочитать</small><strong id="stat-want">9</strong></article>
</section>
<section class="content-section">
  <div class="section-heading"><div><p class="eyebrow">ВАША КОЛЛЕКЦИЯ</p><h2>Недавно добавленные</h2></div><a class="text-link" href="catalog.html">Вся библиотека →</a></div>
  <div class="book-grid" id="home-books" aria-live="polite"></div>
</section>
<section class="content-section">
  <div class="section-heading"><div><p class="eyebrow">СООБЩЕСТВО</p><h2>Последние отзывы</h2></div><a class="text-link" href="catalog.html">Найти книгу →</a></div>
  <div class="review-grid" id="home-reviews"></div>
</section>

