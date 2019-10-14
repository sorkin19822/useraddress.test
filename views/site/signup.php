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

    <div >

            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
        <div class="row bs-example">
            <div class="center-block col-md-6">
                <div class="col-md-6">
                    <?= $form->field($userProfile, 'username')->textInput(['autofocus' => true])?>
                    </div>
                <div class="col-md-6">
                    <?= $form->field($userProfile, 'email')?>
                    </div>
                <div class="col-md-6">
                <?= $form->field($userProfile, 'f_name')?>
                </div>
                <div class="col-md-6">
                <?= $form->field($userProfile, 'l_name')?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($userProfile, 'gender')->dropDownList([0 => 'Нет', 1 => 'М', 2 => 'Ж'])?>
                </div>
                <div class="col-md-12">
                <?= $form->field($userProfile, 'password')->passwordInput()?>
                </div>
            </div>
            <div class="center-block col-md-6 row">
                <div class="col-md-6">
                    <?= $form->field($post, 'post_index')?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($post, 'country_code')?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($post, 'town')?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($post, 'street')?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($post, 'num_build')?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($post, 'num_office')?>
                </div>
            </div>
        </div>


                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
