<?php

namespace App\Exports;

use App\Models\Matakuliah;
use App\Models\NumpangUjian;
use App\Models\TambahNaskahMatakuliah;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MatakuliahNumpangUjianExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = TambahNaskahMatakuliah::orderBy('kode_waktu_ujian')->get()->groupBy(['kode_wilayah', 'kode_matakuliah']);
        $result = [];
        foreach($data as $matakuliah){
            $value = [];
            foreach($matakuliah as $row){
                $value['kode_wilayah'] = $row[0]->kode_wilayah;
                $value['nama_wilayah'] = $row[0]->nama_wilayah;
                $value['kode_waktu_ujian'] = $row[0]->kode_waktu_ujian;
                $value['kode_matakuliah'] = $row[0]->kode_matakuliah;
                $value['nama_matakuliah'] = $row[0]->nama_matakuliah;
                $value['jumlah'] = count($row);
                array_push($result, $value);
            }
        }
        return collect($result);
    }

    public function headings(): array
    {
        return ["kode_wilayah", "nama_wilayah", "kode_waktu_ujian", "kode_matakuliah", "nama_matakuliah", "jumlah"];
    }
}
