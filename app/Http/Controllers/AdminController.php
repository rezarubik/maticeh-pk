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
    public function dataGuru()
    { # new dataGuru
        $act = 'dataGuru';
        $query = DB::table('users')->join('guru', 'users.id', '=', 'guru.id_guru')
            ->where('users.role', '=', 2)
            ->where('users.status', '=', 0)
            ->get();
        // dd($query);
        // die();
        $queryMapel = DB::table('bahan_ajar')->join('mata_pelajaran', 'mata_pelajaran.id', '=', 'bahan_ajar.id_mapel')->get();
        // dd($queryMapel);
        // die();

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
        $queryMapel = DB::table('bahan_ajar')->join('mata_pelajaran', 'mata_pelajaran.id', '=', 'bahan_ajar.id_mapel')->get();

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
        $queryMapel = DB::table('bahan_ajar')->join('mata_pelajaran', 'mata_pelajaran.id', '=', 'bahan_ajar.id_mapel')->get();

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
        $query = DB::select(DB::raw("SELECT table_pemesan.name as nama_pemesan, pemesanan.nama_murid as nama_murid,table_guru.name as nama_guru, mata_pelajaran.nama_mapel as nama_mapel, jenjang.jenjang as jenjang , pemesanan.tgl_pertemuan_pertama as tgl_pertemuan_pertama , table_pemesan.alamat as alamat_pemesan, pemesanan.status, pemesanan.created_at as created_at, pemesanan.updated_at as updated_at FROM pemesanan, (select * from users where role = 1) table_pemesan, (select * from users where role = 2) table_guru, mata_pelajaran, jenjang WHERE pemesanan.id_pemesan = table_pemesan.id && pemesanan.id_guru = table_guru.id && pemesanan.id_mapel = mata_pelajaran.id && mata_pelajaran.jenjang = jenjang.id_jenjang"));
        return view('/adminPages/pemesanan', [
            "act" => $act,
            "query" => $query
        ]);
    }
    public function absensi()
    {
        $act = 'absensi';
        $query = DB::select(DB::raw("SELECT table_pemesan.name as nama_pemesan, pemesanan.nama_murid as nama_murid,table_guru.name as nama_guru, mata_pelajaran.nama_mapel as nama_mapel, pemesanan.created_at as created_at FROM pemesanan, (select * from users where role = 1) table_pemesan, (select * from users where role = 2) table_guru, mata_pelajaran WHERE pemesanan.id_pemesan = table_pemesan.id && pemesanan.id_guru = table_guru.id && pemesanan.id_mapel = mata_pelajaran.id"));
        return view('/adminPages/absensi', [
            "act" => $act,
            "query" => $query
        ]);
    }
    public function pembayaran()
    {
        $act = 'pembayaran';
        // $query = DB::table('pembayaran')->join('users', 'users.id', '=', 'pembayaran.id_pemesan')->get();
        $query = DB::select(DB::raw("SELECT pembayaran.id as id_pembayaran, pemesanan.id as id_pemesanan, tbl_pemesan.name AS nama_pemesan, tbl_guru.name as nama_guru, pembayaran.jumlah_pertemuan as jumlah_pertemuan, pembayaran.tanggal_bayar as tanggal_bayar, pembayaran.tanggal_verifikasi as tanggal_verifikasi, pembayaran.total_pembayaran as total_pembayaran, pembayaran.status as status FROM pemesanan, pembayaran,  (SELECT * from users WHERE role = 2) tbl_guru, (select * from users WHERE role = 1) tbl_pemesan WHERE pemesanan.id_guru = tbl_guru.id && pemesanan.id_pemesan = tbl_pemesan.id && pembayaran.id_pemesanan = pemesanan.id"));
        return view('/adminPages/pembayaran', [
            "act" => $act,
            "query" => $query
        ]);
    }
    public function approvePembayaran($id)
    {
        $query = DB::table('pembayaran')->select('id')->get();
        DB::table('pembayaran')->where('id', '=', $id)->update([
            'status' => 1
        ]);
        return redirect('/pembayaran');
    }
    public function declinePembayaran($id)
    {
        $query = DB::table('pembayaran')->select('id')->get();
        DB::table('pembayaran')->where('id', '=', $id)->update([
            'status' => 2
        ]);
        return redirect('/pembayaran');
    }
}
