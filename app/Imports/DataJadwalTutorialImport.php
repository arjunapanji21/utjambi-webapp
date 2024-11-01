<?php

namespace App\Imports;

use App\Models\DataJadwalTutorial;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DataJadwalTutorialImport implements ToModel, WithStartRow
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
        return new DataJadwalTutorial([
            'kode_upbjj' => $row[1],
            'nama_upbjj' => $row[2],
            'kode_jadwal' => $row[3],
            'hari' => $row[4],
            'jam' => $row[5],
            'status_aktif' => $row[6],
            'status_data' => $row[7],
        ]);
    }
}
