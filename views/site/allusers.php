<?php

use app\models\User;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

$dataProvider = new ActiveDataProvider([
    'query' => User::find()->orderBy('id DESC'),
    'pagination' => [
        'pageSize' => 4,
    ],
]);

echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_list',
]);