<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatjabatan".
 *
 * @property int $idRiwayatJabatanPegawai
 * @property int $idPegawai
 * @property int $idPegawaiAtasan
 * @property int $idSatker
 * @property string $TMTJabatanMulai
 * @property string $TMTJabatanSelesai
 * @property int $idNamaJabatan
 * @property string $TMTEselon
 * @property int $AngkaKredit
 * @property string $NomorSK
 * @property string $TanggalSK
 * @property string $PejabatSK
 * @property int $idKPPN
 * @property string $LokasiTASPEN
 * @property string $DokumenSK
 * @property string $TanggalPelantikan
 * @property string $NomorSPP
 * @property string $TanggalSPP
 * @property string $PejabatSPP
 * @property string $DokumenSPP
 * @property string $TMT_SPMT
 * @property string $NomorSPMT
 * @property string $TanggalSPMT
 * @property string $PejabatSPMT
 * @property string $Dokumen_SPMT
 * @property string $lembagaPenerbitSKFungsional
 * @property string $flagDiperbantukandiMA
 * @property string $flagDiperbantukandiLuar
 * @property string $flagAssignment
 * @property string $flagAktif
 */
class TransRiwayatjabatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatjabatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRiwayatJabatanPegawai', 'idPegawai', 'idSatker', 'TMTJabatanMulai', 'idNamaJabatan', 'TMTEselon', 'NomorSK', 'LokasiTASPEN', 'flagDiperbantukandiMA', 'flagDiperbantukandiLuar', 'flagAssignment', 'flagAktif'], 'required'],
            [['idRiwayatJabatanPegawai', 'idPegawai', 'idPegawaiAtasan', 'idSatker', 'idNamaJabatan', 'AngkaKredit', 'idKPPN'], 'integer'],
            [['TMTJabatanMulai', 'TMTJabatanSelesai', 'TMTEselon', 'TanggalSK', 'TanggalPelantikan', 'TanggalSPP', 'TMT_SPMT', 'TanggalSPMT'], 'safe'],
            [['NomorSK', 'PejabatSK', 'LokasiTASPEN', 'DokumenSK', 'NomorSPP', 'PejabatSPP', 'DokumenSPP', 'NomorSPMT', 'PejabatSPMT', 'Dokumen_SPMT', 'lembagaPenerbitSKFungsional'], 'string', 'max' => 50],
            [['flagDiperbantukandiMA', 'flagDiperbantukandiLuar', 'flagAssignment', 'flagAktif'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRiwayatJabatanPegawai' => 'Id Riwayat Jabatan Pegawai',
            'idPegawai' => 'Id Pegawai',
            'idPegawaiAtasan' => 'Id Pegawai Atasan',
            'idSatker' => 'Id Satker',
            'TMTJabatanMulai' => 'Tmtjabatan Mulai',
            'TMTJabatanSelesai' => 'Tmtjabatan Selesai',
            'idNamaJabatan' => 'Id Nama Jabatan',
            'TMTEselon' => 'Tmteselon',
            'AngkaKredit' => 'Angka Kredit',
            'NomorSK' => 'Nomor Sk',
            'TanggalSK' => 'Tanggal Sk',
            'PejabatSK' => 'Pejabat Sk',
            'idKPPN' => 'Id Kppn',
            'LokasiTASPEN' => 'Lokasi Taspen',
            'DokumenSK' => 'Dokumen Sk',
            'TanggalPelantikan' => 'Tanggal Pelantikan',
            'NomorSPP' => 'Nomor Spp',
            'TanggalSPP' => 'Tanggal Spp',
            'PejabatSPP' => 'Pejabat Spp',
            'DokumenSPP' => 'Dokumen Spp',
            'TMT_SPMT' => 'Tmt  Spmt',
            'NomorSPMT' => 'Nomor Spmt',
            'TanggalSPMT' => 'Tanggal Spmt',
            'PejabatSPMT' => 'Pejabat Spmt',
            'Dokumen_SPMT' => 'Dokumen  Spmt',
            'lembagaPenerbitSKFungsional' => 'Lembaga Penerbit Skfungsional',
            'flagDiperbantukandiMA' => 'Flag Diperbantukandi Ma',
            'flagDiperbantukandiLuar' => 'Flag Diperbantukandi Luar',
            'flagAssignment' => 'Flag Assignment',
            'flagAktif' => 'Flag Aktif',
        ];
    }
}
