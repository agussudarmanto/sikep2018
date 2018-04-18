<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulanpensiundetail".
 *
 * @property int $IdUsulanPensiun
 * @property int $IdPegawai
 * @property int $IdJabatanPegawi
 * @property int $IdUnitKerjaPegawai
 * @property string $DokumenSKPensiun
 * @property string $NomorSKPensiun
 * @property string $TanggalSKPensiun
 * @property string $TMTPensiun
 * @property int $PejabatPembuatSKPensiun
 * @property string $AlasanPensiun
 * @property string $CatatanAlasanPensiun
 * @property string $no_perpeg
 * @property string $tanggal_perpeg
 */
class TransUsulanpensiundetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulanpensiundetail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdUsulanPensiun', 'IdPegawai', 'IdJabatanPegawi', 'IdUnitKerjaPegawai', 'AlasanPensiun', 'no_perpeg', 'tanggal_perpeg'], 'required'],
            [['IdUsulanPensiun', 'IdPegawai', 'IdJabatanPegawi', 'IdUnitKerjaPegawai', 'PejabatPembuatSKPensiun'], 'integer'],
            [['TanggalSKPensiun', 'TMTPensiun', 'tanggal_perpeg'], 'safe'],
            [['CatatanAlasanPensiun'], 'string'],
            [['DokumenSKPensiun', 'NomorSKPensiun', 'no_perpeg'], 'string', 'max' => 50],
            [['AlasanPensiun'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUsulanPensiun' => 'Id Usulan Pensiun',
            'IdPegawai' => 'Id Pegawai',
            'IdJabatanPegawi' => 'Id Jabatan Pegawi',
            'IdUnitKerjaPegawai' => 'Id Unit Kerja Pegawai',
            'DokumenSKPensiun' => 'Dokumen Skpensiun',
            'NomorSKPensiun' => 'Nomor Skpensiun',
            'TanggalSKPensiun' => 'Tanggal Skpensiun',
            'TMTPensiun' => 'Tmtpensiun',
            'PejabatPembuatSKPensiun' => 'Pejabat Pembuat Skpensiun',
            'AlasanPensiun' => 'Alasan Pensiun',
            'CatatanAlasanPensiun' => 'Catatan Alasan Pensiun',
            'no_perpeg' => 'No Perpeg',
            'tanggal_perpeg' => 'Tanggal Perpeg',
        ];
    }
}
