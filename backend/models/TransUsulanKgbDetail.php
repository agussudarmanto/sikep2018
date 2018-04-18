<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulan_kgb_detail".
 *
 * @property int $IdUsulanKGBDetil
 * @property int $IdUsulanKGB
 * @property int $IdPegawai
 * @property int $IdRiwayatPangkat
 * @property double $BesaranGajiLama
 * @property double $BesaranGajiBaru
 * @property string $IdPejabatUsulanKGBDetil
 * @property string $NamaPejabatUsulanKGBDetil
 * @property string $NomorSuratUsulanKGBDetil
 * @property string $TanggalSuratUsulanKGBDetil
 * @property string $TMTKGB
 * @property int $MasaKerjaGolonganBulan
 * @property int $MasaKerjaGolonganTahun
 */
class TransUsulanKgbDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulan_kgb_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdUsulanKGBDetil', 'IdUsulanKGB', 'IdPegawai', 'IdRiwayatPangkat', 'BesaranGajiLama'], 'required'],
            [['IdUsulanKGBDetil', 'IdUsulanKGB', 'IdPegawai', 'IdRiwayatPangkat', 'MasaKerjaGolonganBulan', 'MasaKerjaGolonganTahun'], 'integer'],
            [['BesaranGajiLama', 'BesaranGajiBaru'], 'number'],
            [['TanggalSuratUsulanKGBDetil', 'TMTKGB'], 'safe'],
            [['IdPejabatUsulanKGBDetil', 'NamaPejabatUsulanKGBDetil'], 'string', 'max' => 100],
            [['NomorSuratUsulanKGBDetil'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUsulanKGBDetil' => 'Id Usulan Kgbdetil',
            'IdUsulanKGB' => 'Id Usulan Kgb',
            'IdPegawai' => 'Id Pegawai',
            'IdRiwayatPangkat' => 'Id Riwayat Pangkat',
            'BesaranGajiLama' => 'Besaran Gaji Lama',
            'BesaranGajiBaru' => 'Besaran Gaji Baru',
            'IdPejabatUsulanKGBDetil' => 'Id Pejabat Usulan Kgbdetil',
            'NamaPejabatUsulanKGBDetil' => 'Nama Pejabat Usulan Kgbdetil',
            'NomorSuratUsulanKGBDetil' => 'Nomor Surat Usulan Kgbdetil',
            'TanggalSuratUsulanKGBDetil' => 'Tanggal Surat Usulan Kgbdetil',
            'TMTKGB' => 'Tmtkgb',
            'MasaKerjaGolonganBulan' => 'Masa Kerja Golongan Bulan',
            'MasaKerjaGolonganTahun' => 'Masa Kerja Golongan Tahun',
        ];
    }
}
