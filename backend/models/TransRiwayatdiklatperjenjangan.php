<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatdiklatperjenjangan".
 *
 * @property int $IdRiwayatDiklatPerjenjangan
 * @property int $IdPegawai
 * @property int $IdDiklatPerjenjangan
 * @property int $AngkatanRiwayatDiklatPerjenjangan
 * @property string $TahunRiwayatDiklatPerjenjangan
 * @property int $LamaDiklatPerjenjangan
 * @property string $PenyelenggaraDiklatPerjenjangan
 * @property int $PeringkatDiklatPerjenjangan
 * @property int $IdKualifikasiKelulusan
 * @property string $NomorSertifikatDiklatPerjenjangan
 * @property string $TanggalSertifikatDiklatPerjenjangan
 * @property string $PejabatSertifikatDiklatPerjenjangan
 * @property string $DokumenSertifikatDiklatPerjenjangan
 */
class TransRiwayatdiklatperjenjangan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatdiklatperjenjangan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRiwayatDiklatPerjenjangan', 'IdPegawai'], 'required'],
            [['IdRiwayatDiklatPerjenjangan', 'IdPegawai', 'IdDiklatPerjenjangan', 'AngkatanRiwayatDiklatPerjenjangan', 'LamaDiklatPerjenjangan', 'PeringkatDiklatPerjenjangan', 'IdKualifikasiKelulusan'], 'integer'],
            [['TahunRiwayatDiklatPerjenjangan', 'TanggalSertifikatDiklatPerjenjangan'], 'safe'],
            [['PenyelenggaraDiklatPerjenjangan'], 'string', 'max' => 200],
            [['NomorSertifikatDiklatPerjenjangan', 'PejabatSertifikatDiklatPerjenjangan', 'DokumenSertifikatDiklatPerjenjangan'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRiwayatDiklatPerjenjangan' => 'Id Riwayat Diklat Perjenjangan',
            'IdPegawai' => 'Id Pegawai',
            'IdDiklatPerjenjangan' => 'Id Diklat Perjenjangan',
            'AngkatanRiwayatDiklatPerjenjangan' => 'Angkatan Riwayat Diklat Perjenjangan',
            'TahunRiwayatDiklatPerjenjangan' => 'Tahun Riwayat Diklat Perjenjangan',
            'LamaDiklatPerjenjangan' => 'Lama Diklat Perjenjangan',
            'PenyelenggaraDiklatPerjenjangan' => 'Penyelenggara Diklat Perjenjangan',
            'PeringkatDiklatPerjenjangan' => 'Peringkat Diklat Perjenjangan',
            'IdKualifikasiKelulusan' => 'Id Kualifikasi Kelulusan',
            'NomorSertifikatDiklatPerjenjangan' => 'Nomor Sertifikat Diklat Perjenjangan',
            'TanggalSertifikatDiklatPerjenjangan' => 'Tanggal Sertifikat Diklat Perjenjangan',
            'PejabatSertifikatDiklatPerjenjangan' => 'Pejabat Sertifikat Diklat Perjenjangan',
            'DokumenSertifikatDiklatPerjenjangan' => 'Dokumen Sertifikat Diklat Perjenjangan',
        ];
    }
}
