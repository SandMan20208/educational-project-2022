<?php 
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>

<div class="container">
    <div class="form-container">
    <h3>Редактирование поста</h3>
        <?php $form = ActiveForm::begin(['layout'=>'horizontal']) ?>
        
            <?= $form->field($model, 'title') ?>
            <?= $form->field($model, 'text')->textarea(['rows' => 15]) ?>
            <?= $form->field($model, 'img') ?>
            <?= $form->field($model, 'sort')?>
                                   
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