
<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Регистрация';
?>

<div style="
    width: 100%;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    padding: 30px 20px 60px;
">

    <div style="
        width: 100%;
        max-width: 460px;
        box-sizing: border-box;
        padding: 32px 30px;
        background: #FFFEFC;
        border: 1px solid #E7DED4;
        border-radius: 13px;
    ">

        <?= Html::a('← На главную', ['/site/index'], [
            'style' => '
                display: inline-block;
                margin-bottom: 25px;
                color: #806653;
                font-size: 13px;
                text-decoration: none;
            '
        ]) ?>

        <div style="
            margin-bottom: 10px;
            color: #806653;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        ">
            ДОБРО ПОЖАЛОВАТЬ
        </div>

        <h1 style="
            margin: 0 0 22px;
            color: #29291F;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 27px;
            font-weight: 600;
            line-height: 1.3;
        ">
            Твоя полка начинается здесь
        </h1>

        <div style="
            display: flex;
            gap: 22px;
            align-items: center;
            border-bottom: 1px solid #E7DED4;
            margin-bottom: 22px;
        ">

            <?= Html::a('Вход', ['/site/login'], [
                'style' => '
                    display: inline-block;
                    padding: 10px 0;
                    color: #806653;
                    font-size: 13px;
                    text-decoration: none;
                '
            ]) ?>

            <span style="
                display: inline-block;
                padding: 10px 12px;
                color: #29291F;
                font-size: 13px;
                font-weight: 600;
                border-bottom: 2px solid #806653;
                margin-bottom: -1px;
            ">
                Регистрация
            </span>

        </div>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

        <p style="
            margin: 18px 0 0;
            color: #93877E;
            font-size: 12px;
            line-height: 1.6;
        ">
            Создай аккаунт, чтобы сохранять любимые книги,
            отзывы и заметки.
        </p>

    </div>
</div>
