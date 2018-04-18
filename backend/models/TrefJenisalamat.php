<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tref_jenisalamat".
 *
 * @property int $IdJenisAlamat
 * @property string $NamaJenisAlamat
 */
class TrefJenisalamat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_jenisalamat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaJenisAlamat'], 'required'],
            [['NamaJenisAlamat'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdJenisAlamat' => 'Id Jenis Alamat',
            'NamaJenisAlamat' => 'Nama Jenis Alamat',
        ];
    }
}
