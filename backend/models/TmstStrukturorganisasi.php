<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmst_strukturorganisasi".
 *
 * @property int $IdRefStrukturOrgansasi
 * @property int $IdParentStrukturOrganisasi
 * @property int $LevelStrukturOrganisasi
 * @property int $LokasiStrukturOrganisasi
 * @property int $KodeJenisSatkerStrukturOrganisasi
 * @property int $IdKelasStrukturOrganisasi
 * @property string $KodeJabatanOld
 * @property int $IdNamaJabatan
 * @property int $idUnitKerja
 * @property int $IdTugasPokok
 * @property int $IdGajiTunjangan
 */
class TmstStrukturorganisasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmst_strukturorganisasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRefStrukturOrgansasi', 'IdNamaJabatan', 'idUnitKerja', 'IdGajiTunjangan'], 'required'],
            [['IdRefStrukturOrgansasi', 'IdParentStrukturOrganisasi', 'LevelStrukturOrganisasi', 'LokasiStrukturOrganisasi', 'KodeJenisSatkerStrukturOrganisasi', 'IdKelasStrukturOrganisasi', 'IdNamaJabatan', 'idUnitKerja', 'IdTugasPokok', 'IdGajiTunjangan'], 'integer'],
            [['KodeJabatanOld'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRefStrukturOrgansasi' => 'Id Ref Struktur Organsasi',
            'IdParentStrukturOrganisasi' => 'Id Parent Struktur Organisasi',
            'LevelStrukturOrganisasi' => 'Level Struktur Organisasi',
            'LokasiStrukturOrganisasi' => 'Lokasi Struktur Organisasi',
            'KodeJenisSatkerStrukturOrganisasi' => 'Kode Jenis Satker Struktur Organisasi',
            'IdKelasStrukturOrganisasi' => 'Id Kelas Struktur Organisasi',
            'KodeJabatanOld' => 'Kode Jabatan Old',
            'IdNamaJabatan' => 'Id Nama Jabatan',
            'idUnitKerja' => 'Id Unit Kerja',
            'IdTugasPokok' => 'Id Tugas Pokok',
            'IdGajiTunjangan' => 'Id Gaji Tunjangan',
        ];
    }
}
