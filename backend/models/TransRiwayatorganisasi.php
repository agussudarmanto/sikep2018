<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatorganisasi".
 *
 * @property int $IdRiwayatOrganisasi
 * @property int $IdPegawai
 * @property int $IDStatusMasaOrganisasi
 * @property string $NamaOrganisasi
 * @property int $IdJabatanOrganisasi
 * @property string $LokasiOrganisasi
 * @property string $TahunMulai
 * @property string $TahunSelesai
 * @property string $NamaPimpinanOrganisasi
 * @property string $KeteranganOrganisasi
 * @property string $DokumenOrganisasi
 */
class TransRiwayatorganisasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatorganisasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRiwayatOrganisasi', 'IdPegawai'], 'required'],
            [['IdRiwayatOrganisasi', 'IdPegawai', 'IDStatusMasaOrganisasi', 'IdJabatanOrganisasi'], 'integer'],
            [['TahunMulai', 'TahunSelesai'], 'safe'],
            [['NamaOrganisasi', 'KeteranganOrganisasi'], 'string', 'max' => 250],
            [['LokasiOrganisasi', 'NamaPimpinanOrganisasi'], 'string', 'max' => 100],
            [['DokumenOrganisasi'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRiwayatOrganisasi' => 'Id Riwayat Organisasi',
            'IdPegawai' => 'Id Pegawai',
            'IDStatusMasaOrganisasi' => 'Idstatus Masa Organisasi',
            'NamaOrganisasi' => 'Nama Organisasi',
            'IdJabatanOrganisasi' => 'Id Jabatan Organisasi',
            'LokasiOrganisasi' => 'Lokasi Organisasi',
            'TahunMulai' => 'Tahun Mulai',
            'TahunSelesai' => 'Tahun Selesai',
            'NamaPimpinanOrganisasi' => 'Nama Pimpinan Organisasi',
            'KeteranganOrganisasi' => 'Keterangan Organisasi',
            'DokumenOrganisasi' => 'Dokumen Organisasi',
        ];
    }
}
