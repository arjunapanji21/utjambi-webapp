<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\NumpangUjian;
use App\Models\PesertaUjian;
use App\Models\WilayahUjian;
use App\Imports\MatakuliahImport;
use App\Imports\PesertaUjianImport;
use App\Imports\WilayahUjianImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use stdClass;

class NumpangUjianController extends Controller
{
    public function data_numpang_ujian(Request $request){
        $data = NumpangUjian::orderBy('created_at', 'asc')->get();
        $master = [
            'title' => 'Data Numpang Ujian | UT Jambi',
            'active' => 'Numpang Ujian',
            'data' => $data,
        ];
        return view('admin.aplikasi.numpang_ujian.data_numpang_ujian', $master);
    }

    public function status_numpang_ujian($nim){
        $data = NumpangUjian::where('nim', $nim)->latest()->first();
        $master = [
            'title' => 'Status Numpang Ujian | UT Jambi',
            'data' => $data,
        ];
        return view('forms.status_numpang_ujian', $master);
    }

    public function surat_permohonan_numpang_ujian($id){
        $master = [
            'title' => 'Surat Permohonan Numpang Ujian',
            'mahasiswa' => NumpangUjian::find($id),
        ];
        return view('forms.surat_permohonan_numpang_ujian', $master);
    }

    public function form_numpang_ujian(Request $request){
        $mahasiswa = null;
        $utdaerah = [];
        foreach(WilayahUjian::all()->groupBy('kode_upbjj') as $row){
            array_push($utdaerah, ['kode_upbjj' => $row[0]->kode_upbjj, 'nama_upbjj' => $row[0]->nama_upbjj]);
        }
        if($request->has('alasan')){
            $kode_mk = [];
            $mahasiswa = PesertaUjian::where('nim', $request['nim'])->get();
            foreach($mahasiswa as $row){
                array_push($kode_mk, $row->kode_mk);
            }
            
            if(preg_replace('/\s+/', '', explode('/', $request['tgl_pindah_lokasi'])[1]) == "H1"){
                $request['matakuliah'] = Matakuliah::whereIn('kode', $kode_mk)->where('skema', 'UTM')->where('kode_waktu_ujian', 'like', '1%')->orderBy('kode_waktu_ujian', 'asc')->get();
            }
            else if(preg_replace('/\s+/', '', explode('/', $request['tgl_pindah_lokasi'])[1]) == "H2"){
                $request['matakuliah'] = Matakuliah::whereIn('kode', $kode_mk)->where('skema', 'UTM')->where('kode_waktu_ujian', 'like', '2%')->orderBy('kode_waktu_ujian', 'asc')->get();
            }else if(preg_replace('/\s+/', '', explode('/', $request['tgl_pindah_lokasi'])[1]) == "H1-H2"){
                $request['matakuliah'] = Matakuliah::whereIn('kode', $kode_mk)->where('skema', 'UTM')->orderBy('kode_waktu_ujian', 'asc')->get();
            }

            $master = [
                'title' => 'Form Numpang Ujian | UT Jambi',
                'submit' => $request->all(),
            ];
            
            return view('forms.form_numpang_ujian', $master);
        }

        if($request->has('nim')){
            $request->validate([
                'nim' => 'required',
            ]);
            try {
                if(count(NumpangUjian::where('nim', $request['nim'])->get()) > 0){
                    return redirect()->route('status.numpang_ujian', $request['nim']);
                }
                $mahasiswa = PesertaUjian::where('nim', $request['nim'])->get();
                $request->validate([
                    'ut_daerah_tujuan' => 'required',
                ]);
                $wilayah_ujian = WilayahUjian::where('kode_upbjj', preg_replace('/\s+/', '', explode("/",$request['ut_daerah_tujuan'])[0]))->get();
            } catch (\Throwable $th) {
                return back()->with('error', $th);
            }
        }

        if(!empty($mahasiswa) && count($mahasiswa) > 0){
            $data = new stdClass();
            $data->nim = $mahasiswa[0]->nim;
            $data->nama = $mahasiswa[0]->nama_mhs;
            $data->prodi = $mahasiswa[0]->prodi;
            $data->kabko = $mahasiswa[0]->kabko;
            $data->upbjj = "17 / UT JAMBI";
            $data->tpu = $mahasiswa[0]->kode_tpu ." / ".$mahasiswa[0]->nama_tpu;

            $master = [
                'title' => 'Form Numpang Ujian | UT Jambi',
                'mahasiswa' => $data,
                'ut_daerah_tujuan' => $request['ut_daerah_tujuan'],
                'wilayah_ujian' => $wilayah_ujian,
            ];
            return view('forms.form_numpang_ujian', $master);
        }else{
            $master = [
                'title' => 'Form Numpang Ujian | UT Jambi',
                'ut_daerah_tujuan' => $utdaerah,
            ];
            return view('forms.form_numpang_ujian', $master);
        }
    }

