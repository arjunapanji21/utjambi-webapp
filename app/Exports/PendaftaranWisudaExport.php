<?php

namespace App\Exports;

use App\Models\PendaftaranWisuda;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PendaftaranWisudaExport implements FromQuery, WithHeadings
{
    use Exportable;

    protected $filter;
    protected $search;

    public function __construct($filter = null, $search = null) 
    {
        $this->filter = $filter;
        $this->search = $search;
    }

    public function query()
    {
        $query = PendaftaranWisuda::query();

        if ($this->search) {
            $query->where(function ($q) {
                $q->where('nim', 'like', "%{$this->search}%")
                    ->orWhere('nama', 'like', "%{$this->search}%");
            });
        }

        if ($this->filter) {
            switch ($this->filter) {
                case 'request-lip':
                    $query->where('bukti_pembayaran', 'Request LIP');
                    break;
                case 'sudah-bayar':
                    $query->where('bukti_pembayaran', '!=', null)
                          ->where('bukti_pembayaran', '!=', 'Request LIP');
                    break;
                case 'belum-verifikasi':
                    $query->where('bukti_pembayaran', '!=', null)
                          ->where('bukti_pembayaran', '!=', 'Request LIP')
                          ->where('konfirmasi_lip', 0);
                    break;
                case 'terverifikasi':
                    $query->where('konfirmasi_lip', 1);
                    break;
            }
        }

        return $query;
    }

    public function headings(): array
    {
        return [
            'id',
            'masa_yudisium',
            'no_sk_rektor',
            'mr_awal',
            'mr_akhir',
            'jenis_program',
            'nim',
            'nama',
            'kabko',
            'fakultas',
            'prodi',
            'nik',
            'tmp_lahir',
            'tgl_lahir',
            'nama_ibu',
            'ipk',
            'telp',
            'email',
            'alamat_ktp',
            'alamat_kirim',
            'bukti_pembayaran',
            'tgl_upload_bukti',
            'ikut_seminar',
            'konfirmasi_lip',
            'tgl_konfirmasi',
            'keterangan',
            'created_at',
            'updated_at',
        ];
    }
}
