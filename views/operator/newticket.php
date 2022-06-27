<?php 
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>

<div class="container">
    <h3>Создание заявки</h3>
    <div class="form-container">
        <?php $form = ActiveForm::begin(['layout'=>'horizontal']) ?>
        <div id="col-update">
        <div class="column1">    
            <?= $form->field($model, 'last_name', ['template' => '<div class = "row-form">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
            <?= $form->field($model, 'name', ['template' => '<div class = "row-form">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
            <?= $form->field($model, 'middle_name', ['template' => '<div class = "row-form">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
            <?= $form->field($model, 'street', ['template' => '<div class = "row-form">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
            <?= $form->field($model, 'building', ['template' => '<div class = "row-form">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
            
        </div>
        <div class="column2">
            <?= $form->field($model, 'entrance', ['template' => '<div class = "row-form">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
            <?= $form->field($model, 'floor', ['template' => '<div class = "row-form">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
            <?= $form->field($model, 'apartament', ['template' => '<div class = "row-form">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
            <?= $form->field($model, 'contact_phone', ['template' => '<div class = "row-form">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
            <?= $form->field($model, 'comment', ['template' => '<div class = "row-form">{label}</div><div class ="row-inp">{input}</div>{error}']) -> textarea(['rows'=>2]) ?>
        </div>
        </div>
            
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
            <input type="reset" class="btn btn-secondary btn-save" value="Очистить">
            </div>
     </div> 
<?php ActiveForm::end() ?>
</div>
