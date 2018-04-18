<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulan_kp".
 *
 * @property int $IdUsulanKP
 * @property string $NoUsulanKP
 * @property string $TanggalUsulanKP
 * @property string $TahunUsulanKP
 * @property int $IdPeriodeKP
 * @property int $KodeSatkerUsulanKP
 * @property string $NamaPejabatUsulanKP
 */
class TransUsulanKp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulan_kp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdUsulanKP'], 'required'],
            [['IdUsulanKP', 'IdPeriodeKP', 'KodeSatkerUsulanKP'], 'integer'],
            [['TanggalUsulanKP', 'TahunUsulanKP'], 'safe'],
            [['NoUsulanKP'], 'string', 'max' => 50],
            [['NamaPejabatUsulanKP'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUsulanKP' => 'Id Usulan Kp',
            'NoUsulanKP' => 'No Usulan Kp',
            'TanggalUsulanKP' => 'Tanggal Usulan Kp',
            'TahunUsulanKP' => 'Tahun Usulan Kp',
            'IdPeriodeKP' => 'Id Periode Kp',
            'KodeSatkerUsulanKP' => 'Kode Satker Usulan Kp',
            'NamaPejabatUsulanKP' => 'Nama Pejabat Usulan Kp',
        ];
    }
}
