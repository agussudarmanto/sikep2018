<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatseminar".
 *
 * @property int $IdRiwayatSeminar
 * @property int $IdPegawai
 * @property int $IdJenisSeminar
 * @property string $NamaSeminar
 * @property string $LokasiSeminar
 * @property int $IdNegaraSeminar
 * @property string $IdStatusPembiayaan
 * @property string $IdStatusKedudukan
 * @property string $PeriodeSeminar
 * @property string $PenyelenggaraSeminar
 * @property string $DokumenSeminar
 */
class TransRiwayatseminar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatseminar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRiwayatSeminar'], 'required'],
            [['IdRiwayatSeminar', 'IdPegawai', 'IdJenisSeminar', 'IdNegaraSeminar'], 'integer'],
            [['NamaSeminar'], 'string', 'max' => 250],
            [['LokasiSeminar'], 'string', 'max' => 100],
            [['IdStatusPembiayaan', 'IdStatusKedudukan'], 'string', 'max' => 1],
            [['PeriodeSeminar'], 'string', 'max' => 7],
            [['PenyelenggaraSeminar'], 'string', 'max' => 200],
            [['DokumenSeminar'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRiwayatSeminar' => 'Id Riwayat Seminar',
            'IdPegawai' => 'Id Pegawai',
            'IdJenisSeminar' => 'Id Jenis Seminar',
            'NamaSeminar' => 'Nama Seminar',
            'LokasiSeminar' => 'Lokasi Seminar',
            'IdNegaraSeminar' => 'Id Negara Seminar',
            'IdStatusPembiayaan' => 'Id Status Pembiayaan',
            'IdStatusKedudukan' => 'Id Status Kedudukan',
            'PeriodeSeminar' => 'Periode Seminar',
            'PenyelenggaraSeminar' => 'Penyelenggara Seminar',
            'DokumenSeminar' => 'Dokumen Seminar',
        ];
    }
}
