<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_peninjauan_masa_kerja".
 *
 * @property int $IdPeninjauanMasaKerja
 * @property int $IdPegawai
 * @property int $IdRiwayatPangkat
 * @property int $JenisPMK
 * @property string $NomorPersetujuanBKN
 * @property string $TanggalPersetujuanBKN
 * @property int $MasaKerja
 * @property string $TanggalAwal
 * @property string $TanggalAkhir
 * @property string $DokumenPMK
 */
class TransPeninjauanMasaKerja extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_peninjauan_masa_kerja';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdPeninjauanMasaKerja', 'IdPegawai', 'IdRiwayatPangkat', 'JenisPMK', 'NomorPersetujuanBKN', 'TanggalPersetujuanBKN', 'MasaKerja', 'TanggalAwal', 'TanggalAkhir'], 'required'],
            [['IdPeninjauanMasaKerja', 'IdPegawai', 'IdRiwayatPangkat', 'JenisPMK', 'MasaKerja'], 'integer'],
            [['TanggalPersetujuanBKN', 'TanggalAwal', 'TanggalAkhir'], 'safe'],
            [['NomorPersetujuanBKN', 'DokumenPMK'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdPeninjauanMasaKerja' => 'Id Peninjauan Masa Kerja',
            'IdPegawai' => 'Id Pegawai',
            'IdRiwayatPangkat' => 'Id Riwayat Pangkat',
            'JenisPMK' => 'Jenis Pmk',
            'NomorPersetujuanBKN' => 'Nomor Persetujuan Bkn',
            'TanggalPersetujuanBKN' => 'Tanggal Persetujuan Bkn',
            'MasaKerja' => 'Masa Kerja',
            'TanggalAwal' => 'Tanggal Awal',
            'TanggalAkhir' => 'Tanggal Akhir',
            'DokumenPMK' => 'Dokumen Pmk',
        ];
    }
}
