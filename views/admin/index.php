<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

?>
<main class="main-content">

    <section class="page-heading">
        <div>
            <p class="eyebrow">АДМИНИСТРИРОВАНИЕ</p>
            <h1>Заявки читателей</h1>
            <p>Проверка предложенных книг и управление каталогом.</p>
        </div><a class="button" href="<?= Url::to(["book/create"]) ?>">＋ Добавить книгу</a>
    </section>
    <div class="admin-tabs"><span class="active">Все заявки</span><a href="catalog.">Каталог книг</a></div>
    <div class="table-wrap">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Книга</th>
                    <th>Автор</th>
                    <th>Дата</th>
                    <th>Статус</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody id="requests-table">



                <?php foreach ($books as $book) { ?>
                    <tr>
                        <td><strong><?= $book->title ?></strong></td>
                        <td><?= $book->author ?></td>
                        <td><?= $book->publication_year ?></td>
                        <td><span class="admin-status "><?= $book->status == 0 ? "На модерации" : "Одобрено" ?></span></td>
                        <td>
                            <div class="admin-actions"><button class="small-button" data-approve="1">Одобрить</button><button class="small-button reject" data-reject="1">Отклонить</button></div>
                        </td>
                    </tr>
                <? } ?>


                
                <!-- <tr>  
                    <td><strong>Пикник на обочине</strong></td>
                    <td>Аркадий и Борис Стругацкие</td>
                    <td>05.11.2026</td>
                    <td><span class="admin-status ">На модерации</span></td>
                    <td>
                        <div class="admin-actions"><button class="small-button" data-approve="1">Одобрить</button><button class="small-button reject" data-reject="1">Отклонить</button></div>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>

</main>