<?php
$this->title = 'all post';
?>
<?php
if(!empty($posts)):
    ?>

    <?php foreach ($posts as $post): ?>
    <div  class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><a href="<?= yii\helpers\Url::to(['/post/show', 'id' => $post->id])?>"><?=$post->title?></a></h3>
        </div>
        <div class="panel-body">
            <?=$post->text?>
        </div>

    </div>

        <?php $id = \Yii::$app->user->getId();?>

<?php endforeach; ?>
    <?= \yii\widgets\LinkPager::widget(['pagination' => $pages]) ?>
<?php endif; ?>
