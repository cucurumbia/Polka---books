<?php

use yii\helpers\Html;
use yii\helpers\VarDumper;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Book */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<section class="book-page">
    <a class="back-link" href="catalog.html">← Назад к библиотеке</a>
    <div id="book-detail" class="book-detail">
        <div class="detail-cover cover-dark"><span><?= $model->title ?></span></div>
        <div class="detail-info">
            <p class="eyebrow">КНИГА НА ПОЛКЕ</p>
            <h1><?= $model->title ?></h1>
            <p class="muted"><?= $model->author ?> · <?= $model->publication_year ?></p>
            <div class="genre-tags">
                <?php

                foreach ($model->bookGenres as $genre) { ?>
                    <span class="genre-tag">

                        <?= $genre->genre->name ?>
                    </span>
                <?php } ?>
<!-- 
                <span class="genre-tag">Классика</span> -->
            </div>

            <p><?= $model->description ?></p>
            <div class="detail-actions"><button class="button" id="toggle-read">Отметить прочитанной</button><button class="button button-outline" id="toggle-fav">♡ В избранное</button><button class="button button-ghost" id="share-book">Поделиться</button><a class="button button-outline" href="review.html?id=6">Написать отзыв</a><a class="button button-ghost" href="admin-book-editor.html?id=6">Редактировать</a></div>
            <div class="shop-links"><a href="<?= $model->ozon ?>" target="_blank" rel="noopener noreferrer">Ozon ↗</a><a href="<?= $model->Wb ?>" target="_blank" rel="noopener noreferrer">Wildberries ↗</a></div>
        </div>
        <div class="detail-columns">
            <section class="form-card">
                <h2>Моя заметка</h2><label class="sr-only" for="book-note">Текст заметки</label><textarea class="note-input" id="book-note" placeholder="Сохраните мысль, цитату или вопрос…"></textarea><button class="button" id="save-book-note">Сохранить заметку</button>
            </section>
            <section class="form-card">
                <h2>Отзывы читателей</h2>
                <p class="muted">Отзывов пока нет.</p>
            </section>
        </div>
    </div>
</section>
<div class="book-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    VarDumper::dump($model, 10, true);


    ?>
</div>