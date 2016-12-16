<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2016/12/16
 * Time: 10:06
 * Email:liyongsheng@meicai.cn
 */

namespace app\components;


use yii\web\Controller;
use Yii;

class AppController extends Controller
{
    public function init(){
        parent::init();
        if(isset(Yii::$app->params['keywords'])){
            $this->view->registerMetaTag(['name'=>'keywords', 'content'=>Yii::$app->params['keywords']]);
        }
        if(isset(Yii::$app->params['description'])){
            $this->view->registerMetaTag(['name'=>'description', 'content'=>Yii::$app->params['description']]);
        }
    }
}