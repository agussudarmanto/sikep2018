<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatdiklatfungsional".
 *
 * @property int $IdRiwayatDiklatFungsional
 * @property int $IdPegawai
 * @property int $IdDiklatFungsionalJenis
 * @property int $IdFungsionalPerjenjangan
 * @property int $IdFungsionalKelompok
 * @property int $LamaDiklatFungsional
 * @property string $PenyelenggaraDiklatFungsional
 * @property string $NomorSertifikatDiklatFungsional
 * @property string $TanggalSertifikatDiklatFungsional
 * @property string $PejabatSertifikatDiklatFungsional
 * @property string $DokumenSertifikatDiklatFungsional
 */
class TransRiwayatdiklatfungsional extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatdiklatfungsional';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRiwayatDiklatFungsional', 'IdPegawai', 'IdDiklatFungsionalJenis'], 'required'],
            [['IdRiwayatDiklatFungsional', 'IdPegawai', 'IdDiklatFungsionalJenis', 'IdFungsionalPerjenjangan', 'IdFungsionalKelompok', 'LamaDiklatFungsional'], 'integer'],
            [['TanggalSertifikatDiklatFungsional'], 'safe'],
            [['PenyelenggaraDiklatFungsional'], 'string', 'max' => 200],
            [['NomorSertifikatDiklatFungsional', 'PejabatSertifikatDiklatFungsional', 'DokumenSertifikatDiklatFungsional'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRiwayatDiklatFungsional' => 'Id Riwayat Diklat Fungsional',
            'IdPegawai' => 'Id Pegawai',
            'IdDiklatFungsionalJenis' => 'Id Diklat Fungsional Jenis',
            'IdFungsionalPerjenjangan' => 'Id Fungsional Perjenjangan',
            'IdFungsionalKelompok' => 'Id Fungsional Kelompok',
            'LamaDiklatFungsional' => 'Lama Diklat Fungsional',
            'PenyelenggaraDiklatFungsional' => 'Penyelenggara Diklat Fungsional',
            'NomorSertifikatDiklatFungsional' => 'Nomor Sertifikat Diklat Fungsional',
            'TanggalSertifikatDiklatFungsional' => 'Tanggal Sertifikat Diklat Fungsional',
            'PejabatSertifikatDiklatFungsional' => 'Pejabat Sertifikat Diklat Fungsional',
            'DokumenSertifikatDiklatFungsional' => 'Dokumen Sertifikat Diklat Fungsional',
        ];
    }
}
