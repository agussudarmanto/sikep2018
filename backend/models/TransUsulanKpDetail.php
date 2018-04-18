<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulan_kp_detail".
 *
 * @property int $IdUsulanKPDetil
 * @property int $IdUsulanKP
 * @property int $IdPegawai
 * @property int $IdTingkatPendidikan
 * @property int $IdGolonganSaatIni
 * @property int $IdGolonganUsulan
 * @property int $IdProses
 * @property int $IdKPPN
 * @property string $JeniUsulanLP
 * @property int $MasaKerjaGolonganBulan
 * @property int $MasaKerjaGolonganTahun
 * @property string $NomorPersetujuanBKN
 * @property string $TanggalPersetujuanBKN
 * @property string $TMT_KP
 * @property string $tanggalSKUsulanKP
 * @property string $NomorSKUsulanKP
 * @property string $PejabatSKUsulanKP
 * @property double $GajiPokok
 * @property string $DokumenSK
 * @property string $StatusUsulan
 */
class TransUsulanKpDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulan_kp_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdUsulanKPDetil', 'IdUsulanKP', 'IdPegawai', 'IdTingkatPendidikan', 'IdGolonganSaatIni', 'IdGolonganUsulan', 'IdProses', 'IdKPPN'], 'required'],
            [['IdUsulanKPDetil', 'IdUsulanKP', 'IdPegawai', 'IdTingkatPendidikan', 'IdGolonganSaatIni', 'IdGolonganUsulan', 'IdProses', 'IdKPPN', 'MasaKerjaGolonganBulan', 'MasaKerjaGolonganTahun'], 'integer'],
            [['TanggalPersetujuanBKN', 'TMT_KP', 'tanggalSKUsulanKP'], 'safe'],
            [['GajiPokok'], 'number'],
            [['JeniUsulanLP', 'StatusUsulan'], 'string', 'max' => 1],
            [['NomorPersetujuanBKN'], 'string', 'max' => 30],
            [['NomorSKUsulanKP'], 'string', 'max' => 100],
            [['PejabatSKUsulanKP', 'DokumenSK'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUsulanKPDetil' => 'Id Usulan Kpdetil',
            'IdUsulanKP' => 'Id Usulan Kp',
            'IdPegawai' => 'Id Pegawai',
            'IdTingkatPendidikan' => 'Id Tingkat Pendidikan',
            'IdGolonganSaatIni' => 'Id Golongan Saat Ini',
            'IdGolonganUsulan' => 'Id Golongan Usulan',
            'IdProses' => 'Id Proses',
            'IdKPPN' => 'Id Kppn',
            'JeniUsulanLP' => 'Jeni Usulan Lp',
            'MasaKerjaGolonganBulan' => 'Masa Kerja Golongan Bulan',
            'MasaKerjaGolonganTahun' => 'Masa Kerja Golongan Tahun',
            'NomorPersetujuanBKN' => 'Nomor Persetujuan Bkn',
            'TanggalPersetujuanBKN' => 'Tanggal Persetujuan Bkn',
            'TMT_KP' => 'Tmt  Kp',
            'tanggalSKUsulanKP' => 'Tanggal Skusulan Kp',
            'NomorSKUsulanKP' => 'Nomor Skusulan Kp',
            'PejabatSKUsulanKP' => 'Pejabat Skusulan Kp',
            'GajiPokok' => 'Gaji Pokok',
            'DokumenSK' => 'Dokumen Sk',
            'StatusUsulan' => 'Status Usulan',
        ];
    }
}
