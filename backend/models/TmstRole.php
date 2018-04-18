<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmst_role".
 *
 * @property int $idRole
 * @property string $DeskripsiRole
 * @property int $Modul
 * @property int $Akses
 */
class TmstRole extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmst_role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRole', 'DeskripsiRole', 'Modul', 'Akses'], 'required'],
            [['idRole', 'Modul', 'Akses'], 'integer'],
            [['DeskripsiRole'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRole' => 'Id Role',
            'DeskripsiRole' => 'Deskripsi Role',
            'Modul' => 'Modul',
            'Akses' => 'Akses',
        ];
    }
}
