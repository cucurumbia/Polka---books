<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>


<section class="auth-wrap">
  <div class="auth-card">
    <a class="back-link" href="index.html">← На главную</a>
    <p class="eyebrow">ДОБРО ПОЖАЛОВАТЬ</p><h1>Твоя полка начинается здесь</h1>
    <div class="auth-tabs" role="tablist"><button class="active" data-auth-tab="login">Вход</button><button data-auth-tab="register">Регистрация</button></div>
    <form id="auth-form">
      <div class="field" id="auth-name-wrap" hidden><label for="auth-name">Имя</label><input id="auth-name" name="name" autocomplete="name" placeholder="Как к вам обращаться"></div>
      <div class="field"><label for="auth-email">Электронная почта</label><input id="auth-email" name="email" type="email" autocomplete="email" required placeholder="name@example.com"></div>
      <div class="field"><label for="auth-password">Пароль</label><input id="auth-password" name="password" type="password" minlength="4" required autocomplete="current-password" placeholder="Не менее 4 символов"></div>
      <button class="button button-full" type="submit" id="auth-submit">Войти</button><p class="form-hint">Демонстрационный режим: данные сохраняются только в этом браузере.</p><p id="auth-message" class="form-message" aria-live="polite"></p>
    </form>
  </div>
</section>

