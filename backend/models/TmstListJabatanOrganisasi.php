<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmst_list_jabatan_organisasi".
 *
 * @property int $IdListJabatanOrganisasi
 * @property int $idStrukturOrganisasi
 * @property int $idJabatan
 * @property int $ParentJabatanOrganisasi
 * @property int $LevelJabatanOrganisasi
 */
class TmstListJabatanOrganisasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmst_list_jabatan_organisasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdListJabatanOrganisasi', 'idStrukturOrganisasi', 'idJabatan', 'ParentJabatanOrganisasi', 'LevelJabatanOrganisasi'], 'required'],
            [['IdListJabatanOrganisasi', 'idStrukturOrganisasi', 'idJabatan', 'ParentJabatanOrganisasi', 'LevelJabatanOrganisasi'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdListJabatanOrganisasi' => 'Id List Jabatan Organisasi',
            'idStrukturOrganisasi' => 'Id Struktur Organisasi',
            'idJabatan' => 'Id Jabatan',
            'ParentJabatanOrganisasi' => 'Parent Jabatan Organisasi',
            'LevelJabatanOrganisasi' => 'Level Jabatan Organisasi',
        ];
    }
}
