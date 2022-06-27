<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

//echo $hi.' Я вывел текст';
?>

<?php if (Yii::$app->session->hasFlash('success') ): ?>
 <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><?php echo Yii::$app->session->getFlash('success'); ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php  endif; ?>

<?php if (Yii::$app->session->hasFlash('error') ): ?>
<div class="alert alert-danger" role="alert">
  <?php echo Yii::$app->session->getFlash('error'); ?>
</div>
<?php  endif; ?>

<?php $newTicket = ActiveForm::begin() ?>
<?= $newTicket -> field($newTicket, 'FIO'); ?>
<?= $newTicket -> field($newTicket, 'street'); ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>