<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_pensiun".
 *
 * @property int $idPensiun
 * @property int $idPegawai
 * @property string $DokumenSKPensiun
 * @property string $NomorSKPensiun
 * @property string $TanggalSKPensiun
 * @property string $TMTPensiun
 * @property int $PejabatPembuatSKPensiun
 * @property string $AlasanPensiun
 * @property string $CatatanAlasanPensiun
 * @property string $JenisPensiun
 */
class TransPensiun extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_pensiun';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPensiun', 'idPegawai', 'AlasanPensiun', 'JenisPensiun'], 'required'],
            [['idPensiun', 'idPegawai', 'PejabatPembuatSKPensiun'], 'integer'],
            [['TanggalSKPensiun', 'TMTPensiun'], 'safe'],
            [['CatatanAlasanPensiun'], 'string'],
            [['DokumenSKPensiun', 'NomorSKPensiun'], 'string', 'max' => 50],
            [['AlasanPensiun'], 'string', 'max' => 1],
            [['JenisPensiun'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPensiun' => 'Id Pensiun',
            'idPegawai' => 'Id Pegawai',
            'DokumenSKPensiun' => 'Dokumen Skpensiun',
            'NomorSKPensiun' => 'Nomor Skpensiun',
            'TanggalSKPensiun' => 'Tanggal Skpensiun',
            'TMTPensiun' => 'Tmtpensiun',
            'PejabatPembuatSKPensiun' => 'Pejabat Pembuat Skpensiun',
            'AlasanPensiun' => 'Alasan Pensiun',
            'CatatanAlasanPensiun' => 'Catatan Alasan Pensiun',
            'JenisPensiun' => 'Jenis Pensiun',
        ];
    }
}
