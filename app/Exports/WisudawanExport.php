<?php

namespace App\Exports;

use App\Models\Wisudawan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WisudawanExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Wisudawan::all();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return [
            'No.',
            'Masa',
            'NIM',
            'Nama',
            'Fakultas',
            'Prodi',
            'Kabko',
            'No. Bangku',
            'Tgl. Seminar',
            'Waktu Seminar',
            'Tgl. Wisuda',
            'Waktu Wisuda',
            'Konfirmasi Kehadiran',
            'Scan QR Seminar',
            'Scan QR Wisuda',
            'Lokasi',
            'GMAPS',
            'created_at',
            'updated_at',
        ];

        // return ["kode_wilayah", "nama_wilayah", "kode_waktu_ujian", "kode_matakuliah", "nama_matakuliah", "jumlah"];
    }
}
