<?php 
use yii\grid\GridView;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>
<h3>Тарифные планы</h3>
<?php
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' =>[
    	'id',
		'tarif',
		'option',
    	'price',
		'block',
    	['class' => 'yii\grid\ActionColumn', 
				]
		]
    ]);
?>