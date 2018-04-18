<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tref_bentukmuka".
 *
 * @property int $idBentukMuka
 * @property string $namaBentukMuka
 */
class TrefBentukmuka extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_bentukmuka';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namaBentukMuka'], 'required'],
            [['namaBentukMuka'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idBentukMuka' => 'Id Bentuk Muka',
            'namaBentukMuka' => 'Nama Bentuk Muka',
        ];
    }
}
