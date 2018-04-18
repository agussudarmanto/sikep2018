<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulanpromosimutasi".
 *
 * @property int $idUsulanPromosiMutasi
 * @property int $TanggalUsulanPromosiMutasi
 * @property string $PeriodeUsulanPromosiMutasi
 * @property string $StatusUsulanPromosiMutasi
 */
class TransUsulanpromosimutasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulanpromosimutasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUsulanPromosiMutasi', 'TanggalUsulanPromosiMutasi', 'PeriodeUsulanPromosiMutasi', 'StatusUsulanPromosiMutasi'], 'required'],
            [['idUsulanPromosiMutasi', 'TanggalUsulanPromosiMutasi'], 'integer'],
            [['PeriodeUsulanPromosiMutasi', 'StatusUsulanPromosiMutasi'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUsulanPromosiMutasi' => 'Id Usulan Promosi Mutasi',
            'TanggalUsulanPromosiMutasi' => 'Tanggal Usulan Promosi Mutasi',
            'PeriodeUsulanPromosiMutasi' => 'Periode Usulan Promosi Mutasi',
            'StatusUsulanPromosiMutasi' => 'Status Usulan Promosi Mutasi',
        ];
    }
}
