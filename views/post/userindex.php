<?php
// подключаем библиотеку
use yii\grid\GridView;

echo GridView::widget([
        // полученные данные
       'dataProvider' => $dataProvider,
       // Отображать 5 страниц
       'pager' => ['maxButtonCount' => 5],
      // колонки с данными 
      'columns' => [
           ['class' => 'yii\grid\SerialColumn'],
           [
               'label' =>"Индекс", // название столбца
               'attribute' => 'post_index', // атрибут
               'value'=>function($data){return $data->post_index;} // объявлена анонимная функция и получен результат
           ],
           [
            'label' => 'Страна',
            'attribute' => 'country_code',
               'value'=>function($data){return $data->country_code;} // объявлена анонимная функция и получен результат
            ],
            [
            'label' => 'Город',
            'attribute' => 'town',
            'value' => function($data) { return  $data->town; },
            ],
              [
            'label' => 'Улица',
            'attribute' => 'street',
            'value' => function($data) { return  $data->street; },
            ],
          [
              'label' => 'дом',
              'attribute' => 'num_build',
              'value' => function($data) { return  $data->num_build; },
          ],
          [
              'label' => 'Офис',
              'attribute' => 'num_office',
              'value' => function($data) { return  $data->num_office; },
          ],
           ['class' => 'yii\grid\ActionColumn'],
       ],
   ]); 