<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class RekapController extends Controller
{
    public function index(){
        $data['user'] = DB::select('SELECT *  FROM user_admin');
        

        return view('rekap', $data);
    }
    public function Seluruh(){
        $data['data'] = DB::select('SELECT * FROM reservasi a LEFT JOIN kamar b ON a.id_kamar = b.id_kamar order by a.tgl_booking desc');

        echo json_encode($data);
        exit;
    }
    public function SeluruhByKet($ket){
        $data['data'] = DB::select('SELECT * FROM reservasi a LEFT JOIN kamar b ON a.id_kamar = b.id_kamar WHERE a.keterangan = "'.$ket.'" order by a.tgl_booking desc');

        echo json_encode($data);
        exit;
    }
    public function SeluruhByTgl($tgl){
        $data['data'] = DB::select('SELECT * FROM reservasi a LEFT JOIN kamar b ON a.id_kamar = b.id_kamar WHERE DATE(a.tgl_masuk) = "'.$tgl.'" order by a.tgl_booking desc');

        echo json_encode($data);
        exit;
    }
    public function SeluruhByKetTgl($ket, $tgl){
        $data['data'] = DB::select('SELECT * FROM reservasi a LEFT JOIN kamar b ON a.id_kamar = b.id_kamar WHERE a.keterangan = "'.$ket.'" AND  DATE(a.tgl_masuk) = "'.$tgl.'" order by a.tgl_booking desc');

        echo json_encode($data);
        exit;
    }

    public function SeluruhByKetKel($ket){
        $data['data'] = DB::select('SELECT * FROM reservasi a LEFT JOIN kamar b ON a.id_kamar = b.id_kamar WHERE a.status_kamar = "'.$ket.'" order by a.tgl_booking desc');

        echo json_encode($data);
        exit;
    }

    public function SeluruhByKetTglKel($ket, $tgl){
        $data['data'] = DB::select('SELECT * FROM reservasi a LEFT JOIN kamar b ON a.id_kamar = b.id_kamar WHERE a.status_kamar = "'.$ket.'" AND  DATE(a.tgl_masuk) = "'.$tgl.'" order by a.tgl_booking desc');

        echo json_encode($data);
        exit;
    }
    public function BatalKeluar($id){
        DB::select('UPDATE reservasi SET keterangan = "Terisi", status_kamar = "masuk", tgl_keluar = NULL WHERE id_reservasi = '.$id.'');

    }
    public function Hapus($id){
        DB::select('DELETE FROM reservasi WHERE id_reservasi = "'.$id.'"');

    }

    public function checkReservasi($id){
        $data['data'] = DB::select('SELECT id_reservasi, nama_pasien, b.nama_kamar, penanggungjawab, DATE(tgl_masuk) AS tgl_masuk, DATE(tgl_keluar) AS tgl_keluar, DATE_FORMAT(tgl_masuk, "%H:%i") AS jmm, DATE_FORMAT(tgl_keluar, "%H:%i") AS jmk FROM reservasi a INNER JOIN kamar b ON a.id_kamar = b.id_kamar WHERE id_reservasi = '.$id.'');

        echo json_encode($data);
        exit;
    }

    public function RekapUpdate(Request $request){
        date_default_timezone_set('Asia/Bangkok');
        $id_res = $request->input('idres');
        $nama = $request->input('nama');
        $penanggung = $request->input('png');
        $tgm = $request->input('tgm');
        $tgk = $request->input('tgk');

        $jmm = $request->input('jmm');
        $jmk = $request->input('jmk');

        if ($tgk == '') {
            DB::table('reservasi')->where('id_reservasi',$id_res)->update([
                'nama_pasien'       => $nama,
                'penanggungjawab'   => $penanggung,
                'tgl_masuk'         => $tgm." ".$jmm,
                'tgl_keluar'        => NULL
            ]);
        } else {
            DB::table('reservasi')->where('id_reservasi',$id_res)->update([
                'nama_pasien'       => $nama,
                'penanggungjawab'   => $penanggung,
                'tgl_masuk'         => $tgm." ".$jmm,
                'tgl_keluar'        => $tgk." ".$jmk
            ]);
        }
        

        
        
        return redirect('/rekap');
    }
}