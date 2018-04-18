<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmst_satker".
 *
 * @property int $IdSatker
 * @property int $ParentIdSatker
 * @property int $LevelSatker
 * @property string $KodeSatker
 * @property int $IdKlasPengadilan
 * @property int $IdBandingLingkunganPeradilan
 * @property int $IdJenisSatker
 * @property string $NamaSatker
 * @property int $MinimalJumlahHakim
 * @property int $MaksimalJumlahHakim
 * @property int $MinimalJumlahPanitera
 * @property int $MaksimalJumlahPanitera
 * @property string $AlamatSatker
 * @property int $idPropinsiSatker
 * @property int $idKabupatenSatker
 * @property int $IdPulauSatker
 * @property string $WebsiteSatker
 * @property string $TeleponSatker
 */
class TmstSatker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmst_satker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdSatker', 'KodeSatker', 'IdKlasPengadilan', 'IdJenisSatker', 'NamaSatker'], 'required'],
            [['IdSatker', 'ParentIdSatker', 'LevelSatker', 'IdKlasPengadilan', 'IdBandingLingkunganPeradilan', 'IdJenisSatker', 'MinimalJumlahHakim', 'MaksimalJumlahHakim', 'MinimalJumlahPanitera', 'MaksimalJumlahPanitera', 'idPropinsiSatker', 'idKabupatenSatker', 'IdPulauSatker'], 'integer'],
            [['KodeSatker'], 'string', 'max' => 8],
            [['NamaSatker', 'AlamatSatker'], 'string', 'max' => 100],
            [['WebsiteSatker'], 'string', 'max' => 50],
            [['TeleponSatker'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdSatker' => 'Id Satker',
            'ParentIdSatker' => 'Parent Id Satker',
            'LevelSatker' => 'Level Satker',
            'KodeSatker' => 'Kode Satker',
            'IdKlasPengadilan' => 'Id Klas Pengadilan',
            'IdBandingLingkunganPeradilan' => 'Id Banding Lingkungan Peradilan',
            'IdJenisSatker' => 'Id Jenis Satker',
            'NamaSatker' => 'Nama Satker',
            'MinimalJumlahHakim' => 'Minimal Jumlah Hakim',
            'MaksimalJumlahHakim' => 'Maksimal Jumlah Hakim',
            'MinimalJumlahPanitera' => 'Minimal Jumlah Panitera',
            'MaksimalJumlahPanitera' => 'Maksimal Jumlah Panitera',
            'AlamatSatker' => 'Alamat Satker',
            'idPropinsiSatker' => 'Id Propinsi Satker',
            'idKabupatenSatker' => 'Id Kabupaten Satker',
            'IdPulauSatker' => 'Id Pulau Satker',
            'WebsiteSatker' => 'Website Satker',
            'TeleponSatker' => 'Telepon Satker',
        ];
    }
}
