<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulankgb".
 *
 * @property int $IdUsulanKGB
 * @property string $JenisUsulanKGB
 * @property int $IdKPPN
 * @property string $TanggalUsulanKGB
 * @property string $NomorRegistrasiUsulanKGB
 * @property string $NamaPejabatUsulanKGB
 * @property string $PejabatUsulanKGB
 * @property int $KodeSatkerUsulanKGB
 * @property string $StatusUsulanKGB
 */
class TransUsulankgb extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulankgb';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdUsulanKGB'], 'required'],
            [['IdUsulanKGB', 'IdKPPN', 'KodeSatkerUsulanKGB'], 'integer'],
            [['TanggalUsulanKGB'], 'safe'],
            [['JenisUsulanKGB', 'StatusUsulanKGB'], 'string', 'max' => 1],
            [['NomorRegistrasiUsulanKGB', 'NamaPejabatUsulanKGB', 'PejabatUsulanKGB'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUsulanKGB' => 'Id Usulan Kgb',
            'JenisUsulanKGB' => 'Jenis Usulan Kgb',
            'IdKPPN' => 'Id Kppn',
            'TanggalUsulanKGB' => 'Tanggal Usulan Kgb',
            'NomorRegistrasiUsulanKGB' => 'Nomor Registrasi Usulan Kgb',
            'NamaPejabatUsulanKGB' => 'Nama Pejabat Usulan Kgb',
            'PejabatUsulanKGB' => 'Pejabat Usulan Kgb',
            'KodeSatkerUsulanKGB' => 'Kode Satker Usulan Kgb',
            'StatusUsulanKGB' => 'Status Usulan Kgb',
        ];
    }
}
