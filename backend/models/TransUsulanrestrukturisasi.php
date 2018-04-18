<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulanrestrukturisasi".
 *
 * @property int $IdUsulanRestrukturasi
 * @property int $idSatker
 * @property string $namaSatker
 * @property string $TMTUsulanSatker
 * @property string $PejabatSatker
 */
class TransUsulanrestrukturisasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulanrestrukturisasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdUsulanRestrukturasi', 'idSatker', 'namaSatker', 'TMTUsulanSatker', 'PejabatSatker'], 'required'],
            [['IdUsulanRestrukturasi', 'idSatker'], 'integer'],
            [['TMTUsulanSatker'], 'safe'],
            [['namaSatker'], 'string', 'max' => 100],
            [['PejabatSatker'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUsulanRestrukturasi' => 'Id Usulan Restrukturasi',
            'idSatker' => 'Id Satker',
            'namaSatker' => 'Nama Satker',
            'TMTUsulanSatker' => 'Tmtusulan Satker',
            'PejabatSatker' => 'Pejabat Satker',
        ];
    }
}
