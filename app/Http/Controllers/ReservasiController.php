<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ReservasiController extends Controller
{
    

    public function index(){
        $data['jml_kamar'] = DB::select('SELECT COUNT(*) AS hasil FROM kamar');
        $data['dirawat'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi WHERE keterangan = "Terisi"');
        $data['booking'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi WHERE status_booking = "Booking"');
        $data['keluar'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi WHERE status_kamar = "keluar"');

        $data['png'] = DB::select('SELECT penanggungjawab, COUNT(penanggungjawab) AS hasil FROM reservasi WHERE status_kamar = "keluar" GROUP BY penanggungjawab');
        $data['pakai'] = DB::select('SELECT (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi") AS Terpakai, ((SELECT COUNT(*) FROM kamar) - (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi")) AS tidak_terpakai');

        $data['jml_ka'] = DB::select('SELECT COUNT(*) FROM kamar');
        //Update Booking Status
        DB::select('UPDATE reservasi SET keterangan = "Terisi", status_booking = "MRS", status_kamar = "masuk" WHERE DATE(tgl_masuk) = DATE(NOW()) AND status_booking = "Booking"');
        return view('dashboard', $data);
    }
    public function KamarTerpakai(){
        $data['pakai'] = DB::select('SELECT (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi") AS Terpakai, ((SELECT COUNT(*) FROM kamar) - (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi")) AS tidak_terpakai');
        echo json_encode($data);
        exit;
    }

    public function Penanggung(){
        $data['png'] = DB::select('SELECT penanggungjawab, COUNT(penanggungjawab) AS jumlah FROM `reservasi` GROUP BY penanggungjawab');
        echo json_encode($data);
        exit;
    }
    public function PasienBulanIni(){
        $data['pas'] = DB::select('SELECT status_kamar, COUNT(id_reservasi) AS jumlah FROM reservasi WHERE MONTH(tgl_masuk) = MONTH(NOW()) GROUP BY status_kamar');
        echo json_encode($data);
        exit;
    }

    // public function AddReservation(Request $request){
    //     date_default_timezone_set('Asia/Bangkok');
    //     $nama = $request->input('nama');
    //     $penanggung = $request->input('penanggung');
    //     $id_kamar = $request->input('id_kamar');

    //     DB::table('reservasi')->insert([
    //         'nama_pasien'       => $nama,
    //         'penanggungjawab'   => $penanggung,
    //         'id_kamar'          => $id_kamar,
    //         'tgl_masuk'         => date("Y-m-d h:i:s"),
    //         'keterangan'        => 'Terisi',
    //         'status_booking'    => 'MRS',
    //         'no_kamar'          => '1',
    //         'status_kamar'      => 'masuk'
    //     ]);

    //     return redirect('/icu');
    // }

    public function AddReservationMRS(Request $request, $cate){
        // date_default_timezone_set('Asia/Bangkok');
        $nama = $request->input('nama');
        $penanggung = $request->input('penanggung');
        $id_kamar = $request->input('id_kamar');
        $utama = $request->input('utama');
        $bilik = $request->input('bilik');

        DB::table('reservasi')->insert([
            'nama_pasien'       => $nama,
            'penanggungjawab'   => $penanggung,
            'id_kamar'          => $id_kamar,
            'tgl_masuk'         => date("Y-m-d H:i:s"),
            'keterangan'        => 'Terisi',
            'status_booking'    => 'MRS',
            'no_kamar'          => $bilik,
            'utama'             => $utama,
            'status_kamar'      => 'masuk'
        ]);

        return redirect('/'.$cate);
    }

    // public function Booking(Request $request){
    //     $nama = $request->input('nama');
    //     $penanggung = $request->input('penanggung');
    //     $id_kamar = $request->input('id_kamar');

    //     $tgl = $request->input('daterange');
    //     $pecah = explode(" - ", $tgl);

    //     $tgl1 = explode("/", $pecah[0]);
    //     $tgl_masuk = $tgl1[2]."-".$tgl1[0]."-".$tgl1[1];
    //     $tgl2 = explode("/", $pecah[1]);
    //     $tgl_keluar = $tgl2[2]."-".$tgl2[0]."-".$tgl2[1];


    //     DB::table('reservasi')->insert([
    //         'nama_pasien'       => $nama,
    //         'penanggungjawab'   => $penanggung,
    //         'id_kamar'          => $id_kamar,
    //         'tgl_masuk'         => $tgl_masuk,
    //         'tgl_keluar'        => $tgl_keluar,
    //         'keterangan'        => '',
    //         'status_booking'    => 'Booking',
    //         'no_kamar'          => '1',
    //         'status_kamar'      => 'Booking',
    //     ]);

    //     return redirect('/icu');
    // }

    public function BookingB(Request $request, $cate){
        $nama = $request->input('nama');
        $penanggung = $request->input('penanggung');
        $id_kamar = $request->input('id_kamar');
        $bilik = $request->input('bilik');
        $utama = $request->input('utama');

        $tgl = $request->input('daterange');
        $pecah = explode(" - ", $tgl);

        $tgl1 = explode("/", $pecah[0]);
        $tgl_masuk = $tgl1[2]."-".$tgl1[0]."-".$tgl1[1];
        $tgl2 = explode("/", $pecah[1]);
        $tgl_keluar = $tgl2[2]."-".$tgl2[0]."-".$tgl2[1];


        DB::table('reservasi')->insert([
            'nama_pasien'       => $nama,
            'penanggungjawab'   => $penanggung,
            'id_kamar'          => $id_kamar,
            'tgl_masuk'         => $tgl_masuk,
            'tgl_keluar'        => $tgl_keluar,
            'keterangan'        => '',
            'status_booking'    => 'Booking',
            'no_kamar'          => $bilik,
            'utama'             => $utama,
            'status_kamar'      => 'Booking',
        ]);

        return redirect('/'.$cate);
    }


    

    // public function PasienKeluar(Request $request){
    //     date_default_timezone_set('Asia/Bangkok');
    //     $nama = $request->input('nama');
    //     $penanggung = $request->input('penanggung');
    //     $id_kamar = $request->input('id_kamar');
    //     $ketkel = $request->input('keterangan');

    //     DB::table('reservasi')->where('id_kamar', $id_kamar)->where('keterangan','Terisi')->update([
    //         'nama_pasien'       => $nama,
    //         'penanggungjawab'   => $penanggung,
    //         'id_kamar'          => $id_kamar,
    //         'tgl_keluar'        => date("Y-m-d H:i:s"),
    //         'keterangan'        => $ketkel,
    //         'status_kamar'      => 'keluar'
    //     ]);

    //     return redirect('/icu');
    // }

    public function PasienKeluarB(Request $request, $cate){
        // date_default_timezone_set('Asia/Bangkok');
        $id_res = $request->input('id_res');
        $nama = $request->input('nama');
        $penanggung = $request->input('penanggung');
        $id_kamar = $request->input('id_kamar');
        $ketkel = $request->input('keterangan');

        DB::table('reservasi')->where('id_reservasi',$id_res)->update([
            'nama_pasien'       => $nama,
            'penanggungjawab'   => $penanggung,
            'tgl_keluar'        => date("Y-m-d H:i:s"),
            'keterangan'        => $ketkel,
            'status_kamar'      => 'keluar'
        ]);
        
        return redirect('/'.$cate);
    }

    public function checkKamar($id){
        $data['data'] = DB::select('SELECT * FROM reservasi WHERE id_kamar = '.$id.' AND status_kamar = "masuk" AND status_booking = "MRS"');

        echo json_encode($data);
        exit;
    }

    public function checkBooked($group){
        $data['data'] = DB::select('SELECT * FROM reservasi a INNER JOIN kamar b ON a.id_kamar = b.id_kamar WHERE b.group_kamar = "'.$group.'" AND a.status_booking = "Booking"');

        echo json_encode($data);
        exit;
    }

    public function checkBookedById($id){
        $data['data'] = DB::select('SELECT id_reservasi, utama, nama_pasien, penanggungjawab, DATE_FORMAT(tgl_masuk, "%d-%m-%Y %h:%m:%s") AS tgl_masuk, DATE_FORMAT(tgl_keluar, "%d-%m-%Y %h:%m:%s") AS tgl_keluar, no_kamar, nama_kamar FROM reservasi a INNER JOIN kamar b ON a.id_kamar = b.id_kamar WHERE b.id_kamar = '.$id.' AND a.status_booking = "Booking"');

        echo json_encode($data);
        exit;
    }

    public function checkBookedKMR($id, $kmr){
        $data['data'] = DB::select('SELECT * FROM reservasi a INNER JOIN kamar b ON a.id_kamar = b.id_kamar WHERE b.id_kamar = '.$id.' AND a.no_kamar = "'.$kmr.'" AND a.status_booking = "Booking"');

        echo json_encode($data);
        exit;
    }

    public function ReservasiBatal($id_res, $cate){
        date_default_timezone_set('Asia/Bangkok');

        DB::table('reservasi')->where('id_reservasi',$id_res)->update([
            'status_kamar'          => 'Batal',
            'status_booking'        => 'Batal'
        ]);
        
        return redirect('/'.$cate);
    }

   
}
?>