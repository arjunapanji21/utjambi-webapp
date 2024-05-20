<?php

namespace App\Imports;

use App\Models\WilayahUjian;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class WilayahUjianImport implements ToModel, WithStartRow
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
        return new WilayahUjian([
            'kode_upbjj' => $row[1],
            'nama_upbjj' => $row[2],
            'kode_wilayah_ujian' => $row[3],
            'nama_wilayah_ujian' => $row[4],
            'aktif' => $row[5],
            'wilayah_utm' => $row[6],
        ]);
    }
}
