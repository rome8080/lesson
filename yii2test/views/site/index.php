<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
$this->title = 'Relax';
?>
<div class="row blok1m">
                    <div class="col-md-1"></div>
                    <div class="col-md-1">
                        <nav class="nav flex-column conttop">
                            <?php  foreach ($social as $value): ?>
                            <a class="nav-link " href="<?=URL::to($value['url'] )?>">
                                <?=Html::img("@web/img/".$value['img']."", ['alt'=>'', 'class'=>'img-fluid'])?>
                                <br><?=$value['name']?></a>

                            <?php endforeach; ?>
                        </nav>
                    </div>
                    <div class="col-md-4">
                        <div class="blok1header1"> Мерси - это </div>
                        <div class="blok1header2"> <?=$blok1['name']?> </div>
                        <div class="blok1text"> <?=$blok1['text']?></div>
                        <div class="button1">
                            <div class="button2 py-3"> <a href="<?=Url::to('#')?>" class="button3 py-3 px-4">Подробнее о программах</a> </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-1">
                        <nav class="nav flex-column conttop">
                            <?=Html::a(Html::img("@web/img/in.png", ['alt'=>'', 'class'=>'img-fluid']). 'Инкогнито',
                                Url::to('#'), ['class'=>'nav-link'])?>'
                            <?=Html::a(Html::img("@web/img/18.png", ['alt'=>'', 'class'=>'img-fluid']). 'Только 18+',
                                Url::to('#'), ['class'=>'nav-link'])?>'

                            <?=Html::a(Html::img("@web/img/24.png", ['alt'=>'', 'class'=>'img-fluid']). 'Работаем 24/7',
                                Url::to('#'), ['class'=>'nav-link'])?>'

                        </nav>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid  blok2">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-white blok2header">наши мастера</h2> </div>
        </div>
        <div class="row">
            <?php  foreach ($profile as $value): ?>
            <div class="col-md-2">
                <div class="my-4">
                    <a href="<?=URL::to('# ')?>">
                        <div class="profile "> <?=Html::img("@web/img/".$value['img']."", ['alt'=>'', 'class'=>'img-fluid'])?>
                            <div class="namprofile text-white">
                                <h4><?=$value['name']?></h4> <?=$value['age']?></div>
                 <div class="row no-gutters mt-2">
                   <div class="col ml-2 "> 
                     <div class=""><?=Html::img("@web/img/height.png", ['alt'=>'', 'class'=>'img-fluid'])?><span class="text-white ml-2"><?=$value['height']?></span></div>
                     </div>
                     
                     <div class="col"> 
                     <div class=""><?=Html::img("@web/img/size.png", ['alt'=>'', 'class'=>'img-fluid'])?><span class="text-white ml-2"><?=$value['size']?></span></div>
                     </div>
                     
                     <div class="col"> 
                     <div class=""><?=Html::img("@web/img/weight.png", ['alt'=>'', 'class'=>'img-fluid'])?><span class="text-white ml-2"><?=$value['weight']?></span></div>
                     </div>
                 </div>
             </div>
            </a>
             
          </div> 
           </div>
            <?php endforeach; ?>





       </div>
        <div class="row no-gutters">
            <div class="col-md-1"></div>
          
           <div class="col-md-5 my-3">
               <div class="bandl"></div>
           </div>
            <div class="col-md-5 my-3">
               <div class="bandr"></div>
           </div>
           <div class="col-md-1"></div>
            
        </div>  
          <div class="row my-5">
           <div class="col-md-5">
               <div class="bandt mt-4"></div>
           </div>
           <div class="col-md-2">
               <div class="button1 mb-2" >
                             <div class="button2 py-3" >
                                 <a href="#" class="button3 py-3 " id="button3">Все мастера </a>
                                 
                             </div>
                         </div>
           </div>
           <div class="col-md-5">
               <div class="bandt mt-4"></div>
           </div>
            
        </div>         
           
        
    </div>
   <div class="container-fluid  blok3">
       <div class="row">
          <div class="col">
              <div class="container">
                 <div class="row blok3m">
                    <div class="col-md-8">
                        <div class="blok1header2">Забронируйте время за 20 секунд</div>
                        <div class="blok1text">И гарантированно получите скидку</div>
                        <?php $form = ActiveForm::begin(['options' => [ 'class' => 'formb'], 'method' => 'post', 'fieldConfig' => ['template' => "{input}"]]); ?>

                          <div class="float-left">
                            <label for="staticEmail1" class="text-white">Введите имя:</label><br>
                              <?= $form->field($model, 'name', ['enableLabel' => false])->input('text' ,['class' => 'form-control-plaintext float-left ', 'id' =>'staticEmail1']) ?>

                            <img src="img/name.png" alt="" class="float-right img-fluid mr-3 ml-1">
                            
                         </div>
                         <div class="float-left">
                            <label for="staticEmail2" class="text-white">Введите Телефон:</label><br>
                             <?= $form->field($model, 'telephone', ['enableLabel' => false])->input('text' ,['class' => 'form-control-plaintext float-left ', 'id' =>'staticEmail2']) ?>


                            <img src="img/tel.png" alt="" class="float-right img-fluid  ml-1">
                            
                         </div><div class="clearfix"></div>
                         <br>
                         <div class="mt-3">
                         <div class="button11 float-left" >
                             <div class="button22 " >
                                 <?= Html::submitButton('Все программы', ['class' => 'button3 ']) ?>

                                 
                             </div>
                         </div>
                         <span class="float-left text-white-50 ml-2">Нажимая на кнопку, вы даете согласие <br>на обработку
                         персональных данных</span>
                          </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                     
                 </div>
                  <?php //var_dump($profile); ?>