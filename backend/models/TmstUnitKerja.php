<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmst_unit_kerja".
 *
 * @property int $IdUnitKerja
 * @property int $idParentUnitKerja
 * @property int $LevelUnitKerja
 * @property int $KodeUnitKerja
 * @property string $NamaUnitKerja
 * @property int $UrutanUnitKerja
 */
class TmstUnitKerja extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmst_unit_kerja';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdUnitKerja', 'idParentUnitKerja', 'LevelUnitKerja', 'KodeUnitKerja'], 'required'],
            [['IdUnitKerja', 'idParentUnitKerja', 'LevelUnitKerja', 'KodeUnitKerja', 'UrutanUnitKerja'], 'integer'],
            [['NamaUnitKerja'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUnitKerja' => 'Id Unit Kerja',
            'idParentUnitKerja' => 'Id Parent Unit Kerja',
            'LevelUnitKerja' => 'Level Unit Kerja',
            'KodeUnitKerja' => 'Kode Unit Kerja',
            'NamaUnitKerja' => 'Nama Unit Kerja',
            'UrutanUnitKerja' => 'Urutan Unit Kerja',
        ];
    }
}
