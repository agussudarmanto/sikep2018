<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmst_keluarga".
 *
 * @property int $IdAnggotaKeluarga
 * @property int $IDPegawai
 * @property int $JenisHubunganKeluarga
 * @property int $JenisKelamin
 * @property string $NamaAnggotaKeluarga
 * @property string $TempatLahirAnggotaKeluarga
 * @property string $TanggalLahirAnggotaKeluarga
 * @property int $PekerjaanAnggotaKeluarga
 * @property string $AlamatKantorAnggotaKeluarga
 * @property int $NoIndukPegawaiKeluarga
 * @property int $Agama
 * @property int $StatusPerkawinan
 * @property string $TanggalNikah
 * @property string $StatusKesehatan
 * @property int $PendidikanTerakhir
 * @property string $IsHidup
 * @property string $BerhakTunjangan
 * @property string $DokumenHubunganKeluarga
 * @property string $NomorKARIS_KARSU
 * @property string $FotoAnggotaKeluarga
 */
class TmstKeluarga extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmst_keluarga';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdAnggotaKeluarga', 'IDPegawai', 'JenisHubunganKeluarga', 'JenisKelamin', 'NamaAnggotaKeluarga', 'TempatLahirAnggotaKeluarga', 'StatusPerkawinan', 'IsHidup', 'BerhakTunjangan'], 'required'],
            [['IdAnggotaKeluarga', 'IDPegawai', 'JenisHubunganKeluarga', 'JenisKelamin', 'PekerjaanAnggotaKeluarga', 'NoIndukPegawaiKeluarga', 'Agama', 'StatusPerkawinan', 'PendidikanTerakhir'], 'integer'],
            [['TanggalLahirAnggotaKeluarga', 'TanggalNikah'], 'safe'],
            [['NamaAnggotaKeluarga', 'AlamatKantorAnggotaKeluarga', 'StatusKesehatan', 'DokumenHubunganKeluarga'], 'string', 'max' => 100],
            [['TempatLahirAnggotaKeluarga'], 'string', 'max' => 50],
            [['IsHidup', 'BerhakTunjangan'], 'string', 'max' => 1],
            [['NomorKARIS_KARSU'], 'string', 'max' => 20],
            [['FotoAnggotaKeluarga'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdAnggotaKeluarga' => 'Id Anggota Keluarga',
            'IDPegawai' => 'Idpegawai',
            'JenisHubunganKeluarga' => 'Jenis Hubungan Keluarga',
            'JenisKelamin' => 'Jenis Kelamin',
            'NamaAnggotaKeluarga' => 'Nama Anggota Keluarga',
            'TempatLahirAnggotaKeluarga' => 'Tempat Lahir Anggota Keluarga',
            'TanggalLahirAnggotaKeluarga' => 'Tanggal Lahir Anggota Keluarga',
            'PekerjaanAnggotaKeluarga' => 'Pekerjaan Anggota Keluarga',
            'AlamatKantorAnggotaKeluarga' => 'Alamat Kantor Anggota Keluarga',
            'NoIndukPegawaiKeluarga' => 'No Induk Pegawai Keluarga',
            'Agama' => 'Agama',
            'StatusPerkawinan' => 'Status Perkawinan',
            'TanggalNikah' => 'Tanggal Nikah',
            'StatusKesehatan' => 'Status Kesehatan',
            'PendidikanTerakhir' => 'Pendidikan Terakhir',
            'IsHidup' => 'Is Hidup',
            'BerhakTunjangan' => 'Berhak Tunjangan',
            'DokumenHubunganKeluarga' => 'Dokumen Hubungan Keluarga',
            'NomorKARIS_KARSU' => 'Nomor Karis  Karsu',
            'FotoAnggotaKeluarga' => 'Foto Anggota Keluarga',
        ];
    }
}
