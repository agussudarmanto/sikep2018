<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tref_statusperkawinan".
 *
 * @property int $idStatusKawin
 * @property string $namaStatusKawin
 */
class TrefStatusperkawinan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_statusperkawinan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namaStatusKawin'], 'required'],
            [['namaStatusKawin'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idStatusKawin' => 'Id Status Kawin',
            'namaStatusKawin' => 'Nama Status Kawin',
        ];
    }
}
