<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmst_user".
 *
 * @property int $idUser
 * @property int $idPegawai
 * @property string $username
 * @property string $PASSWORD
 * @property int $idRole
 */
class TmstUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmst_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUser', 'username', 'PASSWORD'], 'required'],
            [['idUser', 'idPegawai', 'idRole'], 'integer'],
            [['username', 'PASSWORD'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUser' => 'Id User',
            'idPegawai' => 'Id Pegawai',
            'username' => 'Username',
            'PASSWORD' => 'Password',
            'idRole' => 'Id Role',
        ];
    }
}
