<?php

namespace App\Imports;

use App\Models\Wisudawan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class WisudawanImport implements ToModel, WithStartRow
{
    private $masa;
    private $tgl_seminar;
    private $waktu_seminar;
    private $tgl_wisuda;
    private $waktu_wisuda;
    private $lokasi;
    private $gmap;

    public function __construct(
        string $masa,
        string $tgl_seminar,
        string $waktu_seminar,
        string $tgl_wisuda,
        string $waktu_wisuda,
        string $lokasi,
        string $gmap,
        ) 
    {
        $this->masa = $masa;
        $this->tgl_seminar = $tgl_seminar;
        $this->waktu_seminar = $waktu_seminar;
        $this->tgl_wisuda = $tgl_wisuda;
        $this->waktu_wisuda = $waktu_wisuda;
        $this->lokasi = $lokasi;
        $this->gmap = $gmap;
    }

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
        return new Wisudawan([
            'masa' => $this->masa,
            'nim' => $row[1],
            'nama' => $row[2],
            'fakultas' => $row[3],
            'prodi' => $row[4],
            'kabko' => $row[5],
            'no_bangku' => $row[0],
            'tgl_seminar' => $this->tgl_seminar,
            'waktu_seminar' => $this->waktu_seminar,
            'tgl_wisuda' => $this->tgl_wisuda,
            'waktu_wisuda' => $this->waktu_wisuda,
            'lokasi' => $this->lokasi,
            'gmap' => $this->gmap,
        ]);
    }
}
