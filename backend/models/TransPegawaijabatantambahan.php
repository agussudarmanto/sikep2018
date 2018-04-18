<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_pegawaijabatantambahan".
 *
 * @property int $IdRefPegawaiJabatanTambahan
 * @property int $IdPegawai
 * @property int $Id_PegawaiJabatan
 * @property int $Id_NamaJabatan
 * @property int $IdUnitKerjaTambahan
 * @property string $Nama_JabatanTambahan
 * @property string $Tmt_JabatanStart
 * @property string $Tmt_JabatanEnd
 * @property string $NomorSkJabatanTambahan
 * @property string $TanggalSkJabatanTambahan
 * @property string $PejabatSkJabatanTambahan
 * @property string $TanggalPelantikanJabatanTambahan
 * @property string $DokumenSkJabatanTambahan
 * @property string $NomorSpmj
 * @property string $TanggalSpmj
 * @property string $PejabatSpmj
 * @property string $DokumenSpmj
 */
class TransPegawaijabatantambahan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_pegawaijabatantambahan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRefPegawaiJabatanTambahan', 'IdPegawai', 'Id_PegawaiJabatan', 'Id_NamaJabatan', 'IdUnitKerjaTambahan', 'Tmt_JabatanStart'], 'required'],
            [['IdRefPegawaiJabatanTambahan', 'IdPegawai', 'Id_PegawaiJabatan', 'Id_NamaJabatan', 'IdUnitKerjaTambahan'], 'integer'],
            [['Tmt_JabatanStart', 'Tmt_JabatanEnd', 'TanggalSkJabatanTambahan', 'TanggalPelantikanJabatanTambahan', 'TanggalSpmj'], 'safe'],
            [['Nama_JabatanTambahan'], 'string', 'max' => 100],
            [['NomorSkJabatanTambahan', 'PejabatSkJabatanTambahan', 'DokumenSkJabatanTambahan', 'NomorSpmj', 'PejabatSpmj', 'DokumenSpmj'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRefPegawaiJabatanTambahan' => 'Id Ref Pegawai Jabatan Tambahan',
            'IdPegawai' => 'Id Pegawai',
            'Id_PegawaiJabatan' => 'Id  Pegawai Jabatan',
            'Id_NamaJabatan' => 'Id  Nama Jabatan',
            'IdUnitKerjaTambahan' => 'Id Unit Kerja Tambahan',
            'Nama_JabatanTambahan' => 'Nama  Jabatan Tambahan',
            'Tmt_JabatanStart' => 'Tmt  Jabatan Start',
            'Tmt_JabatanEnd' => 'Tmt  Jabatan End',
            'NomorSkJabatanTambahan' => 'Nomor Sk Jabatan Tambahan',
            'TanggalSkJabatanTambahan' => 'Tanggal Sk Jabatan Tambahan',
            'PejabatSkJabatanTambahan' => 'Pejabat Sk Jabatan Tambahan',
            'TanggalPelantikanJabatanTambahan' => 'Tanggal Pelantikan Jabatan Tambahan',
            'DokumenSkJabatanTambahan' => 'Dokumen Sk Jabatan Tambahan',
            'NomorSpmj' => 'Nomor Spmj',
            'TanggalSpmj' => 'Tanggal Spmj',
            'PejabatSpmj' => 'Pejabat Spmj',
            'DokumenSpmj' => 'Dokumen Spmj',
        ];
    }
}
