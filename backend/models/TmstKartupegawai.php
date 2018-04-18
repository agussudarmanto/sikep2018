<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmst_kartupegawai".
 *
 * @property int $IdPegawai
 * @property int $idKartu
 * @property int $jenisKartu
 * @property string $NoKartu
 * @property string $DokumenKartu
 * @property string $Keterangan
 */
class TmstKartupegawai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmst_kartupegawai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idKartu', 'jenisKartu', 'NoKartu'], 'required'],
            [['idKartu', 'jenisKartu'], 'integer'],
            [['NoKartu'], 'string', 'max' => 100],
            [['DokumenKartu', 'Keterangan'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdPegawai' => 'Id Pegawai',
            'idKartu' => 'Id Kartu',
            'jenisKartu' => 'Jenis Kartu',
            'NoKartu' => 'No Kartu',
            'DokumenKartu' => 'Dokumen Kartu',
            'Keterangan' => 'Keterangan',
        ];
    }
}
