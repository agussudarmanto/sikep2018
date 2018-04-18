<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_profesi_keahlian".
 *
 * @property int $idRiwayatProfesi
 * @property int $idPegawai
 * @property string $Profesi
 * @property string $NamaInstansiProfesi
 */
class TransProfesiKeahlian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_profesi_keahlian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRiwayatProfesi', 'idPegawai', 'Profesi', 'NamaInstansiProfesi'], 'required'],
            [['idRiwayatProfesi', 'idPegawai'], 'integer'],
            [['Profesi'], 'string', 'max' => 200],
            [['NamaInstansiProfesi'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRiwayatProfesi' => 'Id Riwayat Profesi',
            'idPegawai' => 'Id Pegawai',
            'Profesi' => 'Profesi',
            'NamaInstansiProfesi' => 'Nama Instansi Profesi',
        ];
    }
}
