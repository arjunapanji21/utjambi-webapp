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
        // $result = [];
        // $index = 0;
        // foreach(TambahNaskahMatakuliah::all()->groupBy(['kode_wilayah', 'kode_matakuliah']) as $kode_wilayah=>$kode_matakuliah){
        //     foreach($kode_matakuliah as $kode=>$matakuliah){
        //         $result[$index]['kode_wilayah'] = $kode_wilayah;
        //         $result[$index]['nama_wilayah'] = $matakuliah[0]->nama_wilayah;
        //         $result[$index]['kode_waktu_ujian'] = $matakuliah[0]->kode_waktu_ujian;
        //         $result[$index]['kode_matakuliah'] = $kode;
        //         $result[$index]['nama_matakuliah'] = $matakuliah[0]->nama_matakuliah;
        //         $result[$index]['jumlah'] = $matakuliah->count();
        //         $index += 1;
        //     }
        // }
        // return collect($result);

        $data = [];
        $i = 0;
        foreach(NumpangUjian::all() as $row){
            foreach(explode("|", $row->matakuliah) as $mk){
                $data[$i]['nim'] = $row->nim;
                $data[$i]['nama'] = $row->nama;
                $data[$i]['prodi'] = $row->prodi;
                $data[$i]['ut_daerah_asal'] = $row->ut_daerah_asal;
                $data[$i]['ut_daerah_tujuan'] = $row->ut_daerah_tujuan;
                $data[$i]['wilayah_ujian_asal'] = $row->wilayah_ujian_asal;
                $data[$i]['wilayah_ujian_tujuan'] = $row->wilayah_ujian_tujuan;
                $data[$i]['tgl_pindah_lokasi'] = $row->tgl_pindah_lokasi;
                $data[$i]['kode_matakuliah'] = json_decode($mk)->kode;
                $data[$i]['nama_matakuliah'] = json_decode($mk)->nama;
                $data[$i]['skema'] = $row->skema;
                $data[$i]['no_wa'] = $row->no_wa;
                $data[$i]['tgl_pengajuan'] = date('Y-m-d', strtotime($row->created_at));
                $data[$i]['status'] = $row->status;
                $i++;
            }
        }
        return collect($data);

        // return NumpangUjian::orderBy('nama', 'asc')->get();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return [
            'nim',
            'nama',
            'prodi',
            'ut_daerah_asal',
            'ut_daerah_tujuan',
            'wilayah_ujian_asal',
            'wilayah_ujian_tujuan',
            'tgl_pindah_lokasi',
            'kode_matakuliah',
            'nama_matakuliah',
            'skema',
            'no_wa',
            'tgl_pengajuan',
            'status',
        ];

        // return ["kode_wilayah", "nama_wilayah", "kode_waktu_ujian", "kode_matakuliah", "nama_matakuliah", "jumlah"];
    }
}
