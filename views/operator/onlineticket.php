<?php 
use yii\grid\GridView;
use yii\bootstrap4\ActiveForm;
?>

<div id = "grid-container">
<h3>Онлайн заявки</h3>
<?php $form = ActiveForm::begin(['layout'=>'horizontal']) ?>
<div class="search-line">
<?= $form->field($model, 'search', ['options' => ['class' => 'search-input'], 'template' => '{input}'])->input('search') ?>
<input class = "btn-search" type="submit" value="">
</div>
<?php ActiveForm::end() ?>
<?php
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' =>[
    	'last_name',
		'name',
		'middle_name',
    	'street',
    	'building',
    	'apartament',
    	'contact_phone',
		['attribute' => 'date','format' => ['date', 'php:d-m-y H:i']],
    	['class' => 'yii\grid\ActionColumn', 'template' => '<div id="btn-update">{update}</div><div id="btn-delete">{delete}</div>']
    ]
]);
?>
</div>