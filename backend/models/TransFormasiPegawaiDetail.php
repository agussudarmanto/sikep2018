<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_formasi_pegawai_detail".
 *
 * @property int $IdFormasiPegawai
 * @property int $KodeSatker
 * @property int $idUnitKerja
 * @property int $IdJabatan
 * @property int $IdTingkatPendidikanMinimal
 * @property string $SyaratAdministrasi
 * @property int $JumlahKebutuhan
 * @property int $usiaMinimal
 * @property int $usiaMaksimal
 */
class TransFormasiPegawaiDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_formasi_pegawai_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdFormasiPegawai', 'KodeSatker', 'idUnitKerja', 'IdJabatan', 'IdTingkatPendidikanMinimal', 'SyaratAdministrasi', 'JumlahKebutuhan', 'usiaMinimal', 'usiaMaksimal'], 'required'],
            [['IdFormasiPegawai', 'KodeSatker', 'idUnitKerja', 'IdJabatan', 'IdTingkatPendidikanMinimal', 'JumlahKebutuhan', 'usiaMinimal', 'usiaMaksimal'], 'integer'],
            [['SyaratAdministrasi'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdFormasiPegawai' => 'Id Formasi Pegawai',
            'KodeSatker' => 'Kode Satker',
            'idUnitKerja' => 'Id Unit Kerja',
            'IdJabatan' => 'Id Jabatan',
            'IdTingkatPendidikanMinimal' => 'Id Tingkat Pendidikan Minimal',
            'SyaratAdministrasi' => 'Syarat Administrasi',
            'JumlahKebutuhan' => 'Jumlah Kebutuhan',
            'usiaMinimal' => 'Usia Minimal',
            'usiaMaksimal' => 'Usia Maksimal',
        ];
    }
}
