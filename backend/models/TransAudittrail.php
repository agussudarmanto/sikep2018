<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_audittrail".
 *
 * @property string $IdLogAktivitas
 * @property string $NamaTable
 * @property string $Atribut
 * @property string $IdUser
 * @property string $NewValue
 * @property int $deleted
 * @property string $TIMESTAMP
 */
class TransAudittrail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_audittrail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdLogAktivitas', 'NamaTable', 'Atribut', 'IdUser', 'NewValue', 'deleted'], 'required'],
            [['TIMESTAMP'], 'safe'],
            [['IdLogAktivitas', 'NamaTable', 'IdUser'], 'string', 'max' => 100],
            [['Atribut', 'NewValue'], 'string', 'max' => 200],
            [['deleted'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdLogAktivitas' => 'Id Log Aktivitas',
            'NamaTable' => 'Nama Table',
            'Atribut' => 'Atribut',
            'IdUser' => 'Id User',
            'NewValue' => 'New Value',
            'deleted' => 'Deleted',
            'TIMESTAMP' => 'Timestamp',
        ];
    }
}
