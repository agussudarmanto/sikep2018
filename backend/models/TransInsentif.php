<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_insentif".
 *
 * @property int $IdRiwayatInsentif
 * @property int $IdPegawai
 * @property string $TanggalInsetif
 * @property int $JumlahInsentif
 */
class TransInsentif extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_insentif';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRiwayatInsentif', 'IdPegawai', 'TanggalInsetif', 'JumlahInsentif'], 'required'],
            [['IdRiwayatInsentif', 'IdPegawai', 'JumlahInsentif'], 'integer'],
            [['TanggalInsetif'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRiwayatInsentif' => 'Id Riwayat Insentif',
            'IdPegawai' => 'Id Pegawai',
            'TanggalInsetif' => 'Tanggal Insetif',
            'JumlahInsentif' => 'Jumlah Insentif',
        ];
    }
}
