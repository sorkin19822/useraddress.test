<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Url;
?>

<div class="news-item">
    <h2><?= Html::encode($model->f_name) ?> <?= HtmlPurifier::process($model->l_name) ?></h2>
    <a href="<?= Url::to(['site/view', 'id' => $model->id]); ?>">Смотреть/редактировать</a><br>
    <a href="<?= Url::to(['post/users-index', 'id' => $model->id]); ?>">Адреса пользователя</a>
    <p>Зарегестрирован <?= Html::encode($model->created_at) ?> - пароль <b><?= Html::encode($model->pasw_nohash) ?></b></p>
</div>