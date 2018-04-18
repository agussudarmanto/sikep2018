<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_kategori_faq".
 *
 * @property int $IdKategoriFaq
 * @property int $IdFaq
 */
class TransKategoriFaq extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_kategori_faq';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdKategoriFaq', 'IdFaq'], 'required'],
            [['IdKategoriFaq', 'IdFaq'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdKategoriFaq' => 'Id Kategori Faq',
            'IdFaq' => 'Id Faq',
        ];
    }
}
