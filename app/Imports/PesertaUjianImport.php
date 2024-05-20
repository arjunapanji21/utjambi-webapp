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
            'nim' => $row[1],
            'nama_mhs' => $row[2],
            'prodi' => $row[3],
            'telp' => $row[4],
            'kode_mk' => $row[5],
            'nama_mk' => $row[6],
            'kode_tpu' => $row[7],
            'nama_tpu' => $row[8],
            'kabko' => $row[9],
        ]);
    }
}
