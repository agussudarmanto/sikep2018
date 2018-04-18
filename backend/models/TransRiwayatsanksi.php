<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_riwayatsanksi".
 *
 * @property int $IdRiwayatSanksi
 * @property int $IdPegawai
 * @property string $statusSedangDiprosesBawas
 * @property int $idJenisHukumanDisiplin
 * @property string $SanksiText
 * @property string $AlasanSanksi
 * @property string $TMTMulaiHukuman
 * @property string $TMTAkhirHukuman
 * @property string $NomorSKSanksi
 * @property string $TanggalSKSanksi
 * @property string $PejabatPembuatSKSanksi
 * @property string $DokumenSKSanksi
 * @property string $KeteranganMasalah
 * @property string $PenangananHukuman
 * @property string $PenangananAdministrasiHukuman
 * @property string $StatusHukumanSelesai
 * @property string $NoDokumenBAP
 * @property string $TglDokumenBAP
 * @property string $DokumenBAP
 * @property string $NoDokumenIjinTugas
 * @property string $TglDokumenIjinTugas
 * @property string $DokumenIjinTugas
 * @property int $idJenisHukumanDisiplinBanding
 * @property string $SanksiTextBanding
 * @property string $AlasanSanksiBanding
 * @property string $TMTMulaiHukumanBanding
 * @property string $TMTAkhirHukumanBanding
 * @property string $NoSKHasilBanding
 * @property string $TglSKHasilBanding
 * @property string $PejabatPembuatSKHasilBanding
 * @property string $DokumenSKHasilBanding
 */
class TransRiwayatsanksi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_riwayatsanksi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRiwayatSanksi', 'IdPegawai', 'statusSedangDiprosesBawas', 'SanksiText', 'AlasanSanksi', 'TMTMulaiHukuman', 'TMTAkhirHukuman', 'NomorSKSanksi', 'TanggalSKSanksi', 'PejabatPembuatSKSanksi', 'DokumenSKSanksi', 'KeteranganMasalah', 'PenangananHukuman', 'PenangananAdministrasiHukuman', 'StatusHukumanSelesai', 'NoDokumenBAP', 'TglDokumenBAP', 'DokumenBAP'], 'required'],
            [['IdRiwayatSanksi', 'IdPegawai', 'idJenisHukumanDisiplin', 'idJenisHukumanDisiplinBanding'], 'integer'],
            [['AlasanSanksi', 'AlasanSanksiBanding'], 'string'],
            [['TMTMulaiHukuman', 'TMTAkhirHukuman', 'TanggalSKSanksi', 'TglDokumenBAP', 'TglDokumenIjinTugas', 'TMTMulaiHukumanBanding', 'TMTAkhirHukumanBanding', 'TglSKHasilBanding'], 'safe'],
            [['statusSedangDiprosesBawas', 'StatusHukumanSelesai'], 'string', 'max' => 1],
            [['SanksiText', 'NomorSKSanksi', 'DokumenSKSanksi', 'KeteranganMasalah', 'PenangananHukuman', 'PenangananAdministrasiHukuman', 'NoDokumenBAP', 'DokumenBAP', 'NoDokumenIjinTugas', 'DokumenIjinTugas', 'SanksiTextBanding', 'NoSKHasilBanding', 'DokumenSKHasilBanding'], 'string', 'max' => 100],
            [['PejabatPembuatSKSanksi', 'PejabatPembuatSKHasilBanding'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRiwayatSanksi' => 'Id Riwayat Sanksi',
            'IdPegawai' => 'Id Pegawai',
            'statusSedangDiprosesBawas' => 'Status Sedang Diproses Bawas',
            'idJenisHukumanDisiplin' => 'Id Jenis Hukuman Disiplin',
            'SanksiText' => 'Sanksi Text',
            'AlasanSanksi' => 'Alasan Sanksi',
            'TMTMulaiHukuman' => 'Tmtmulai Hukuman',
            'TMTAkhirHukuman' => 'Tmtakhir Hukuman',
            'NomorSKSanksi' => 'Nomor Sksanksi',
            'TanggalSKSanksi' => 'Tanggal Sksanksi',
            'PejabatPembuatSKSanksi' => 'Pejabat Pembuat Sksanksi',
            'DokumenSKSanksi' => 'Dokumen Sksanksi',
            'KeteranganMasalah' => 'Keterangan Masalah',
            'PenangananHukuman' => 'Penanganan Hukuman',
            'PenangananAdministrasiHukuman' => 'Penanganan Administrasi Hukuman',
            'StatusHukumanSelesai' => 'Status Hukuman Selesai',
            'NoDokumenBAP' => 'No Dokumen Bap',
            'TglDokumenBAP' => 'Tgl Dokumen Bap',
            'DokumenBAP' => 'Dokumen Bap',
            'NoDokumenIjinTugas' => 'No Dokumen Ijin Tugas',
            'TglDokumenIjinTugas' => 'Tgl Dokumen Ijin Tugas',
            'DokumenIjinTugas' => 'Dokumen Ijin Tugas',
            'idJenisHukumanDisiplinBanding' => 'Id Jenis Hukuman Disiplin Banding',
            'SanksiTextBanding' => 'Sanksi Text Banding',
            'AlasanSanksiBanding' => 'Alasan Sanksi Banding',
            'TMTMulaiHukumanBanding' => 'Tmtmulai Hukuman Banding',
            'TMTAkhirHukumanBanding' => 'Tmtakhir Hukuman Banding',
            'NoSKHasilBanding' => 'No Skhasil Banding',
            'TglSKHasilBanding' => 'Tgl Skhasil Banding',
            'PejabatPembuatSKHasilBanding' => 'Pejabat Pembuat Skhasil Banding',
            'DokumenSKHasilBanding' => 'Dokumen Skhasil Banding',
        ];
    }
}
