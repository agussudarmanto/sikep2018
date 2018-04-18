<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulancuti".
 *
 * @property int $idUsulanCuti
 * @property string $idPegawai
 * @property string $NamaPegawai
 * @property int $IdJabatanPegawai
 * @property int $UnitKerjaPegawai
 * @property int $JenisCuti
 * @property string $TanggalPengajuan
 * @property string $TanggalMulaiCuti
 * @property string $TanggalSelesaiCuti
 * @property int $JumlahCuti
 * @property int $idPegawaiAtasan
 * @property string $NamaAtasan
 * @property int $IdJabatanAtasan
 * @property string $AlamatCuti
 * @property string $TeleponCuti
 */
class TransUsulancuti extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulancuti';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUsulanCuti'], 'required'],
            [['idUsulanCuti', 'IdJabatanPegawai', 'UnitKerjaPegawai', 'JenisCuti', 'JumlahCuti', 'idPegawaiAtasan', 'IdJabatanAtasan'], 'integer'],
            [['TanggalPengajuan', 'TanggalMulaiCuti', 'TanggalSelesaiCuti'], 'safe'],
            [['idPegawai', 'TeleponCuti'], 'string', 'max' => 20],
            [['NamaPegawai', 'NamaAtasan'], 'string', 'max' => 150],
            [['AlamatCuti'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUsulanCuti' => 'Id Usulan Cuti',
            'idPegawai' => 'Id Pegawai',
            'NamaPegawai' => 'Nama Pegawai',
            'IdJabatanPegawai' => 'Id Jabatan Pegawai',
            'UnitKerjaPegawai' => 'Unit Kerja Pegawai',
            'JenisCuti' => 'Jenis Cuti',
            'TanggalPengajuan' => 'Tanggal Pengajuan',
            'TanggalMulaiCuti' => 'Tanggal Mulai Cuti',
            'TanggalSelesaiCuti' => 'Tanggal Selesai Cuti',
            'JumlahCuti' => 'Jumlah Cuti',
            'idPegawaiAtasan' => 'Id Pegawai Atasan',
            'NamaAtasan' => 'Nama Atasan',
            'IdJabatanAtasan' => 'Id Jabatan Atasan',
            'AlamatCuti' => 'Alamat Cuti',
            'TeleponCuti' => 'Telepon Cuti',
        ];
    }
}
