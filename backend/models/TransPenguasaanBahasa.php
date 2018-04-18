<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_penguasaan_bahasa".
 *
 * @property int $idRiwayatPenguasaanBahasa
 * @property int $idPegawai
 * @property string $Bahasa
 * @property string $TingkatKemahiran
 * @property string $NamaTesBahasa
 * @property string $NamaInstansiSertifkatBahasa
 * @property string $NilaiTesBahasa
 * @property string $TahunLulusTesBahasa
 * @property string $DokumenTesBahasa
 */
class TransPenguasaanBahasa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_penguasaan_bahasa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRiwayatPenguasaanBahasa', 'idPegawai', 'Bahasa', 'TingkatKemahiran'], 'required'],
            [['idRiwayatPenguasaanBahasa', 'idPegawai'], 'integer'],
            [['TahunLulusTesBahasa'], 'safe'],
            [['Bahasa', 'NamaTesBahasa', 'NamaInstansiSertifkatBahasa'], 'string', 'max' => 200],
            [['TingkatKemahiran'], 'string', 'max' => 1],
            [['NilaiTesBahasa'], 'string', 'max' => 5],
            [['DokumenTesBahasa'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRiwayatPenguasaanBahasa' => 'Id Riwayat Penguasaan Bahasa',
            'idPegawai' => 'Id Pegawai',
            'Bahasa' => 'Bahasa',
            'TingkatKemahiran' => 'Tingkat Kemahiran',
            'NamaTesBahasa' => 'Nama Tes Bahasa',
            'NamaInstansiSertifkatBahasa' => 'Nama Instansi Sertifkat Bahasa',
            'NilaiTesBahasa' => 'Nilai Tes Bahasa',
            'TahunLulusTesBahasa' => 'Tahun Lulus Tes Bahasa',
            'DokumenTesBahasa' => 'Dokumen Tes Bahasa',
        ];
    }
}
