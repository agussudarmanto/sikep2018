<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatluarnegeri".
 *
 * @property int $idRiwayatLuarNegeri
 * @property int $idPegawai
 * @property int $idNegara
 * @property string $TujuanKunjungan
 * @property int $idStatusPembiayaan
 * @property string $Sponsor
 * @property string $TanggalKunjungan
 * @property int $LamaKunjungan
 */
class TransRiwayatluarnegeri extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatluarnegeri';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRiwayatLuarNegeri', 'idPegawai', 'idNegara', 'TujuanKunjungan'], 'required'],
            [['idRiwayatLuarNegeri', 'idPegawai', 'idNegara', 'idStatusPembiayaan', 'LamaKunjungan'], 'integer'],
            [['TanggalKunjungan'], 'safe'],
            [['TujuanKunjungan'], 'string', 'max' => 250],
            [['Sponsor'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRiwayatLuarNegeri' => 'Id Riwayat Luar Negeri',
            'idPegawai' => 'Id Pegawai',
            'idNegara' => 'Id Negara',
            'TujuanKunjungan' => 'Tujuan Kunjungan',
            'idStatusPembiayaan' => 'Id Status Pembiayaan',
            'Sponsor' => 'Sponsor',
            'TanggalKunjungan' => 'Tanggal Kunjungan',
            'LamaKunjungan' => 'Lama Kunjungan',
        ];
    }
}
