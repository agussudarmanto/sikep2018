<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_kegiatan_diklat".
 *
 * @property int $IdKegiatanDiklat
 * @property string $NamaKegiatanDiklat
 * @property int $JenisDiklat
 * @property int $LamaDiklat
 * @property string $JadwalDiklat
 * @property string $PenyelenggaraDiklat
 * @property string $LokasiKegiatanDiklat
 * @property int $NegaraKegiatanDiklat
 * @property int $KotaKegiatanDiklat
 */
class TransKegiatanDiklat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_kegiatan_diklat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdKegiatanDiklat', 'NamaKegiatanDiklat', 'JenisDiklat', 'LamaDiklat', 'JadwalDiklat'], 'required'],
            [['IdKegiatanDiklat', 'JenisDiklat', 'LamaDiklat', 'NegaraKegiatanDiklat', 'KotaKegiatanDiklat'], 'integer'],
            [['JadwalDiklat'], 'safe'],
            [['NamaKegiatanDiklat', 'PenyelenggaraDiklat', 'LokasiKegiatanDiklat'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdKegiatanDiklat' => 'Id Kegiatan Diklat',
            'NamaKegiatanDiklat' => 'Nama Kegiatan Diklat',
            'JenisDiklat' => 'Jenis Diklat',
            'LamaDiklat' => 'Lama Diklat',
            'JadwalDiklat' => 'Jadwal Diklat',
            'PenyelenggaraDiklat' => 'Penyelenggara Diklat',
            'LokasiKegiatanDiklat' => 'Lokasi Kegiatan Diklat',
            'NegaraKegiatanDiklat' => 'Negara Kegiatan Diklat',
            'KotaKegiatanDiklat' => 'Kota Kegiatan Diklat',
        ];
    }
}
