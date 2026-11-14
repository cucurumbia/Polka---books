<?php

namespace app\controllers;

use app\models\BookGenre;
use app\models\BookGenreSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BookGenreController implements the CRUD actions for BookGenre model.
 */
class BookGenreController extends Controller
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
     * Lists all BookGenre models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BookGenreSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BookGenre model.
     * @param int $id_book_genre Id Book Genre
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_book_genre)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_book_genre),
        ]);
    }

    /**
     * Creates a new BookGenre model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BookGenre();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_book_genre' => $model->id_book_genre]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BookGenre model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_book_genre Id Book Genre
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_book_genre)
    {
        $model = $this->findModel($id_book_genre);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_book_genre' => $model->id_book_genre]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BookGenre model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_book_genre Id Book Genre
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_book_genre)
    {
        $this->findModel($id_book_genre)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BookGenre model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_book_genre Id Book Genre
     * @return BookGenre the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_book_genre)
    {
        if (($model = BookGenre::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
