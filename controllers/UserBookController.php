<?php

namespace app\controllers;

use app\models\UserBook;
use app\models\UserBookSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserBookController implements the CRUD actions for UserBook model.
 */
class UserBookController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all UserBook models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserBookSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UserBook model.
     * @param int $id_user_book Id User Book
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_user_book)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_user_book),
        ]);
    }

    /**
     * Creates a new UserBook model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserBook();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_user_book' => $model->id_user_book]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UserBook model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_user_book Id User Book
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_user_book)
    {
        $model = $this->findModel($id_user_book);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_user_book' => $model->id_user_book]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UserBook model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_user_book Id User Book
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_user_book)
    {
        $this->findModel($id_user_book)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UserBook model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_user_book Id User Book
     * @return UserBook the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_user_book)
    {
        if (($model = UserBook::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
