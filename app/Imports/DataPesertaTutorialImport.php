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
        return new DataPesertaTutorial([
            'upbjj' => $row[1],
            'kabko' => $row[2],
            'pos' => $row[3],
            'pokjar' => $row[4],
            'wilayah_ujian' => $row[5],
            'fakultas' => $row[6],
            'prodi' => $row[7],
            'agama' => $row[8],
            'sipas' => $row[9],
            'nim' => $row[10],
            'nama_mahasiswa' => $row[11],
            'masa' => $row[12],
            'semester' => $row[13],
            'MRI' => $row[14],
            'MRA' => $row[15],
            'alamat' => $row[16],
            'telp' => $row[17],
            'email' => $row[18],
        ]);
    }
}
