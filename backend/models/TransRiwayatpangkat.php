<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatpangkat".
 *
 * @property int $IdRiwayatPangkat
 * @property int $IdPegawai
 * @property int $IdGolonganRuang
 * @property string $TMTGolongan
 * @property int $IdJenisPangkat
 * @property string $NomorSKPangkat
 * @property string $TanggalSKPangkat
 * @property string $PejabatSKPangkat
 * @property string $DokumefloanSKPangkat
 * @property string $NomorPersetujuanTeknis
 * @property string $TanggalPersetujuanTeknis
 * @property double $GajiPokok
 * @property int $masaKerjaBulan
 * @property int $masaKerjaTahun
 */
class TransRiwayatpangkat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatpangkat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRiwayatPangkat', 'IdPegawai', 'IdGolonganRuang', 'TMTGolongan', 'IdJenisPangkat', 'NomorSKPangkat', 'TanggalSKPangkat', 'PejabatSKPangkat', 'DokumefloanSKPangkat', 'NomorPersetujuanTeknis', 'TanggalPersetujuanTeknis', 'masaKerjaBulan', 'masaKerjaTahun'], 'required'],
            [['IdRiwayatPangkat', 'IdPegawai', 'IdGolonganRuang', 'IdJenisPangkat', 'masaKerjaBulan', 'masaKerjaTahun'], 'integer'],
            [['TMTGolongan', 'TanggalSKPangkat', 'TanggalPersetujuanTeknis'], 'safe'],
            [['GajiPokok'], 'number'],
            [['NomorSKPangkat', 'DokumefloanSKPangkat', 'NomorPersetujuanTeknis'], 'string', 'max' => 50],
            [['PejabatSKPangkat'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRiwayatPangkat' => 'Id Riwayat Pangkat',
            'IdPegawai' => 'Id Pegawai',
            'IdGolonganRuang' => 'Id Golongan Ruang',
            'TMTGolongan' => 'Tmtgolongan',
            'IdJenisPangkat' => 'Id Jenis Pangkat',
            'NomorSKPangkat' => 'Nomor Skpangkat',
            'TanggalSKPangkat' => 'Tanggal Skpangkat',
            'PejabatSKPangkat' => 'Pejabat Skpangkat',
            'DokumefloanSKPangkat' => 'Dokumefloan Skpangkat',
            'NomorPersetujuanTeknis' => 'Nomor Persetujuan Teknis',
            'TanggalPersetujuanTeknis' => 'Tanggal Persetujuan Teknis',
            'GajiPokok' => 'Gaji Pokok',
            'masaKerjaBulan' => 'Masa Kerja Bulan',
            'masaKerjaTahun' => 'Masa Kerja Tahun',
        ];
    }
}
