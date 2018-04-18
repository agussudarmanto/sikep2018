<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatbuktipotongpajak".
 *
 * @property string $IdRiwayatBuktiPotongPajak
 * @property int $idPegawai
 * @property string $Tahun
 * @property string $DokumenBuktiPotongPajak
 * @property string $JenisDokumenBuktiPotongPajak
 * @property string $Keterangan
 */
class TransRiwayatbuktipotongpajak extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatbuktipotongpajak';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRiwayatBuktiPotongPajak', 'idPegawai', 'Tahun', 'DokumenBuktiPotongPajak'], 'required'],
            [['idPegawai'], 'integer'],
            [['IdRiwayatBuktiPotongPajak'], 'string', 'max' => 3],
            [['Tahun', 'JenisDokumenBuktiPotongPajak'], 'string', 'max' => 50],
            [['DokumenBuktiPotongPajak'], 'string', 'max' => 100],
            [['Keterangan'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRiwayatBuktiPotongPajak' => 'Id Riwayat Bukti Potong Pajak',
            'idPegawai' => 'Id Pegawai',
            'Tahun' => 'Tahun',
            'DokumenBuktiPotongPajak' => 'Dokumen Bukti Potong Pajak',
            'JenisDokumenBuktiPotongPajak' => 'Jenis Dokumen Bukti Potong Pajak',
            'Keterangan' => 'Keterangan',
        ];
    }
}
