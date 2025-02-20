<?php

namespace App\Imports;

use App\Models\PesertaOsmbPkbjj;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Carbon\Carbon;

class PesertaOsmbPkbjjImport implements ToModel, WithStartRow
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
        $data = new PesertaOsmbPkbjj();
        $data->masa = $row[1];
        $data->batch = $row[2];
        $data->nim = $row[3];
        $data->nama = $row[4];
        $data->kelas = $row[5];
        $data->tgl_osmb = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[6]));
        $data->lokasi_osmb = $row[7];
        $data->gmap_osmb = $row[8];
        $data->zoom_osmb = $row[9];
        $data->tgl_pkbjj = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[10]));
        $data->lokasi_pkbjj = $row[11];
        $data->gmap_pkbjj = $row[12];
        $data->zoom_pkbjj = $row[13];
        $data->fakultas = $row[14];
        $data->prodi = $row[15];
        $data->telp = $row[16];
        $data->save();
        return $data;
    }
}
