<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

?>
<?php
/*
<form id="OpLog" action="web/index.php?r=operator%2Flogin" method="post">
<div class="site-login">
    <p>Please fill out the following fields to login:</p>

        <div class="log-container">
            <div class="logo-form">
                <img src="image/logo.png" width="54" height="48">
                <label>Support</label>
            </div>
            <input type="text" class="log-in" name="login" placeholder="Введите логин" >
            <input type="password" class="log-in" name="password" placeholder="Введите пароль">
            <input type="submit" class="btn btn-primary log-in" >

        </div>
</div>
</form>
*/
?>  
   <div class="log-cont">
     <div class="log-container">
         <?php $form = ActiveForm::begin(['layout'=>'horizontal','id' => 'login-form']) ?>
            <div class="logo-form">
                <img src="image/logo.png" width="54" height="48">
                <label class="label-logo">Support</label>
            </div>
            
            <?= $form->field($model, 'username') ->label('') -> input('text', ['class' => 'log-in','placeholder'=>'Введите логин']) ?>
            <?= $form->field($model, 'password')->label('')->input('password',['class' => 'log-in','placeholder'=>'Введите пароль']) ?>
            <?= Html::submitButton('Вход', ['class' => 'btn btn-primary btn-save btn-enter', 'name' => 'login-button' ]) ?>
           <?php ActiveForm::end() ?>
           
    </div>
     </div>
             