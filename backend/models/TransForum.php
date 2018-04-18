<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_forum".
 *
 * @property int $idForum
 * @property string $tanggalForum
 * @property string $judulForum
 * @property string $IsiForum
 * @property string $idKategori
 * @property int $kodeSatker
 * @property string $ThreadStarter
 * @property string $STATUS
 */
class TransForum extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_forum';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idForum', 'tanggalForum', 'idKategori'], 'required'],
            [['idForum', 'kodeSatker'], 'integer'],
            [['tanggalForum'], 'safe'],
            [['IsiForum'], 'string'],
            [['judulForum'], 'string', 'max' => 150],
            [['idKategori', 'STATUS'], 'string', 'max' => 1],
            [['ThreadStarter'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idForum' => 'Id Forum',
            'tanggalForum' => 'Tanggal Forum',
            'judulForum' => 'Judul Forum',
            'IsiForum' => 'Isi Forum',
            'idKategori' => 'Id Kategori',
            'kodeSatker' => 'Kode Satker',
            'ThreadStarter' => 'Thread Starter',
            'STATUS' => 'Status',
        ];
    }
}
