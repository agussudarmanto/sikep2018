<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatkesehatan".
 *
 * @property int $idRiwayatKesehatan
 * @property int $idPegawai
 * @property string $NomorSuratKesehatan
 * @property string $TanggalSuratKesehatan
 * @property string $InstansiSuratKesehatan
 * @property string $PejabatSuratKesehatan
 * @property string $DokumenSuratKesehatan
 * @property string $Keperluan
 * @property string $KategoriSakit
 * @property string $NamaPenyakit
 * @property string $TanggalMulaiSakit
 * @property string $TanggalAkhirSakit
 * @property string $Catatan
 */
class TransRiwayatkesehatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatkesehatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRiwayatKesehatan', 'idPegawai', 'NomorSuratKesehatan', 'TanggalSuratKesehatan'], 'required'],
            [['idRiwayatKesehatan', 'idPegawai'], 'integer'],
            [['TanggalSuratKesehatan', 'TanggalMulaiSakit', 'TanggalAkhirSakit'], 'safe'],
            [['NomorSuratKesehatan', 'InstansiSuratKesehatan'], 'string', 'max' => 50],
            [['PejabatSuratKesehatan'], 'string', 'max' => 100],
            [['DokumenSuratKesehatan', 'Keperluan', 'NamaPenyakit', 'Catatan'], 'string', 'max' => 255],
            [['KategoriSakit'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRiwayatKesehatan' => 'Id Riwayat Kesehatan',
            'idPegawai' => 'Id Pegawai',
            'NomorSuratKesehatan' => 'Nomor Surat Kesehatan',
            'TanggalSuratKesehatan' => 'Tanggal Surat Kesehatan',
            'InstansiSuratKesehatan' => 'Instansi Surat Kesehatan',
            'PejabatSuratKesehatan' => 'Pejabat Surat Kesehatan',
            'DokumenSuratKesehatan' => 'Dokumen Surat Kesehatan',
            'Keperluan' => 'Keperluan',
            'KategoriSakit' => 'Kategori Sakit',
            'NamaPenyakit' => 'Nama Penyakit',
            'TanggalMulaiSakit' => 'Tanggal Mulai Sakit',
            'TanggalAkhirSakit' => 'Tanggal Akhir Sakit',
            'Catatan' => 'Catatan',
        ];
    }
}
