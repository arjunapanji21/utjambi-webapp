<?php

namespace App\Imports;

use App\Models\PesertaUjian;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PesertaUjianImport implements ToModel, WithStartRow
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
        return new PesertaUjian([
            'kabko' => $row[1],
            'kode_tpu' => $row[2],
            'prodi' => $row[3],
            'nim' => $row[4],
            'nama_mhs' => $row[5],
            'kode_mk' => $row[6],
            'nama_mk' => $row[7],
            'telp' => $row[8],
            'nama_tpu' => $row[9],
        ]);
    }
}
