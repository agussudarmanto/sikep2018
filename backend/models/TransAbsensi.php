<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_absensi".
 *
 * @property int $IdAbsensi
 * @property string $Tanggal
 * @property int $IdPegawai
 * @property string $WaktuDatang
 * @property string $WaktuPulang
 */
class TransAbsensi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_absensi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdAbsensi', 'Tanggal', 'IdPegawai'], 'required'],
            [['IdAbsensi', 'IdPegawai'], 'integer'],
            [['Tanggal', 'WaktuDatang', 'WaktuPulang'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdAbsensi' => 'Id Absensi',
            'Tanggal' => 'Tanggal',
            'IdPegawai' => 'Id Pegawai',
            'WaktuDatang' => 'Waktu Datang',
            'WaktuPulang' => 'Waktu Pulang',
        ];
    }
}
