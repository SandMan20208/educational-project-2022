<?php 
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>
<div class="container">
    <h3>Предварительный просмотр</h3>
    <hr>
    <div class="posts">
        <div class="post-head">
            <H3><?= $model -> title ?></H3>
            <img src="image/posts/<?= $model -> img ?>">
        </div>    
        <div class="post-text">
            <p><?= $model -> text ?></p>
        </div>
    </div>
    <hr>
</div>