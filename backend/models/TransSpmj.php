<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_spmj".
 *
 * @property int $idSPMJ
 * @property int $idRiwayatJabatanPegawai
 * @property string $NomorSPMJ
 * @property string $TanggalSPMJ
 * @property string $PejabatSPMJ
 * @property string $DokumenSPMJ
 */
class TransSpmj extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_spmj';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idSPMJ'], 'required'],
            [['idSPMJ', 'idRiwayatJabatanPegawai'], 'integer'],
            [['TanggalSPMJ'], 'safe'],
            [['NomorSPMJ', 'PejabatSPMJ', 'DokumenSPMJ'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idSPMJ' => 'Id Spmj',
            'idRiwayatJabatanPegawai' => 'Id Riwayat Jabatan Pegawai',
            'NomorSPMJ' => 'Nomor Spmj',
            'TanggalSPMJ' => 'Tanggal Spmj',
            'PejabatSPMJ' => 'Pejabat Spmj',
            'DokumenSPMJ' => 'Dokumen Spmj',
        ];
    }
}
