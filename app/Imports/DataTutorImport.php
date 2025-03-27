<?php

namespace App\Imports;

use App\Models\DataTutor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DataTutorImport implements ToModel, WithStartRow
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
        $data = new DataTutor();
        $data->kode_tutor = $row[1];
        $data->nip = $row[2];
        $data->nama = $row[3];
        $data->nik = $row[4];
        $data->verif_ktp = $row[5];
        $data->nidn = $row[6];
        $data->jk = $row[7];
        $data->tgl_lahir = $row[8];
        $data->telp = $row[9];
        $data->email = $row[10];
        $data->alamat = $row[11];
        $data->kode_pos = $row[12];
        $data->kabko = $row[13];
        $data->provinsi = $row[14];
        $data->tgl_sk = $row[15];
        $data->npwp = $row[16];
        $data->institusi = $row[17];
        $data->norek = $row[18];
        $data->bank = $row[19];
        $data->nama_rekening = $row[20];
        $data->pendidikan = $row[21];
        $data->pelatihan = $row[22];
        $data->save();
        return $data;
    }
}
