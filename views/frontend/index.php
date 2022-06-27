<?php 
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>
<div class="main-container">
<div class="container">
<div class="head-info marg-lr">
    <div id="logo-prov">
        <img class="prov-img" src="image/internet.png" width="54" height="50">
        <div class="disp-line img-text"><b>ИНТЕРНЕТ</b></div>
    </div>
    <div id='logo-prov'>
        <img id="tv-img" src="image/tv.png" width="84" height="50">
        <div class="disp-line img-text"><b>ТЕЛЕВИДЕНИЕ</b></div>
    </div>
    <div id='logo-prov'>
        <img class="prov-img" src="image/telephon.png" alt="" width="54" height="50">
        <div class="disp-line img-text"><b>ТЕЛЕФОНИЯ</b></div>
    </div>
    
</div>
</div>
<div class="carousel-container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/content/tarif1.png" class="d-block w-100 carousel-height" alt="...">
                
            </div>
            <div class="carousel-item">
                <img src="image/content/tarif1.png" class="d-block w-100"  alt="...">
                
            </div>
            <div class="carousel-item">
                <img src="image/content/tarif1.png" class="d-block w-100" alt="...">
                
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Предыдущий</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Следующий</span>
        </a>
    </div>
</div>
<div class="container">
    <div class="popular-tarif">
        <img id="star-tarif" src="image/star.png">
        <div class="disp-line img-text"><b>ПОПУЛЯРНЫЕ ТАРИФЫ</b></div>
    </div>
</div>    
<div class="container space-row">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="image/content/internet.jpg" alt="Card image cap">
        <div class="card-body">
            <div class="card-text">
            <div class="tarif">    
                <p><b>Тарифный план</b></p>
                <p class="tarif-green"><b><?= $block1->tarif ?></b></p>
            </div>
            <div class="tarif">
                <p><b><?= $block1->option ?></b></p>
            </div>
            <div class="tarif">
                <p><b>Стоимость, месяц</b></p>
                <p class="tarif-green"><b><?= $block1->price ?></b></p>
            </div>
        </div>
    </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="image/content/tv.jpg" alt="Card image cap">
  <div class="card-body">
    <div class="card-text">
        <div class="tarif">    
            <p><b>Тарифный план</b></p>
            <p class="tarif-green"><b><?= $block2->tarif ?></b></p>
        </div>
        <div class="tarif">
            <p><b><?= $block2->option ?></b></p>
        </div>
        <div class="tarif">
            <p><b>Стоимость, месяц</b></p>
            <p class="tarif-green"><b><?= $block2->price ?></b></p>
        </div>
    </div>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="image/content/telephone.jpg" alt="Card image cap">
  <div class="card-body">
    <div class="card-text">
        <div class="tarif">    
            <p><b>Тарифный план</b></p>
            <p class="tarif-green"><b><?= $block3->tarif ?></b></p>
        </div>
        <div class="tarif">
            
            <p><b><?= $block3->option ?></b></p>
        </div>
        <div class="tarif">
            <p><b>Стоимость, месяц</b></p>
            <p class="tarif-green"><b><?= $block3->price ?></b></p>
        </div>
    </div>
  </div>
</div>
</div>

<div class="navbar navbar-dark bg-dark aling-center">
    <div class="inline-al">
        <img id="ticket-img" src="image/green-icon.png">
        <p class="text-white"><b>ОСТАВЬТЕ ЗАЯВКУ НА ПОДКЛЮЧЕНИЕ ИНТЕРНЕТА ПРЯМО СЕЙЧАС</b></p>
    </div>
    <div><a class="btn btn-success btn-modal" href="#zatemnenie" role="button">Заполнить заявку</a></div>
</div>
<!-- Подключение нового абонента -->
<div id="zatemnenie">
    <div id="okno">
        <a href="#" class="close"><img id="close-img" src="image/close.png" width="20" height="20"></a>
        <h2 class="modal-h">Заявка на подключение услуг</h2>
        <?php $form = ActiveForm::begin(['layout'=>'horizontal']) ?>
            <div id="modal-block">
                <div class="column1">    
                    <?= $form->field($model, 'last_name', ['template' => '<div class = "label-width">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
                    <?= $form->field($model, 'name', ['template' => '<div class = "label-width">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
                    <?= $form->field($model, 'middle_name', ['template' => '<div class = "label-width">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
                    <?= $form->field($model, 'street', ['template' => '<div class = "label-width">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
                    <?= $form->field($model, 'building', ['template' => '<div class = "label-width">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
                </div>
                <div class="column2">
                    <?= $form->field($model, 'entrance', ['template' => '<div class = "label-width">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
                    <?= $form->field($model, 'floor', ['template' => '<div class = "label-width">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
                    <?= $form->field($model, 'apartament', ['template' => '<div class = "label-width">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
                    <?= $form->field($model, 'contact_phone', ['template' => '<div class = "label-width">{label}</div><div class ="row-inp">{input}</div>{error}']) ?>
                    <?= $form->field($model, 'comment', ['template' => '<div class = "label-width">{label}</div><div class ="row-inp">{input}</div>{error}']) -> textarea(['rows'=>2]) ?>
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
<br><br>
</div>