<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class PenjadwalanKelasExport implements FromCollection, WithHeadings, WithTitle
{
    protected $data;

    function __construct($data)
    {
        $this->data = $data;
    }

    public function title(): string
    {
        return 'Sheet1';
    }

    public function headings(): array
    {
        return [
            'NO',
            'MASA',
            'NIM',
            'KODE TUTOR',
            'KODE TUTORIAL',
            'KODE KELAS',
            'KODE JADWAL',
            'KODE LOKASI',
            'TANGGAL MULAI',
            'TANGGAL SELESAI',
            'PREDIKSI',
            'LINK',
            'EMAIL PEMBUAT TEAMS',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $output = [];
        foreach($this->data->peserta as $key=>$row){
            array_push($output, [
                'NO' => $key + 1,
                'MASA' => $this->data->masa,
                'NIM' => $row->peserta->nim,
                'KODE TUTOR' => $this->data->kode_tutor,
                'KODE TUTORIAL' => $this->data->kode_tutorial,
                'KODE KELAS' => $this->data->kode_kelas,
                'KODE JADWAL' => $this->data->kode_jadwal,
                'KODE LOKASI' => $row->lokasi->kode_lokasi,
                'TANGGAL MULAI' => date('d/m/Y', strtotime($this->data->tgl_mulai)),
                'TANGGAL SELESAI' => date('d/m/Y', strtotime($this->data->tgl_selesai)),
                'PREDIKSI' => $this->data->prediksi,
                'LINK' => $this->data->link,
                'EMAIL PEMBUAT TEAMS' => $this->data->email_pembuat_teams,
            ]);
        }
        return collect($output);
    }
}
