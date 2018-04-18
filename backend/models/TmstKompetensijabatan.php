<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmst_kompetensijabatan".
 *
 * @property int $IdKompetensiJabatan
 * @property int $IdJabatan
 * @property string $Kompetensi
 */
class TmstKompetensijabatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmst_kompetensijabatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdKompetensiJabatan', 'Kompetensi'], 'required'],
            [['IdKompetensiJabatan', 'IdJabatan'], 'integer'],
            [['Kompetensi'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdKompetensiJabatan' => 'Id Kompetensi Jabatan',
            'IdJabatan' => 'Id Jabatan',
            'Kompetensi' => 'Kompetensi',
        ];
    }
}
