<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatlhkpn".
 *
 * @property int $IdRiwayatLHKPN
 * @property int $IdPegawai
 * @property int $StatusWajibLapor
 * @property int $StatusPelaporan
 * @property string $DokumenBuktiKirim
 * @property string $TahunLHKPN
 * @property string $TglKirimLaporan
 */
class TransRiwayatlhkpn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatlhkpn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRiwayatLHKPN', 'IdPegawai', 'StatusWajibLapor', 'StatusPelaporan', 'DokumenBuktiKirim', 'TahunLHKPN', 'TglKirimLaporan'], 'required'],
            [['IdRiwayatLHKPN', 'IdPegawai', 'StatusWajibLapor', 'StatusPelaporan'], 'integer'],
            [['TglKirimLaporan'], 'safe'],
            [['DokumenBuktiKirim'], 'string', 'max' => 25],
            [['TahunLHKPN'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRiwayatLHKPN' => 'Id Riwayat Lhkpn',
            'IdPegawai' => 'Id Pegawai',
            'StatusWajibLapor' => 'Status Wajib Lapor',
            'StatusPelaporan' => 'Status Pelaporan',
            'DokumenBuktiKirim' => 'Dokumen Bukti Kirim',
            'TahunLHKPN' => 'Tahun Lhkpn',
            'TglKirimLaporan' => 'Tgl Kirim Laporan',
        ];
    }
}
