<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulanpromosimutasidetail".
 *
 * @property int $IdUsulanPromosiMutasiDetail
 * @property int $idUsulanPromosiMutasi
 * @property int $idPegawai
 * @property int $idSatkerAsal
 * @property int $idUnitKerjaAsal
 * @property int $idLokasi
 * @property int $IdJabatanAsal
 * @property int $IdSatkerTujuan
 * @property int $IdUnitKerjaTujuan
 * @property int $IdJabatanTujuan
 * @property string $StatusUsulan
 * @property string $UsulanbiayaMutasi
 */
class TransUsulanpromosimutasidetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulanpromosimutasidetail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdUsulanPromosiMutasiDetail', 'idUsulanPromosiMutasi', 'idPegawai', 'idSatkerAsal', 'idUnitKerjaAsal', 'idLokasi', 'IdJabatanAsal', 'IdSatkerTujuan', 'IdUnitKerjaTujuan', 'IdJabatanTujuan'], 'integer'],
            [['idUsulanPromosiMutasi', 'idPegawai', 'idSatkerAsal', 'idUnitKerjaAsal', 'idLokasi', 'IdJabatanAsal', 'IdSatkerTujuan', 'IdUnitKerjaTujuan', 'IdJabatanTujuan'], 'required'],
            [['StatusUsulan', 'UsulanbiayaMutasi'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUsulanPromosiMutasiDetail' => 'Id Usulan Promosi Mutasi Detail',
            'idUsulanPromosiMutasi' => 'Id Usulan Promosi Mutasi',
            'idPegawai' => 'Id Pegawai',
            'idSatkerAsal' => 'Id Satker Asal',
            'idUnitKerjaAsal' => 'Id Unit Kerja Asal',
            'idLokasi' => 'Id Lokasi',
            'IdJabatanAsal' => 'Id Jabatan Asal',
            'IdSatkerTujuan' => 'Id Satker Tujuan',
            'IdUnitKerjaTujuan' => 'Id Unit Kerja Tujuan',
            'IdJabatanTujuan' => 'Id Jabatan Tujuan',
            'StatusUsulan' => 'Status Usulan',
            'UsulanbiayaMutasi' => 'Usulanbiaya Mutasi',
        ];
    }
}
