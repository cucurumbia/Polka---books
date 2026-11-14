<?php

namespace app\controllers;

use app\models\Book;

class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $books = Book::find()->all();
        return $this->render('index', ['books' => $books]);
    }

}
