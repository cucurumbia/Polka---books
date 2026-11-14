<?php

use yii\helpers\Url;
?>


        <section class="profile-header">
            <div class="avatar avatar-large" id="profile-avatar">I</div>
            <div class="profile-info">
                <p class="eyebrow">ЛИЧНЫЙ ПРОФИЛЬ</p>
                <h1 id="profile-name"> <?= Yii::$app->user->identity->username ?> </h1>
                <p id="profile-email"><?= Yii::$app->user->identity->email ?></p>
            </div>
            <div class="profile-counts">

                <div><strong id="profile-read-count">4</strong><small>прочитано</small></div>
                <div><strong id="profile-fav-count">1</strong><small>избранное</small></div>
                <div><strong id="profile-note-count">25</strong><small>заметки</small></div>
            </div>
        </section>
        <div class="profile-tabs">
            <a href="<?= Url::to(["profile/index"]) ?>" data-profile-tab="read" class="active">Прочитанные</a>
            <a href="<?= Url::to(["profile/favorite"]) ?>" data-profile-tab="fav">Избранное</a>
            <a href="<?= Url::to(["profile/notes"]) ?>" data-profile-tab="notes">Мои заметки</a>
        </div>