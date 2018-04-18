<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatdiklatteknis".
 *
 * @property int $idRiwayatDiklatTeknis
 * @property int $idPegawai
 * @property int $idJenisDiklatTeknis
 * @property int $idNegara
 * @property int $LamaDiklatTeknis
 * @property string $PenyelenggaraDiklatTeknis
 * @property string $NomorSertifikatDiklatTeknis
 * @property string $TanggalSertifikatDiklatTeknis
 * @property string $PejabatSertifikatDiklatTeknis
 * @property string $DokumenSertifikatDiklatTeknis
 */
class TransRiwayatdiklatteknis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatdiklatteknis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRiwayatDiklatTeknis', 'idPegawai', 'idJenisDiklatTeknis', 'LamaDiklatTeknis'], 'required'],
            [['idRiwayatDiklatTeknis', 'idPegawai', 'idJenisDiklatTeknis', 'idNegara', 'LamaDiklatTeknis'], 'integer'],
            [['TanggalSertifikatDiklatTeknis'], 'safe'],
            [['PenyelenggaraDiklatTeknis'], 'string', 'max' => 200],
            [['NomorSertifikatDiklatTeknis', 'PejabatSertifikatDiklatTeknis', 'DokumenSertifikatDiklatTeknis'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRiwayatDiklatTeknis' => 'Id Riwayat Diklat Teknis',
            'idPegawai' => 'Id Pegawai',
            'idJenisDiklatTeknis' => 'Id Jenis Diklat Teknis',
            'idNegara' => 'Id Negara',
            'LamaDiklatTeknis' => 'Lama Diklat Teknis',
            'PenyelenggaraDiklatTeknis' => 'Penyelenggara Diklat Teknis',
            'NomorSertifikatDiklatTeknis' => 'Nomor Sertifikat Diklat Teknis',
            'TanggalSertifikatDiklatTeknis' => 'Tanggal Sertifikat Diklat Teknis',
            'PejabatSertifikatDiklatTeknis' => 'Pejabat Sertifikat Diklat Teknis',
            'DokumenSertifikatDiklatTeknis' => 'Dokumen Sertifikat Diklat Teknis',
        ];
    }
}
