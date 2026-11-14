
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div>

    <?php $form = ActiveForm::begin([
        'options' => [
            'style' => 'width: 100%;',
        ],
    ]); ?>

    <?= $form->field($model, 'username', [
        'options' => [
            'style' => 'display: block; width: 100%; margin-bottom: 18px;',
        ],
        'template' => "{label}\n{input}\n{error}",
        'labelOptions' => [
            'style' => '
                display: block;
                margin-bottom: 8px;
                color: #29291F;
                font-size: 13px;
                font-weight: 600;
            ',
        ],
    ])->textInput([
        'maxlength' => true,
        'placeholder' => 'Придумай имя пользователя',
        'style' => '
            display: block;
            width: 100%;
            height: 43px;
            padding: 10px 12px;
            box-sizing: border-box;
            color: #29291F;
            background: #FFFEFC;
            border: 1px solid #DED5CA;
            border-radius: 7px;
            box-shadow: none;
            font-size: 13px;
        ',
    ])->label('Имя') ?>

    <?= $form->field($model, 'email', [
        'options' => [
            'style' => 'display: block; width: 100%; margin-bottom: 18px;',
        ],
        'template' => "{label}\n{input}\n{error}",
        'labelOptions' => [
            'style' => '
                display: block;
                margin-bottom: 8px;
                color: #29291F;
                font-size: 13px;
                font-weight: 600;
            ',
        ],
    ])->textInput([
        'maxlength' => true,
        'placeholder' => 'example@mail.com',
        'style' => '
            display: block;
            width: 100%;
            height: 43px;
            padding: 10px 12px;
            box-sizing: border-box;
            color: #29291F;
            background: #FFFEFC;
            border: 1px solid #DED5CA;
            border-radius: 7px;
            box-shadow: none;
            font-size: 13px;
        ',
    ])->label('Электронная почта') ?>

    <?= $form->field($model, 'password_hash', [
        'options' => [
            'style' => 'display: block; width: 100%; margin-bottom: 22px;',
        ],
        'template' => "{label}\n{input}\n{error}",
        'labelOptions' => [
            'style' => '
                display: block;
                margin-bottom: 8px;
                color: #29291F;
                font-size: 13px;
                font-weight: 600;
            ',
        ],
    ])->passwordInput([
        'maxlength' => true,
        'placeholder' => 'Не менее 4 символов',
        'style' => '
            display: block;
            width: 100%;
            height: 43px;
            padding: 10px 12px;
            box-sizing: border-box;
            color: #29291F;
            background: #FFFEFC;
            border: 1px solid #DED5CA;
            border-radius: 7px;
            box-shadow: none;
            font-size: 13px;
        ',
    ])->label('Пароль') ?>

    <div style="width: 100%;">

        <?= Html::submitButton('Зарегистрироваться', [
            'style' => '
                display: block;
                width: 100%;
                min-height: 44px;
                padding: 12px 18px;
                color: #FFFEFC;
                background: #29291F;
                border: none;
                border-radius: 7px;
                font-size: 13px;
                font-weight: 600;
                cursor: pointer;
            ',
        ]) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
