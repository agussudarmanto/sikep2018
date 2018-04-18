<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_perilaku_kerja".
 *
 * @property int $IdPerilakuKerja
 * @property int $IdRiwayatSKP
 * @property int $OrientasiPelayanan
 * @property int $Integritas
 * @property int $Komitmen
 * @property int $Disiplin
 * @property int $Kerjasama
 * @property int $Kepemimpinan
 */
class TransPerilakuKerja extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_perilaku_kerja';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdPerilakuKerja'], 'required'],
            [['IdPerilakuKerja', 'IdRiwayatSKP', 'OrientasiPelayanan', 'Integritas', 'Komitmen', 'Disiplin', 'Kerjasama', 'Kepemimpinan'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdPerilakuKerja' => 'Id Perilaku Kerja',
            'IdRiwayatSKP' => 'Id Riwayat Skp',
            'OrientasiPelayanan' => 'Orientasi Pelayanan',
            'Integritas' => 'Integritas',
            'Komitmen' => 'Komitmen',
            'Disiplin' => 'Disiplin',
            'Kerjasama' => 'Kerjasama',
            'Kepemimpinan' => 'Kepemimpinan',
        ];
    }
}
