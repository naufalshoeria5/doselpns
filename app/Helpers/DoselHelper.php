<?php

namespace App\Helpers;

class DoselHelper
{
    public static function jenis_berkas($jenis)
    {
        switch ($jenis) {
            case 1:
                return 'Surat Lamaran';
                break;
            case 2:
                return 'Akte Kelahiran Ybs';
                break;
            case 3:
                return 'Akte Kelahiran Anak';
                break;
            case 4:
                return 'Daftar Riwayat Hidup';
                break;
            case 5:
                return 'Ijazah';
                break;
            case 6:
                return 'SKCK';
                break;
            case 7:
                return 'Kep Capeg';
                break;
            case 8:
                return 'Kenaikan Gaji Berkala';
                break;
            case 9:
                return 'Karis/Karsu';
                break;
            case 10:
                return 'Kep Penempatan Jabatan';
                break;
            case 11:
                return 'Kartu ASABRI';
                break;
            case 12:
                return 'Sumpah Pengangkatan PNS';
                break;
            case 13:
                return 'Kartu Pegawai';
                break;
            case 14:
                return 'Surat Izin Nikah';
                break;
            case 15:
                return 'Kep Tanda Kehormatan';
                break;
            case 16:
                return 'Ijazah Prajab/Diklatpim/Latsarmil/Sus/Dikalih';
                break;
            case 17:
                return 'STLUD/KPPI';
                break;
            case 18:
                return 'Penilaian Prestasi Kerja (PPK)';
                break;
            case 19:
                return 'Skep Pengangkatan PNS';
                break;
            case 20:
                return 'KEP/Sprin Perpindahan';
                break;
            case 21:
                return 'Kep Pemberian Hukuman';
                break;
            case 22:
                return 'Laporan Perkembangan kepri';
                break;
            case 23:
                return 'Surat Kematian';
                break;
            case 24:
                return 'Kep Pemberhentian/Skorsing';
                break;
            case 25:
                return 'Kep Pengaktifan';
                break;
            case 26:
                return 'Kep Perubahan Nama';
                break;
            case 27:
                return 'Kep Tambah Gelar';
                break;
            case 28:
                return 'Kep Pindah Agama';
                break;
            case 29:
                return 'Kep Kenaikan/Turun Pangkat';
                break;
            case 30:
                return 'Kep Ralat';
                break;
            case 31:
                return 'Kep Pensiun';
                break;
            case 32:
                return 'Dokumen Tekstual Lain';
                break;
        }
    }
}