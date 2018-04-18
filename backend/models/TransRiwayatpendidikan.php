<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatpendidikan".
 *
 * @property int $idRiwayatPendidikan
 * @property int $idPegawai
 * @property int $idTingkatPendidikan
 * @property int $idNegara
 * @property int $idUniversitas
 * @property int $idJurusan
 * @property string $NamaInstansiPendidikan
 * @property string $TahunLulus
 * @property string $NomorIjazah
 * @property string $Tanggaljazah
 * @property string $DokumenIjazah
 * @property string $NamaRektorKepalaInstansi
 * @property string $FlagFormatBKN
 */
class TransRiwayatpendidikan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatpendidikan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRiwayatPendidikan', 'idPegawai', 'idTingkatPendidikan', 'idNegara', 'idUniversitas', 'idJurusan', 'NamaInstansiPendidikan', 'TahunLulus'], 'required'],
            [['idRiwayatPendidikan', 'idPegawai', 'idTingkatPendidikan', 'idNegara', 'idUniversitas', 'idJurusan'], 'integer'],
            [['TahunLulus', 'Tanggaljazah'], 'safe'],
            [['NamaInstansiPendidikan'], 'string', 'max' => 200],
            [['NomorIjazah', 'DokumenIjazah'], 'string', 'max' => 100],
            [['NamaRektorKepalaInstansi'], 'string', 'max' => 50],
            [['FlagFormatBKN'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRiwayatPendidikan' => 'Id Riwayat Pendidikan',
            'idPegawai' => 'Id Pegawai',
            'idTingkatPendidikan' => 'Id Tingkat Pendidikan',
            'idNegara' => 'Id Negara',
            'idUniversitas' => 'Id Universitas',
            'idJurusan' => 'Id Jurusan',
            'NamaInstansiPendidikan' => 'Nama Instansi Pendidikan',
            'TahunLulus' => 'Tahun Lulus',
            'NomorIjazah' => 'Nomor Ijazah',
            'Tanggaljazah' => 'Tanggaljazah',
            'DokumenIjazah' => 'Dokumen Ijazah',
            'NamaRektorKepalaInstansi' => 'Nama Rektor Kepala Instansi',
            'FlagFormatBKN' => 'Flag Format Bkn',
        ];
    }
}