    public function submit_form_numpang_ujian(Request $request){
        if($request->has('file')){
            $request->validate([
                'file' => 'required|file|max:5120', // 5120 KB = 5 MB
            ]);
            $file = $request->file('file');
            $folder = public_path('uploads/numpang_ujian/');
            $file->move($folder, $request['nim'].".pdf");
            $dokumen_pendukung_alasan = 'uploads/numpang_ujian/' . $request['nim'].".pdf";
        }else{
            $dokumen_pendukung_alasan = null;
        }

        NumpangUjian::create([
            "nim" => $request['nim'],
            "nama" => $request['nama'],
            "prodi" => $request['prodi'],
            "ut_daerah_asal" => $request['ut_daerah_asal'],
            "ut_daerah_tujuan" => $request['ut_daerah_tujuan'],
            "wilayah_ujian_asal" => $request['wilayah_ujian_asal'],
            "wilayah_ujian_tujuan" => $request['wilayah_ujian_tujuan'],
            "tgl_pindah_lokasi" => $request['tgl_pindah_lokasi'],
            "matakuliah" => implode("|",$request['matakuliah']),
            "skema" => "UTM",
            "alasan" => $request['alasan'],
            "no_wa" => $request['no_wa'],
            "ttd" => $request['ttd'],
            "dokumen_pendukung_alasan" => $dokumen_pendukung_alasan,
            "status" => "Antrian",
        ]);
        return redirect()->route("form.numpang_ujian")->with("success", "Form numpang ujian berhasil di submit dan sedang dalam antrian.");
    }

    public function matakuliah(){
        $data = Matakuliah::orderBy('id', 'asc');
        $master = [
            'title' => 'Data Matakuliah',
            'active' => 'Master Data',
            'data' => $data->get(),
        ];
        return view('admin.aplikasi.numpang_ujian.matakuliah', $master);
    }

    public function matakuliah_import(Request $request){
        Excel::import(new MatakuliahImport(), $request['file']);
        return redirect()->route('admin.numpang_ujian.matakuliah')->with('success', 'Data MK berhasil disimpan kedalam server!');
    }
    public function wilayah_ujian_import(Request $request){
        Excel::import(new WilayahUjianImport(), $request['file']);
        return redirect()->route('admin.numpang_ujian.wilayah_ujian')->with('success', 'Data wilayah ujian berhasil disimpan kedalam server!');
    }
    public function peserta_ujian_import(Request $request){
        // for($i=0;$i<5000;$i++){

        // }
        // return back();
        Excel::import(new PesertaUjianImport(), $request['file']);
        return redirect()->route('admin.numpang_ujian.peserta_ujian')->with('success', 'Data peserta ujian berhasil disimpan kedalam server!');
    }

    function getRomawi($bulan){
        switch ($bulan){
            case 1:
                return "I";
                break;
            case 2:
                return "II";
                break;
            case 3:
                return "III";
                break;
            case 4:
                return "IV";
                break;
            case 5:
                return "V";
                break;
            case 6:
                return "VI";
                break;
            case 7:
                return "VII";
                break;
            case 8:
                return "VIII";
                break;
            case 9:
                return "IX";
                break;
            case 10:
                return "X";
                break;
            case 11:
                return "XI";
                break;
            case 12:
                return "XII";
                break;
      }
    }
}
