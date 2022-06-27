<?php 
use yii\grid\GridView;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>

<div id = "grid-container">
<h3>Принятые заявки</h3>
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
    	['class' => 'yii\grid\ActionColumn', 
		'template' => '<div class="act-col"><div id="btn-update">{update}</div><div id="btn-delete">{deltick}</div></div>',
			'buttons' =>[
				'deltick' => function ($url, $model, $key){
					return Html::a('<img src="image/delete-icon.png" alt="Удалить" width="20" height="20">',$url,[
					'data-confirm' => Yii::t('yii', 'Удалить выбранную заявку?'),
					'data-method' => 'post', 'data-pjax' => '0']);
				},
				'update' => function ($url, $model, $key){
					return Html::a('<img src="image/update-icon.png" alt="Редактировать" width="20" height="20">',$url);
				}
			]
		]
    ]
]);
?>
</div>
<img src="" alt="" width="" height="">