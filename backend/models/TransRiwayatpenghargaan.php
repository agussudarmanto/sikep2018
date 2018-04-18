<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatpenghargaan".
 *
 * @property int $idRiwayatPenghargaan
 * @property int $idPegawai
 * @property int $IdJenisPenghargaan
 * @property string $NamaPenghargaan
 * @property string $Tahun
 * @property int $idNegara
 * @property string $InstansiPenghargaan
 * @property string $DokumenPenghargaan
 * @property string $NomorSKPenghargaan
 * @property string $TanggalSKPenghargaan
 * @property int $NomorUrutPenghargaan
 */
class TransRiwayatpenghargaan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatpenghargaan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRiwayatPenghargaan', 'idPegawai', 'IdJenisPenghargaan', 'InstansiPenghargaan'], 'required'],
            [['idRiwayatPenghargaan', 'idPegawai', 'IdJenisPenghargaan', 'idNegara', 'NomorUrutPenghargaan'], 'integer'],
            [['Tahun', 'TanggalSKPenghargaan'], 'safe'],
            [['NamaPenghargaan', 'DokumenPenghargaan', 'NomorSKPenghargaan'], 'string', 'max' => 100],
            [['InstansiPenghargaan'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRiwayatPenghargaan' => 'Id Riwayat Penghargaan',
            'idPegawai' => 'Id Pegawai',
            'IdJenisPenghargaan' => 'Id Jenis Penghargaan',
            'NamaPenghargaan' => 'Nama Penghargaan',
            'Tahun' => 'Tahun',
            'idNegara' => 'Id Negara',
            'InstansiPenghargaan' => 'Instansi Penghargaan',
            'DokumenPenghargaan' => 'Dokumen Penghargaan',
            'NomorSKPenghargaan' => 'Nomor Skpenghargaan',
            'TanggalSKPenghargaan' => 'Tanggal Skpenghargaan',
            'NomorUrutPenghargaan' => 'Nomor Urut Penghargaan',
        ];
    }
}
