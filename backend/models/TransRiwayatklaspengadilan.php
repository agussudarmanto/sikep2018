<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatklaspengadilan".
 *
 * @property int $idriwayatklasPengadilan
 * @property int $idSatker
 * @property int $IdKlasPengadilanLama
 * @property int $IdKlasPengadilanBaru
 * @property string $TanggalKlasPengadilanBaru
 * @property string $NomorSuratPenetapanKlasPengadilanBaru
 * @property string $TMTKlasPengadilanBaru
 * @property string $SuratPenetapanKlasPengadilanBaru
 */
class TransRiwayatklaspengadilan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatklaspengadilan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idriwayatklasPengadilan', 'idSatker', 'IdKlasPengadilanLama', 'IdKlasPengadilanBaru', 'TanggalKlasPengadilanBaru', 'NomorSuratPenetapanKlasPengadilanBaru', 'TMTKlasPengadilanBaru', 'SuratPenetapanKlasPengadilanBaru'], 'required'],
            [['idriwayatklasPengadilan', 'idSatker', 'IdKlasPengadilanLama', 'IdKlasPengadilanBaru'], 'integer'],
            [['TanggalKlasPengadilanBaru', 'TMTKlasPengadilanBaru'], 'safe'],
            [['SuratPenetapanKlasPengadilanBaru'], 'string'],
            [['NomorSuratPenetapanKlasPengadilanBaru'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idriwayatklasPengadilan' => 'Idriwayatklas Pengadilan',
            'idSatker' => 'Id Satker',
            'IdKlasPengadilanLama' => 'Id Klas Pengadilan Lama',
            'IdKlasPengadilanBaru' => 'Id Klas Pengadilan Baru',
            'TanggalKlasPengadilanBaru' => 'Tanggal Klas Pengadilan Baru',
            'NomorSuratPenetapanKlasPengadilanBaru' => 'Nomor Surat Penetapan Klas Pengadilan Baru',
            'TMTKlasPengadilanBaru' => 'Tmtklas Pengadilan Baru',
            'SuratPenetapanKlasPengadilanBaru' => 'Surat Penetapan Klas Pengadilan Baru',
        ];
    }
}
