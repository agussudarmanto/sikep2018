<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulan_tpm_pnppjs_detail".
 *
 * @property int $IdUsulanTPMPNPPJSDetil
 * @property int $IdUsulanTPMPNPPJS
 * @property int $IdPegawai
 * @property int $IdNamaJabatan
 * @property int $KodeSatker
 * @property int $IdNamaJabatanUsulan
 * @property int $KodeSatkerUsulan
 * @property string $Catatan
 * @property string $DokumenUsulanTPMPNPPJSDetil
 * @property string $Status
 * @property int $idFitandProperTest
 */
class TransUsulanTpmPnppjsDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulan_tpm_pnppjs_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdUsulanTPMPNPPJSDetil', 'IdUsulanTPMPNPPJS', 'IdPegawai', 'IdNamaJabatan', 'KodeSatkerUsulan'], 'required'],
            [['IdUsulanTPMPNPPJSDetil', 'IdUsulanTPMPNPPJS', 'IdPegawai', 'IdNamaJabatan', 'KodeSatker', 'IdNamaJabatanUsulan', 'KodeSatkerUsulan', 'idFitandProperTest'], 'integer'],
            [['Catatan'], 'string', 'max' => 250],
            [['DokumenUsulanTPMPNPPJSDetil'], 'string', 'max' => 50],
            [['Status'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUsulanTPMPNPPJSDetil' => 'Id Usulan Tpmpnppjsdetil',
            'IdUsulanTPMPNPPJS' => 'Id Usulan Tpmpnppjs',
            'IdPegawai' => 'Id Pegawai',
            'IdNamaJabatan' => 'Id Nama Jabatan',
            'KodeSatker' => 'Kode Satker',
            'IdNamaJabatanUsulan' => 'Id Nama Jabatan Usulan',
            'KodeSatkerUsulan' => 'Kode Satker Usulan',
            'Catatan' => 'Catatan',
            'DokumenUsulanTPMPNPPJSDetil' => 'Dokumen Usulan Tpmpnppjsdetil',
            'Status' => 'Status',
            'idFitandProperTest' => 'Id Fitand Proper Test',
        ];
    }
}
