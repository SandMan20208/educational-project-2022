<?php 
use yii\grid\GridView;
?>

<div id = "grid-container">
<h3>Пользователи</h3>
<?php
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' =>[
    	'last_name',
    	'name',
    	'middle_name',
    	'username',
    	'position',
    	['class' => 'yii\grid\ActionColumn', 'template' => '<div id="btn-update">{update}</div><div id="btn-delete">{delete}</div>']
    ]
]);
?>
</div>
