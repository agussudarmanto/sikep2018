<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_izinbelajar".
 *
 * @property int $idIzinBelajar
 * @property int $idPegawai
 * @property string $Nama
 * @property int $kodeSatker
 * @property int $IdGolonganRuang
 * @property string $pangkat_golongan
 * @property int $IdabatanPegawai
 * @property int $unitKerjaPegawai
 * @property string $tanggalSuratPermohonanIzin
 * @property string $asalSurat
 * @property string $nomorSuratIzinBelajar
 * @property int $IdTingkatPendidikan
 * @property int $idUniversitas
 * @property int $idJurusan
 * @property string $tahunMulaiIzinBelajar
 * @property string $tahunSelesaiIzinBelajar
 */
class TransIzinbelajar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_izinbelajar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idIzinBelajar', 'idPegawai', 'IdGolonganRuang', 'pangkat_golongan', 'IdabatanPegawai', 'unitKerjaPegawai', 'tanggalSuratPermohonanIzin', 'asalSurat', 'nomorSuratIzinBelajar', 'IdTingkatPendidikan', 'idUniversitas', 'idJurusan'], 'required'],
            [['idIzinBelajar', 'idPegawai', 'kodeSatker', 'IdGolonganRuang', 'IdabatanPegawai', 'unitKerjaPegawai', 'IdTingkatPendidikan', 'idUniversitas', 'idJurusan'], 'integer'],
            [['tanggalSuratPermohonanIzin'], 'safe'],
            [['Nama', 'asalSurat', 'nomorSuratIzinBelajar'], 'string', 'max' => 150],
            [['pangkat_golongan'], 'string', 'max' => 50],
            [['tahunMulaiIzinBelajar', 'tahunSelesaiIzinBelajar'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idIzinBelajar' => 'Id Izin Belajar',
            'idPegawai' => 'Id Pegawai',
            'Nama' => 'Nama',
            'kodeSatker' => 'Kode Satker',
            'IdGolonganRuang' => 'Id Golongan Ruang',
            'pangkat_golongan' => 'Pangkat Golongan',
            'IdabatanPegawai' => 'Idabatan Pegawai',
            'unitKerjaPegawai' => 'Unit Kerja Pegawai',
            'tanggalSuratPermohonanIzin' => 'Tanggal Surat Permohonan Izin',
            'asalSurat' => 'Asal Surat',
            'nomorSuratIzinBelajar' => 'Nomor Surat Izin Belajar',
            'IdTingkatPendidikan' => 'Id Tingkat Pendidikan',
            'idUniversitas' => 'Id Universitas',
            'idJurusan' => 'Id Jurusan',
            'tahunMulaiIzinBelajar' => 'Tahun Mulai Izin Belajar',
            'tahunSelesaiIzinBelajar' => 'Tahun Selesai Izin Belajar',
        ];
    }
}
