<?php

namespace App\Imports;

use App\Models\Matakuliah;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class MatakuliahImport implements ToModel, WithStartRow
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
        return new Matakuliah([
            'kode' => $row[1],
            'nama' => $row[2],
            'skema' => $row[3],
            'sifat_ujian' => $row[4],
            'kode_waktu_ujian' => $row[5],
        ]);
    }
}
