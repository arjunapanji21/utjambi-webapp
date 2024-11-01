<?php

namespace App\Imports;

use App\Models\PenjadwalanTutorial;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Carbon\Carbon;

class PenjadwalanTutorialImport implements ToModel, WithStartRow
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
        $penjadwalan = new PenjadwalanTutorial;
        $penjadwalan->masa = $row[1];
        $penjadwalan->kode_tutorial = $row[2];
        $penjadwalan->kode_tutor = $row[3];
        $penjadwalan->kode_kelas = $row[4];
        $penjadwalan->kode_jadwal = $row[5];
        $penjadwalan->tgl_mulai = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[6]));
        $penjadwalan->tgl_selesai = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[7]));
        $penjadwalan->link = $row[8];
        $penjadwalan->email_pembuat_teams = $row[9];
        return $penjadwalan;
    }
}
