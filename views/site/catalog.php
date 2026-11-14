<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>


<section class="page-heading">
  <div>
    <p class="eyebrow">КОЛЛЕКЦИЯ</p>
    <h1>Моя библиотека</h1>
    <p>Книги, которые хочется читать, перечитывать и обсуждать.</p>
  </div><a class="button" href="suggest-book.html">＋ Предложить книгу</a>
</section>
<div class="catalog-tabs" role="tablist" aria-label="Фильтр по статусу"><button class="active" data-status="all">Все</button><button data-status="read">Прочитано</button><button data-status="reading">Читаю</button><button data-status="want">Хочу прочитать</button><button data-status="dropped">Брошено</button></div>
<form action="<?= \yii\helpers\Url::to(['/site/catalog']) ?>"
      method="get"
      class="filter-row"
      id="catalog-search-form">

    <label class="search-field">
        <span>⌕</span>

        <input
            type="text"
            id="catalog-search"
            name="q"
            value="<?= \yii\helpers\Html::encode($search ?? '') ?>"
            placeholder="Поиск по названию или автору"
            autocomplete="off"
        >
    </label>

    <label>
        <span class="sr-only">Жанр</span>
        <select id="genre-filter">
            <option value="">Все жанры</option>
        </select>
    </label>

    <label>
        <span class="sr-only">Сортировка</span>
        <select id="sort-filter">
            <option value="title">По названию</option>
            <option value="rating">По оценке</option>
            <option value="year">По году издания</option>
        </select>
    </label>

</form>
<p class="results-count" id="catalog-count"></p>
<p class="results-count">
    Найдено книг: <?= count($books) ?>
</p>

<div class="catalog-list" id="db-catalog-list">

    <?php
    $count = 0;
    $covers = ['cover-warm', 'cover-light', 'cover-dark'];
    ?>

    <?php foreach ($books as $book): ?>

        <?php
        $cover = $covers[$count % count($covers)];
        $count++;
        ?>

        <article class="catalog-row">

            <a href="<?= Url::to(['book/view?id=']).(int)$book->id ?>"
               class="mini-cover <?= $cover ?>"
               aria-label="Открыть <?= \yii\helpers\Html::encode($book->title) ?>">

                <span>
                    <?= \yii\helpers\Html::encode($book->title) ?>
                </span>

            </a>

            <div>
                <h3>
                    <a href="<?= Url::to(['book/view?id=']).(int)$book->id ?>">
                        <?= \yii\helpers\Html::encode($book->title) ?>
                    </a>
                </h3>

                <p>
                    <?= \yii\helpers\Html::encode($book->author) ?>
                    ·
                    <?= \yii\helpers\Html::encode($book->publication_year) ?>
                </p>
            </div>
            <span class="status-pill ">
          <? if ($book->status == 0) {
            echo "Прочитано";
          } else if ($book->status == 1) {
            echo "Хочу прочитать";
          } else {
            echo "Брошено";
          } ?></span>
        </article>

    <?php endforeach; ?>

    <?php if (count($books) === 0): ?>

        <p class="empty-state">
            По вашему запросу книги не найдены.
        </p>

    <?php endif; ?>

</div>

<?php

$this->registerJs(<<<JS

(function () {
    const form = document.getElementById('catalog-search-form');
    const input = document.getElementById('db-catalog-search-input');

    if (!form || !input) {
        return;
    }

    let timer;

    input.addEventListener('input', function () {
        clearTimeout(timer);

        timer = setTimeout(function () {
            form.submit();
        }, 400);
    });
})();

JS
);
?>



  








  <!-- <article class="catalog-row"><a href="book.html?id=2" class="mini-cover cover-warm" aria-label="Открыть Двор шипов и роз"><span>Девушка с татуировкой дракона</span></a>
          <div>
            <h3><a href="book.html?id=2">Девушка с татуировкой дракона</a></h3>
            <p>Стиг Ларссон · 2005</p><spa1n class="status-pill ">Прочитано</span>
          </div><span class="rating">★ 4.7</span>
        </article>

        <article class="catalog-row"><a href="book.html?id=2" class="mini-cover cover-warm" aria-label="Открыть Двор шипов и роз"><span>Мастер и Маргарита</span></a>
          <div>
            <h3><a href="book.html?id=2">Мастер и маргарита</a></h3>
            <p>Михаил Булгаков · 1967</p><span class="status-pill ">Прочитано</span>
          </div><span class="rating">★ 4.9</span>
        </article>

        <article class="catalog-row"><a href="book.html?id=2" class="mini-cover cover-warm" aria-label="Открыть Двор шипов и роз"><span>Четвёртое крыло</span></a>
          <div>
            <h3><a href="book.html?id=2">Четвёртое крыло</a></h3>
            <p>Ребекка Яррос · 2023</p><span class="status-pill ">Прочитано</span>
          </div><span class="rating">★ 4.8</span>
        </article>
   -->
</div>