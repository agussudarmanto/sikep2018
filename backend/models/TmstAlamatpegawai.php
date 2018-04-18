<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmst_alamatpegawai".
 *
 * @property int $AlamatPegawaiId
 * @property int $IdPegawai
 * @property string $AlamatTempatTinggal
 * @property int $JenisAlamat
 * @property string $KelurahanTempatTinggal
 * @property int $KodePropinsiTempatTinggal
 * @property string $KodeKabupatenTempatTinggal
 * @property string $KodeKecamatan
 * @property string $NomorTeleponAlamat
 * @property string $StatusKepemilikanTempatTinggal
 * @property int $FlagHomeBase
 */
class TmstAlamatpegawai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmst_alamatpegawai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AlamatPegawaiId', 'IdPegawai'], 'required'],
            [['AlamatPegawaiId', 'IdPegawai', 'JenisAlamat', 'KodePropinsiTempatTinggal'], 'integer'],
            [['AlamatTempatTinggal', 'KelurahanTempatTinggal', 'KodeKabupatenTempatTinggal', 'KodeKecamatan', 'StatusKepemilikanTempatTinggal'], 'string', 'max' => 100],
            [['NomorTeleponAlamat'], 'string', 'max' => 50],
            [['FlagHomeBase'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AlamatPegawaiId' => 'Alamat Pegawai ID',
            'IdPegawai' => 'Id Pegawai',
            'AlamatTempatTinggal' => 'Alamat Tempat Tinggal',
            'JenisAlamat' => 'Jenis Alamat',
            'KelurahanTempatTinggal' => 'Kelurahan Tempat Tinggal',
            'KodePropinsiTempatTinggal' => 'Kode Propinsi Tempat Tinggal',
            'KodeKabupatenTempatTinggal' => 'Kode Kabupaten Tempat Tinggal',
            'KodeKecamatan' => 'Kode Kecamatan',
            'NomorTeleponAlamat' => 'Nomor Telepon Alamat',
            'StatusKepemilikanTempatTinggal' => 'Status Kepemilikan Tempat Tinggal',
            'FlagHomeBase' => 'Flag Home Base',
        ];
    }
}
