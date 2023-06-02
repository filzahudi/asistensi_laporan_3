<?php

namespace app\controllers;
use app\models\Profil102;
use yii\data\ActiveDataProvider;

class Profil102Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Profil102::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
?>