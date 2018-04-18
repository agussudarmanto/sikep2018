<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulanpensiun".
 *
 * @property int $idUsulanPensiun
 * @property int $TanggalUsulanPensiun
 * @property string $PeriodeUsulanPensiun
 * @property string $StatusUsulanPensiun
 */
class TransUsulanpensiun extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulanpensiun';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUsulanPensiun', 'TanggalUsulanPensiun', 'PeriodeUsulanPensiun', 'StatusUsulanPensiun'], 'required'],
            [['idUsulanPensiun', 'TanggalUsulanPensiun'], 'integer'],
            [['PeriodeUsulanPensiun', 'StatusUsulanPensiun'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUsulanPensiun' => 'Id Usulan Pensiun',
            'TanggalUsulanPensiun' => 'Tanggal Usulan Pensiun',
            'PeriodeUsulanPensiun' => 'Periode Usulan Pensiun',
            'StatusUsulanPensiun' => 'Status Usulan Pensiun',
        ];
    }
}
