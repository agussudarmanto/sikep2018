<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tref_jeniskelamin".
 *
 * @property int $idJenisKelamin
 * @property string $NamajenisKelamin
 */
class TrefJeniskelamin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_jeniskelamin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamajenisKelamin'], 'required'],
            [['NamajenisKelamin'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idJenisKelamin' => 'Id Jenis Kelamin',
            'NamajenisKelamin' => 'Namajenis Kelamin',
        ];
    }
}
