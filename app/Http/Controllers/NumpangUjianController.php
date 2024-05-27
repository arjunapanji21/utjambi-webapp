<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\NumpangUjian;
use App\Models\PesertaUjian;
use App\Models\WilayahUjian;
use Illuminate\Http\Request;
use stdClass;

class NumpangUjianController extends Controller
{
    public function status_numpang_ujian($nim){
        $data = NumpangUjian::where('nim', $nim)->latest()->first();
        $master = [
            'title' => 'Status Numpang Ujian | UT Jambi',
            'data' => $data,
        ];
        return view('forms.status_numpang_ujian', $master);
    }
    public function form_numpang_ujian(Request $request){
        $mahasiswa = null;
        $utdaerah = [];
        foreach(WilayahUjian::all()->groupBy('kode_upbjj') as $row){
            array_push($utdaerah, ['kode_upbjj' => $row[0]->kode_upbjj, 'nama_upbjj' => $row[0]->nama_upbjj]);
        }
        if($request->has('alasan')){
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
                dd($th);
            }
        }

        if(!empty($mahasiswa)){
            $mk = [];
            foreach($mahasiswa as $row){
                if(Matakuliah::where('kode', $row['kode_mk'])->get()->first()->skema == "UTM"){
                    array_push($mk, $row['kode_mk']." / ".$row['nama_mk']);
                }
            }
            $data = new stdClass();
            $data->nim = $mahasiswa[0]->nim;
            $data->nama = $mahasiswa[0]->nama_mhs;
            $data->prodi = $mahasiswa[0]->prodi;
            $data->kabko = $mahasiswa[0]->kabko;
            $data->upbjj = "17 / UT Jambi";
            $data->tpu = $mahasiswa[0]->kode_tpu ." / ".$mahasiswa[0]->nama_tpu;
            $data->mk = $mk;

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
            "alasan" => $request['alasan'],
            "no_wa" => $request['no_wa'],
            "status" => "Antrian",
        ]);
        return redirect()->route("form.numpang_ujian")->with("success", "Form numpang ujian berhasil di submit dan sedang dalam antrian.");
    }
}
