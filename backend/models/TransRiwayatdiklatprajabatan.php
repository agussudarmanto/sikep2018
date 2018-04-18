<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatdiklatprajabatan".
 *
 * @property int $idRiwayatDiklatPrajabatan
 * @property int $idPegawai
 * @property int $idNamaDiklatPrajabatan
 * @property int $idNegara
 * @property string $NamaDiklatPrajabatan
 * @property int $LamaDiklatPrajabatan
 * @property string $TanggalMulaiDiklatPrajabatan
 * @property string $TanggalAkhirDiklatPrajabatan
 * @property string $PenyelenggaraDiklatPrajabatan
 * @property string $NomorSertifikatDiklatPrajabatan
 * @property string $TanggalSertifikatDiklatPrajabatan
 * @property string $PejabatSertifikatDiklatPrajabatan
 * @property string $DokumenSertifikatDiklatPrajabatan
 */
class TransRiwayatdiklatprajabatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatdiklatprajabatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRiwayatDiklatPrajabatan', 'idPegawai', 'idNamaDiklatPrajabatan', 'idNegara', 'NamaDiklatPrajabatan'], 'required'],
            [['idRiwayatDiklatPrajabatan', 'idPegawai', 'idNamaDiklatPrajabatan', 'idNegara', 'LamaDiklatPrajabatan'], 'integer'],
            [['TanggalMulaiDiklatPrajabatan', 'TanggalAkhirDiklatPrajabatan', 'TanggalSertifikatDiklatPrajabatan'], 'safe'],
            [['NamaDiklatPrajabatan'], 'string', 'max' => 150],
            [['PenyelenggaraDiklatPrajabatan'], 'string', 'max' => 200],
            [['NomorSertifikatDiklatPrajabatan', 'PejabatSertifikatDiklatPrajabatan', 'DokumenSertifikatDiklatPrajabatan'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRiwayatDiklatPrajabatan' => 'Id Riwayat Diklat Prajabatan',
            'idPegawai' => 'Id Pegawai',
            'idNamaDiklatPrajabatan' => 'Id Nama Diklat Prajabatan',
            'idNegara' => 'Id Negara',
            'NamaDiklatPrajabatan' => 'Nama Diklat Prajabatan',
            'LamaDiklatPrajabatan' => 'Lama Diklat Prajabatan',
            'TanggalMulaiDiklatPrajabatan' => 'Tanggal Mulai Diklat Prajabatan',
            'TanggalAkhirDiklatPrajabatan' => 'Tanggal Akhir Diklat Prajabatan',
            'PenyelenggaraDiklatPrajabatan' => 'Penyelenggara Diklat Prajabatan',
            'NomorSertifikatDiklatPrajabatan' => 'Nomor Sertifikat Diklat Prajabatan',
            'TanggalSertifikatDiklatPrajabatan' => 'Tanggal Sertifikat Diklat Prajabatan',
            'PejabatSertifikatDiklatPrajabatan' => 'Pejabat Sertifikat Diklat Prajabatan',
            'DokumenSertifikatDiklatPrajabatan' => 'Dokumen Sertifikat Diklat Prajabatan',
        ];
    }
}
