<?php
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
?>

<div class="log-cont">
     <div class="log-container">
        <?php $form = ActiveForm::begin(['layout'=>'horizontal','id' => 'login-form']) ?>
            <div class="logo-form">
                <img src="image/logo.png" width="54" height="48">
                <label class="label-logo">Support</label>
            </div>
            <?= $form->field($model, 'username') -> label(false, ['style'=>'display:none']) -> input('text', ['class' => 'log-in','placeholder'=>'Введите логин', 'template' =>'{input}{error}']) ?>
            <?= $form->field($model, 'password') -> label(false, ['style'=>'display:none']) -> input('password',['class' => 'log-in','placeholder'=>'Введите пароль', 'template' =>'{input}{error}']) ?>
            <div class="logo-form">
            <?= Html::submitButton('Вход', ['class' => 'btn btn-primary btn-enter', 'name' => 'login-button' ]) ?>
            </div>
            <?php if (Yii::$app->session->hasFlash('success') ): ?>
            <div class="message-container">
                <div class="alert alert-warning alert-dismissible fade show message-w" role="alert">
                <strong><?php echo Yii::$app->session->getFlash('success'); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            </div>
            <?php  endif; ?>
            <?php ActiveForm::end() ?>
           
    </div>
</div>
