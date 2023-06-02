<?php

namespace app\controllers;
use app\models\Obat102;
use yii\data\ActiveDataProvider;

class Obat102Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Obat102::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }
?>