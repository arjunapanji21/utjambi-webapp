<?php

namespace App\Imports;

use App\Models\DataTutor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DataTutorImport implements ToModel, WithStartRow
{
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataTutor([
           'kode_tutor' => $row[1],
           'nip' => $row[2],
           'nama' => $row[3],
           'nik' => $row[4],
           'verif_ktp' => $row[5],
           'nidn' => $row[6],
           'jk' => $row[7],
           'tgl_lahir' => $row[8],
           'telp' => $row[9],
           'email' => $row[10],
           'alamat' => $row[11],
           'kode_pos' => $row[12],
           'kabko' => $row[13],
           'provinsi' => $row[14],
           'tgl_sk' => $row[15],
           'npwp' => $row[16],
           'institusi' => $row[17],
           'norek' => $row[18],
           'bank' => $row[19],
           'nama_rekening' => $row[20],
           'pendidikan' => $row[21],
           'pelatihan' => $row[22],
        ]);
    }
}
