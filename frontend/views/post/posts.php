<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = 'Posts';
?>


<?php
    if(!empty($posts)):
?>

    <?php foreach ($posts as $post): ?>
     <div class="panel panel-default">
         <div class="panel-heading">
             <h3 class="panel-title"><a href="<?= yii\helpers\Url::to(['/post/show', 'id' => $post->id])?>"><?=$post->title?></a> </h3>

         </div>
         <div class="panel-body">
             <?=$post->text?>
         </div>
     </div>
    <?php endforeach; ?>
    <?= \yii\widgets\LinkPager::widget(['pagination' => $pages]) ?>
<?php endif; ?>
    <div>
        <h2>Создать пост</h2>
    <br>
    </div>
<?php $formPost = ActiveForm::begin() ?>

<?= $formPost->field($form, 'title') ?>
<?= $formPost->field($form, 'text')->textInput(['maxlength' => '255'])->textarea(['rows' => 3])?>
<?= Html::submitButton('Добавить статью', ['class' => 'btn btn-success']) ?>

<?php ActiveForm::end() ?>



