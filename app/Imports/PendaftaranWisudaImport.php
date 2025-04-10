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
        $wisudawan->masa_yudisium = $row[1];
        $wisudawan->no_sk_rektor = $row[2];
        $wisudawan->mr_awal = $row[3];
        $wisudawan->mr_akhir = $row[4];
        $wisudawan->jenis_program = $row[5];
        $wisudawan->nim = $row[6];
        $wisudawan->nama = $row[7];
        $wisudawan->kabko = $row[8];
        $wisudawan->fakultas = $row[9];
        $wisudawan->prodi = $row[10];
        $wisudawan->nik = $row[11];
        $wisudawan->tmp_lahir = $row[12];
        $wisudawan->tgl_lahir = $row[13];
        $wisudawan->nama_ibu = $row[14];
        $wisudawan->ipk = $row[15];
        $wisudawan->telp = $row[16];
        $wisudawan->email = $row[17];
        $wisudawan->alamat_ktp = $row[18];
        $wisudawan->alamat_kirim = $row[19];
        $wisudawan->save();
        return $wisudawan;
    }
}
