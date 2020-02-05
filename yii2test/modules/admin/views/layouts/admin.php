<?php

use app\modules\admin\asset\MyAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;
use yii\bootstrap\ActiveForm;

MyAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Html::encode($this->title) ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">




    
    







    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>
<div class="container">
<div class="row ">
<div class="col-md-6">
    <div id="logo" class="pull-left">
            <h1><?=Html::a('Home', Url::to(Yii::$app->homeUrl), ['class'=>' '])?></h1>
            
    </div>
    
</div>
     <div class="col-md-2">
            <a href="<?=URL::to(['/admin/default/logout'])?>"><h4 class=" pt-2">Выход</h4></a>
    </div>
   </div> 
<?= $content ?>


    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>