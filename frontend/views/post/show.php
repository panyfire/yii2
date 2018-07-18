

<div class="panel panel-default postWithoutFormEdit">
         <div id="<?php print_r($id)?>" class="panel-heading">
             <h3 class="panel-title"><?=$post->title?></h3>
        </div>

        <div class="panel-body">
            <?=$post->text; ?>
        </div>
</div>
<?php if(!(\Yii::$app->user->isGuest) &&  (\Yii::$app->user->getId()) == 1) : ?>

    <a href="<?= yii\helpers\Url::to(['/post/posts'])?>" style="text-align: center;" ><button onclick="<?php $post->status_id = 1; $post->update(); ?>alert('Статья опубликована')">PUBLISH</button></a>
<?php endif; ?>

