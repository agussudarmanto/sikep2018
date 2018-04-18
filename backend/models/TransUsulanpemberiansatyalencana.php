<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulanpemberiansatyalencana".
 *
 * @property int $IdUsulanPenghargaan
 * @property int $IdPegawai
 * @property int $IdTandaJasa
 * @property int $Pengusul
 * @property string $TanggalUsulan
 */
class TransUsulanpemberiansatyalencana extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulanpemberiansatyalencana';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdUsulanPenghargaan', 'IdPegawai', 'IdTandaJasa', 'Pengusul', 'TanggalUsulan'], 'required'],
            [['IdUsulanPenghargaan', 'IdPegawai', 'IdTandaJasa', 'Pengusul'], 'integer'],
            [['TanggalUsulan'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUsulanPenghargaan' => 'Id Usulan Penghargaan',
            'IdPegawai' => 'Id Pegawai',
            'IdTandaJasa' => 'Id Tanda Jasa',
            'Pengusul' => 'Pengusul',
            'TanggalUsulan' => 'Tanggal Usulan',
        ];
    }
}
