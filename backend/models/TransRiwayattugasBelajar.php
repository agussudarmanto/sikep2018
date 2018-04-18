<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayattugas_belajar".
 *
 * @property int $IdRiwayatTugasBelajar
 * @property int $IdPegawai
 * @property string $TipeTugasBelajar
 * @property int $IdTingkatPendidikan
 * @property int $IdNegara
 * @property int $IdUniversitas
 * @property int $IdJurusan
 * @property int $IdStatusTugasBelajar
 * @property string $NomorSKTugasBelajar
 * @property string $TanggalSKTugasBelajar
 * @property string $PejabatSKTugasBelajar
 * @property string $DokumenSKTugasBelajar
 * @property string $TanggalPengajuanTugasBelajar
 * @property string $TanggalMulaiTugasBelajar
 * @property string $TanggalBerakhirTugasBelajar
 */
class TransRiwayattugasBelajar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayattugas_belajar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRiwayatTugasBelajar'], 'required'],
            [['IdRiwayatTugasBelajar', 'IdPegawai', 'IdTingkatPendidikan', 'IdNegara', 'IdUniversitas', 'IdJurusan', 'IdStatusTugasBelajar'], 'integer'],
            [['TanggalSKTugasBelajar', 'TanggalPengajuanTugasBelajar', 'TanggalMulaiTugasBelajar', 'TanggalBerakhirTugasBelajar'], 'safe'],
            [['TipeTugasBelajar'], 'string', 'max' => 1],
            [['NomorSKTugasBelajar'], 'string', 'max' => 100],
            [['PejabatSKTugasBelajar'], 'string', 'max' => 50],
            [['DokumenSKTugasBelajar'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRiwayatTugasBelajar' => 'Id Riwayat Tugas Belajar',
            'IdPegawai' => 'Id Pegawai',
            'TipeTugasBelajar' => 'Tipe Tugas Belajar',
            'IdTingkatPendidikan' => 'Id Tingkat Pendidikan',
            'IdNegara' => 'Id Negara',
            'IdUniversitas' => 'Id Universitas',
            'IdJurusan' => 'Id Jurusan',
            'IdStatusTugasBelajar' => 'Id Status Tugas Belajar',
            'NomorSKTugasBelajar' => 'Nomor Sktugas Belajar',
            'TanggalSKTugasBelajar' => 'Tanggal Sktugas Belajar',
            'PejabatSKTugasBelajar' => 'Pejabat Sktugas Belajar',
            'DokumenSKTugasBelajar' => 'Dokumen Sktugas Belajar',
            'TanggalPengajuanTugasBelajar' => 'Tanggal Pengajuan Tugas Belajar',
            'TanggalMulaiTugasBelajar' => 'Tanggal Mulai Tugas Belajar',
            'TanggalBerakhirTugasBelajar' => 'Tanggal Berakhir Tugas Belajar',
        ];
    }
}
