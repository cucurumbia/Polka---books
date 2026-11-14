<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-layout editor-layout">

    <?php $form = ActiveForm::begin(); ?>

    <div class="field">

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="field">
    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?></div>
    <div class="field">
    <?= $form->field($model, 'publication_year')->textInput() ?></div>
    <div class="field">
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?></div>
    <div class="field">
    <?= $form->field($model, 'cover_url')->textInput(['maxlength' => true]) ?></div>
    <div class="field">
    <?= $form->field($model, 'created_at')->textInput(['maxlength' => true]) ?></div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>