<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulanpakjabatanfungsional".
 *
 * @property int $idUsulanPAKJabFung
 * @property int $idPegawai
 * @property string $TanggalUsulan
 * @property string $NomorPAK
 * @property int $idRefJabFung
 * @property int $angkakredit
 */
class TransUsulanpakjabatanfungsional extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulanpakjabatanfungsional';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUsulanPAKJabFung', 'idPegawai', 'TanggalUsulan', 'NomorPAK', 'idRefJabFung', 'angkakredit'], 'required'],
            [['idUsulanPAKJabFung', 'idPegawai', 'idRefJabFung', 'angkakredit'], 'integer'],
            [['TanggalUsulan'], 'safe'],
            [['NomorPAK'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUsulanPAKJabFung' => 'Id Usulan Pakjab Fung',
            'idPegawai' => 'Id Pegawai',
            'TanggalUsulan' => 'Tanggal Usulan',
            'NomorPAK' => 'Nomor Pak',
            'idRefJabFung' => 'Id Ref Jab Fung',
            'angkakredit' => 'Angkakredit',
        ];
    }
}
