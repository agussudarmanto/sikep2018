<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_role_workflow_detail".
 *
 * @property int $IdWorkflow
 * @property int $NomorTahapan
 * @property string $NamaTahapan
 * @property int $IdJabatanStruktural
 * @property int $IdJabatanFungsional
 * @property string $TIMESTAMP
 * @property string $STATUS
 */
class TransRoleWorkflowDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_role_workflow_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdWorkflow', 'NomorTahapan', 'NamaTahapan', 'IdJabatanStruktural', 'IdJabatanFungsional', 'STATUS'], 'required'],
            [['IdWorkflow', 'NomorTahapan', 'IdJabatanStruktural', 'IdJabatanFungsional'], 'integer'],
            [['TIMESTAMP'], 'safe'],
            [['NamaTahapan'], 'string', 'max' => 255],
            [['STATUS'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdWorkflow' => 'Id Workflow',
            'NomorTahapan' => 'Nomor Tahapan',
            'NamaTahapan' => 'Nama Tahapan',
            'IdJabatanStruktural' => 'Id Jabatan Struktural',
            'IdJabatanFungsional' => 'Id Jabatan Fungsional',
            'TIMESTAMP' => 'Timestamp',
            'STATUS' => 'Status',
        ];
    }
}
