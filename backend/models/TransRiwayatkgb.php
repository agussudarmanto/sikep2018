<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatkgb".
 *
 * @property int $IdRiwayatKGB
 * @property int $IdPegawai
 * @property int $IdGolonganRuang
 * @property int $idGajiPokok
 * @property double $BesaranGaji
 * @property string $PejabatPembuatSuratKGB
 * @property string $NomorSuratKGB
 * @property string $TanggalSuratKGB
 * @property string $TMTKGB
 * @property string $DokumenSuratKGB
 * @property int $KPPNKGBPegawai
 * @property string $WilayahKGBPegawai
 */
class TransRiwayatkgb extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatkgb';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRiwayatKGB', 'IdPegawai', 'IdGolonganRuang', 'idGajiPokok', 'BesaranGaji'], 'required'],
            [['IdRiwayatKGB', 'IdPegawai', 'IdGolonganRuang', 'idGajiPokok', 'KPPNKGBPegawai'], 'integer'],
            [['BesaranGaji'], 'number'],
            [['TanggalSuratKGB', 'TMTKGB'], 'safe'],
            [['PejabatPembuatSuratKGB', 'DokumenSuratKGB', 'WilayahKGBPegawai'], 'string', 'max' => 100],
            [['NomorSuratKGB'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRiwayatKGB' => 'Id Riwayat Kgb',
            'IdPegawai' => 'Id Pegawai',
            'IdGolonganRuang' => 'Id Golongan Ruang',
            'idGajiPokok' => 'Id Gaji Pokok',
            'BesaranGaji' => 'Besaran Gaji',
            'PejabatPembuatSuratKGB' => 'Pejabat Pembuat Surat Kgb',
            'NomorSuratKGB' => 'Nomor Surat Kgb',
            'TanggalSuratKGB' => 'Tanggal Surat Kgb',
            'TMTKGB' => 'Tmtkgb',
            'DokumenSuratKGB' => 'Dokumen Surat Kgb',
            'KPPNKGBPegawai' => 'Kppnkgbpegawai',
            'WilayahKGBPegawai' => 'Wilayah Kgbpegawai',
        ];
    }
}
