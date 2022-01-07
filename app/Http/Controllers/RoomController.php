<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RoomController extends Controller
{
    public function index(){
        $data['room'] = DB::select('SELECT * FROM kamar');
        $data['data'] = DB::select('SELECT * FROM reservasi a LEFT JOIN kamar b ON a.id_kamar = b.id_kamar ');
        return view('room.index', $data);
    }
    public function tambahKamar(){
        return view('room.add_room');
    }

    public function create(Request $request){
        $nama = $request->input('nama_kamar');
        $kapasitas = $request->input('kapasitas');
        $group = $request->input('group_kamar');

        DB::table('kamar')->insert([
            'nama_kamar'       => $nama,
            'kapasitas'   => $kapasitas,
            'group_kamar'          => $group
        ]);

        return redirect('/room');
    }

    public function deleteKamar($id){

    }

    public function editKamar($id){
        $data['kamar'] = DB::select('SELECT * FROM kamar WHERE id_kamar = ".$id."');
        return view('room.index', $data);
    }
}