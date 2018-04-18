<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_skp_detail".
 *
 * @property int $idSKPDetil
 * @property int $idRiwayatSKP
 * @property string $TugasTambahan
 * @property string $Kreativitias
 */
class TransSkpDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_skp_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idSKPDetil', 'idRiwayatSKP'], 'required'],
            [['idSKPDetil', 'idRiwayatSKP'], 'integer'],
            [['TugasTambahan', 'Kreativitias'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idSKPDetil' => 'Id Skpdetil',
            'idRiwayatSKP' => 'Id Riwayat Skp',
            'TugasTambahan' => 'Tugas Tambahan',
            'Kreativitias' => 'Kreativitias',
        ];
    }
}
