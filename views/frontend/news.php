<?php 
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>
<div class="container">
    <?php  foreach ($news as $post): ?>
    <div class="posts">
        <div class="post-head">
            <h3 class="post-title"><?= $post -> title ?></h3>
            <img id="news-img" src="image/posts/<?= $post -> img ?>">
        </div>    
        <div class="post-text">
            <p><?= $post -> text ?></p>
        </div>
    </div>
    <hr>
        <?php endforeach ?>
</div>