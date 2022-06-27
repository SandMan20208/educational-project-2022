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
<div class="main-container">
<header>
<nav class="navbar navbar-dark bg-dark">
<div class="container">	
	
    <div>
  		<ul class="nav nav-pills nav-fill">
		  	<li class="nav-item">
   				 <div class="nav-link head-style"><?= Html::a('Главная', ['frontend/index'], ['class' => 'head-style']) ?> </div>
 			</li>
						 
  			<li class="nav-item">
   				 <div class="nav-link"><?= Html::a('Новости', ['frontend/news'], ['class' => 'head-style']) ?></div>
  			</li>
        </ul>
	</div>
</div>
</nav>
</header>
<div class="container">	
    <div class="head-info">
       	    <div id='logo-prov'>
                <img id="logo" src="image/logo.png" alt="Логотип" width="54" height="50">
                <div id="prov-name"><b>Internet-Provider</b></div>
    	    </div>
            <div class="phone-block">
                <div>
                    <img src="image/phone.png" alt="" width="30" height="30">
                    Подключение 
                </div>
                <div>
                    8 (888)-888-888
                </div>
            </div>
            <div class="phone-block">
                <div id="support-phone">
                    <img src="image/support.png" alt="" width="30" height="30">
                    Тех. поддержка 
                </div>
                <div>
                    0 (000)-000-000
                </div>
            </div>
    </div>
    <hr>    
</div>
</div>
<?= $content ?>	
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>