<?php

namespace App\Exports;

use App\Models\Matakuliah;
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
        $data = [];
        $i = 0;
        foreach(NumpangUjian::all() as $row){
            foreach(explode(", ", $row->matakuliah) as $key=>$mk){
                $matakuliah = Matakuliah::where('kode', $mk)->first();
                $data[$i]['no'] = $i + 1;
                $data[$i]['masa'] = $row->masa;
                $data[$i]['nim'] = $row->nim;
                $data[$i]['nama'] = $row->nama;
                $data[$i]['prodi'] = $row->prodi;
                $data[$i]['ut_daerah_asal'] = $row->ut_daerah_asal;
                $data[$i]['ut_daerah_tujuan'] = $row->ut_daerah_tujuan;
                $data[$i]['wilayah_ujian_asal'] = $row->wilayah_ujian_asal;
                $data[$i]['wilayah_ujian_tujuan'] = $row->wilayah_ujian_tujuan;
                $data[$i]['tgl_pindah_lokasi'] = $row->tgl_pindah_lokasi;
                $data[$i]['alasan'] = $row->alasan;
                $data[$i]['kode_matakuliah'] = $matakuliah->kode;
                $data[$i]['nama_matakuliah'] = $matakuliah->nama;
                $data[$i]['kode_waktu_ujian'] = $matakuliah->kode_waktu_ujian;
                $data[$i]['skema'] = $row->skema;
                $data[$i]['no_wa'] = $row->no_wa;
                $data[$i]['tgl_pengajuan'] = date('Y-m-d', strtotime($row->created_at));
                $data[$i]['status'] = $row->status;
                $data[$i]['keterangan'] = $row->keterangan;
                $data[$i]['created_at'] = $row->created_at;
                $data[$i]['updated_at'] = $row->updated_at;
                $i++;
            }
        }
        return collect($data);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return [
           'no',
           'masa',
           'nim',
           'nama',
           'prodi',
           'ut_daerah_asal',
           'ut_daerah_tujuan',
           'wilayah_ujian_asal',
           'wilayah_ujian_tujuan',
           'tgl_pindah_lokasi',
           'alasan',
           'kode_matakuliah',
           'nama_matakuliah',
           'kode_waktu_ujian',
           'skema',
           'no_wa',
           'tgl_pengajuan',
           'status',
           'keterangan',
           'created_at',
           'updated_at',
        ];
    }
}
