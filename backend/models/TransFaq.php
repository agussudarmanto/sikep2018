<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_faq".
 *
 * @property int $IdFaq
 * @property int $NoPertanyaan
 * @property string $Pertanyaan
 * @property string $Jawaban
 * @property string $StatusFAQ
 */
class TransFaq extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_faq';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdFaq', 'NoPertanyaan', 'Pertanyaan', 'Jawaban', 'StatusFAQ'], 'required'],
            [['IdFaq', 'NoPertanyaan'], 'integer'],
            [['Pertanyaan', 'Jawaban'], 'string'],
            [['StatusFAQ'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdFaq' => 'Id Faq',
            'NoPertanyaan' => 'No Pertanyaan',
            'Pertanyaan' => 'Pertanyaan',
            'Jawaban' => 'Jawaban',
            'StatusFAQ' => 'Status Faq',
        ];
    }
}
