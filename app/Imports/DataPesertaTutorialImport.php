<?php

namespace App\Imports;

use App\Models\DataPesertaTutorial;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DataPesertaTutorialImport implements ToModel, WithStartRow
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
        $data = new DataPesertaTutorial();
        $data->upbjj = $row[1];
        $data->kabko = $row[2];
        $data->pos = $row[3];
        $data->pokjar = $row[4];
        $data->wilayah_ujian = $row[5];
        $data->fakultas = $row[6];
        $data->prodi = $row[7];
        $data->agama = $row[8];
        $data->sipas = $row[9];
        $data->nim = $row[10];
        $data->nama_mahasiswa = $row[11];
        $data->masa = $row[12];
        $data->semester = $row[13];
        $data->MRI = $row[14];
        $data->MRA = $row[15];
        $data->alamat = $row[16];
        $data->telp = $row[17];
        $data->email = $row[18];
    }
}
