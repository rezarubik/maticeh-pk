<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\MessageBag;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function registrasi()
    {
        $mataPelajaran = DB::table('mata_pelajaran')->distinct()->get();
        $provKabot = DB::table('prov_kabot')->distinct()->get();
        $jenjang = DB::table('jenjang')->get();
        $provinsi = DB::table('provinsi')->get();
        return view('/home/registrasi', [
            "mataPelajaran" => $mataPelajaran,
            "provKabot" => $provKabot,
            "jenjang" => $jenjang,
            "provinsi" => $provinsi
        ]);
    }
    public function getMapel($jenjang)
    {
        $getMapel = DB::table('mata_pelajaran')->where('jenjang', $jenjang)->pluck("nama_mapel", "id");
        // $getMapel = DB::table('mata_pelajaran')->pluck("nama_mapel", "jenjang");
        // $getMapel = DB::table('mata_pelajaran')->where('jenjang', '=', '$jenjang')->get();
        return json_encode($getMapel);
    }
    public function getKabKota($provinsi)
    {
        $getKabKota = DB::table('prov_kabot')->where('provinsi', $provinsi)->pluck("kab_kota", "id");
        return json_encode($getKabKota);
    }
    public function registrasiGuru(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'name' => 'required|min:5|max:20',
        //     'email' => 'required',
        //     'password' => 'required|min:4',
        //     'address' => 'required',
        //     'provinsi' => 'required',
        //     'kabupatenKota' => 'required',
        //     'no_handphone' => 'required',
        //     'mata_pelajaran' => 'required',
        //     'institusi' => 'required',
        //     'mapel_guru' => 'required',
        //     'jenjang' => 'required'
        // ]);
        // dd("berhasil");
        $file = $request->file('file');
        $folderCV = 'cv';
        $data = $file->move($folderCV, $file->getClientOriginalName());
        $getProvinsi = DB::table('provinsi')->where("id_provinsi", $request->input('provinsi'))->get();
        $getKabKot = DB::table('prov_kabot')->where("id", $request->input('kab_kota'))->get();
        DB::table('users')->insert(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'alamat' => $request->address,
                // 'provinsi' => $request->provinsi,
                'provinsi' => $getProvinsi[0]->provinsi,
                // 'kabupaten_kota' => $request->kab_kota,
                'kabupaten_kota' => $getKabKot[0]->kab_kota,
                'status' => 0,
                'role' => 2,
                'no_hp' => $request->no_handphone,
                'jenis_kelamin' => $request->input('jenis_kelamin')
            ]
        );
        $getIdUsers = DB::table('users')->select("id")->orderBy("id", "desc")->limit(1)->get();
        DB::table('guru')->insert([
            'id_guru' => $getIdUsers[0]->id,
            'institusi' => $request->institusi,
            'direktori_cv' => $data
        ]);
        // DB::table('mata_pelajaran')->insert(
        //     [
        //         'id_guru' => $getIdUsers[0]->id,
        //         'nama_mapel' => $request->mapel_guru
        //     ]
        // );
        $getIdMapel = DB::table('mata_pelajaran')->where("id", $request->input('mata_pelajaran'))->get();
        // $getIdMapel = DB::table('provinsi')->where("id", $request->input('provinsi'))->get();
        DB::table('bahan_ajar')->insert(
            [
                'id_guru' => $getIdUsers[0]->id,
                'id_mapel' => $getIdMapel[0]->id
            ]
        );
        return redirect('/registrasi');
        // return view('/registrasi', ['message' => $request]);
    }

    public function layanan()
    {
        return view('home/layanan');
    }
    public function kontakKami()
    {
        return view('home/kontak');
    }
    public function bantuan()
    {
        return view('home/bantuan');
    }
}
