<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_angka_kredit".
 *
 * @property int $idAngkaKredit
 * @property int $idPegawai
 * @property int $idGolonganRuang
 * @property int $AngkaKreditPegawai
 */
class TransAngkaKredit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_angka_kredit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idAngkaKredit', 'idPegawai', 'idGolonganRuang', 'AngkaKreditPegawai'], 'required'],
            [['idAngkaKredit', 'idPegawai', 'idGolonganRuang', 'AngkaKreditPegawai'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idAngkaKredit' => 'Id Angka Kredit',
            'idPegawai' => 'Id Pegawai',
            'idGolonganRuang' => 'Id Golongan Ruang',
            'AngkaKreditPegawai' => 'Angka Kredit Pegawai',
        ];
    }
}
