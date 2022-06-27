<?php
use app\assets\AppAsset; //импортируем пространство имен
use yii\helpers\Html;

?>
<?php AppAsset::register($this);//регистрируем переменную this ?>
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
<header>
<nav class="navbar navbar-dark bg-dark">
<div class="nav-line container">	
	<div>
	   	<a class="navbar-brand" href="#">
      	<img src="image/logo.png" alt="" width="34" height="28" class="d-inline-block align-text-top">
    	  Content-Manager
    	</a>
    </div>
    <div>
  		<ul class="nav nav-pills nav-fill">
		  	<li class="nav-item pad-left">
   				 <div class="nav-link head-style"><?= Html::a('Контент', ['content/news'], ['class' => 'head-style']) ?> </div>
 			</li>
  			<li class="nav-item">
   				 <div class="nav-link head-style"><?= Html::a('Новый пост', ['content/new-news'], ['class' => 'head-style']) ?> </div>
 			</li>
						 
  			<li class="nav-item">
   				 <div class="nav-link"><?= Html::a('Блоки тарифов', ['content/content'], ['class' => 'head-style']) ?></div>
  			</li>
            <li class="nav-item">
   				 <div class="nav-link"><?= Html::a('Новый тариф', ['content/new-content'], ['class' => 'head-style']) ?></div>
  			</li>
  			<li class="nav-item">
   				 <div class="nav-link"><?= Html::a('Выход', ['admin/loginout'], ['class' => 'head-style']) ?></div>
 	 		</li>
		</ul>
	</div>
</div>
</nav>
</header>
<div class="container">	
	<?= $content ?>
</div>	
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>