<?php

namespace App\Imports;

use App\Models\DataPokjar;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DataPokjarImport implements ToModel, WithStartRow
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
        return new DataPokjar([
            'kode_pokjar' => $row[1],
            'nama_pokjar' => $row[2],
            'kode_kabko' => $row[3],
            'nama_kabko' => $row[4],
            'kode_pos' => $row[5],
            'nama_pos' => $row[6],
            'kode_upbjj' => $row[7],
            'nama_upbjj' => $row[8],
        ]);
    }
}
