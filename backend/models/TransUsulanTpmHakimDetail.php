<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulan_tpm_hakim_detail".
 *
 * @property int $IdUsulanTPMHakimDetil
 * @property int $IdUsulanTPMHakim
 * @property int $IdPegawai
 * @property int $IdNamaJabatan
 * @property int $KodeSatker
 * @property int $IdNamaJabatanUsulan
 * @property int $KodeSatkerUsulan
 * @property string $Catatan
 * @property string $DokumenUsulanTPMHakimDetil
 * @property string $Status
 * @property int $idFitandProperTest
 */
class TransUsulanTpmHakimDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulan_tpm_hakim_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdUsulanTPMHakimDetil', 'IdUsulanTPMHakim', 'IdPegawai', 'IdNamaJabatan'], 'required'],
            [['IdUsulanTPMHakimDetil', 'IdUsulanTPMHakim', 'IdPegawai', 'IdNamaJabatan', 'KodeSatker', 'IdNamaJabatanUsulan', 'KodeSatkerUsulan', 'idFitandProperTest'], 'integer'],
            [['Catatan'], 'string', 'max' => 250],
            [['DokumenUsulanTPMHakimDetil'], 'string', 'max' => 50],
            [['Status'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUsulanTPMHakimDetil' => 'Id Usulan Tpmhakim Detil',
            'IdUsulanTPMHakim' => 'Id Usulan Tpmhakim',
            'IdPegawai' => 'Id Pegawai',
            'IdNamaJabatan' => 'Id Nama Jabatan',
            'KodeSatker' => 'Kode Satker',
            'IdNamaJabatanUsulan' => 'Id Nama Jabatan Usulan',
            'KodeSatkerUsulan' => 'Kode Satker Usulan',
            'Catatan' => 'Catatan',
            'DokumenUsulanTPMHakimDetil' => 'Dokumen Usulan Tpmhakim Detil',
            'Status' => 'Status',
            'idFitandProperTest' => 'Id Fitand Proper Test',
        ];
    }
}
