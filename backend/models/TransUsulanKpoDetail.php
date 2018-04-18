<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulan_kpo_detail".
 *
 * @property int $IdUsulanKPODetil
 * @property int $IdUsulanKPO
 * @property int $IdPegawai
 * @property int $IdTingkatPendidikan
 * @property int $IdGolonganSaatIni
 * @property int $IdGolonganUsulan
 * @property int $IdProses
 * @property int $IdKPPN
 * @property string $JeniUsulanKPO
 * @property int $MasaKerjaGolonganBulan
 * @property int $MasaKerjaGolonganTahun
 * @property string $NomorPersetujuanBKN
 * @property string $TanggalPersetujuanBKN
 * @property string $TMT_KPO
 * @property string $tanggalSKUsulanKPO
 * @property string $NomorSKUsulanKPO
 * @property string $PejabatSKUsulanKPO
 * @property double $GajiPokok
 * @property string $DokumenSK
 * @property string $StatusUsulan
 */
class TransUsulanKpoDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulan_kpo_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdUsulanKPODetil', 'IdUsulanKPO', 'IdPegawai', 'IdTingkatPendidikan', 'IdGolonganSaatIni', 'IdGolonganUsulan', 'IdProses', 'IdKPPN'], 'required'],
            [['IdUsulanKPODetil', 'IdUsulanKPO', 'IdPegawai', 'IdTingkatPendidikan', 'IdGolonganSaatIni', 'IdGolonganUsulan', 'IdProses', 'IdKPPN', 'MasaKerjaGolonganBulan', 'MasaKerjaGolonganTahun'], 'integer'],
            [['TanggalPersetujuanBKN', 'TMT_KPO', 'tanggalSKUsulanKPO'], 'safe'],
            [['GajiPokok'], 'number'],
            [['JeniUsulanKPO', 'StatusUsulan'], 'string', 'max' => 1],
            [['NomorPersetujuanBKN'], 'string', 'max' => 30],
            [['NomorSKUsulanKPO'], 'string', 'max' => 100],
            [['PejabatSKUsulanKPO', 'DokumenSK'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUsulanKPODetil' => 'Id Usulan Kpodetil',
            'IdUsulanKPO' => 'Id Usulan Kpo',
            'IdPegawai' => 'Id Pegawai',
            'IdTingkatPendidikan' => 'Id Tingkat Pendidikan',
            'IdGolonganSaatIni' => 'Id Golongan Saat Ini',
            'IdGolonganUsulan' => 'Id Golongan Usulan',
            'IdProses' => 'Id Proses',
            'IdKPPN' => 'Id Kppn',
            'JeniUsulanKPO' => 'Jeni Usulan Kpo',
            'MasaKerjaGolonganBulan' => 'Masa Kerja Golongan Bulan',
            'MasaKerjaGolonganTahun' => 'Masa Kerja Golongan Tahun',
            'NomorPersetujuanBKN' => 'Nomor Persetujuan Bkn',
            'TanggalPersetujuanBKN' => 'Tanggal Persetujuan Bkn',
            'TMT_KPO' => 'Tmt  Kpo',
            'tanggalSKUsulanKPO' => 'Tanggal Skusulan Kpo',
            'NomorSKUsulanKPO' => 'Nomor Skusulan Kpo',
            'PejabatSKUsulanKPO' => 'Pejabat Skusulan Kpo',
            'GajiPokok' => 'Gaji Pokok',
            'DokumenSK' => 'Dokumen Sk',
            'StatusUsulan' => 'Status Usulan',
        ];
    }
}
