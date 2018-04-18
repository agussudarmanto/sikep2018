<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_assesmentindividu".
 *
 * @property int $IdAssesementIndividu
 * @property int $IdPegawai
 * @property string $TanggalAssesment
 * @property string $HasilAssesment
 * @property string $DokumenHasilAssesment
 */
class TransAssesmentindividu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_assesmentindividu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdAssesementIndividu', 'IdPegawai', 'TanggalAssesment', 'HasilAssesment'], 'required'],
            [['IdAssesementIndividu', 'IdPegawai'], 'integer'],
            [['TanggalAssesment'], 'safe'],
            [['HasilAssesment'], 'string', 'max' => 20],
            [['DokumenHasilAssesment'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdAssesementIndividu' => 'Id Assesement Individu',
            'IdPegawai' => 'Id Pegawai',
            'TanggalAssesment' => 'Tanggal Assesment',
            'HasilAssesment' => 'Hasil Assesment',
            'DokumenHasilAssesment' => 'Dokumen Hasil Assesment',
        ];
    }
}
