<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        $act = 'dashboard';
        return view('/adminPages/dashboard', ["act" => $act]);
    }
    public function registrasi()
    {
        return view('/adminPages/registrasi');
    }
    public function registrasiGuru(Request $request)
    {
        // Custom Message Errors
        $message_errors = [
            'required' => ':attribute Wajib diisi Gan'
            // 'min' => ':attribute minimal :min karakter',
            // 'max' => ':attribute maksimal :max karakter'
        ];
        // validation
        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'address' => 'required',
                'provinsi' => 'required',
                'kabupatenKota' => 'required',
                'no_handphone' => 'required',
                'jenis_kelamin' => 'required',
                'mapel_guru' => 'required',
                'file' => 'required'
            ],
            $message_errors
        );
        $file = $request->file('file');
        $folderCV = 'cv';
        $data = $file->move($folderCV, $file->getClientOriginalName());
        DB::table('users')->insert(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'alamat' => $request->address,
                'provinsi' => $request->provinsi,
                'kabupaten_kota' => $request->kabupatenKota,
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
        DB::table('mata_pelajaran')->insert(
            [
                'id_guru' => $getIdUsers[0]->id,
                'nama_mapel' => $request->mapel_guru
            ]
        );

        return redirect('/registrasi');
        // return view('/registrasi', ['message' => $request]);
    }
    public function dataGuru()
    { # new dataGuru
        $act = 'dataGuru';
        $query = DB::table('users')->join('guru', 'users.id', '=', 'guru.id_guru')
            ->where('users.role', '=', 2)
            ->where('users.status', '=', 0)
            ->get();
        $queryMapel = DB::table('mata_pelajaran')->get();

        return view('/adminPages/dataGuru', [
            "act" => $act,
            "query" => $query,
            "queryMapel" => $queryMapel
        ]);
    }
    public function dataGuruApprove()
    {
        $act = 'dataGuruApprove';
        $query = DB::table('users')->join('guru', 'users.id', '=', 'guru.id_guru')
            ->where('users.role', '=', 2)
            ->where('users.status', '=', 1)
            ->get();
        $queryMapel = DB::table('mata_pelajaran')->get();

        return view('/adminPages/dataGuruApprove', [
            "act" => $act,
            "query" => $query,
            "queryMapel" => $queryMapel
        ]);
    }
    public function approveGuru($id)
    {
        $query = DB::table('users')->join('guru', 'users.id', '=', 'guru.id_guru')
            ->where('users.id', '=', $id)
            ->where('users.role', '=', 2)
            ->where('users.status', '=', 0)
            ->get();
        // dd($query);
        // die();
        $currentStatus = DB::table('users')
            ->select('status')
            ->where('id', '=', $id)
            ->get();
        DB::table('users')->where('id', '=', $id)->update([
            'status' => 1
        ]);
        if ($currentStatus[0]->status == 0) {
            return redirect('/dataGuru');
        } elseif ($currentStatus[0]->status == 1) {
            return redirect('/dataGuruApprove');
        } elseif ($currentStatus[0]->status == 2) {
            return redirect('/dataGuruDissapprove');
        } else {
            return redirect('/dataGuruDissapprove');
        }
        // return redirect('/dataGuru');
    }
    public function dataGuruDissapprove()
    {
        $act = 'dataGuruDissapprove';
        $query = DB::table('users')->join('guru', 'users.id', '=', 'guru.id_guru')
            ->where('users.role', '=', 2)
            ->where('users.status', '=', 2)
            ->orWhere('users.status', '=', 3)
            ->get();
        $queryMapel = DB::table('mata_pelajaran')->get();

        return view('/adminPages/dataGuruDissapprove', [
            "act" => $act,
            "query" => $query,
            "queryMapel" => $queryMapel
        ]);
    }
    public function disapproveGuru($id)
    {
        $query = DB::table('users')->join('guru', 'users.id', '=', 'guru.id_guru')
            ->where('users.id', '=', $id)
            ->where('users.role', '=', 2)
            ->where('users.status', '=', 0)
            ->get();
        // dd($query);
        // die();
        $currentStatus = DB::table('users')
            ->select('status')
            ->where('id', '=', $id)
            ->get();
        // dd($currentStatus[0]->status);
        // die();
        DB::table('users')->where('id', '=', $id)->update([
            'status' => 2
        ]);
        if ($currentStatus[0]->status == 0) {
            return redirect('/dataGuru');
        } elseif ($currentStatus[0]->status == 1) {
            return redirect('/dataGuruApprove');
        } elseif ($currentStatus[0]->status == 2) {
            return redirect('/dataGuruDissapprove');
        } else {
            return redirect('/dataGuruDissapprove');
        }
    }
    public function trashGuru($id)
    {
        $query = DB::table('users')->join('guru', 'users.id', '=', 'guru.id_guru')
            ->where('users.id', '=', $id)
            ->where('users.role', '=', 2)
            ->where('users.status', '=', 0)
            ->get();
        // dd($query);
        // die();
        $currentStatus = DB::table('users')
            ->select('status')
            ->where('id', '=', $id)
            ->get();
        // dd($currentStatus[0]->status);
        // die();
        DB::table('users')->where('id', '=', $id)->update([
            'status' => 3
        ]);
        if ($currentStatus[0]->status == 0) {
            return redirect('/dataGuru');
        } elseif ($currentStatus[0]->status == 1) {
            return redirect('/dataGuruApprove');
        } elseif ($currentStatus[0]->status == 2) {
            return redirect('/dataGuruDissapprove');
        } else {
            return redirect('/dataGuruDissapprove');
        }
    }

    public function dataPemesan()
    {
        $act = 'dataPemesan';
        $query = DB::table('users')->where('role', '=', '1')->get();
        return view('/adminPages/dataPemesan', [
            "act" => $act,
            "query" => $query
        ]);
    }
    public function pemesan()
    {
        $act = 'pemesan';
        return view('/adminPages/pemesan', ["act" => $act]);
    }
    public function pemesanan()
    {
        $act = 'pemesanan';
        $query = DB::select(DB::raw("SELECT table_pemesan.name as nama_pemesan, table_guru.name as nama_guru, table_pemesan.alamat as alamat_pemesan, pemesanan.status FROM pemesanan, (select * from users where role = 1) table_pemesan, (select * from users where role = 2) table_guru WHERE pemesanan.id_pemesan = table_pemesan.id && pemesanan.id_guru = table_guru.id"));
        return view('/adminPages/pemesanan', [
            "act" => $act,
            "query" => $query
        ]);
    }
    public function absensi()
    {
        $act = 'absensi';
        $query = DB::select(DB::raw("SELECT table_pemesan.name as nama_pemesan, table_guru.name as nama_guru, table_pemesan.alamat as alamat_pemesan, absen.status, mata_pelajaran.nama_mapel, absen.tanggal FROM absen,mata_pelajaran, (select * from users where role = 1) table_pemesan, (select * from users where role = 2) table_guru WHERE absen.id_pemesan = table_pemesan.id && absen.id_guru = table_guru.id
        && absen.id_mapel = mata_pelajaran.id"));
        return view('/adminPages/absensi', [
            "act" => $act,
            "query" => $query
        ]);
    }
    public function pembayaran()
    {
        $act = 'pembayaran';
        $query = DB::table('pembayaran')->join('users', 'users.id', '=', 'pembayaran.id_pemesan')->get();
        return view('/adminPages/pembayaran', [
            "act" => $act,
            "query" => $query
        ]);
    }
}
