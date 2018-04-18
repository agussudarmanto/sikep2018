<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_keg_tugas_jabatan_detail".
 *
 * @property int $idKegiatanTugasJabatan
 * @property int $idSKPDetil
 * @property string $KegiatanTugasJabatan
 * @property int $TargetAngkaKredit
 * @property int $RealisasiAngkaKredit
 * @property int $TargetOutput
 * @property string $RealisasiOutput
 * @property string $TargetMutu
 * @property string $RealisasiMutu
 * @property int $TargetWaktu
 * @property string $RealisasiWaktu
 * @property double $TargetBiaya
 * @property string $RealisasiBiaya
 */
class TransKegTugasJabatanDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_keg_tugas_jabatan_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idKegiatanTugasJabatan', 'KegiatanTugasJabatan', 'RealisasiOutput', 'TargetMutu', 'RealisasiWaktu', 'RealisasiBiaya'], 'required'],
            [['idKegiatanTugasJabatan', 'idSKPDetil', 'TargetAngkaKredit', 'RealisasiAngkaKredit', 'TargetOutput', 'TargetWaktu'], 'integer'],
            [['TargetBiaya'], 'number'],
            [['KegiatanTugasJabatan', 'RealisasiOutput', 'TargetMutu', 'RealisasiWaktu', 'RealisasiBiaya'], 'string', 'max' => 250],
            [['RealisasiMutu'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idKegiatanTugasJabatan' => 'Id Kegiatan Tugas Jabatan',
            'idSKPDetil' => 'Id Skpdetil',
            'KegiatanTugasJabatan' => 'Kegiatan Tugas Jabatan',
            'TargetAngkaKredit' => 'Target Angka Kredit',
            'RealisasiAngkaKredit' => 'Realisasi Angka Kredit',
            'TargetOutput' => 'Target Output',
            'RealisasiOutput' => 'Realisasi Output',
            'TargetMutu' => 'Target Mutu',
            'RealisasiMutu' => 'Realisasi Mutu',
            'TargetWaktu' => 'Target Waktu',
            'RealisasiWaktu' => 'Realisasi Waktu',
            'TargetBiaya' => 'Target Biaya',
            'RealisasiBiaya' => 'Realisasi Biaya',
        ];
    }
}
