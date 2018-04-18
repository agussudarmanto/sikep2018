<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmst_pegawai".
 *
 * @property int $IDPegawai
 * @property string $NIPLama
 * @property string $NIPBaru
 * @property string $NIK
 * @property string $NamaLengkap
 * @property string $GelarDepan
 * @property string $GelarBelakang
 * @property int $KodeGolonganRuang
 * @property int $StatusPerkawinan
 * @property int $JenisPegawai
 * @property int $StatusPegawai
 * @property int $Agama
 * @property string $EmailPegawai
 * @property string $NomorHandphone
 * @property string $NomorTelepon
 * @property string $TanggalLahir
 * @property string $KabupatenTempatLahir
 * @property int $PropinsiTempatLahir
 * @property int $JenisKelamin
 * @property int $GolonganDarah
 * @property int $TinggiBadan
 * @property int $BeratBadan
 * @property int $Rambut
 * @property int $WarnaKulit
 * @property int $BentukMuka
 * @property string $CiriKhusus
 * @property string $CacatTubuh
 * @property int $IdSukuBangsa
 * @property string $DokumenAktaLahir
 * @property string $KegemaranHobi
 * @property int $IdJabatan
 * @property string $MasaKerja
 * @property string $FotoPegawai
 * @property int $KodeBankPegawai
 * @property string $NomorRekeningPegawai
 * @property string $CabangRekeningPegawai
 * @property string $NamaRekeningPegawai
 * @property string $FingerprintPegawai
 *
 * @property TrefGolonganruang $kodeGolonganRuang
 */
class TmstPegawai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmst_pegawai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NIK', 'NamaLengkap', 'KodeGolonganRuang', 'StatusPerkawinan', 'JenisPegawai', 'StatusPegawai', 'TanggalLahir', 'KabupatenTempatLahir', 'PropinsiTempatLahir', 'JenisKelamin', 'MasaKerja'], 'required'],
            [['KodeGolonganRuang', 'StatusPerkawinan', 'JenisPegawai', 'StatusPegawai', 'Agama', 'PropinsiTempatLahir', 'JenisKelamin', 'GolonganDarah', 'TinggiBadan', 'BeratBadan', 'Rambut', 'WarnaKulit', 'BentukMuka', 'IdSukuBangsa', 'IdJabatan', 'KodeBankPegawai'], 'integer'],
            [['TanggalLahir'], 'safe'],
            [['FingerprintPegawai'], 'string'],
            [['NIPLama', 'NIPBaru', 'NIK', 'NomorHandphone', 'NomorTelepon'], 'string', 'max' => 20],
            [['NamaLengkap', 'EmailPegawai', 'CiriKhusus', 'CacatTubuh', 'DokumenAktaLahir', 'KegemaranHobi', 'MasaKerja'], 'string', 'max' => 100],
            [['GelarDepan', 'GelarBelakang', 'KabupatenTempatLahir', 'NomorRekeningPegawai', 'CabangRekeningPegawai', 'NamaRekeningPegawai'], 'string', 'max' => 50],
            [['FotoPegawai'], 'string', 'max' => 30],
            [['KodeGolonganRuang'], 'exist', 'skipOnError' => true, 'targetClass' => TrefGolonganruang::className(), 'targetAttribute' => ['KodeGolonganRuang' => 'idGolonganRuang']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDPegawai' => 'Idpegawai',
            'NIPLama' => 'Niplama',
            'NIPBaru' => 'Nipbaru',
            'NIK' => 'Nik',
            'NamaLengkap' => 'Nama Lengkap',
            'GelarDepan' => 'Gelar Depan',
            'GelarBelakang' => 'Gelar Belakang',
            'KodeGolonganRuang' => 'Kode Golongan Ruang',
            'StatusPerkawinan' => 'Status Perkawinan',
            'JenisPegawai' => 'Jenis Pegawai',
            'StatusPegawai' => 'Status Pegawai',
            'Agama' => 'Agama',
            'EmailPegawai' => 'Email Pegawai',
            'NomorHandphone' => 'Nomor Handphone',
            'NomorTelepon' => 'Nomor Telepon',
            'TanggalLahir' => 'Tanggal Lahir',
            'KabupatenTempatLahir' => 'Kabupaten Tempat Lahir',
            'PropinsiTempatLahir' => 'Propinsi Tempat Lahir',
            'JenisKelamin' => 'Jenis Kelamin',
            'GolonganDarah' => 'Golongan Darah',
            'TinggiBadan' => 'Tinggi Badan',
            'BeratBadan' => 'Berat Badan',
            'Rambut' => 'Rambut',
            'WarnaKulit' => 'Warna Kulit',
            'BentukMuka' => 'Bentuk Muka',
            'CiriKhusus' => 'Ciri Khusus',
            'CacatTubuh' => 'Cacat Tubuh',
            'IdSukuBangsa' => 'Id Suku Bangsa',
            'DokumenAktaLahir' => 'Dokumen Akta Lahir',
            'KegemaranHobi' => 'Kegemaran Hobi',
            'IdJabatan' => 'Id Jabatan',
            'MasaKerja' => 'Masa Kerja',
            'FotoPegawai' => 'Foto Pegawai',
            'KodeBankPegawai' => 'Kode Bank Pegawai',
            'NomorRekeningPegawai' => 'Nomor Rekening Pegawai',
            'CabangRekeningPegawai' => 'Cabang Rekening Pegawai',
            'NamaRekeningPegawai' => 'Nama Rekening Pegawai',
            'FingerprintPegawai' => 'Fingerprint Pegawai',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeGolonganRuang()
    {
        return $this->hasOne(TrefGolonganruang::className(), ['idGolonganRuang' => 'KodeGolonganRuang']);
    }
}
