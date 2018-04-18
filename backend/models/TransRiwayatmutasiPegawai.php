<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatmutasi_pegawai".
 *
 * @property int $idRiwayatMutasiPegawai
 * @property int $idPegawai
 * @property int $idSatkerAsal
 * @property int $idSatkerTujuan
 * @property string $TanggalEfektifMutasi
 * @property int $IdUnitKerjaAsal
 * @property int $IdUnitKerjaTujuan
 * @property int $IdJabatanAsal
 * @property int $IdJabatanTujuan
 * @property int $DokumenSK
 * @property int $BiayaMutasi
 */
class TransRiwayatmutasiPegawai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatmutasi_pegawai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRiwayatMutasiPegawai', 'idPegawai', 'idSatkerAsal', 'idSatkerTujuan', 'TanggalEfektifMutasi', 'IdUnitKerjaAsal', 'IdUnitKerjaTujuan', 'IdJabatanAsal', 'IdJabatanTujuan', 'BiayaMutasi'], 'required'],
            [['idRiwayatMutasiPegawai', 'idPegawai', 'idSatkerAsal', 'idSatkerTujuan', 'IdUnitKerjaAsal', 'IdUnitKerjaTujuan', 'IdJabatanAsal', 'IdJabatanTujuan', 'DokumenSK', 'BiayaMutasi'], 'integer'],
            [['TanggalEfektifMutasi'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRiwayatMutasiPegawai' => 'Id Riwayat Mutasi Pegawai',
            'idPegawai' => 'Id Pegawai',
            'idSatkerAsal' => 'Id Satker Asal',
            'idSatkerTujuan' => 'Id Satker Tujuan',
            'TanggalEfektifMutasi' => 'Tanggal Efektif Mutasi',
            'IdUnitKerjaAsal' => 'Id Unit Kerja Asal',
            'IdUnitKerjaTujuan' => 'Id Unit Kerja Tujuan',
            'IdJabatanAsal' => 'Id Jabatan Asal',
            'IdJabatanTujuan' => 'Id Jabatan Tujuan',
            'DokumenSK' => 'Dokumen Sk',
            'BiayaMutasi' => 'Biaya Mutasi',
        ];
    }
}
