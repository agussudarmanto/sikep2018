<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmst_dokumen_alur_kerja".
 *
 * @property int $idDokumenAlurKerja
 * @property string $NamaDokumenAlurKerja
 * @property int $DokumenAlurKerja
 */
class TmstDokumenAlurKerja extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmst_dokumen_alur_kerja';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idDokumenAlurKerja', 'NamaDokumenAlurKerja', 'DokumenAlurKerja'], 'required'],
            [['idDokumenAlurKerja', 'DokumenAlurKerja'], 'integer'],
            [['NamaDokumenAlurKerja'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDokumenAlurKerja' => 'Id Dokumen Alur Kerja',
            'NamaDokumenAlurKerja' => 'Nama Dokumen Alur Kerja',
            'DokumenAlurKerja' => 'Dokumen Alur Kerja',
        ];
    }
}
