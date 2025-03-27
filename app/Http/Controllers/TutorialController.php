<?php

namespace App\Http\Controllers;

use App\Exports\PenjadwalanKelasExport;
use App\Imports\CekJadwalTutorialImport;
use App\Imports\DataJadwalTutorialImport;
use App\Imports\DataKelasTutorialImport;
use App\Imports\DataLokasiTutorialImport;
use App\Imports\DataPesertaTutorialImport;
use App\Imports\DataTutorialImport;
use App\Imports\DataTutorImport;
use App\Imports\PenjadwalanTutorialImport;
use App\Models\CekJadwalTutorial;
use App\Models\DataJadwalTutorial;
use App\Models\DataKelasTutorial;
use App\Models\DataLokasiTutorial;
use App\Models\DataPesertaTutorial;
use App\Models\DataTutor;
use App\Models\DataTutorial;
use App\Models\PenjadwalanKelas;
use App\Models\PenjadwalanTutorial;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AllPenjadwalanTutorialExport;

class TutorialController extends Controller
{
    public function penjadwalan_tutorial(Request $request) {
        $query = PenjadwalanTutorial::query();
        
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('masa', 'like', "%{$search}%")
                  ->orWhere('kode_kelas', 'like', "%{$search}%")
                  ->orWhereHas('tutor', function($q2) use ($search) {
                      $q2->where('nama', 'like', "%{$search}%");
                  });
            });
        }

        // Fixed whereHas clause to properly count related records
        if ($request->filter_peserta === 'with_students') {
            $query->has('peserta');
        }
    
        $props = [
            'title' => 'Penjadwalan Tutorial',
            'active' => 'Tutorial',
            'data' => $query->orderBy('id', 'asc')->paginate(20),
            'search' => $request->get('search')
        ];
        return view('admin.aplikasi.tutorial.penjadwalan_tutorial', $props);
    }

    public function penjadwalan_tutorial_detail($id) {
        $penjadwalan_tutorial = PenjadwalanTutorial::find($id);
        $kelas_lain = PenjadwalanTutorial::where('kode_tutorial', $penjadwalan_tutorial->kode_tutorial)->orderBy('kode_kelas', 'asc')->get();
        $props = [
            'title' => $penjadwalan_tutorial->kode_kelas,
            'active' => 'Tutorial',
            'data' => $penjadwalan_tutorial,
            'kelas_lain' => $kelas_lain,
            'tutor' => DataTutor::where('verif_ktp', 'Valid')->orderBy('nama', 'asc')->get(),
            'lokasi' => DataLokasiTutorial::orderBy('nama_lokasi', 'asc')->get(),
            'jadwal' => DataJadwalTutorial::orderBy('kode_jadwal', 'asc')->get(),
        ];
        return view('admin.aplikasi.tutorial.penjadwalan_tutorial_detail', $props);
    }

    public function penjadwalan_tutorial_delete($id) {
        $penjadwalan_tutorial = PenjadwalanTutorial::find($id);
        $penjadwalan_tutorial->delete();
        return back()->with('success', 'Berhasil menghapus data penjadwalan tutorial.');
    }

    public function penjadwalan_tutorial_edit_info(Request $request) {
        $kelas = PenjadwalanTutorial::find($request['penjadwalan_tutorial_id']);
        $kelas->kode_tutor = $request['kode_tutor'];
        $kelas->kode_jadwal = $request['kode_jadwal'];
        $kelas->save();
    
    	$dataTutorial = DataTutorial::find($kelas->tutorial->id);
    	$dataTutorial->kode_lokasi = $request['kode_lokasi'];
    	$dataTutorial->save();
        return back()->with('success', 'Data Kelas Berhasil Di Update!');
    }

    public function penjadwalan_tutorial_edit_peserta(Request $request) {
        $kelas_lama = PenjadwalanTutorial::find($request['penjadwalan_tutorial_id_asal']);
        $kelas_baru = PenjadwalanTutorial::find($request['penjadwalan_tutorial_id_tujuan']);
        $peserta = PenjadwalanKelas::find($request['penjadwalan_kelas_id']);
        // dd($request->all(), $kelas_lama, $kelas_baru, $peserta);
        $kelas_lama->prediksi = $kelas_lama->prediksi - 1;
        $kelas_lama->save();
        $kelas_baru->prediksi = $kelas_baru->prediksi + 1;
        $kelas_baru->save();
        $peserta->penjadwalan_tutorial_id = $kelas_baru->id;
        $peserta->save();
        return back()->with('success', 'Mahasiswa berhasil pindah kelas.');
    }

    public function penjadwalan_kelas() {
        $pokjar = [];
        $prodi = [];
        $peserta = DataPesertaTutorial::orderBy('pokjar', 'asc')->orderBy('prodi', 'asc')->get();
        foreach($peserta->groupBy('pokjar') as $key=>$row){
            array_push($pokjar, $key);
        }
        foreach($peserta->groupBy('prodi') as $key=>$row){
            array_push($prodi, $key);
        }
        $data = PenjadwalanKelas::orderBy('kode_lokasi', 'asc')->get();
        foreach($data as $row){
            $row->nama_lokasi = $row->lokasi->nama_lokasi;
        }
        $props = [
            'title' => 'Penjadwalan Kelas',
            'active' => 'Tutorial',
            'data' => $data->groupBy('nama_lokasi'),
            'lokasi' => DataLokasiTutorial::orderBy('kode_lokasi', 'asc')->get(),
            'pokjar' => $pokjar,
            'prodi' => $prodi,
        ];
        return view('admin.aplikasi.tutorial.penjadwalan_kelas', $props);
    }

    public function penjadwalan_kelas_reset(){
        PenjadwalanKelas::truncate();
        return back()->with('success', 'Penjadwalan Kelas Berhasil Direset!');
    }

    public function penjadwalan_kelas_create(Request $request){
        set_time_limit(0);
        // PenjadwalanKelas::truncate();
        $pokjar = $request['pokjar'];
        $kode_lokasi = $request['kode_lokasi'];
        $prodi = $request['prodi'];
        $peserta = DataPesertaTutorial::where('pokjar', $pokjar)->where('prodi', $prodi)->orderBy('nama_mahasiswa', 'asc')->get()->groupBy(['prodi', 'semester']);
        try {
            foreach($peserta as $prodi=>$semester){
                $kode_prodi = explode('/', $prodi)[0];
                if($kode_prodi == "118"){
                    foreach($semester as $smt=>$mahasiswa){
                        if($smt == 1){
                            $kode_mk = ['PDGK4304', 'PDGK4208', 'PDGK4306'];
                        }
                        else if($smt == 2){
                            $kode_mk = ['PDGK4207', 'PDGK4403', 'PDGK4303'];
                        }
                        else if($smt == 3){
                            $kode_mk = ['PDGK4109', 'PDGK4203', 'PDGK4102'];
                        }
                        else if($smt == 4){
                            $kode_mk = ['PDGK4101', 'PDGK4201', 'IDIK4010'];
                        }
                        else if($smt == 5){
                            $kode_mk = ['PDGK4103', 'PDGK4105', 'PDGK4205'];
                        }
                        else if($smt == 6){
                            $kode_mk = ['IDIK4013', 'PEMA4210', 'PDGK4209'];
                        }
                        else if($smt == 7){
                            $kode_mk = ['IDIK4008', 'PDGK4305', 'PDGK4107'];
                        }
                        else if($smt == 8){
                            $kode_mk = ['PDGK4406', 'PDGK4302', 'PDGK4501'];
                        }
                        else if($smt == 9){
                            $kode_mk = ['PDGK4500', 'PDGK4503', 'PDGK4504'];
                        }
                        foreach($kode_mk as $mk){
                            $tutorial = DataTutorial::where('kode_lokasi', $kode_lokasi)->where('kode_prodi', $kode_prodi)->where('kode_matakuliah', $mk)->first();
                            $kode_tutorial = $tutorial->kode_tutorial;
                            $penjadwalan_tutorial = PenjadwalanTutorial::where('kode_tutorial', $kode_tutorial)->get();
                            foreach($penjadwalan_tutorial as $row){
                                $row->prediksi = 0;
                                $row->save();
                            }
                            $limit = count($mahasiswa) / count($penjadwalan_tutorial);
                            $kelas = 0;
                            foreach($mahasiswa as $mhs){
                                if($penjadwalan_tutorial[$kelas]->prediksi >= $limit && count($penjadwalan_tutorial) > 1){
                                    $kelas += 1;
                                }
                                $penjadwalan = new PenjadwalanKelas;
                                $penjadwalan->data_peserta_tutorial_id = $mhs->id;
                                $penjadwalan->penjadwalan_tutorial_id = $penjadwalan_tutorial[$kelas]->id;
                                $penjadwalan->kode_lokasi = $kode_lokasi;
                                $penjadwalan->save();
                                
                                $penjadwalan_tutorial[$kelas]->prediksi = $penjadwalan_tutorial[$kelas]->prediksi + 1;
                                $penjadwalan_tutorial[$kelas]->save();
                            }
                        }
                    }
                }
                else if($kode_prodi == "11A"){
                    foreach($semester as $smt=>$mahasiswa){
                        if($smt == 1){
                            $kode_mk = ['PDGK4304', 'PDGK4208', 'PDGK4306'];
                        }
                        foreach($kode_mk as $mk){
                            $tutorial = DataTutorial::where('kode_lokasi', $kode_lokasi)->where('kode_prodi', $kode_prodi)->where('kode_matakuliah', $mk)->first();
                            $kode_tutorial = $tutorial->kode_tutorial;
                            $penjadwalan_tutorial = PenjadwalanTutorial::where('kode_tutorial', $kode_tutorial)->get();
                            foreach($penjadwalan_tutorial as $row){
                                $row->prediksi = 0;
                                $row->save();
                            }
                            $limit = count($mahasiswa) / count($penjadwalan_tutorial);
                            $kelas = 0;
                            foreach($mahasiswa as $mhs){
                                if($penjadwalan_tutorial[$kelas]->prediksi >= $limit && count($penjadwalan_tutorial) > 1){
                                    $kelas += 1;
                                }
                                $penjadwalan = new PenjadwalanKelas;
                                $penjadwalan->data_peserta_tutorial_id = $mhs->id;
                                $penjadwalan->penjadwalan_tutorial_id = $penjadwalan_tutorial[$kelas]->id;
                                $penjadwalan->kode_lokasi = $kode_lokasi;
                                $penjadwalan->save();
                                
                                $penjadwalan_tutorial[$kelas]->prediksi = $penjadwalan_tutorial[$kelas]->prediksi + 1;
                                $penjadwalan_tutorial[$kelas]->save();
                            }
                        }
                    }
                }
                else if($kode_prodi == "122"){
                    foreach($semester as $smt=>$mahasiswa){
                        if($smt == 5){
                            $kode_mk = ['PAUD4102', 'PAUD4408', 'PAUD4105'];
                        }
                        else if($smt == 6){
                            $kode_mk = ['PAUD4102', 'PAUD4408', 'PAUD4105'];
                        }
                        foreach($kode_mk as $mk){
                            $tutorial = DataTutorial::where('kode_lokasi', $kode_lokasi)->where('kode_prodi', $kode_prodi)->where('kode_matakuliah', $mk)->first();
                            $kode_tutorial = $tutorial->kode_tutorial;
                            $penjadwalan_tutorial = PenjadwalanTutorial::where('kode_tutorial', $kode_tutorial)->get();
                            foreach($penjadwalan_tutorial as $row){
                                $row->prediksi = 0;
                                $row->save();
                            }
                            $limit = count($mahasiswa) / count($penjadwalan_tutorial);
                            $kelas = 0;
                            foreach($mahasiswa as $mhs){
                                if($penjadwalan_tutorial[$kelas]->prediksi >= $limit && count($penjadwalan_tutorial) > 1){
                                    $kelas += 1;
                                }
                                $penjadwalan = new PenjadwalanKelas;
                                $penjadwalan->data_peserta_tutorial_id = $mhs->id;
                                $penjadwalan->penjadwalan_tutorial_id = $penjadwalan_tutorial[$kelas]->id;
                                $penjadwalan->kode_lokasi = $kode_lokasi;
                                $penjadwalan->save();
                                
                                $penjadwalan_tutorial[$kelas]->prediksi = $penjadwalan_tutorial[$kelas]->prediksi + 1;
                                $penjadwalan_tutorial[$kelas]->save();
                            }
                        }
                    }
                }
                else if($kode_prodi == "311"){
                    foreach($semester as $smt=>$mahasiswa){
                        if($smt == 7){
                            $kode_mk = ['HKUM4404', 'HKUM4302', 'HKUM4303', 'HKUM4408', 'HKUM4500'];
                        }
                        else if($smt == 8){
                            $kode_mk = ['HKUM4311', 'HKUM4308', 'HKUM4307', 'HKUM4310'];
                        }
                        foreach($kode_mk as $mk){
                            $tutorial = DataTutorial::where('kode_lokasi', $kode_lokasi)->where('kode_prodi', $kode_prodi)->where('kode_matakuliah', $mk)->first();
                            $kode_tutorial = $tutorial->kode_tutorial;
                            $penjadwalan_tutorial = PenjadwalanTutorial::where('kode_tutorial', $kode_tutorial)->get();
                            foreach($penjadwalan_tutorial as $row){
                                $row->prediksi = 0;
                                $row->save();
                            }
                            $limit = count($mahasiswa) / count($penjadwalan_tutorial);
                            $kelas = 0;
                            foreach($mahasiswa as $mhs){
                                if($penjadwalan_tutorial[$kelas]->prediksi >= $limit && count($penjadwalan_tutorial) > 1){
                                    $kelas += 1;
                                }
                                $penjadwalan = new PenjadwalanKelas;
                                $penjadwalan->data_peserta_tutorial_id = $mhs->id;
                                $penjadwalan->penjadwalan_tutorial_id = $penjadwalan_tutorial[$kelas]->id;
                                $penjadwalan->kode_lokasi = $kode_lokasi;
                                $penjadwalan->save();
                                
                                $penjadwalan_tutorial[$kelas]->prediksi = $penjadwalan_tutorial[$kelas]->prediksi + 1;
                                $penjadwalan_tutorial[$kelas]->save();
                            }
                        }
                    }
                }
                else if($kode_prodi == "38"){
                    foreach($semester as $smt=>$mahasiswa){
                        if($smt == 5){
                            $kode_mk = ['ASIP4404', 'ASIP4325', 'ASIP4304', 'ASIP4312', 'ASIP4436', 'ASIP4311'];
                        }
                        else if($smt == 6){
                            $kode_mk = ['ASIP4320', 'ASIP4318', 'ASIP4202', 'ASIP4429', 'SKOM4437', 'ASIP4208', 'ASIP4426'];
                        }
                        foreach($kode_mk as $mk){
                            $tutorial = DataTutorial::where('kode_lokasi', $kode_lokasi)->where('kode_prodi', $kode_prodi)->where('kode_matakuliah', $mk)->first();
                            $kode_tutorial = $tutorial->kode_tutorial;
                            $penjadwalan_tutorial = PenjadwalanTutorial::where('kode_tutorial', $kode_tutorial)->get();
                            foreach($penjadwalan_tutorial as $row){
                                $row->prediksi = 0;
                                $row->save();
                            }
                            $limit = count($mahasiswa) / count($penjadwalan_tutorial);
                            $kelas = 0;
                            foreach($mahasiswa as $mhs){
                                if($penjadwalan_tutorial[$kelas]->prediksi >= $limit && count($penjadwalan_tutorial) > 1){
                                    $kelas += 1;
                                }
                                $penjadwalan = new PenjadwalanKelas;
                                $penjadwalan->data_peserta_tutorial_id = $mhs->id;
                                $penjadwalan->penjadwalan_tutorial_id = $penjadwalan_tutorial[$kelas]->id;
                                $penjadwalan->kode_lokasi = $kode_lokasi;
                                $penjadwalan->save();
                                
                                $penjadwalan_tutorial[$kelas]->prediksi = $penjadwalan_tutorial[$kelas]->prediksi + 1;
                                $penjadwalan_tutorial[$kelas]->save();
                            }
                        }
                    }
                }
                else if($kode_prodi == "471"){
                    foreach($semester as $smt=>$mahasiswa){
                        if($smt == 3){
                            $kode_mk = ['MKWI4201', 'MKWI4202', 'EKMA4158', 'SPAR4207', 'SPAR4204'];
                        }
                        else if($smt == 3){
                            $kode_mk = ['MKKI4201', 'SPAR4305'];
                        }
                        foreach($kode_mk as $mk){
                            $tutorial = DataTutorial::where('kode_lokasi', $kode_lokasi)->where('kode_prodi', $kode_prodi)->where('kode_matakuliah', $mk)->first();
                            $kode_tutorial = $tutorial->kode_tutorial;
                            $penjadwalan_tutorial = PenjadwalanTutorial::where('kode_tutorial', $kode_tutorial)->get();
                            foreach($penjadwalan_tutorial as $row){
                                $row->prediksi = 0;
                                $row->save();
                            }
                            $limit = count($mahasiswa) / count($penjadwalan_tutorial);
                            $kelas = 0;
                            foreach($mahasiswa as $mhs){
                                if($penjadwalan_tutorial[$kelas]->prediksi >= $limit && count($penjadwalan_tutorial) > 1){
                                    $kelas += 1;
                                }
                                $penjadwalan = new PenjadwalanKelas;
                                $penjadwalan->data_peserta_tutorial_id = $mhs->id;
                                $penjadwalan->penjadwalan_tutorial_id = $penjadwalan_tutorial[$kelas]->id;
                                $penjadwalan->kode_lokasi = $kode_lokasi;
                                $penjadwalan->save();
                                
                                $penjadwalan_tutorial[$kelas]->prediksi = $penjadwalan_tutorial[$kelas]->prediksi + 1;
                                $penjadwalan_tutorial[$kelas]->save();
                            }
                        }
                    }
                }
                else if($kode_prodi == "51"){
                    foreach($semester as $smt=>$mahasiswa){
                        if($smt == 1){
                            $kode_mk = ['ADBI4201', 'ISIP4130', 'MKWI4201'];
                        }
                        else if($smt == 2){
                            $kode_mk = ['ISIP4211', 'ISIP4112', 'ISIP4310'];
                        }
                        foreach($kode_mk as $mk){
                            $tutorial = DataTutorial::where('kode_lokasi', $kode_lokasi)->where('kode_prodi', $kode_prodi)->where('kode_matakuliah', $mk)->first();
                            $kode_tutorial = $tutorial->kode_tutorial;
                            $penjadwalan_tutorial = PenjadwalanTutorial::where('kode_tutorial', $kode_tutorial)->get();
                            foreach($penjadwalan_tutorial as $row){
                                $row->prediksi = 0;
                                $row->save();
                            }
                            $limit = count($mahasiswa) / count($penjadwalan_tutorial);
                            $kelas = 0;
                            foreach($mahasiswa as $mhs){
                                if($penjadwalan_tutorial[$kelas]->prediksi >= $limit && count($penjadwalan_tutorial) > 1){
                                    $kelas += 1;
                                }
                                $penjadwalan = new PenjadwalanKelas;
                                $penjadwalan->data_peserta_tutorial_id = $mhs->id;
                                $penjadwalan->penjadwalan_tutorial_id = $penjadwalan_tutorial[$kelas]->id;
                                $penjadwalan->kode_lokasi = $kode_lokasi;
                                $penjadwalan->save();
                                
                                $penjadwalan_tutorial[$kelas]->prediksi = $penjadwalan_tutorial[$kelas]->prediksi + 1;
                                $penjadwalan_tutorial[$kelas]->save();
                            }
                        }
                    }
                }
                else if($kode_prodi == "54"){
                    foreach($semester as $smt=>$mahasiswa){
                        if($smt == 3){
                            $kode_mk = ['ADBI4201', 'EKMA4157', 'ESPA4110', 'EKMA4316', 'EKMA4434'];
                        }
                        else if($smt == 4){
                            $kode_mk = ['EKMA4216', 'EKMA4413', 'EKMA4214', 'ESPA4227', 'EKMA4312'];
                        }
                        foreach($kode_mk as $mk){
                            $tutorial = DataTutorial::where('kode_lokasi', $kode_lokasi)->where('kode_prodi', $kode_prodi)->where('kode_matakuliah', $mk)->first();
                            $kode_tutorial = $tutorial->kode_tutorial;
                            $penjadwalan_tutorial = PenjadwalanTutorial::where('kode_tutorial', $kode_tutorial)->get();
                            foreach($penjadwalan_tutorial as $row){
                                $row->prediksi = 0;
                                $row->save();
                            }
                            $limit = count($mahasiswa) / count($penjadwalan_tutorial);
                            $kelas = 0;
                            foreach($mahasiswa as $mhs){
                                if($penjadwalan_tutorial[$kelas]->prediksi >= $limit && count($penjadwalan_tutorial) > 1){
                                    $kelas += 1;
                                }
                                $penjadwalan = new PenjadwalanKelas;
                                $penjadwalan->data_peserta_tutorial_id = $mhs->id;
                                $penjadwalan->penjadwalan_tutorial_id = $penjadwalan_tutorial[$kelas]->id;
                                $penjadwalan->kode_lokasi = $kode_lokasi;
                                $penjadwalan->save();
                                
                                $penjadwalan_tutorial[$kelas]->prediksi = $penjadwalan_tutorial[$kelas]->prediksi + 1;
                                $penjadwalan_tutorial[$kelas]->save();
                            }
                        }
                    }
                }
            }
        } catch (\Throwable $th) {
            // dd($mk, $kode_prodi, $kode_lokasi, $mhs);
            dd($th);
        }
        // $limit_per_kelas = $this->bagiRata(count($peserta), 20, 39);
        // foreach($kode_mk as $mk){
        //     if($mk == "PDGK4209" || $mk == "PDGK4501"){
        //         $limit_per_kelas = $this->bagiRata(count($peserta), 8, 15);
        //     }
        // }
        return back()->with('success', 'Penjadwalan Kelas Berhasil!');
    }

    public function penjadwalan_tutorial_import(Request $request) {
        // PenjadwalanTutorial::truncate();
        Excel::import(new PenjadwalanTutorialImport(), $request['file']);
        return redirect()->route('admin.ttm.penjadwalan_tutorial')->with('success', 'Data penjadwalan tutorial berhasil di import.');
    }

    public function data_tutor() {
        $props = [
            'title' => 'Master Data Tutor',
            'active' => 'Tutorial',
            'data' => DataTutor::orderBy('kode_tutor', 'desc')->paginate(500),
        ];
        return view('admin.aplikasi.tutorial.master_data_tutor', $props);
    }

    public function data_jadwal() {
        $props = [
            'title' => 'Master Data Jadwal',
            'active' => 'Tutorial',
            'data' => DataJadwalTutorial::orderBy('kode_jadwal', 'desc')->paginate(500),
        ];
        return view('admin.aplikasi.tutorial.master_data_jadwal', $props);
    }

    public function data_kelas() {
        $props = [
            'title' => 'Master Data Kelas',
            'active' => 'Tutorial',
            'data' => DataKelasTutorial::orderBy('kode_kelas', 'desc')->paginate(500),
        ];
        return view('admin.aplikasi.tutorial.master_data_kelas', $props);
    }

    public function data_lokasi() {
        $props = [
            'title' => 'Master Data Lokasi',
            'active' => 'Tutorial',
            'data' => DataLokasiTutorial::orderBy('kode_lokasi', 'desc')->paginate(500),
        ];
        return view('admin.aplikasi.tutorial.master_data_lokasi', $props);
    }

    public function data_tutorial() {
        $props = [
            'title' => 'Master Data Tutorial',
            'active' => 'Tutorial',
            'data' => DataTutorial::orderBy('kode_tutorial', 'desc')->paginate(500),
        ];
        return view('admin.aplikasi.tutorial.master_data_tutorial', $props);
    }

    public function data_peserta() {
        $props = [
            'title' => 'Master Data Peserta',
            'active' => 'Tutorial',
            'data' => DataPesertaTutorial::orderBy('pokjar', 'asc')->orderBy('prodi', 'asc')->orderBy('semester', 'desc')->paginate(500),
        ];
        return view('admin.aplikasi.tutorial.master_data_peserta', $props);
    }

    public function data_tutor_import(Request $request) {
        DataTutor::truncate();
        Excel::import(new DataTutorImport(), $request['file']);
        return redirect()->route('admin.ttm.data_tutor')->with('success', 'Data tutor berhasil di import.');
    }

    public function data_jadwal_import(Request $request) {
        DataJadwalTutorial::truncate();
        Excel::import(new DataJadwalTutorialImport(), $request['file']);
        return redirect()->route('admin.ttm.data_jadwal')->with('success', 'Data jadwal berhasil di import.');
    }

    public function data_kelas_import(Request $request) {
        DataKelasTutorial::truncate();
        Excel::import(new DataKelasTutorialImport(), $request['file']);
        return redirect()->route('admin.ttm.data_kelas')->with('success', 'Data kelas berhasil di import.');
    }

    public function data_lokasi_import(Request $request) {
        DataLokasiTutorial::truncate();
        Excel::import(new DataLokasiTutorialImport(), $request['file']);
        return redirect()->route('admin.ttm.data_lokasi')->with('success', 'Data lokasi berhasil di import.');
    }

    public function data_tutorial_import(Request $request) {
        // DataTutorial::truncate();
        Excel::import(new DataTutorialImport(), $request['file']);
        return redirect()->route('admin.ttm.data_tutorial')->with('success', 'Data tutorial berhasil di import.');
    }

    public function data_peserta_import(Request $request) {
        DataPesertaTutorial::truncate();
        Excel::import(new DataPesertaTutorialImport(), $request['file']);
        return redirect()->route('admin.ttm.data_peserta')->with('success', 'Data peserta tutorial berhasil di import.');
    }

    public function penjadwalan_kelas_export($penjadwalan_tutorial_id){
        $data = PenjadwalanTutorial::find($penjadwalan_tutorial_id);
        return Excel::download(new PenjadwalanKelasExport($data), $data->id."_".$data->kode_kelas.'.xlsx');
    }

    public function cek_jadwal_tutorial(Request $request) {
        $query = CekJadwalTutorial::query();
        
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nim', 'like', "%{$search}%")
                  ->orWhere('nama_mahasiswa', 'like', "%{$search}%")
                  ->orWhere('kode_kelas', 'like', "%{$search}%")
                  ->orWhere('nama_matakuliah', 'like', "%{$search}%")
                  ->orWhere('nama_tutor', 'like', "%{$search}%")
                  ->orWhere('lokasi', 'like', "%{$search}%");
            });
        }

        $props = [
            'title' => 'Cek Jadwal Tutorial',
            'active' => 'Tutorial',
            'data' => $query->orderBy('tutor', 'asc')->paginate(20),
            'search' => $request->search
        ];
        return view('admin.aplikasi.tutorial.cek_jadwal_tutorial', $props);
    }

    public function cek_jadwal_tutorial_import(Request $request) {
        CekJadwalTutorial::truncate();
        Excel::import(new CekJadwalTutorialImport(), $request['file']);
        return redirect()->route('admin.ttm.cek_jadwal_tutorial')->with('success', 'Data cek jadwal tutorial berhasil di import.');
    }
}
