<?php

namespace App\Http\Controllers;

use App\Exports\WisudawanExport;
use App\Exports\PendaftaranWisudaExport;
use App\Imports\PendaftaranWisudaImport;
use App\Imports\WisudawanImport;
use App\Models\PendaftaranWisuda;
use App\Models\Wisudawan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class WisudaController extends Controller
{
    public function index()
    {
        app('App\Http\Controllers\HomepageController')->visitor();
        $props = [
            'title' => 'Wisuda UT Jambi',
            'active' => 'Wisuda',
            'sk_rektor' => PendaftaranWisuda::orderBy('no_sk_rektor', 'asc')
                ->pluck('no_sk_rektor')
                ->unique()
                ->values(),
        ];
        return view('homepage.kegiatan.wisuda', $props);
    }

    public function pendaftaran_wisuda(Request $request)
    {
        app('App\Http\Controllers\HomepageController')->visitor();
        $request->validate([
            'nim' => 'required'
        ]);
    
        $nim = $request['nim'];

        if ($nim[0] == "0") {
          $nim = substr($nim, 1);
        }
    
        $calon_wisuda = PendaftaranWisuda::where('nim', $nim)->first();
        // dd($calon_wisuda->bukti_pembayaran);
        if($calon_wisuda->bukti_pembayaran == null){
            $calon_wisuda->bukti_pembayaran = "Request LIP";
            $calon_wisuda->save();
        }
        $props = [
            'title' => 'Wisuda UT Jambi',
            'active' => 'Wisuda',
            'calon_wisuda' => $calon_wisuda
        ];
        if ($calon_wisuda == null) {
            return back()->with('alert', 'NIM yang anda masukkan belum terdaftar pada Yudisium saat ini.');
        }
        return view('homepage.kegiatan.pendaftaran_wisuda', $props);
    }

    public function upload_bukti_bayar_wisuda(Request $request)
    {
        app('App\Http\Controllers\HomepageController')->visitor();
        $request->validate([
            'file' => 'required'
        ]);
        $file = $request->file('file');
        $extension = $file->extension();
        $folder = public_path('uploads/wisuda/bukti_bayar/');
        $filename = $request['nim'] . "_bukti_bayar." . $extension;
        $file->move($folder, $filename);
        $bukti_pembayaran = $filename;
        $calon_wisuda = PendaftaranWisuda::where('nim', $request['nim'])->first();
        $calon_wisuda->bukti_pembayaran = $bukti_pembayaran;
        $calon_wisuda->tgl_upload_bukti = date(now());
        if ($request->has('ikut_seminar')) {
            $calon_wisuda->ikut_seminar = $request['ikut_seminar'];
        }
        $calon_wisuda->save();
        return back()->with('success', 'Berhasil mengupload bukti pembayaran LIP wisuda');
    }

    public function tolak_bukti_bayar_wisuda(Request $request)
    {
        $request->validate([
            'keterangan' => 'required'
        ]);
        $calon_wisuda = PendaftaranWisuda::where('nim', $request['nim'])->first();
        $calon_wisuda->keterangan = $request['keterangan'];
        $calon_wisuda->bukti_pembayaran = null;
        $calon_wisuda->tgl_upload_bukti = null;
        $calon_wisuda->save();
        return back()->with('success', 'Data berhasil di update.');
    }

    public function konfirmasi_pendaftaran_wisuda($id)
    {
        $calon_wisuda = PendaftaranWisuda::find($id);
        $calon_wisuda->konfirmasi_lip = 1;
        $calon_wisuda->tgl_konfirmasi = date(now());
        $calon_wisuda->save();
        return back()->with('success', "Data berhasil di update.");
    }

    public function cari_data_wisudawan()
    {
        app('App\Http\Controllers\HomepageController')->visitor();
        $master = [
            'title' => 'Wisuda UT Jambi',
            'active' => 'Wisuda',
        ];
        return view('qr_wisuda', $master);
    }

    protected function calculateStats($wisudawan)
    {
        $allData = $wisudawan->get();
        $total = $allData->count() ?: 1; // Prevent division by zero

        $belumVerifikasi = $allData->where('bukti_pembayaran', '!=', null)
            ->where('bukti_pembayaran', '!=', "Request LIP")
            ->where('konfirmasi_lip', 0)
            ->count();

        $terverifikasi = $allData->where('konfirmasi_lip', 1)->count();
        $sudah_bayar = $allData->where('bukti_pembayaran', '!=', null)->where('bukti_pembayaran', '!=', "Request LIP")->count();

        $request_lip = $allData->where('bukti_pembayaran', 'Request LIP')->count();
        $ikut_seminar = $allData->where('ikut_seminar', 1)->count();

        return [
            'total' => $total,
            'masa_yudisium' => $allData->first()?->masa_yudisium,
            'belum_verifikasi' => $belumVerifikasi,
            'terverifikasi' => $terverifikasi,
            'sudah_bayar' => $sudah_bayar,
            'ikut_seminar' => $ikut_seminar,
            'request_lip' => $request_lip,
            'belum_verifikasi_percentage' => number_format(($belumVerifikasi / $total) * 100, 1),
            'terverifikasi_percentage' => number_format(($terverifikasi / $total) * 100, 1),
            'sudah_bayar_percentage' => number_format(($sudah_bayar / $total) * 100, 1),
            'request_lip_percentage' => number_format(($request_lip / $total) * 100, 1),
        ];
    }

    public function pendaftaran(Request $request)
    {
        $query = PendaftaranWisuda::query();

        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nim', 'like', "%{$search}%")
                    ->orWhere('nama', 'like', "%{$search}%");
            });
        }

        // Handle filters
        if ($request->has('filter')) {
            switch ($request->filter) {
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

        $stats = $this->calculateStats(PendaftaranWisuda::query());
        $wisudawan = $query->paginate(10)->withQueryString();

        return view('admin.aplikasi.wisuda.pendaftaran_wisuda', [
            'paginator' => $wisudawan,
            'stats' => $stats,
            'activeFilter' => $request->filter
        ]);
    }

    public function import_calon_wisuda(Request $request)
    {
        // PendaftaranWisuda::truncate();
        Excel::import(new PendaftaranWisudaImport(), $request['file']);
        return redirect(route('admin.wisuda.pendaftaran'))->with('success', 'Data Calon Wisudawan Berhasil Di Upload!');
    }

    public function export_pendaftaran(Request $request)
    {
        return (new PendaftaranWisudaExport(
            $request->filter,
            $request->search
        ))->download('pendaftaran_wisuda_'.date('Y-m-d').'.xlsx');
    }

    public function kehadiran()
    {
        $wisudawan = Wisudawan::orderBy('id', 'asc')->paginate(10);
        $master = [
            'title' => 'Kehadiran Wisudawan',
            'active' => 'Wisuda',
            'wisudawan' => $wisudawan,
        ];
        return view('admin.aplikasi.wisuda.kehadiran_wisuda', $master);
    }

    public function detail_peserta(Request $request)
    {
        app('App\Http\Controllers\HomepageController')->visitor();
        try {
            $wisudawan = Wisudawan::where('nim', $request['nim'])->first();
            if ($wisudawan != null) {
                if ($wisudawan->konfirmasi_kehadiran == null) {
                    return redirect(route('kegiatan.wisuda.konfirmasi_kehadiran'))->with('error', 'Silahkan konfirmasi kehadiran terlebih dahulu!');
                } else if ($wisudawan->konfirmasi_kehadiran == "Tidak") {
                    return back()->with('error', 'Anda tidak bisa melakukan cetak QR-Code Presensi karena telah mengkonfirmasi untuk tidak bisa hadir.');
                }
                $master = [
                    'title' => 'Peserta Wisuda',
                    'active' => 'Wisuda',
                    'wisudawan' => $wisudawan,
                ];
                return view('wisuda_show', $master);
            } else {
                return back()->with('error', 'NIM tidak terdaftar atau salah, silahkan periksa kembali nim anda.');
            }
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }
    }

    public function import_kehadiran_wisuda(Request $request)
    {
        // Wisudawan::truncate();
        $request['masa'] = $request['tahun'] . " " . $request['periode'];
        Excel::import(new WisudawanImport(
            $request['masa'],
            $request['tgl_seminar'],
            $request['waktu_seminar'],
            $request['tgl_wisuda'],
            $request['waktu_wisuda'],
            $request['lokasi'],
            $request['gmap'],
        ), $request['file']);
        return redirect(route('admin.wisuda.kehadiran'))->with('success', 'Data Wisudawan Berhasil Di Upload!');
    }

    public function export_kehadiran_wisuda()
    {
        return Excel::download(new WisudawanExport, 'kehadiran_wisudawan_' . date('dmY') . '.xlsx');
    }

    public function konfirmasi_kehadiran()
    {
        app('App\Http\Controllers\HomepageController')->visitor();
        $props = [
            'title' => "Form Konfirmasi Kesediaan Hadir Seminar & Wisuda"
        ];
        return view('forms.form_konfirmasi_wisuda', $props);
    }

    public function submit_konfirmasi_kehadiran(Request $request)
    {
        try {
            $data = Wisudawan::where('nim', $request['nim'])->first();
            $data->konfirmasi_kehadiran = $request['konfirmasi_kehadiran'];
            $data->save();
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }
        return redirect(route('wisuda.cari_data_wisudawan'))->with('success', 'Konfirmasi kehadiran berhasil dikirim.');
    }

    public function seminar_scan(Request $request)
    {
        if ($request->has('nim')) {
            try {
                $wisudawan = Wisudawan::where('nim', $request['nim'])->first();
                $wisudawan->hadir_seminar = date(now());
                $wisudawan->save();
                $master = [
                    'title' => 'SEMINAR UT JAMBI',
                    'active' => 'Wisuda',
                    'wisudawan' => $wisudawan,
                    'data' => Wisudawan::all(),
                    'hadir' => Wisudawan::where('hadir_seminar', '!=', NULL)->get(),
                ];
                return view('scan_seminar', $master);
            } catch (\Throwable $th) {
                return back();
            }
        } else {
            $master = [
                'title' => 'SEMINAR UT JAMBI',
                'active' => 'Wisuda',
                'data' => Wisudawan::all(),
                'hadir' => Wisudawan::where('hadir_seminar', '!=', NULL)->get(),
            ];
            return view('scan_seminar', $master);
        }
    }

    public function wisuda_scan(Request $request)
    {
        if ($request->has('nim')) {
            try {
                $wisudawan = Wisudawan::where('nim', $request['nim'])->first();
                $wisudawan->hadir_wisuda = date(now());
                $wisudawan->save();
                $master = [
                    'title' => 'WISUDA UT JAMBI',
                    'active' => 'Wisuda',
                    'wisudawan' => $wisudawan,
                    'data' => Wisudawan::all(),
                    'hadir' => Wisudawan::where('hadir_wisuda', '!=', NULL)->get(),
                ];
                return view('scan_wisuda', $master);
            } catch (\Throwable $th) {
                return back();
            }
        } else {
            $master = [
                'title' => 'WISUDA UT JAMBI',
                'active' => 'Wisuda',
                'data' => Wisudawan::all(),
                'hadir' => Wisudawan::where('hadir_wisuda', '!=', NULL)->get(),
            ];
            return view('scan_wisuda', $master);
        }
    }
}
