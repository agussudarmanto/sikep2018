<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatcuti".
 *
 * @property int $IdRiwayatCuti
 * @property int $IdPegawai
 * @property int $Id_PegawaiSupervisior
 * @property int $Id_JenisCuti
 * @property string $TanggalPengajuan
 * @property string $TanggalMulai
 * @property string $TanggalSelesai
 * @property string $AlasanCuti
 * @property int $JumlahHari
 * @property string $DokumenCuti
 * @property int $SisaCutiTahunan
 * @property int $SisaCutiPenangguhan
 */
class TransRiwayatcuti extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatcuti';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRiwayatCuti', 'SisaCutiTahunan', 'SisaCutiPenangguhan'], 'required'],
            [['IdRiwayatCuti', 'IdPegawai', 'Id_PegawaiSupervisior', 'Id_JenisCuti', 'JumlahHari', 'SisaCutiTahunan', 'SisaCutiPenangguhan'], 'integer'],
            [['TanggalPengajuan', 'TanggalMulai', 'TanggalSelesai'], 'safe'],
            [['AlasanCuti'], 'string', 'max' => 250],
            [['DokumenCuti'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRiwayatCuti' => 'Id Riwayat Cuti',
            'IdPegawai' => 'Id Pegawai',
            'Id_PegawaiSupervisior' => 'Id  Pegawai Supervisior',
            'Id_JenisCuti' => 'Id  Jenis Cuti',
            'TanggalPengajuan' => 'Tanggal Pengajuan',
            'TanggalMulai' => 'Tanggal Mulai',
            'TanggalSelesai' => 'Tanggal Selesai',
            'AlasanCuti' => 'Alasan Cuti',
            'JumlahHari' => 'Jumlah Hari',
            'DokumenCuti' => 'Dokumen Cuti',
            'SisaCutiTahunan' => 'Sisa Cuti Tahunan',
            'SisaCutiPenangguhan' => 'Sisa Cuti Penangguhan',
        ];
    }
}
