<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatdp3".
 *
 * @property int $IdRiwayatDP3
 * @property int $IdPegawai
 * @property string $TahunDP3
 * @property int $NIPPejabatPenilai
 * @property int $NIPAtasanPejabatPenilai
 * @property int $NilaiDP3
 * @property string $DokumenHasilPenilaian
 */
class TransRiwayatdp3 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatdp3';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRiwayatDP3', 'IdPegawai', 'TahunDP3', 'NIPPejabatPenilai', 'NilaiDP3', 'DokumenHasilPenilaian'], 'required'],
            [['IdRiwayatDP3', 'IdPegawai', 'NIPPejabatPenilai', 'NIPAtasanPejabatPenilai', 'NilaiDP3'], 'integer'],
            [['TahunDP3'], 'safe'],
            [['DokumenHasilPenilaian'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRiwayatDP3' => 'Id Riwayat Dp3',
            'IdPegawai' => 'Id Pegawai',
            'TahunDP3' => 'Tahun Dp3',
            'NIPPejabatPenilai' => 'Nippejabat Penilai',
            'NIPAtasanPejabatPenilai' => 'Nipatasan Pejabat Penilai',
            'NilaiDP3' => 'Nilai Dp3',
            'DokumenHasilPenilaian' => 'Dokumen Hasil Penilaian',
        ];
    }
}
