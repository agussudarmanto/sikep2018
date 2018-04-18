<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_budgeting_unit".
 *
 * @property int $IdBudgetingUnit
 * @property string $TahunAnggaran
 * @property int $idUnitKerja
 * @property int $idSatker
 * @property string $tanggalPengajuan
 * @property string $tanggalDisetujui
 * @property string $PejabatBudgeting
 */
class TransBudgetingUnit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_budgeting_unit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdBudgetingUnit', 'TahunAnggaran', 'idUnitKerja', 'idSatker', 'tanggalPengajuan', 'tanggalDisetujui', 'PejabatBudgeting'], 'required'],
            [['IdBudgetingUnit', 'idUnitKerja', 'idSatker'], 'integer'],
            [['TahunAnggaran', 'tanggalPengajuan', 'tanggalDisetujui'], 'safe'],
            [['PejabatBudgeting'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdBudgetingUnit' => 'Id Budgeting Unit',
            'TahunAnggaran' => 'Tahun Anggaran',
            'idUnitKerja' => 'Id Unit Kerja',
            'idSatker' => 'Id Satker',
            'tanggalPengajuan' => 'Tanggal Pengajuan',
            'tanggalDisetujui' => 'Tanggal Disetujui',
            'PejabatBudgeting' => 'Pejabat Budgeting',
        ];
    }
}
