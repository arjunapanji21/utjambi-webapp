<?php

namespace App\Imports;

use App\Models\DataKelasTutorial;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DataKelasTutorialImport implements ToModel, WithStartRow
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
        return new DataKelasTutorial([
            'upbjj' => $row[1],
            'matakuliah' => $row[2],
            'kode_kelas' => $row[3],
            'nama_kelas' => $row[4],
        ]);
    }
}
