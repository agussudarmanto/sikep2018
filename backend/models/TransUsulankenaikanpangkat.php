<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulankenaikanpangkat".
 *
 * @property int $idUsulanKenaikanPangkat
 * @property int $idPegawai
 */
class TransUsulankenaikanpangkat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulankenaikanpangkat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUsulanKenaikanPangkat', 'idPegawai'], 'required'],
            [['idUsulanKenaikanPangkat', 'idPegawai'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUsulanKenaikanPangkat' => 'Id Usulan Kenaikan Pangkat',
            'idPegawai' => 'Id Pegawai',
        ];
    }
}
