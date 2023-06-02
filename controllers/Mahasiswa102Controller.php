<?php

namespace app\controllers;

use app\models\Mahasiswa102;
use yii\data\ActiveDataProvider;

class Mahasiswa102Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mahasiswa102::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }
}