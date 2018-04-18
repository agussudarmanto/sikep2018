<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_fitandpropertes".
 *
 * @property int $idFitandProperTest
 * @property int $idPegawai
 * @property string $tanggalTes
 * @property string $Tahun
 * @property int $NilaiFitandProperTest
 */
class TransFitandpropertes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_fitandpropertes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idFitandProperTest', 'idPegawai', 'tanggalTes', 'Tahun', 'NilaiFitandProperTest'], 'required'],
            [['idFitandProperTest', 'idPegawai', 'NilaiFitandProperTest'], 'integer'],
            [['tanggalTes', 'Tahun'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idFitandProperTest' => 'Id Fitand Proper Test',
            'idPegawai' => 'Id Pegawai',
            'tanggalTes' => 'Tanggal Tes',
            'Tahun' => 'Tahun',
            'NilaiFitandProperTest' => 'Nilai Fitand Proper Test',
        ];
    }
}
