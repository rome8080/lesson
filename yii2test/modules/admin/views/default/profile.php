<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
    <div class="row">
        <div class="col-md-3">
            <a href="<?=URL::to(['/admin/default/'] )?>" class="btn btn-success m-2">Соц сети</a><br>
            <a href="<?=URL::to(['/admin/default/blok1'] )?>" class="btn btn-success m-2">Блок1</a>
            <ul class="list-group" >
                <li class="list-group-item "> <button class="btn btn-success"  >Профиль </button>
                    <ul class="nav flex-column " >
                        <li class="nav-item ml-4 mt-1 "><a href="<?=URL::to(['/admin/default/profile', 'edit' => 'edit'])?>" class="text-white btn btn-primary ">Редактировать</a></li>
                        <li class="nav-item ml-4 mt-1 "><a href="<?=URL::to(['/admin/default/profile', 'add' => 'add'])?>" class="text-white btn btn-primary ">Добавить</a></li>

                    </ul>
                </li>
            </ul>
            <a href="<?=URL::to(['/admin/default/email'] )?>" class="btn btn-success m-2">adminEmail</a>





        </div>
        <div class="col-md-9">
            <?php if($list):?>
                <?php foreach ($list as $value): ?>
                    <a href="<?=URL::to(['/admin/default/profile', 'id' => $value['id']])?>" class="text-white btn btn-secondary my-1">Профиль <?=$value['id']?></a><br>
                <?php endforeach; ?>
            <?php endif; ?>

            <?php if($profile):?>
                <?=Html::img("@web/img/".$profile['img']."", ['class'=>'img-fluid mt-2'])?>

                <?php $form = ActiveForm::begin([]); ?>
                <?= $form->field($modeledit, 'name')->textInput(['autofocus' => true ,'value' => $profile['name']]) ?>

                <?= $form->field($modeledit, 'age')->textInput(['autofocus' => true ,'value' => $profile['age']]) ?>
                <?= $form->field($modeledit, 'weight')->textInput(['autofocus' => true ,'value' => $profile['weight']]) ?>
                <?= $form->field($modeledit, 'height')->textInput(['autofocus' => true ,'value' => $profile['height']]) ?>
                <?= $form->field($modeledit, 'size')->textInput(['autofocus' => true ,'value' => $profile['size']]) ?>



                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button', 'value'=> 'upd']) ?>
                <?php ActiveForm::end(); ?>
            <?php endif; ?>

            <?php if($modelnew):?>


                <?php $form = ActiveForm::begin([]); ?>
                <?= $form->field($modelnew, 'name')->textInput(['autofocus' => true ]) ?>
                <?=$form->field($modelnew, 'img')->fileInput()?>
                <?= $form->field($modelnew, 'age')->textInput(['autofocus' => true ]) ?>
                <?= $form->field($modelnew, 'weight')->textInput(['autofocus' => true ,]) ?>
                <?= $form->field($modelnew, 'height')->textInput(['autofocus' => true ,]) ?>
                <?= $form->field($modelnew, 'size')->textInput(['autofocus' => true ,]) ?>



                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button', 'value'=> 'upd']) ?>
                <?php ActiveForm::end(); ?>
            <?php endif; ?>

        </div>



    </div>



<?php //var_dump($social); ?>