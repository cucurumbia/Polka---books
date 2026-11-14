<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UserBook */

$this->title = $model->id_user_book;
$this->params['breadcrumbs'][] = ['label' => 'User Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-book-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_user_book' => $model->id_user_book], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_user_book' => $model->id_user_book], [
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
            'id_user_book',
            'id_user',
            'id_book',
            'id_status',
            'added_at',
        ],
    ]) ?>

</div>
