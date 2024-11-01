<?php

namespace App\Imports;

use App\Models\DataTutorial;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DataTutorialImport implements ToModel, WithStartRow
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
        $data = new DataTutorial();
        $data->kode_tutorial = $row[1];
        $data->kode_prodi = $row[2];
        $data->nama_prodi = $row[3];
        $data->kode_matakuliah = $row[4];
        $data->nama_matakuliah = $row[5];
        $data->kode_lokasi = $row[6];
        $data->nama_lokasi = $row[7];
        $data->kode_kabko = $row[8];
        $data->nama_kabko = $row[9];
        $data->biaya = $row[10];
        $data->status_aktif = $row[11];
        $data->save();
        return $data;
    }
}
