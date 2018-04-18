<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatkeanggotaanparpol".
 *
 * @property int $IdRiwayatKeanggotaanParpol
 * @property int $IdPegawai
 * @property string $NamaParpol
 * @property string $TahunKeanggotaanMulai
 * @property string $TahunKeanggotaanAkhir
 */
class TransRiwayatkeanggotaanparpol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatkeanggotaanparpol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRiwayatKeanggotaanParpol', 'IdPegawai', 'NamaParpol', 'TahunKeanggotaanMulai'], 'required'],
            [['IdRiwayatKeanggotaanParpol', 'IdPegawai'], 'integer'],
            [['TahunKeanggotaanMulai', 'TahunKeanggotaanAkhir'], 'safe'],
            [['NamaParpol'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRiwayatKeanggotaanParpol' => 'Id Riwayat Keanggotaan Parpol',
            'IdPegawai' => 'Id Pegawai',
            'NamaParpol' => 'Nama Parpol',
            'TahunKeanggotaanMulai' => 'Tahun Keanggotaan Mulai',
            'TahunKeanggotaanAkhir' => 'Tahun Keanggotaan Akhir',
        ];
    }
}
