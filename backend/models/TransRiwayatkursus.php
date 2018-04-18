<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatkursus".
 *
 * @property int $IdRiwayatKursus
 * @property int $IdPegawai
 * @property string $TanggalMulaiKursus
 * @property string $TanggalAkhirKursus
 * @property string $BidangKursus
 * @property string $PenyelenggaraKursus
 * @property string $DokumenKursus
 */
class TransRiwayatkursus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatkursus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRiwayatKursus', 'IdPegawai', 'TanggalMulaiKursus'], 'required'],
            [['IdRiwayatKursus', 'IdPegawai'], 'integer'],
            [['TanggalMulaiKursus', 'TanggalAkhirKursus'], 'safe'],
            [['BidangKursus', 'PenyelenggaraKursus'], 'string', 'max' => 50],
            [['DokumenKursus'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRiwayatKursus' => 'Id Riwayat Kursus',
            'IdPegawai' => 'Id Pegawai',
            'TanggalMulaiKursus' => 'Tanggal Mulai Kursus',
            'TanggalAkhirKursus' => 'Tanggal Akhir Kursus',
            'BidangKursus' => 'Bidang Kursus',
            'PenyelenggaraKursus' => 'Penyelenggara Kursus',
            'DokumenKursus' => 'Dokumen Kursus',
        ];
    }
}
