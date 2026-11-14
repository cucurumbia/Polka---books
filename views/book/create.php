<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Book */

$this->title = 'Create Book';
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>









<section class="page-heading">
    <div>
        <p class="eyebrow">УПРАВЛЕНИЕ КАТАЛОГОМ</p>
        <h1 id="editor-heading">Добавить книгу</h1>
        <p>Заполните данные книги. Изменения появятся в каталоге.</p>
    </div>
</section>


<?= $this->render('_form', [
            'model' => $model,
        ]) ?>