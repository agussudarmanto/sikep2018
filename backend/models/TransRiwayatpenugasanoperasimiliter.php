<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatpenugasanoperasimiliter".
 *
 * @property int $idRiwayatPenugasanMiliter
 * @property int $idPegawai
 * @property string $TMTMulaiPenugasan
 * @property string $TMTSelesaiPenugasan
 * @property string $LokasiPenempatan
 */
class TransRiwayatpenugasanoperasimiliter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatpenugasanoperasimiliter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRiwayatPenugasanMiliter', 'idPegawai', 'TMTMulaiPenugasan', 'TMTSelesaiPenugasan', 'LokasiPenempatan'], 'required'],
            [['idRiwayatPenugasanMiliter', 'idPegawai'], 'integer'],
            [['TMTMulaiPenugasan', 'TMTSelesaiPenugasan'], 'safe'],
            [['LokasiPenempatan'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRiwayatPenugasanMiliter' => 'Id Riwayat Penugasan Militer',
            'idPegawai' => 'Id Pegawai',
            'TMTMulaiPenugasan' => 'Tmtmulai Penugasan',
            'TMTSelesaiPenugasan' => 'Tmtselesai Penugasan',
            'LokasiPenempatan' => 'Lokasi Penempatan',
        ];
    }
}
