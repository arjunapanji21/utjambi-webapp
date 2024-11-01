<?php

namespace App\Imports;

use App\Models\DataLokasiTutorial;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DataLokasiTutorialImport implements ToModel, WithStartRow
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
        return new DataLokasiTutorial([
            'upbjj' => $row[1],
            'kode_lokasi' => $row[2],
            'nama_lokasi' => $row[3],
            'kabko' => $row[4],
            'alamat' => $row[5],
            'telp' => $row[6],
            'status' => $row[7],
        ]);
    }
}
