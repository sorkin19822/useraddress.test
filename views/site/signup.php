<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <div>
        <h1><?= Html::encode($this->title) ?></h1>
        <p>Заполните поля для регистрации:</p>
    </div>

    <div class="row">
        <div class="center-block col-md-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <div class="row">
                <div class="col-md-6">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true])
                ->label('Логин')?>
                </div>
                <div class="col-md-6">
                <?= $form->field($model, 'email')
                ->label('Е-маил')?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <?= $form->field($model, 'f_name')
                    ->label('Имя')?>
                </div>
                <div class="col-md-6">
                <?= $form->field($model, 'l_name')
                    ->label('Фамилия')?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'gender')->dropDownList([0 => 'Нет', 1 => 'М', 2 => 'Ж'])
                        ->label('Пол')?>
                </div>
            </div>

                <?= $form->field($model, 'password')->passwordInput()
                    ->label('Пароль') ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
