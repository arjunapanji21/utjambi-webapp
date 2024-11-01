<?php

namespace App\Imports;

use App\Models\CekJadwalTutorial;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CekJadwalTutorialImport implements ToModel, WithStartRow
{
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
        $data = new CekJadwalTutorial();
        $data->masa = $row[1];
        $data->nim = explode(" | ", $row[2])[0];
        $data->nama_mahasiswa = explode(" | ", $row[2])[1];
        $data->kode_tutorial = $row[3];
        $data->kode_matakuliah = explode(" | ", $row[4])[0];
        $data->nama_matakuliah = explode(" | ", $row[4])[1];
        $data->kode_tutor = explode(" | ", $row[5])[0];
        $data->nama_tutor = explode(" | ", $row[5])[1];
        $data->kode_kelas = explode(" | ", $row[6])[0];
        $data->nama_kelas = explode(" | ", $row[6])[1];
        $data->layanan = $row[7];
        $data->upbjj = $row[8];
        $data->lokasi = $row[9];
        $data->kabko = $row[10];
        $data->jadwal = $row[11];
        $data->link = $row[12];
        return $data;
    }
}
