<?php
use app\assets\AppAsset; //импортируем пространство имен
use yii\helpers\Html;
use app\widgets\Alert;



AppAsset::register($this);//регистрируем переменную this

?>
<?php $this->beginPage() //метка начала страницы ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<?php $this->registerCsrfMetaTags() ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->head() ?>
	<title><?= Html::encode($this->title) ?></title>
	
</head>
<body>
	<?php $this->beginBody() ?>
	
	
			<?= $content ?>
	
	
	
	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>