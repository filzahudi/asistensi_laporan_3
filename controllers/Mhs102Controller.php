<?php

namespace app\controllers;
use app\models\Mhs102;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use Yii;

class Mhs102Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mhs102::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mhs102 = new Mhs102;
        $mhs102->no_induk_mahasiswa = '60200121102-'.rand(100,999);
        $mhs102->nama_mahasiswa = 'Nur Filzah';
        $mhs102->kelas = 'A';
        $mhs102->status = 'Baru';
        if ($mhs102->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }

    }

    public function actionUpdate($id)
    {
        $mhs102 = Mhs102::findOne(['id' => $id]);
        if($mhs102 !== null){
            $mhs102->kelas = 'B';
            $mhs102->status = 'Update';
            $mhs102->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mhs102 = Mhs102::findOne($id);
        if($mhs102->delete()) {
        return $this->redirect(['index']);
        }
        else {
            var_dump($mhs102->getError());
            die();
        }
    }

    public function actionView($id)
    {
        $mhs102 = mhs102::findOne($id);
        return $this->render('view', ['mhs102' => $mhs102]);
    }
}