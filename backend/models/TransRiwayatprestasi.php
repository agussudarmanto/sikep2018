<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatprestasi".
 *
 * @property int $IdRiwayatPrestasi
 * @property int $IdPegawai
 * @property string $TahunPrestasi
 * @property string $NamaPrestasi
 * @property string $TingkatPrestasi
 * @property string $Dokumen
 */
class TransRiwayatprestasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatprestasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRiwayatPrestasi', 'IdPegawai', 'TahunPrestasi', 'NamaPrestasi'], 'required'],
            [['IdRiwayatPrestasi', 'IdPegawai'], 'integer'],
            [['TahunPrestasi'], 'safe'],
            [['NamaPrestasi', 'Dokumen'], 'string', 'max' => 100],
            [['TingkatPrestasi'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRiwayatPrestasi' => 'Id Riwayat Prestasi',
            'IdPegawai' => 'Id Pegawai',
            'TahunPrestasi' => 'Tahun Prestasi',
            'NamaPrestasi' => 'Nama Prestasi',
            'TingkatPrestasi' => 'Tingkat Prestasi',
            'Dokumen' => 'Dokumen',
        ];
    }
}
