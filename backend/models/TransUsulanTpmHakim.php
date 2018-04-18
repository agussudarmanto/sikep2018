<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulan_tpm_hakim".
 *
 * @property int $IdUsulanTPMHakim
 * @property string $NoRegisterUsulanTPMHakim
 * @property string $TanggalUsulanTPMHakim
 * @property string $TahunUsulanTPMHakim
 * @property string $PeriodeUsulanTPMHakim
 * @property int $KodeSatkerUsulanTPMHakim
 * @property string $StatusUsulanTPMHakim
 */
class TransUsulanTpmHakim extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulan_tpm_hakim';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdUsulanTPMHakim'], 'required'],
            [['IdUsulanTPMHakim', 'KodeSatkerUsulanTPMHakim'], 'integer'],
            [['TanggalUsulanTPMHakim', 'TahunUsulanTPMHakim'], 'safe'],
            [['NoRegisterUsulanTPMHakim'], 'string', 'max' => 100],
            [['PeriodeUsulanTPMHakim'], 'string', 'max' => 10],
            [['StatusUsulanTPMHakim'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUsulanTPMHakim' => 'Id Usulan Tpmhakim',
            'NoRegisterUsulanTPMHakim' => 'No Register Usulan Tpmhakim',
            'TanggalUsulanTPMHakim' => 'Tanggal Usulan Tpmhakim',
            'TahunUsulanTPMHakim' => 'Tahun Usulan Tpmhakim',
            'PeriodeUsulanTPMHakim' => 'Periode Usulan Tpmhakim',
            'KodeSatkerUsulanTPMHakim' => 'Kode Satker Usulan Tpmhakim',
            'StatusUsulanTPMHakim' => 'Status Usulan Tpmhakim',
        ];
    }
}
