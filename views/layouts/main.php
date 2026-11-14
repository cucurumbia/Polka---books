<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\Url;

AppAsset::register($this);

$this->title = $this->title ?: '';
$this->registerLinkTag([
  'rel' => 'icon',
  'type' => 'image/svg+xml',
  'href' => Yii::getAlias('@web/assets/favicon.svg'),
]);

$initialRoute = $this->params['initialRoute'] ?? 'home';
$routeMap = [
  'home' => Url::to(['/site/index']),
  'admin_book_redactor' => Url::to(['/site/admin_book_redactor']),

];

?>
<?php $this->beginPage(); ?>
<!doctype html>
<html lang="<?= Html::encode(Yii::$app->language) ?>">

<head>
  <meta charset="<?= Html::encode(Yii::$app->charset) ?>">
  <title>Главная — Полка</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#fbfaf8">
  <meta name="description" content="Полка домашней библиотеки — учёт книг, отзывы и личные заметки.">
  <link rel="stylesheet" href="<?= Url::to("@web/css/style.css") ?>">
  <script defer src="js/data.js"></script>
  <script defer src="js/app.js"></script>
</head>








<body data-page="home">

  <aside class="sidebar">
    <a class="brand" href="<?= Url::to(["site/index"]) ?>"><span class="brand-icon">♧</span><span>Полка<small>домашней библиотеки</small></span></a>
    <nav aria-label="Основная навигация">
      <a href="<?= Url::to(["site/index"]) ?>" data-nav="home">⌂ <span>Главная</span></a>
      <a href="<?= Url::to(["site/catalog"]) ?>" data-nav="catalog">▤ <span>Моя библиотека</span></a>
      <a href="<?= Url::to(["site/index"]) ?>" data-nav="favorites">♡ <span>Избранное</span></a>
      <a href="<?= Url::to(["site/notes"]) ?>" data-nav="notes">▧ <span>Заметки</span></a>
      <a href="<?= Url::to(["profile/index"]) ?>" data-nav="profile">◉ <span>Профиль</span></a>
      <a href="<?= Url::to(["admin/index"]) ?>" data-nav="admin">⚙ <span>Администрирование</span></a>

      <?php if (Yii::$app->user->isGuest) { ?>
        <a href="<?= Url::to(["site/login"]) ?>"><span>Войти</span></a>
    </nav>
  <?php } else { ?>
    </nav>
    <a class="sidebar-user" href="<?= Url::to(["profile/index"]) ?>"><span class="avatar"><?= Yii::$app->user->identity->username[0] ?></span><span id="sidebar-user-name"><?= Yii::$app->user->identity->username ?></span></a>
  <?php } ?>





  </aside>
  <header class="mobile-header">
    <a class="brand" href="<?= Url::to(["site/index"]) ?>"><span class="brand-icon">♧</span><span>Полка</span></a>
    <button class="icon-button" id="menu-toggle" aria-label="Открыть меню" aria-expanded="false">☰</button>
  </header>

  <div class="site">

    <div class="topbar">
      <form class="global-search" action="<?= Url::to(["site/catalog"]) ?>" method="get"><label class="sr-only" for="global-search">Поиск по названию, автору, жанру</label><span>⌕</span><input id="global-search" name="q" placeholder="Поиск по названию, автору, жанру"></form>
      <?php
      if (!Yii::$app->user->isGuest) { ?>
        <div class="topbar-actions"><button class="icon-button" type="button" aria-label="Уведомления">♧</button><a class="avatar-link" href="<?= Url::to(['profile/index']) ?>"><span class="avatar"><?= Yii::$app->user->identity->username[0] ?></span></a></div>

      <?php } ?>
    </div>

    <main class="main-content">

      <?= $content ?>

    </main>

    <footer class="footer"><span>© 2026 «Полка домашней библиотеки»</span><span>Твои книги. Твои истории.</span></footer>
    <nav class="bottom-nav" aria-label="Мобильная навигация">
      <a href="index.html">⌂<small>Главная</small></a><a href="catalog.html">▤<small>Библиотека</small></a><a href="<?= Url::to(["profile/favorite"]) ?>">♡<small>Избранное</small></a><a href="<?= Url::to(["profile/index"]) ?>">◉<small>Профиль</small></a>
    </nav>

  </div>

</body>