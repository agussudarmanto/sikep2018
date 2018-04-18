<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatinpassing".
 *
 * @property int $IdRiwayatInpassing
 * @property int $IdPegawai
 * @property int $idGolonganRuang
 * @property double $BesaranGajiLama
 * @property double $BesaranGajiBaru
 * @property string $PejabatPembuatSuratInpassing
 * @property string $NomorSuratInpassing
 * @property string $TanggalSuratInpassing
 * @property string $TMTInpassing
 * @property string $DokumenSuratInpassing
 */
class TransRiwayatinpassing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatinpassing';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRiwayatInpassing', 'IdPegawai', 'idGolonganRuang', 'BesaranGajiLama', 'BesaranGajiBaru'], 'required'],
            [['IdRiwayatInpassing', 'IdPegawai', 'idGolonganRuang'], 'integer'],
            [['BesaranGajiLama', 'BesaranGajiBaru'], 'number'],
            [['TanggalSuratInpassing', 'TMTInpassing'], 'safe'],
            [['PejabatPembuatSuratInpassing', 'DokumenSuratInpassing'], 'string', 'max' => 100],
            [['NomorSuratInpassing'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRiwayatInpassing' => 'Id Riwayat Inpassing',
            'IdPegawai' => 'Id Pegawai',
            'idGolonganRuang' => 'Id Golongan Ruang',
            'BesaranGajiLama' => 'Besaran Gaji Lama',
            'BesaranGajiBaru' => 'Besaran Gaji Baru',
            'PejabatPembuatSuratInpassing' => 'Pejabat Pembuat Surat Inpassing',
            'NomorSuratInpassing' => 'Nomor Surat Inpassing',
            'TanggalSuratInpassing' => 'Tanggal Surat Inpassing',
            'TMTInpassing' => 'Tmtinpassing',
            'DokumenSuratInpassing' => 'Dokumen Surat Inpassing',
        ];
    }
}
