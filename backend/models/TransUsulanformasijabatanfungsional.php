<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulanformasijabatanfungsional".
 *
 * @property int $IdFormasiJabatanFungsional
 * @property string $TahunFormasi
 * @property int $IdJabatanFungsional
 * @property int $JumlahKebutuhan
 * @property string $TanggalUsulan
 * @property string $NomorSKFormasiPegawai
 * @property string $DokumenSKFormasiPegawai
 */
class TransUsulanformasijabatanfungsional extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulanformasijabatanfungsional';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdFormasiJabatanFungsional', 'TahunFormasi', 'IdJabatanFungsional', 'JumlahKebutuhan', 'TanggalUsulan', 'NomorSKFormasiPegawai', 'DokumenSKFormasiPegawai'], 'required'],
            [['IdFormasiJabatanFungsional', 'IdJabatanFungsional', 'JumlahKebutuhan'], 'integer'],
            [['TahunFormasi', 'TanggalUsulan'], 'safe'],
            [['NomorSKFormasiPegawai'], 'string', 'max' => 50],
            [['DokumenSKFormasiPegawai'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdFormasiJabatanFungsional' => 'Id Formasi Jabatan Fungsional',
            'TahunFormasi' => 'Tahun Formasi',
            'IdJabatanFungsional' => 'Id Jabatan Fungsional',
            'JumlahKebutuhan' => 'Jumlah Kebutuhan',
            'TanggalUsulan' => 'Tanggal Usulan',
            'NomorSKFormasiPegawai' => 'Nomor Skformasi Pegawai',
            'DokumenSKFormasiPegawai' => 'Dokumen Skformasi Pegawai',
        ];
    }
}
