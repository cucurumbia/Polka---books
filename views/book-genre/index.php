<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookGenreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Book Genres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-genre-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Book Genre', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_book_genre',
            'id_book',
            'id_genre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
