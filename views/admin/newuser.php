<?php 
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>

<div class="container">
    <h3>Создание пользователя</h3>
    <div class="form-container">
            <?php $form = ActiveForm::begin(['layout'=>'horizontal']) ?>
            <?= $form->field($model, 'last_name') ?>
            <?= $form->field($model, 'name') ?>
            <?= $form->field($model, 'middle_name') ?>
            <?= $form->field($model, 'username') ?>
            <?= $form->field($model, 'password') ?>
            <?= $form->field($model, 'position')->radioList([ 'operator' => 'Оператор', 'admin' => 'Администратор', 'content-manager' => 'Контент-менеджер']) ?>
                        
            <?php if (Yii::$app->session->hasFlash('success') ): ?>
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong><?php echo Yii::$app->session->getFlash('success'); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php  endif; ?>
            <div class="btn-container">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary btn-save', ]) ?>
            </div>
     </div> 
<?php ActiveForm::end() ?>
</div>