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
        $matkul = new Matakuliah();
        $matkul->kode = $row[1];
        $matkul->nama = $row[2];
        $matkul->skema = $row[3];
        $matkul->sifat_ujian = $row[4];
        $matkul->kode_waktu_ujian = $row[5];
        $matkul->save();
        return $matkul;
    }
}
