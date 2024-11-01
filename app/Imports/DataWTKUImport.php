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
        $data->lokasi = $row[5];
        $data->link_gmap_lokasi = $row[6];
        $data->tanggal = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[7]));;
        $data->telp = $row[8];
        $data->save();
        return $data;
    }
}
