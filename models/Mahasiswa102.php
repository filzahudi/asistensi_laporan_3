<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_102".
 *
 * @property int $id
 * @property int $NIM
 * @property string $Nama
 * @property string $Kelas
 * @property string $Jurusan
 */
class Mahasiswa102 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_102';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NIM', 'Nama', 'Kelas', 'Jurusan'], 'required'],
            [['NIM'], 'integer'],
            [['Nama'], 'string', 'max' => 25],
            [['Kelas'], 'string', 'max' => 5],
            [['Jurusan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'NIM' => 'No. Induk Mahasiswa',
            'Nama' => 'Nama Mahasiswa',
            'Kelas' => 'Kelas',
            'Jurusan' => 'Jurusan',
            // 'profil_102.Foto_profil' => 'Foto Profil',
        ];
    }
    public function getProfil102()
    {
        //same as above
        return $this->hasOne(Profil102::class, ['id'=> 'id']);
    }
}
