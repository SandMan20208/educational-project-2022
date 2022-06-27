<?php
use yii\helpers\Html;
?>
<h3>Предварительный просмотр</h3>
<div class="container space-row">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="image/content/internet.jpg" alt="Card image cap">
        <div class="card-body">
            <div class="card-text">
            <div class="tarif">    
                <p><b>Тарифный план</b></p>
                <p class="tarif-green"><b><?= $model->tarif ?></b></p>
            </div>
            <div class="tarif">
                <p><b><?= $model->option ?></b></p>
            </div>
            <div class="tarif">
                <p><b>Стоимость, месяц</b></p>
                <p class="tarif-green"><b><?= $model->price ?></b></p>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container space-row">
<?= Html::a('Вернуться назад', ['content/content'], ['class' => 'btn btn-primary btn-286']) ?>
</div>