<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tref_jenisseminar".
 *
 * @property int $IdJenisSeminar
 * @property string $NamaJenisSeminar
 */
class TrefJenisseminar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_jenisseminar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaJenisSeminar'], 'required'],
            [['NamaJenisSeminar'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdJenisSeminar' => 'Id Jenis Seminar',
            'NamaJenisSeminar' => 'Nama Jenis Seminar',
        ];
    }
}
