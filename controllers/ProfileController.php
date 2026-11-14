<?php

namespace app\controllers;

use Yii;

class ProfileController extends \yii\web\Controller
{
    public function beforeAction($action)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['/registration']);
        }
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionFavorite()
    {
        return $this->render('favorite');
    }

    public function actionNotes()
    {
        return $this->render('notes');
    }
}
