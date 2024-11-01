<?php

namespace App\Imports;

use App\Models\PendaftaranWisuda;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PendaftaranWisudaImport implements ToModel, WithStartRow
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
        $wisudawan = new PendaftaranWisuda();
        $wisudawan->masa_yudisium = $row[2];
        $wisudawan->no_sk_rektor = $row[3];
        $wisudawan->mr_awal = $row[4];
        $wisudawan->mr_akhir = $row[5];
        $wisudawan->jenis_program = $row[6];
        $wisudawan->nim = $row[7];
        $wisudawan->nama = $row[8];
        $wisudawan->kabko = $row[9];
        $wisudawan->fakultas = $row[10];
        $wisudawan->prodi = $row[11];
        $wisudawan->nik = $row[12];
        $wisudawan->tmp_lahir = $row[13];
        $wisudawan->tgl_lahir = $row[14];
        $wisudawan->nama_ibu = $row[15];
        $wisudawan->ipk = $row[16];
        $wisudawan->telp = $row[17];
        $wisudawan->email = $row[18];
        $wisudawan->alamat_ktp = $row[19];
        $wisudawan->alamat_kirim = $row[20];
        $wisudawan->save();
        return $wisudawan;
    }
}
