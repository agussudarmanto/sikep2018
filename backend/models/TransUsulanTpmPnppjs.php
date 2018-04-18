<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulan_tpm_pnppjs".
 *
 * @property int $IdUsulanTPMPNPPJS
 * @property string $NoRegisterUsulanTPMPNPPJS
 * @property string $TanggalUsulanTPMPNPPJS
 * @property string $TahunUsulanTPMPNPPJS
 * @property string $PeriodeUsulanTPMPNPPJS
 * @property int $KodeSatkerUsulanTPMPNPPJS
 * @property string $StatusUsulanTPMPNPPJS
 */
class TransUsulanTpmPnppjs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulan_tpm_pnppjs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdUsulanTPMPNPPJS', 'NoRegisterUsulanTPMPNPPJS'], 'required'],
            [['IdUsulanTPMPNPPJS', 'KodeSatkerUsulanTPMPNPPJS'], 'integer'],
            [['TanggalUsulanTPMPNPPJS', 'TahunUsulanTPMPNPPJS'], 'safe'],
            [['NoRegisterUsulanTPMPNPPJS'], 'string', 'max' => 100],
            [['PeriodeUsulanTPMPNPPJS'], 'string', 'max' => 10],
            [['StatusUsulanTPMPNPPJS'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUsulanTPMPNPPJS' => 'Id Usulan Tpmpnppjs',
            'NoRegisterUsulanTPMPNPPJS' => 'No Register Usulan Tpmpnppjs',
            'TanggalUsulanTPMPNPPJS' => 'Tanggal Usulan Tpmpnppjs',
            'TahunUsulanTPMPNPPJS' => 'Tahun Usulan Tpmpnppjs',
            'PeriodeUsulanTPMPNPPJS' => 'Periode Usulan Tpmpnppjs',
            'KodeSatkerUsulanTPMPNPPJS' => 'Kode Satker Usulan Tpmpnppjs',
            'StatusUsulanTPMPNPPJS' => 'Status Usulan Tpmpnppjs',
        ];
    }
}
