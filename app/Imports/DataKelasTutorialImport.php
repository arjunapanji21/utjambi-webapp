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
        $data = new DataKelasTutorial();
        $data->upbjj = $row[1];
        $data->matakuliah = $row[2];
        $data->kode_kelas = $row[3];
        $data->nama_kelas = $row[4];
        $data->save();
        return $data;
    }
}
