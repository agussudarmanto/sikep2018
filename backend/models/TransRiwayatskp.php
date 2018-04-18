<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatskp".
 *
 * @property int $idRiwayatSKP
 * @property int $idPegawai
 * @property int $idRiwayatJabatanPegawai
 * @property string $TahunSKP
 * @property int $idPegawaiPejabatPenilai
 * @property int $idRiwayatJabatanPejabatPenilai
 * @property int $IdPegawaiAtasanPejabatPenilai
 * @property int $idRiwayatjabatanAtasanPejabatPenilai
 * @property string $KeberatanPegawaiDinilai
 * @property string $TanggapanPejabatPenilaiAtas
 * @property string $KeputusanAtasanJabatan
 * @property string $Rekomendasi
 * @property int $NilaiSKP
 * @property string $DokumenNilaiSKP
 */
class TransRiwayatskp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatskp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRiwayatSKP', 'idPegawai', 'TahunSKP', 'idPegawaiPejabatPenilai', 'IdPegawaiAtasanPejabatPenilai', 'NilaiSKP', 'DokumenNilaiSKP'], 'required'],
            [['idRiwayatSKP', 'idPegawai', 'idRiwayatJabatanPegawai', 'idPegawaiPejabatPenilai', 'idRiwayatJabatanPejabatPenilai', 'IdPegawaiAtasanPejabatPenilai', 'idRiwayatjabatanAtasanPejabatPenilai', 'NilaiSKP'], 'integer'],
            [['TahunSKP'], 'safe'],
            [['KeberatanPegawaiDinilai', 'TanggapanPejabatPenilaiAtas', 'KeputusanAtasanJabatan', 'Rekomendasi'], 'string', 'max' => 100],
            [['DokumenNilaiSKP'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRiwayatSKP' => 'Id Riwayat Skp',
            'idPegawai' => 'Id Pegawai',
            'idRiwayatJabatanPegawai' => 'Id Riwayat Jabatan Pegawai',
            'TahunSKP' => 'Tahun Skp',
            'idPegawaiPejabatPenilai' => 'Id Pegawai Pejabat Penilai',
            'idRiwayatJabatanPejabatPenilai' => 'Id Riwayat Jabatan Pejabat Penilai',
            'IdPegawaiAtasanPejabatPenilai' => 'Id Pegawai Atasan Pejabat Penilai',
            'idRiwayatjabatanAtasanPejabatPenilai' => 'Id Riwayatjabatan Atasan Pejabat Penilai',
            'KeberatanPegawaiDinilai' => 'Keberatan Pegawai Dinilai',
            'TanggapanPejabatPenilaiAtas' => 'Tanggapan Pejabat Penilai Atas',
            'KeputusanAtasanJabatan' => 'Keputusan Atasan Jabatan',
            'Rekomendasi' => 'Rekomendasi',
            'NilaiSKP' => 'Nilai Skp',
            'DokumenNilaiSKP' => 'Dokumen Nilai Skp',
        ];
    }
}
