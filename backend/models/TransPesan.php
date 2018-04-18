<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_pesan".
 *
 * @property int $IdPesan
 * @property string $JudulPesan
 * @property string $IsiPesan
 * @property int $IdPegawaiPengirim
 * @property int $IdPegawaiPenerima
 */
class TransPesan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_pesan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdPesan', 'JudulPesan', 'IsiPesan', 'IdPegawaiPengirim', 'IdPegawaiPenerima'], 'required'],
            [['IdPesan', 'IdPegawaiPengirim', 'IdPegawaiPenerima'], 'integer'],
            [['IsiPesan'], 'string'],
            [['JudulPesan'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdPesan' => 'Id Pesan',
            'JudulPesan' => 'Judul Pesan',
            'IsiPesan' => 'Isi Pesan',
            'IdPegawaiPengirim' => 'Id Pegawai Pengirim',
            'IdPegawaiPenerima' => 'Id Pegawai Penerima',
        ];
    }
}
