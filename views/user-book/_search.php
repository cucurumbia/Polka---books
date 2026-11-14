<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserBookSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-book-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_user_book') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'id_book') ?>

    <?= $form->field($model, 'id_status') ?>

    <?= $form->field($model, 'added_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
