<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatujiandinas".
 *
 * @property int $idRiwayatUjianDInas
 * @property int $idPegawai
 * @property string $TahunUjianDInas
 * @property int $NilaiUjianDinas
 * @property int $jenisUjian
 * @property string $NomorSertifikatUjian
 * @property string $TanggalSertifikatUjian
 * @property string $DokumenSertifikatUjian
 */
class TransRiwayatujiandinas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatujiandinas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRiwayatUjianDInas', 'idPegawai', 'TahunUjianDInas', 'NilaiUjianDinas', 'jenisUjian'], 'required'],
            [['idRiwayatUjianDInas', 'idPegawai', 'NilaiUjianDinas', 'jenisUjian'], 'integer'],
            [['TahunUjianDInas', 'TanggalSertifikatUjian'], 'safe'],
            [['NomorSertifikatUjian'], 'string', 'max' => 100],
            [['DokumenSertifikatUjian'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRiwayatUjianDInas' => 'Id Riwayat Ujian Dinas',
            'idPegawai' => 'Id Pegawai',
            'TahunUjianDInas' => 'Tahun Ujian Dinas',
            'NilaiUjianDinas' => 'Nilai Ujian Dinas',
            'jenisUjian' => 'Jenis Ujian',
            'NomorSertifikatUjian' => 'Nomor Sertifikat Ujian',
            'TanggalSertifikatUjian' => 'Tanggal Sertifikat Ujian',
            'DokumenSertifikatUjian' => 'Dokumen Sertifikat Ujian',
        ];
    }
}
