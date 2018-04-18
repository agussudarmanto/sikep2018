<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmst_dokumen_peraturan".
 *
 * @property int $idDokumenPeraturan
 * @property string $NamaDokumenPeraturan
 * @property int $DokumenPeraturan
 */
class TmstDokumenPeraturan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmst_dokumen_peraturan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idDokumenPeraturan', 'NamaDokumenPeraturan', 'DokumenPeraturan'], 'required'],
            [['idDokumenPeraturan', 'DokumenPeraturan'], 'integer'],
            [['NamaDokumenPeraturan'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDokumenPeraturan' => 'Id Dokumen Peraturan',
            'NamaDokumenPeraturan' => 'Nama Dokumen Peraturan',
            'DokumenPeraturan' => 'Dokumen Peraturan',
        ];
    }
}
