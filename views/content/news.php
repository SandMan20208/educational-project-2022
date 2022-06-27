<?php 
use yii\grid\GridView;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>
<h3>Контент</h3>
<?php
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' =>[
    	'id',
		'title',
		'text',
    	'img',
        'sort',
    	['class' => 'yii\grid\ActionColumn',
		'template' => '<div class="act-col"><div>{view-news}</div><div>{update-news}</div><div>{deletenews}</div></div>',
		'buttons' =>[
			'view-news' => function ($url, $model, $key){
				return Html::a('<img src="image/view.png" alt="Просмотр" width="20" height="20">',$url);
			},
			'deletenews' => function ($url, $model, $key){
				return Html::a('<img src="image/delete-icon.png" alt="Удалить" width="20" height="20">',$url,[
				'data-confirm' => Yii::t('yii', 'Удалить выбранный тарифный план?'),
				'data-method' => 'post', 'data-pjax' => '0']);
			},
			'update-news' => function ($url, $model, $key){
				return Html::a('<img src="image/update-icon.png" alt="Редактировать" width="20" height="20">',$url);
			}
			] 
		]
		]
    ]);
?>