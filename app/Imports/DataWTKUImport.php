<?php

namespace App\Imports;

use App\Models\WTKU;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DataWTKUImport implements ToModel, WithStartRow
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
        $data = new WTKU;
        $data->masa = $row[1];
        $data->nim = $row[2];
        $data->nama = $row[3];
        $data->kelas = $row[4];
        $data->tgl_wt = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[5]));
        $data->lokasi_wt = $row[6];
        $data->gmap_wt = $row[7];
        $data->zoom_wt = $row[8];
        $data->tgl_ku = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[9]));
        $data->lokasi_ku = $row[10];
        $data->gmap_ku = $row[11];
        $data->zoom_ku = $row[12];
        $data->fakultas = $row[13];
        $data->prodi = $row[14];
        $data->telp = $row[15];
        $data->save();
        return $data;
    }
}
