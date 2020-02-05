<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\helpers\Url;
use yii\widgets\Menu;
use yii\bootstrap\ActiveForm;

use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
    
</head>

<body >
    <?php $this->beginBody() ?>
    <div class="container-fluid">
        <div class="row blok1">
            <div class="col-12 ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <?=Html::a(Html::img("@web/img/logo.jpg", ['alt'=>'logo', 'class' => 'img-fluid']), Url::to(Yii::$app->homeUrl))?>
                           
                        </div>
                        <div class="col-md-8">
                            <?php echo Menu::widget([
                                'items' => [
                                    ['label' => 'Главная', 'url' => '#' ],
                                    ['label' => 'Наши мастера', 'url' => '#' ],
                                    ['label' => 'Программы', 'url' => '#' ],
                                    ['label' => 'О салоне', 'url' => '#' ],
                                    ['label' => 'Акции', 'url' => '#' ],
                                    ['label' => 'Вакансии', 'url' => '#' ],
                                    ['label' => 'Контакты', 'url' => '#' ]
                                    ],
                                'options' => ['class' => 'nav mt-3'],
                                
                                'linkTemplate' => '<a href="{url}" class="nav-link text-white">{label}</a>',
                                 ]); ?>
                            
                        </div>
                        <div class="col-md-2">
                            <div class="telephonetop mt-3 py-2 pl-3"> <span>+7(880)555 55 55</span> </div>
                        </div>
                    </div>
                </div>
                
                <?= $content ?>
                
                  <div class="row">
                      <div class="col-md-2">
                          <?=Html::a(Html::img("@web/img/logo.jpg", ['alt'=>'logo', 'class' => 'img-fluid']), Url::to(Yii::$app->homeUrl))?>
                      </div>
                      <div class="col-md-1"></div>
                      <div class="col-md-3">
                          <div class="text-white-50 mt-3">Мужской SPA-клуб <br> &copy; 2019. Официальный сайт</div>
                      </div>
                      <div class="col-md-3">
                          <div class="text-white-50 mt-3">Политика конфидициальности</div>
                      </div>
                      <div class="col-md-3">
                          <div class="text-white-50 mt-3"><a href="<?=Url::to('admin/')?>">Admin</a></div>
                      </div>
                  </div>
              </div>
          </div>
           
       </div>
   </div>  
   
   
   
   
  
  <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
