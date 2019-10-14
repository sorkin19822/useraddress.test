<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['all-users']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Хотите удалить этого пользователя?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
             'label'=>'Логин',
             'attribute'=>'username'
            ],
            [
                'label'=>'Имя',
                'attribute'=>'f_name'
                ],
            [
                'label'=>'Фамилия',
                'attribute'=>'l_name'
            ],
            [
                'label'=>'Пол',
                'attribute' => 'gender',
                'format' => 'raw',
                'value' => function($data){
                    switch($data) {
                        case 0: return "НЕТ"; break;
                        case 1: return "М"; break;
                        case 2: return "Ж"; break;
                    }
                }

            ],
            [
                'label'=>'Почта',
                'attribute'=>'email'
            ],
        ],
    ]) ?>

</div>
