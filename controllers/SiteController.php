<?php

namespace app\controllers;

use app\models\Book;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    // site/about
    public function actionAbout()
    {
        return $this->render('about');
    }
    // site/admin
    public function actionAdmin()
    {
        return $this->render('admin_book_redactor');
    }

    // site/catalog
    // site/catalog
public function actionCatalog()
{
    // Получаем поисковый запрос
    $search = trim(Yii::$app->request->get('q', ''));

    // Создаем запрос к таблице книг
    $query = Book::find();

    // Если введен текст, ищем по названию или автору
    if ($search !== '') {
        $query->andWhere([
            'or',
            ['like', 'title', $search],
            ['like', 'author', $search],
        ]);
    }

    // Получаем найденные книги
    $books = $query->all();

    // Передаем книги и поисковый запрос на страницу
    return $this->render('catalog', [
        'books' => $books,
        'search' => $search,
    ]);
}

     // site/notes
     public function actionNotes()
     {
         return $this->render('notes');
     }

     // site/profile
     public function actionProfile()
     {
         return $this->render('profile');
     }

   
}
