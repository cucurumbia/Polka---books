<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>


<section class="page-heading"><div><p class="eyebrow">УПРАВЛЕНИЕ КАТАЛОГОМ</p><h1 id="editor-heading">Добавить книгу</h1><p>Заполните данные книги. Изменения появятся в каталоге.</p></div></section>
<div class="form-layout editor-layout">
<form class="form-card" id="editor-form">
  <div class="field"><label for="edit-title">Название книги *</label><input id="edit-title" required></div>
  <div class="field"><label for="edit-author">Автор *</label><input id="edit-author" required></div>
  <div class="field-row"><div class="field"><label for="edit-year">Год издания</label><input id="edit-year" type="number" min="0" max="2100"></div><div class="field"><label for="edit-genres">Жанры</label><input id="edit-genres" placeholder="Фэнтези, Романтика"></div></div>
  <div class="field"><label for="edit-description">Описание</label><textarea id="edit-description" rows="5"></textarea></div>
  <div class="field"><label for="edit-cover">Обложка</label><select id="edit-cover"><option value="cover-dark">Тёмная обложка</option><option value="cover-warm">Тёплая обложка</option><option value="cover-light">Светлая обложка</option></select></div>
  <div class="field"><label for="edit-ozon">Ссылка на Ozon</label><input id="edit-ozon" type="url" placeholder="https://"></div>
  <div class="field"><label for="edit-litres">Ссылка на ЛитРес</label><input id="edit-litres" type="url" placeholder="https://"></div>
  <button class="button" type="submit">Сохранить книгу</button><p class="form-message" id="editor-message" aria-live="polite"></p>
</form>
<aside class="form-aside"><h2>Предпросмотр</h2><div id="editor-preview" class="book-cover cover-dark"><span>Полка</span></div></aside>
</div>

