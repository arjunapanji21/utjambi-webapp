<?php

namespace App\Exports;

use App\Models\NumpangUjian;
use App\Models\TambahNaskahMatakuliah;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class NumpangUjianExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // $result = [];
        // foreach(NumpangUjian::orderBy('nama', 'asc')->get() as $key=>$mahasiswa){
        //     // $foreach(explode("|", $mahasiswa->matakuliah) as $row){
        //         //     $result[$key]["no"] = $row;
        //         //     $result[$key]["nim"] = $row;
        //         //     $result[$key]["Nama"] = $row;
        //         //     $result[$key]["prodi"] = $row;
        //         //     $result[$key]["ut_daerah_asal"] = $row;
        //         //     $result[$key]["ut_daerah_tujuan"] = $row;
        //         //     $result[$key]["wilayah_ujian_asal"] = $row;
        //         //     $result[$key]["wilayah_ujian_tujuan"] = $row;
        //         //     $result[$key]["tgl_pindah_lokasi"] = $row;
        //         //     $result[$key]["matakuliah"] = $row;
        //         //     $result[$key]["skema"] = $row;
        //         //     $result[$key]["asalan"] = $row;
        //         //     $result[$key]["no_wa"] = $row;
        //         // }
        // }
        $result = [];
        $index = 0;
        foreach(TambahNaskahMatakuliah::all()->groupBy(['kode_wilayah', 'kode_matakuliah']) as $kode_wilayah=>$kode_matakuliah){
            foreach($kode_matakuliah as $kode=>$matakuliah){
                $result[$index]['kode_wilayah'] = $kode_wilayah;
                $result[$index]['kode_matakuliah'] = $kode;
                $result[$index]['jumlah'] = $matakuliah->count();
                $index += 1;
            }
        }
        return collect($result);

        // return NumpangUjian::orderBy('nama', 'asc')->get();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        // return [
        //     "no", 
        //     "nim", 
        //     "Nama", 
        //     "prodi", 
        //     "ut_daerah_asal", 
        //     "ut_daerah_tujuan", 
        //     "wilayah_ujian_asal", 
        //     "wilayah_ujian_tujuan", 
        //     "tgl_pindah_lokasi", 
        //     "matakuliah", 
        //     "skema", 
        //     "asalan", 
        //     "no_wa"
        // ];

        return ["kode_wilayah", "kode_matakuliah", "jumlah"];
    }
}
