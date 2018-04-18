<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulanpesertadiklat".
 *
 * @property int $idUsulanPesertaDiklat
 * @property int $IdNamaKegiatanDiklat
 * @property int $idSatkerPegawai
 * @property string $StatusUsulan
 */
class TransUsulanpesertadiklat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulanpesertadiklat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUsulanPesertaDiklat', 'IdNamaKegiatanDiklat', 'idSatkerPegawai', 'StatusUsulan'], 'required'],
            [['idUsulanPesertaDiklat', 'IdNamaKegiatanDiklat', 'idSatkerPegawai'], 'integer'],
            [['StatusUsulan'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUsulanPesertaDiklat' => 'Id Usulan Peserta Diklat',
            'IdNamaKegiatanDiklat' => 'Id Nama Kegiatan Diklat',
            'idSatkerPegawai' => 'Id Satker Pegawai',
            'StatusUsulan' => 'Status Usulan',
        ];
    }
}
