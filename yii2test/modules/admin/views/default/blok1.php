<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div class="row">
    <div class="col-md-3 border-right">


        <a href="<?=URL::to(['/admin/default/'] )?>" class="btn btn-success m-2">Соц сети</a><br>
        <a href="<?=URL::to(['/admin/default/blok1'] )?>" class="btn btn-success m-2">Блок1</a><br>
        <a href="<?=URL::to(['/admin/default/profile'] )?>" class="btn btn-success m-2">Профиль</a><br>
        <a href="<?=URL::to(['/admin/default/email'] )?>" class="btn btn-success m-2">adminEmail</a>






    </div>
    <div class="col-md-9">
        <?php if($blok1):?>
            <div class=""></div>

            <?php $form = ActiveForm::begin([]); ?>
            <?= $form->field($model, 'name')->textInput(['autofocus' => true ,'value' => $blok1['name']]) ?>
            <?= $form->field($model, 'text')->textInput(['autofocus' => true ,'value' => $blok1['text']]) ?>



            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
            <?php ActiveForm::end(); ?>
        <?php endif; ?>


    </div>



</div>



<?php //var_dump($social); ?>
