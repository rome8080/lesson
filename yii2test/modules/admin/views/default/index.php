<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div class="row">
    <div class="col-md-3">


        <ul class="list-group" >
            <li class="list-group-item "> <button class="btn btn-success"  > Соц сети </button>
                <ul class="nav flex-column " >
                    <li class="nav-item ml-4 mt-1 "><a href="<?=URL::to(['/admin/default/', 'id' => 1])?>" class="text-white btn btn-primary ">WhatsApp </a></li>
                    <li class="nav-item ml-4 mt-1 "><a href="<?=URL::to(['/admin/default/', 'id' => 2])?>" class="text-white btn btn-primary ">Instagram</a></li>
                    <li class="nav-item ml-4 mt-1 "><a href="<?=URL::to(['/admin/default/', 'id' => 3])?>" class="text-white btn btn-primary ">ВКонтакте </a></li>
                </ul>
            </li>
        </ul>
        <a href="<?=URL::to(['/admin/default/blok1'] )?>" class="btn btn-success m-2">Блок1</a><br>
        <a href="<?=URL::to(['/admin/default/profile'] )?>" class="btn btn-success m-2">Профиль</a><br>
        <a href="<?=URL::to(['/admin/default/email'] )?>" class="btn btn-success m-2">adminEmail</a>




    </div>
    <div class="col-md-9">
        <?php if($social):?>
        <div class=""><?=$social['name']?></div>

            <?php $form = ActiveForm::begin([]); ?>
            <?= $form->field($model, 'url')->textInput(['autofocus' => true ,'value' => $social['url']]) ?>



            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
            <?php ActiveForm::end(); ?>
        <?php endif; ?>


    </div>



</div>



<?php //var_dump($social); ?>