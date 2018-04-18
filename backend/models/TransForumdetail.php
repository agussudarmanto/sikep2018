<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_forumdetail".
 *
 * @property int $IdForumDetail
 * @property int $IdForum
 * @property string $ContentForum
 * @property int $KodeSatkerForumDetail
 * @property string $SatkerForumDetail
 * @property string $IdPegawaiPembuatForum
 * @property string $JawabanThread
 * @property string $StatusReplier
 * @property string $FotoDetailForum
 * @property string $StatusDetailForum
 * @property int $IdGroupForum
 */
class TransForumdetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_forumdetail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdForumDetail', 'IdForum', 'ContentForum', 'StatusDetailForum'], 'required'],
            [['IdForumDetail', 'IdForum', 'KodeSatkerForumDetail', 'IdGroupForum'], 'integer'],
            [['ContentForum'], 'string'],
            [['SatkerForumDetail'], 'string', 'max' => 200],
            [['IdPegawaiPembuatForum'], 'string', 'max' => 20],
            [['JawabanThread'], 'string', 'max' => 100],
            [['StatusReplier'], 'string', 'max' => 150],
            [['FotoDetailForum'], 'string', 'max' => 50],
            [['StatusDetailForum'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdForumDetail' => 'Id Forum Detail',
            'IdForum' => 'Id Forum',
            'ContentForum' => 'Content Forum',
            'KodeSatkerForumDetail' => 'Kode Satker Forum Detail',
            'SatkerForumDetail' => 'Satker Forum Detail',
            'IdPegawaiPembuatForum' => 'Id Pegawai Pembuat Forum',
            'JawabanThread' => 'Jawaban Thread',
            'StatusReplier' => 'Status Replier',
            'FotoDetailForum' => 'Foto Detail Forum',
            'StatusDetailForum' => 'Status Detail Forum',
            'IdGroupForum' => 'Id Group Forum',
        ];
    }
}
