<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BookGenre */

$this->title = $model->id_book_genre;
$this->params['breadcrumbs'][] = ['label' => 'Book Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="book-genre-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_book_genre' => $model->id_book_genre], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_book_genre' => $model->id_book_genre], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_book_genre',
            'id_book',
            'id_genre',
        ],
    ]) ?>

</div>
