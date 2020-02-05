<?php

namespace app\modules\admin\controllers;
use Yii;
use yii\web\Controller;
use app\modules\admin\models\UserForm;
use app\modules\admin\models\Social;
use app\modules\admin\models\Blok1;
use app\modules\admin\models\Profile;
use app\modules\admin\models\Email;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'index', 'blok1', 'profile'],
                'rules' => [
                    [
                        'actions' => ['logout', 'index', 'blok1', 'profile'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post','get'],
                ],
            ],
        ];
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->view->title = 'Admin';
        $model = new Social();
        if(Yii::$app->request->get('id')){
            $social = Social::findOne(['id' => Yii::$app->request->get('id')]);
            if($model->load(Yii::$app->request->post())){
                $social->url = $model->url;
                $social->save();
            }
        }

        return $this->render('index',['social'=>$social, 'model'=>$model]);
    }

    public function actionBlok1(){
        $this->view->title = 'Admin';
        $model = new Blok1();
        $blok1 = Blok1::findOne(['id' => 1]);
        if($model->load(Yii::$app->request->post())){
            $blok1->name = $model->name;
            $blok1->text = $model->text;
            $blok1->save();
        }
        return $this->render('blok1',['blok1'=>$blok1, 'model'=>$model]);
    }

    public function actionProfile(){
        $this->view->title = 'Admin';
        if(Yii::$app->request->get('edit')){
            $list = Profile::find()->select('id')->asArray()->all();
        }
        if(Yii::$app->request->get('id')){
            $modeledit = new Profile();
            $profile = Profile::findOne(['id' => Yii::$app->request->get('id')]);
            if($modeledit->load(Yii::$app->request->post())){
                $profile->name = $modeledit->name;
                $profile->age = $modeledit->age;
                $profile->weight = $modeledit->weight;
                $profile->height = $modeledit->height;
                $profile->size = $modeledit->size;
                $profile->save();
            }
        }

        if(Yii::$app->request->get('add')){
            $modelnew = new Profile();
            if($modelnew->load(Yii::$app->request->post())){
                $modelnew->img = UploadedFile::getInstance($modelnew, 'img');

                $modelnew->save();
                $modelnew->upload();
            }
        }

        return $this->render('profile', ['list'=>$list, 'profile' => $profile, 'modeledit'=>$modeledit, 'modelnew'=>$modelnew]);
    }

    public function actionEmail(){
        $this->view->title = 'Admin';
        $model = new Email();
        if($model->load(Yii::$app->request->post())){
            if ($model->validate() ){
                file_put_contents("adminEmail.txt", $model->email);
            }
        }


        return $this->render('email', ['model'=>$model]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new UserForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
