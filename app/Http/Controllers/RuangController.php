<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RuangController extends Controller
{
    public function icu(){
        $data['jml_kamar'] = DB::select('SELECT COUNT(*) AS hasil FROM kamar WHERE group_kamar="ICU"');
        $data['dirawat'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.keterangan = "terisi" and kamar.group_kamar = "ICU"');
        $data['booking'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "Booking" and kamar.group_kamar = "ICU"');
        $data['keluar'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "keluar" and kamar.group_kamar = "ICU"');

        $data['png'] = DB::select('SELECT penanggungjawab, COUNT(penanggungjawab) AS hasil FROM reservasi WHERE status_kamar = "keluar" GROUP BY penanggungjawab');
        $data['pakai'] = DB::select('SELECT (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi") AS Terpakai, ((SELECT COUNT(*) FROM kamar) - (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi")) AS tidak_terpakai');

        $data['jml_ka'] = DB::select('SELECT COUNT(*) FROM kamar');
        //Update Booking Status
        DB::select('UPDATE reservasi SET keterangan = "Terisi", status_booking = "MRS", status_kamar = "masuk" WHERE DATE(tgl_masuk) = DATE(NOW()) AND status_booking = "Booking"');

        //kamar
        $data['kamar1'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 1 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar2'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 2 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar3'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 3 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar4'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 4 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar5'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 5 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar6'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 6 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar217'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 217 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar218'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 218 AND status_kamar = "masuk" AND status_booking = "MRS"');

        $data['bk1'] = DB::table('reservasi')->where('id_kamar', 1)->where('status_booking', 'Booking')->count();
        $data['bk2'] = DB::table('reservasi')->where('id_kamar', 2)->where('status_booking', 'Booking')->count();
        $data['bk3'] = DB::table('reservasi')->where('id_kamar', 3)->where('status_booking', 'Booking')->count();
        $data['bk4'] = DB::table('reservasi')->where('id_kamar', 4)->where('status_booking', 'Booking')->count();
        $data['bk5'] = DB::table('reservasi')->where('id_kamar', 5)->where('status_booking', 'Booking')->count();
        $data['bk6'] = DB::table('reservasi')->where('id_kamar', 6)->where('status_booking', 'Booking')->count();
        $data['bk217'] = DB::table('reservasi')->where('id_kamar', 217)->where('status_booking', 'Booking')->count();
        $data['bk218'] = DB::table('reservasi')->where('id_kamar', 218)->where('status_booking', 'Booking')->count();

        //pn
        $data['pn1'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 1 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn2'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 2 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn3'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 3 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn4'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 4 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn5'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 5 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn6'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 6 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn217'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 217 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn218'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 218 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['isi1'] = DB::select('SELECT  (SELECT COUNT(*) 
                FROM reservasi WHERE id_kamar = 1 
                AND status_kamar = "masuk" 
                AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 1 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg, 
                kapasitas 
                FROM kamar WHERE id_kamar = "1"');
        $data['isi2'] = DB::select('SELECT  (SELECT COUNT(*) 
                FROM reservasi WHERE id_kamar = 2 
                AND status_kamar = "masuk" 
                AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 2 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                kapasitas 
                FROM kamar WHERE id_kamar = "2"');
        $data['isi3'] = DB::select('SELECT  (SELECT COUNT(*) 
                FROM reservasi WHERE id_kamar = 3 
                AND status_kamar = "masuk" 
                AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 3 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                kapasitas 
                FROM kamar WHERE id_kamar = "3"');
        $data['isi4'] = DB::select('SELECT  (SELECT COUNT(*) 
                FROM reservasi WHERE id_kamar = 4 
                AND status_kamar = "masuk" 
                AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 4 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                kapasitas 
                FROM kamar WHERE id_kamar = "4"');
        $data['isi5'] = DB::select('SELECT  (SELECT COUNT(*) 
                FROM reservasi WHERE id_kamar = 5 
                AND status_kamar = "masuk" 
                AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 5 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                kapasitas 
                FROM kamar WHERE id_kamar = "5"');

        $data['isi6'] = DB::select('SELECT  (SELECT COUNT(*) 
                FROM reservasi WHERE id_kamar = 6 
                AND status_kamar = "masuk" 
                AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 6 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                kapasitas 
                FROM kamar WHERE id_kamar = "6"');
        $data['isi217'] = DB::select('SELECT  (SELECT COUNT(*) 
            FROM reservasi WHERE id_kamar = 217 
            AND status_kamar = "masuk" 
            AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 217 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
            kapasitas 
            FROM kamar WHERE id_kamar = "217"');
        $data['isi218'] = DB::select('SELECT  (SELECT COUNT(*) 
            FROM reservasi WHERE id_kamar = 218 
            AND status_kamar = "masuk" 
            AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 218 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
            kapasitas 
            FROM kamar WHERE id_kamar = "218"');


        return view('ruangan.icu', $data);
    }
    public function paviliun1(){
        $data['jml_kamar'] = DB::select('SELECT COUNT(*) AS hasil FROM kamar WHERE group_kamar="PAVILIUN1"');
        $data['dirawat'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.keterangan = "terisi" and kamar.group_kamar = "PAVILIUN1"');
        $data['booking'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "Booking" and kamar.group_kamar = "PAVILIUN1"');
        $data['keluar'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "keluar" and kamar.group_kamar = "PAVILIUN1"');

        $data['png'] = DB::select('SELECT penanggungjawab, COUNT(penanggungjawab) AS hasil FROM reservasi WHERE status_kamar = "keluar" GROUP BY penanggungjawab');
        $data['pakai'] = DB::select('SELECT (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi") AS Terpakai, ((SELECT COUNT(*) FROM kamar) - (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi")) AS tidak_terpakai');

        $data['jml_ka'] = DB::select('SELECT COUNT(*) FROM kamar');
        //Update Booking Status
        DB::select('UPDATE reservasi SET keterangan = "Terisi", status_booking = "MRS", status_kamar = "masuk" WHERE DATE(tgl_masuk) = DATE(NOW()) AND status_booking = "Booking"');

        // Cek utama
        

        //cekkamar
        $data['kamar195'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 195 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar196'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 196 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar197'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 197 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar198'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 198 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar199'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 199 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar200'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 200 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar201'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 201 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar202'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 202 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar203'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 203 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar204'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 204 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar205'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 205 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar206'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 206 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar207'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 207 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar208'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 208 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar209'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 209 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar210'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 210 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar211'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 211 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar212'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 212 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar213'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 213 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar214'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 214 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar215'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 215 AND status_kamar = "masuk" AND status_booking = "MRS"');

        $data['kamar7'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 7 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar8'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 8 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar9'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 9 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar10'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 10 AND status_kamar = "masuk" AND status_booking = "MRS"');
        // $data['kamar11'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 11 AND status_kamar = "masuk" AND status_booking = "MRS"');

        $data['kamar253'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 253 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar254'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 254 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar255'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 255 AND status_kamar = "masuk" AND status_booking = "MRS"');

        // $data['kamar12'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 12 AND status_kamar = "masuk" AND status_booking = "MRS"');
        // $data['kamar13'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 13 AND status_kamar = "masuk" AND status_booking = "MRS"');
        // $data['kamar14'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 14 AND status_kamar = "masuk" AND status_booking = "MRS"');
        // $data['kamar15'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 15 AND status_kamar = "masuk" AND status_booking = "MRS"');
        // $data['kamar16'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 16 AND status_kamar = "masuk" AND status_booking = "MRS"');

        // $data['kamar17'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 17 AND status_kamar = "masuk" AND status_booking = "MRS"');
        // $data['kamar18'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 18 AND status_kamar = "masuk" AND status_booking = "MRS"');
        // $data['kamar19'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 19 AND status_kamar = "masuk" AND status_booking = "MRS"');
        // $data['kamar20'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 20 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar21'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 21 AND status_kamar = "masuk" AND status_booking = "MRS"');

        // $data['kamar22'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 22 AND status_kamar = "masuk" AND status_booking = "MRS"');
        // $data['kamar23'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 23 AND status_kamar = "masuk" AND status_booking = "MRS"');
        // $data['kamar24'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 24 AND status_kamar = "masuk" AND status_booking = "MRS"');
        // $data['kamar25'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 25 AND status_kamar = "masuk" AND status_booking = "MRS"');
        // $data['kamar26'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 26 AND status_kamar = "masuk" AND status_booking = "MRS"');

        //checkBook
        $data['bk195'] = DB::table('reservasi')->where('id_kamar', 195)->where('status_booking', 'Booking')->count();
        $data['bk196'] = DB::table('reservasi')->where('id_kamar', 196)->where('status_booking', 'Booking')->count();
        $data['bk197'] = DB::table('reservasi')->where('id_kamar', 197)->where('status_booking', 'Booking')->count();
        $data['bk198'] = DB::table('reservasi')->where('id_kamar', 198)->where('status_booking', 'Booking')->count();
        $data['bk199'] = DB::table('reservasi')->where('id_kamar', 199)->where('status_booking', 'Booking')->count();
        $data['bk200'] = DB::table('reservasi')->where('id_kamar', 200)->where('status_booking', 'Booking')->count();
        $data['bk201'] = DB::table('reservasi')->where('id_kamar', 201)->where('status_booking', 'Booking')->count();
        $data['bk202'] = DB::table('reservasi')->where('id_kamar', 202)->where('status_booking', 'Booking')->count();
        $data['bk203'] = DB::table('reservasi')->where('id_kamar', 203)->where('status_booking', 'Booking')->count();
        $data['bk204'] = DB::table('reservasi')->where('id_kamar', 204)->where('status_booking', 'Booking')->count();
        $data['bk205'] = DB::table('reservasi')->where('id_kamar', 205)->where('status_booking', 'Booking')->count();
        $data['bk206'] = DB::table('reservasi')->where('id_kamar', 206)->where('status_booking', 'Booking')->count();
        $data['bk207'] = DB::table('reservasi')->where('id_kamar', 207)->where('status_booking', 'Booking')->count();
        $data['bk208'] = DB::table('reservasi')->where('id_kamar', 208)->where('status_booking', 'Booking')->count();
        $data['bk209'] = DB::table('reservasi')->where('id_kamar', 209)->where('status_booking', 'Booking')->count();
        $data['bk210'] = DB::table('reservasi')->where('id_kamar', 210)->where('status_booking', 'Booking')->count();
        $data['bk211'] = DB::table('reservasi')->where('id_kamar', 211)->where('status_booking', 'Booking')->count();
        $data['bk212'] = DB::table('reservasi')->where('id_kamar', 212)->where('status_booking', 'Booking')->count();
        $data['bk213'] = DB::table('reservasi')->where('id_kamar', 213)->where('status_booking', 'Booking')->count();
        $data['bk214'] = DB::table('reservasi')->where('id_kamar', 214)->where('status_booking', 'Booking')->count();
        $data['bk215'] = DB::table('reservasi')->where('id_kamar', 215)->where('status_booking', 'Booking')->count();

        $data['bk7'] = DB::table('reservasi')->where('id_kamar', 7)->where('status_booking', 'Booking')->count();
        $data['bk8'] = DB::table('reservasi')->where('id_kamar', 8)->where('status_booking', 'Booking')->count();
        $data['bk9'] = DB::table('reservasi')->where('id_kamar', 9)->where('status_booking', 'Booking')->count();
        $data['bk10'] = DB::table('reservasi')->where('id_kamar', 10)->where('status_booking', 'Booking')->count();

        $data['bk253'] = DB::table('reservasi')->where('id_kamar', 253)->where('status_booking', 'Booking')->count();
        $data['bk254'] = DB::table('reservasi')->where('id_kamar', 254)->where('status_booking', 'Booking')->count();
        $data['bk255'] = DB::table('reservasi')->where('id_kamar', 255)->where('status_booking', 'Booking')->count();
        // $data['bk11'] = DB::table('reservasi')->where('id_kamar', 11)->where('status_booking', 'Booking')->count();

        // $data['bk12'] = DB::table('reservasi')->where('id_kamar', 12)->where('status_booking', 'Booking')->count();
        // $data['bk13'] = DB::table('reservasi')->where('id_kamar', 13)->where('status_booking', 'Booking')->count();
        // $data['bk14'] = DB::table('reservasi')->where('id_kamar', 14)->where('status_booking', 'Booking')->count();
        // $data['bk15'] = DB::table('reservasi')->where('id_kamar', 15)->where('status_booking', 'Booking')->count();
        // $data['bk16'] = DB::table('reservasi')->where('id_kamar', 16)->where('status_booking', 'Booking')->count();

        // $data['bk17'] = DB::table('reservasi')->where('id_kamar', 17)->where('status_booking', 'Booking')->count();
        // $data['bk18'] = DB::table('reservasi')->where('id_kamar', 18)->where('status_booking', 'Booking')->count();
        // $data['bk19'] = DB::table('reservasi')->where('id_kamar', 19)->where('status_booking', 'Booking')->count();
        // $data['bk20'] = DB::table('reservasi')->where('id_kamar', 20)->where('status_booking', 'Booking')->count();
        $data['bk21'] = DB::table('reservasi')->where('id_kamar', 21)->where('status_booking', 'Booking')->count();

        // $data['bk22'] = DB::table('reservasi')->where('id_kamar', 22)->where('status_booking', 'Booking')->count();
        // $data['bk23'] = DB::table('reservasi')->where('id_kamar', 23)->where('status_booking', 'Booking')->count();
        // $data['bk24'] = DB::table('reservasi')->where('id_kamar', 24)->where('status_booking', 'Booking')->count();
        // $data['bk25'] = DB::table('reservasi')->where('id_kamar', 25)->where('status_booking', 'Booking')->count();
        // $data['bk26'] = DB::table('reservasi')->where('id_kamar', 26)->where('status_booking', 'Booking')->count();
        
        $data['pn195'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 195 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn196'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 196 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn197'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 197 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn198'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 198 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn199'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 199 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn200'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 200 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn201'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 201 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn202'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 202 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn203'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 203 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn204'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 204 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn205'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 205 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn206'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 206 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn207'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 207 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn208'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 208 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn209'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 209 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn210'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 210 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn211'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 211 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn212'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 212 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn213'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 213 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn214'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 214 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn215'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 215 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn7'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 7 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn8'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 8 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn9'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 9 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn10'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 10 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn253'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 253 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn254'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 254 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn255'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 255 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn11'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 11 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        // $data['pn12'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 12 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn13'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 13 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn14'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 14 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn15'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 15 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn16'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 16 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        // $data['pn17'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 17 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn18'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 18 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn19'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 19 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn20'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 20 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn21'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 21 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        // $data['pn22'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 22 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn23'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 23 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn24'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 24 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn25'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 25 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn26'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 26 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        //isikamar
        $data['isi7'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 7 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 7 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "7"');
        $data['isi8'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 8 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                                        (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 8 
                                        AND status_kamar != "keluar" 
                                        AND status_booking = "Booking") AS bkg, 
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "8"');
        $data['isi9'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 9 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 9 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "9"');
        $data['isi10'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 10 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 10 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "10"');
        // $data['isi11'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                 FROM reservasi WHERE id_kamar = 11 
        //                                 AND status_kamar = "masuk" 
        //                                 AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 11 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                 kapasitas 
        //                                 FROM kamar WHERE id_kamar = "11"');

        // $data['isi12'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                 FROM reservasi WHERE id_kamar = 12 
        //                                 AND status_kamar = "masuk" 
        //                                 AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 12 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                 kapasitas 
        //                                 FROM kamar WHERE id_kamar = "12"');
        // $data['isi13'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                 FROM reservasi WHERE id_kamar = 13 
        //                                 AND status_kamar = "masuk" 
        //                                 AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 13 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                 kapasitas 
        //                                 FROM kamar WHERE id_kamar = "13"');
        // $data['isi14'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                 FROM reservasi WHERE id_kamar = 14 
        //                                 AND status_kamar = "masuk" 
        //                                 AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 14 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                 kapasitas 
        //                                 FROM kamar WHERE id_kamar = "14"');
        // $data['isi15'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                 FROM reservasi WHERE id_kamar = 15 
        //                                 AND status_kamar = "masuk" 
        //                                 AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 15 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                 kapasitas 
        //                                 FROM kamar WHERE id_kamar = "15"');
        // $data['isi16'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                 FROM reservasi WHERE id_kamar = 16 
        //                                 AND status_kamar = "masuk" 
        //                                 AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 16 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                 kapasitas 
        //                                 FROM kamar WHERE id_kamar = "16"');

        // $data['isi17'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                 FROM reservasi WHERE id_kamar = 17 
        //                                 AND status_kamar = "masuk" 
        //                                 AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 17 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                 kapasitas 
        //                                 FROM kamar WHERE id_kamar = "17"');
        // $data['isi18'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                 FROM reservasi WHERE id_kamar = 18 
        //                                 AND status_kamar = "masuk" 
        //                                 AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 18 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                 kapasitas 
        //                                 FROM kamar WHERE id_kamar = "18"');
        // $data['isi19'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                 FROM reservasi WHERE id_kamar = 19 
        //                                 AND status_kamar = "masuk" 
        //                                 AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 19 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                 kapasitas 
        //                                 FROM kamar WHERE id_kamar = "19"');
        // $data['isi20'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                 FROM reservasi WHERE id_kamar = 20 
        //                                 AND status_kamar = "masuk" 
        //                                 AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 20 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                 kapasitas 
        //                                 FROM kamar WHERE id_kamar = "20"');
        $data['isi21'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 21 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 21 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "21"');
        $data['isi195'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 195 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 195 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "195"');
        $data['isi196'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 196 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 196 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "196"');
        $data['isi197'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 197 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 197 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "197"'); 
        $data['isi198'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 198 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 198 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "198"');
        $data['isi199'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 199 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 199 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "199"');  
        $data['isi200'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 200 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 200 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "200"');
        $data['isi201'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 201
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 201 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "201"');   
        $data['isi202'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 202 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 202 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "202"');
        $data['isi203'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 203 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 203 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "203"');
        $data['isi204'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 204 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 204 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "204"');
        $data['isi205'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 205 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 205 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "205"');
        $data['isi206'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 206 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 206 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "206"'); 
        $data['isi207'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 207 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 207 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "207"');
        $data['isi208'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 208 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 208 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "208"'); 
        $data['isi209'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 209 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 209 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "209"');
        
        $data['isi210'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 210 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 210 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "210"'); 
        $data['isi211'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 211 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 211 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "211"');
        $data['isi212'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 212 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 212 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "212"');
        $data['isi213'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 213 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 213 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "213"'); 
        $data['isi214'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 214 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 214 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "214"'); 
        $data['isi215'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 215 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 215 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "215"');   
                                        
         $data['isi253'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 253
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 253 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "253"'); 
        $data['isi254'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 254 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 254 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "254"'); 
        $data['isi255'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 255 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 255 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "255"');   

        // $data['isi22'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                 FROM reservasi WHERE id_kamar = 22 
        //                                 AND status_kamar = "masuk" 
        //                                 AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 22 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                 kapasitas 
        //                                 FROM kamar WHERE id_kamar = "22"');
        // $data['isi23'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                 FROM reservasi WHERE id_kamar = 23 
        //                                 AND status_kamar = "masuk" 
        //                                 AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 23 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                 kapasitas 
        //                                 FROM kamar WHERE id_kamar = "23"');
        // $data['isi24'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                 FROM reservasi WHERE id_kamar = 24 
        //                                 AND status_kamar = "masuk" 
        //                                 AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 24 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                 kapasitas 
        //                                 FROM kamar WHERE id_kamar = "24"');
        // $data['isi25'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                 FROM reservasi WHERE id_kamar = 25
        //                                 AND status_kamar = "masuk" 
        //                                 AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 25 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                 kapasitas 
        //                                 FROM kamar WHERE id_kamar = "25"');
        // $data['isi26'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                 FROM reservasi WHERE id_kamar = 26 
        //                                 AND status_kamar = "masuk" 
        //                                 AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 26 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                 kapasitas 
        //                                 FROM kamar WHERE id_kamar = "26"');

        return view('ruangan.paviliun1', $data);    
    }

    public function paviliun2(){
        $data['jml_kamar'] = DB::select('SELECT COUNT(*) AS hasil FROM kamar WHERE group_kamar="PAVILIUN2"');
        $data['dirawat'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.keterangan = "terisi" and kamar.group_kamar = "PAVILIUN2"');
        $data['booking'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "Booking" and kamar.group_kamar = "PAVILIUN2"');
        $data['keluar'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "keluar" and kamar.group_kamar = "PAVILIUN2"');

        $data['png'] = DB::select('SELECT penanggungjawab, COUNT(penanggungjawab) AS hasil FROM reservasi WHERE status_kamar = "keluar" GROUP BY penanggungjawab');
        $data['pakai'] = DB::select('SELECT (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi") AS Terpakai, ((SELECT COUNT(*) FROM kamar) - (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi")) AS tidak_terpakai');

        $data['jml_ka'] = DB::select('SELECT COUNT(*) FROM kamar');
        //Update Booking Status
        DB::select('UPDATE reservasi SET keterangan = "Terisi", status_booking = "MRS", status_kamar = "masuk" WHERE DATE(tgl_masuk) = DATE(NOW()) AND status_booking = "Booking"');
        $data['kamar178'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 178 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar179'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 179 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar180'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 180 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar181'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 181 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar182'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 182 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar183'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 183 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar184'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 184 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar185'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 185 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar186'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 186 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar187'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 187 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar188'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 188 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar189'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 189 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar190'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 190 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar191'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 191 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar192'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 192 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar193'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 193 AND status_kamar = "masuk" AND status_booking = "MRS"');
        $data['kamar194'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 194 AND status_kamar = "masuk" AND status_booking = "MRS"');

         //cekkamar
         $data['kamar27'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 27 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar28'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 28 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar29'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 29 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar30'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 30 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar31'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 31 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar32'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 32 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar33'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 33 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar34'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 34 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar35'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 35 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar36'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 36 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar37'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 37 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar38'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 38 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar39'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 39 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar40'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 40 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar41'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 41 AND status_kamar = "masuk" AND status_booking = "MRS"');

         $data['kamar42'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 42 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar43'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 43 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar44'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 44 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar45'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 45 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar46'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 46 AND status_kamar = "masuk" AND status_booking = "MRS"');

         $data['kamar47'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 47 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar48'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 48 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar49'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 49 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar50'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 50 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar51'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 51 AND status_kamar = "masuk" AND status_booking = "MRS"');
        
        
         //booking
         $data['bk178'] = DB::table('reservasi')->where('id_kamar', 178)->where('status_booking', 'Booking')->count();
         $data['bk179'] = DB::table('reservasi')->where('id_kamar', 179)->where('status_booking', 'Booking')->count();
         $data['bk180'] = DB::table('reservasi')->where('id_kamar', 180)->where('status_booking', 'Booking')->count();
         $data['bk181'] = DB::table('reservasi')->where('id_kamar', 181)->where('status_booking', 'Booking')->count();
         $data['bk182'] = DB::table('reservasi')->where('id_kamar', 182)->where('status_booking', 'Booking')->count();
         $data['bk183'] = DB::table('reservasi')->where('id_kamar', 183)->where('status_booking', 'Booking')->count();
         $data['bk184'] = DB::table('reservasi')->where('id_kamar', 184)->where('status_booking', 'Booking')->count();
         $data['bk185'] = DB::table('reservasi')->where('id_kamar', 185)->where('status_booking', 'Booking')->count();
         $data['bk186'] = DB::table('reservasi')->where('id_kamar', 186)->where('status_booking', 'Booking')->count();
         $data['bk187'] = DB::table('reservasi')->where('id_kamar', 187)->where('status_booking', 'Booking')->count();
         $data['bk188'] = DB::table('reservasi')->where('id_kamar', 188)->where('status_booking', 'Booking')->count();
         $data['bk189'] = DB::table('reservasi')->where('id_kamar', 189)->where('status_booking', 'Booking')->count();
         $data['bk190'] = DB::table('reservasi')->where('id_kamar', 190)->where('status_booking', 'Booking')->count();
         $data['bk191'] = DB::table('reservasi')->where('id_kamar', 191)->where('status_booking', 'Booking')->count();
         $data['bk192'] = DB::table('reservasi')->where('id_kamar', 192)->where('status_booking', 'Booking')->count();
         $data['bk193'] = DB::table('reservasi')->where('id_kamar', 193)->where('status_booking', 'Booking')->count();
         $data['bk194'] = DB::table('reservasi')->where('id_kamar', 194)->where('status_booking', 'Booking')->count();

        $data['bk27'] = DB::table('reservasi')->where('id_kamar', 27)->where('status_booking', 'Booking')->count();
        $data['bk28'] = DB::table('reservasi')->where('id_kamar', 28)->where('status_booking', 'Booking')->count();
        $data['bk29'] = DB::table('reservasi')->where('id_kamar', 29)->where('status_booking', 'Booking')->count();
        $data['bk30'] = DB::table('reservasi')->where('id_kamar', 30)->where('status_booking', 'Booking')->count();
        $data['bk31'] = DB::table('reservasi')->where('id_kamar', 31)->where('status_booking', 'Booking')->count();
        
        $data['bk32'] = DB::table('reservasi')->where('id_kamar', 32)->where('status_booking', 'Booking')->count();
        $data['bk33'] = DB::table('reservasi')->where('id_kamar', 33)->where('status_booking', 'Booking')->count();
        $data['bk34'] = DB::table('reservasi')->where('id_kamar', 34)->where('status_booking', 'Booking')->count();
        $data['bk35'] = DB::table('reservasi')->where('id_kamar', 35)->where('status_booking', 'Booking')->count();
        $data['bk36'] = DB::table('reservasi')->where('id_kamar', 36)->where('status_booking', 'Booking')->count();
        
        $data['bk37'] = DB::table('reservasi')->where('id_kamar', 37)->where('status_booking', 'Booking')->count();
        $data['bk38'] = DB::table('reservasi')->where('id_kamar', 38)->where('status_booking', 'Booking')->count();
        $data['bk39'] = DB::table('reservasi')->where('id_kamar', 39)->where('status_booking', 'Booking')->count();
        $data['bk40'] = DB::table('reservasi')->where('id_kamar', 40)->where('status_booking', 'Booking')->count();
        $data['bk41'] = DB::table('reservasi')->where('id_kamar', 41)->where('status_booking', 'Booking')->count();

        $data['bk42'] = DB::table('reservasi')->where('id_kamar', 42)->where('status_booking', 'Booking')->count();
        $data['bk43'] = DB::table('reservasi')->where('id_kamar', 43)->where('status_booking', 'Booking')->count();
        $data['bk44'] = DB::table('reservasi')->where('id_kamar', 44)->where('status_booking', 'Booking')->count();
        $data['bk45'] = DB::table('reservasi')->where('id_kamar', 45)->where('status_booking', 'Booking')->count();
        $data['bk46'] = DB::table('reservasi')->where('id_kamar', 46)->where('status_booking', 'Booking')->count();

        $data['bk47'] = DB::table('reservasi')->where('id_kamar', 47)->where('status_booking', 'Booking')->count();
        $data['bk48'] = DB::table('reservasi')->where('id_kamar', 48)->where('status_booking', 'Booking')->count();
        $data['bk49'] = DB::table('reservasi')->where('id_kamar', 49)->where('status_booking', 'Booking')->count();
        $data['bk50'] = DB::table('reservasi')->where('id_kamar', 50)->where('status_booking', 'Booking')->count();
        $data['bk51'] = DB::table('reservasi')->where('id_kamar', 51)->where('status_booking', 'Booking')->count();
 
        $data['pn178'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 178 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn179'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 179 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn180'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 180 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn181'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 181 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn182'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 182 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn183'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 183 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn184'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 184 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn185'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 185 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn186'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 186 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn187'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 187 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn188'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 188 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn189'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 189 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn190'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 190 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn191'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 191 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn192'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 192 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn193'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 193 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn194'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 194 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn27'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 27 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn28'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 28 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn29'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 29 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn30'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 30 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn31'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 31 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn32'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 32 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn33'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 33 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn34'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 34 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn35'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 35 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn36'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 36 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn37'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 37 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn38'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 38 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn39'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 39 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn40'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 40 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn41'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 41 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn42'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 42 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn43'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 43 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn44'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 44 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn45'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 45 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn46'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 46 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn47'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 47 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn48'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 48 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn49'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 49 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn50'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 50 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn51'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 51 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['isi178'] = DB::select('SELECT  (SELECT COUNT(*) 
        FROM reservasi WHERE id_kamar = 178 
        AND status_kamar = "masuk" 
        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 178 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                    kapasitas 
                    FROM kamar WHERE id_kamar = "178"');
        $data['isi179'] = DB::select('SELECT  (SELECT COUNT(*) 
        FROM reservasi WHERE id_kamar = 179 
        AND status_kamar = "masuk" 
        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 179 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                    kapasitas 
                    FROM kamar WHERE id_kamar = "179"');
        $data['isi180'] = DB::select('SELECT  (SELECT COUNT(*) 
        FROM reservasi WHERE id_kamar = 180 
        AND status_kamar = "masuk" 
        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 180 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                    kapasitas 
                    FROM kamar WHERE id_kamar = "180"');
        $data['isi181'] = DB::select('SELECT  (SELECT COUNT(*) 
        FROM reservasi WHERE id_kamar = 181 
        AND status_kamar = "masuk" 
        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 181 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                    kapasitas 
                    FROM kamar WHERE id_kamar = "181"');
        $data['isi182'] = DB::select('SELECT  (SELECT COUNT(*) 
        FROM reservasi WHERE id_kamar = 182 
        AND status_kamar = "masuk" 
        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 182 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                    kapasitas 
                    FROM kamar WHERE id_kamar = "182"');
        $data['isi183'] = DB::select('SELECT  (SELECT COUNT(*) 
        FROM reservasi WHERE id_kamar = 183 
        AND status_kamar = "masuk" 
        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 183 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                    kapasitas 
                    FROM kamar WHERE id_kamar = "183"');
        $data['isi184'] = DB::select('SELECT  (SELECT COUNT(*) 
        FROM reservasi WHERE id_kamar = 184 
        AND status_kamar = "masuk" 
        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 184 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                    kapasitas 
                    FROM kamar WHERE id_kamar = "184"');
        $data['isi185'] = DB::select('SELECT  (SELECT COUNT(*) 
        FROM reservasi WHERE id_kamar = 185 
        AND status_kamar = "masuk" 
        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 185 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                    kapasitas 
                    FROM kamar WHERE id_kamar = "185"');
        $data['isi186'] = DB::select('SELECT  (SELECT COUNT(*) 
        FROM reservasi WHERE id_kamar = 186 
        AND status_kamar = "masuk" 
        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 186 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                    kapasitas 
                    FROM kamar WHERE id_kamar = "186"');
        $data['isi187'] = DB::select('SELECT  (SELECT COUNT(*) 
        FROM reservasi WHERE id_kamar = 187 
        AND status_kamar = "masuk" 
        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 187 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                    kapasitas 
                    FROM kamar WHERE id_kamar = "187"');
        $data['isi188'] = DB::select('SELECT  (SELECT COUNT(*) 
        FROM reservasi WHERE id_kamar = 188 
        AND status_kamar = "masuk" 
        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 188 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                    kapasitas 
                    FROM kamar WHERE id_kamar = "188"');
        $data['isi189'] = DB::select('SELECT  (SELECT COUNT(*) 
        FROM reservasi WHERE id_kamar = 189 
        AND status_kamar = "masuk" 
        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 189 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                    kapasitas 
                    FROM kamar WHERE id_kamar = "189"');
        $data['isi190'] = DB::select('SELECT  (SELECT COUNT(*) 
        FROM reservasi WHERE id_kamar = 190 
        AND status_kamar = "masuk" 
        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 190 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                    kapasitas 
                    FROM kamar WHERE id_kamar = "190"');
        $data['isi191'] = DB::select('SELECT  (SELECT COUNT(*) 
        FROM reservasi WHERE id_kamar = 191 
        AND status_kamar = "masuk" 
        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 191 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                    kapasitas 
                    FROM kamar WHERE id_kamar = "191"');
        $data['isi192'] = DB::select('SELECT  (SELECT COUNT(*) 
        FROM reservasi WHERE id_kamar = 192 
        AND status_kamar = "masuk" 
        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 192 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                    kapasitas 
                    FROM kamar WHERE id_kamar = "192"');
        $data['isi193'] = DB::select('SELECT  (SELECT COUNT(*) 
        FROM reservasi WHERE id_kamar = 193 
        AND status_kamar = "masuk" 
        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 193 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                    kapasitas 
                    FROM kamar WHERE id_kamar = "193"');
        $data['isi194'] = DB::select('SELECT  (SELECT COUNT(*) 
        FROM reservasi WHERE id_kamar = 194 
        AND status_kamar = "masuk" 
        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 194 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                    kapasitas 
                    FROM kamar WHERE id_kamar = "194"');
        //isikamar
         $data['isi27'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 27 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 27 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "27"');
         $data['isi28'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 28 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 28 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "28"');
         $data['isi29'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 29 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 29 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "29"');
         $data['isi30'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 30 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 30 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "30"');
         $data['isi31'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 31 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 31 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "31"');
 
         $data['isi32'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 32 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 32 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "32"');
         $data['isi33'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 33 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 33 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "33"');
         $data['isi34'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 34 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 34 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "34"');
         $data['isi35'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 35 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 35 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "35"');
         $data['isi36'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 36 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 36 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "36"');
 
         $data['isi37'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 37 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 37 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "37"');
         $data['isi38'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 38 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 38 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "38"');
         $data['isi39'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 39 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 39 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "39"');
         $data['isi40'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 40 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 40 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "40"');
         $data['isi41'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 41 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 41 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "41"');
 
         $data['isi42'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 42 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 42 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "42"');
         $data['isi43'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 43 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 43 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "43"');
         $data['isi44'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 44 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 44 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "44"');
         $data['isi45'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 45
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 45 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "45"');
         $data['isi46'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 46 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 46 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "46"');

        $data['isi47'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 47 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 47 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "47"');
         $data['isi48'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 48 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 48 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "48"');
         $data['isi49'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 49 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 49 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "49"');
         $data['isi50'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 50
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 50 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "50"');
         $data['isi51'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 51 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 51 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "51"');

        return view('ruangan.paviliun2', $data);
    }
    public function paviliun3(){
        $data['jml_kamar'] = DB::select('SELECT COUNT(*) AS hasil FROM kamar WHERE group_kamar="PAVILIUN3"');
        $data['dirawat'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.keterangan = "terisi" and kamar.group_kamar = "PAVILIUN3"');
        $data['booking'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "Booking" and kamar.group_kamar = "PAVILIUN3"');
        $data['keluar'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "keluar" and kamar.group_kamar = "PAVILIUN3"');

        $data['png'] = DB::select('SELECT penanggungjawab, COUNT(penanggungjawab) AS hasil FROM reservasi WHERE status_kamar = "keluar" GROUP BY penanggungjawab');
        $data['pakai'] = DB::select('SELECT (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi") AS Terpakai, ((SELECT COUNT(*) FROM kamar) - (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi")) AS tidak_terpakai');

        $data['jml_ka'] = DB::select('SELECT COUNT(*) FROM kamar');
        //Update Booking Status
        DB::select('UPDATE reservasi SET keterangan = "Terisi", status_booking = "MRS", status_kamar = "masuk" WHERE DATE(tgl_masuk) = DATE(NOW()) AND status_booking = "Booking"');

         //cekkamar
         $data['kamar52'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 52 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar53'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 53 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar54'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 54 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar55'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 55 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar56'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 56 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar57'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 57 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar58'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 58 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar59'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 59 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar60'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 60 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar61'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 61 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar62'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 62 AND status_kamar = "masuk" AND status_booking = "MRS"');
         
         //booking
         $data['bk52'] = DB::table('reservasi')->where('id_kamar', 52)->where('status_booking', 'Booking')->count();
         $data['bk53'] = DB::table('reservasi')->where('id_kamar', 53)->where('status_booking', 'Booking')->count();
         $data['bk54'] = DB::table('reservasi')->where('id_kamar', 54)->where('status_booking', 'Booking')->count();
         $data['bk55'] = DB::table('reservasi')->where('id_kamar', 55)->where('status_booking', 'Booking')->count();
         $data['bk56'] = DB::table('reservasi')->where('id_kamar', 56)->where('status_booking', 'Booking')->count();

         $data['bk57'] = DB::table('reservasi')->where('id_kamar', 57)->where('status_booking', 'Booking')->count();
         $data['bk58'] = DB::table('reservasi')->where('id_kamar', 58)->where('status_booking', 'Booking')->count();
         $data['bk59'] = DB::table('reservasi')->where('id_kamar', 59)->where('status_booking', 'Booking')->count();
         $data['bk60'] = DB::table('reservasi')->where('id_kamar', 60)->where('status_booking', 'Booking')->count();
         $data['bk61'] = DB::table('reservasi')->where('id_kamar', 61)->where('status_booking', 'Booking')->count();

         $data['bk62'] = DB::table('reservasi')->where('id_kamar', 62)->where('status_booking', 'Booking')->count();
         
        //pn
        $data['pn52'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 52 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn53'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 53 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn54'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 54 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn55'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 55 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn56'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 56 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn57'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 57 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn58'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 58 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn59'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 59 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn60'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 60 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn61'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 61 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn62'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 62 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        
 
         //isikamar
         $data['isi52'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 52 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 52 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "52"');
         $data['isi53'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 53 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 53 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "53"');
         $data['isi54'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 54 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 54 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "54"');
         $data['isi55'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 55 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 55 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "55"');
         $data['isi56'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 56 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 56 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "56"');
 
         $data['isi57'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 57 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 57 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "57"');
         $data['isi58'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 58 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 58 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "58"');
         $data['isi59'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 59 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 59 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "59"');
         $data['isi60'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 60 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 60 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "60"');
 
         $data['isi61'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 61 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 61 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "61"');
        $data['isi62'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 62 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 62 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "62"');         

        return view('ruangan.paviliun3', $data);
    }
    public function lantai1pdp(){
        $data['jml_kamar'] = DB::select('SELECT COUNT(*) AS hasil FROM kamar WHERE group_kamar="LANTAI1PDP"');
        $data['dirawat'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.keterangan = "terisi" and kamar.group_kamar = "LANTAI1PDP"');
        $data['booking'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "Booking" and kamar.group_kamar = "LANTAI1PDP"');
        $data['keluar'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "keluar" and kamar.group_kamar = "LANTAI1PDP"');

        $data['png'] = DB::select('SELECT penanggungjawab, COUNT(penanggungjawab) AS hasil FROM reservasi WHERE status_kamar = "keluar" GROUP BY penanggungjawab');
        $data['pakai'] = DB::select('SELECT (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi") AS Terpakai, ((SELECT COUNT(*) FROM kamar) - (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi")) AS tidak_terpakai');

        $data['jml_ka'] = DB::select('SELECT COUNT(*) FROM kamar');
        //Update Booking Status
        DB::select('UPDATE reservasi SET keterangan = "Terisi", status_booking = "MRS", status_kamar = "masuk" WHERE DATE(tgl_masuk) = DATE(NOW()) AND status_booking = "Booking"');

         //cekkamar
         $data['kamar219'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 219 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar220'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 220 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar221'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 221 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar222'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 222 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar223'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 223 AND status_kamar = "masuk" AND status_booking = "MRS"');

         $data['kamar63'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 63 AND status_kamar = "masuk" AND status_booking = "MRS"');
        // $data['kamar64'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 64 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar65'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 65 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar66'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 66 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar67'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 67 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar68'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 68 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar69'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 69 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar70'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 70 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar71'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 71 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar72'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 72 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar73'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 73 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar74'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 74 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar75'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 75 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar76'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 76 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar77'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 77 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar78'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 78 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar79'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 79 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar80'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 80 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar81'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 81 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar82'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 82 AND status_kamar = "masuk" AND status_booking = "MRS"');

         $data['kamar83'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 83 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar84'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 84 AND status_kamar = "masuk" AND status_booking = "MRS"');
        
         //pn
        $data['pn219'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 219 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn220'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 220 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn221'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 221 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn222'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 222 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn223'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 223 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        
        $data['pn63'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 63 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        //$data['pn64'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 64 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn65'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 65 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn66'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 66 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn67'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 67 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn68'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 68 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn69'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 69 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn70'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 70 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn71'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 71 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn72'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 72 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn73'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 73 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn74'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 74 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn75'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 75 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn76'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 76 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn77'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 77 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn78'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 78 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn79'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 79 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn80'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 80 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn81'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 81 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn82'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 82 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn83'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 83 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn84'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 84 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        
 
        //booked
        $data['bk219'] = DB::table('reservasi')->where('id_kamar', 219)->where('status_booking', 'Booking')->count();
        $data['bk220'] = DB::table('reservasi')->where('id_kamar', 220)->where('status_booking', 'Booking')->count();
        $data['bk221'] = DB::table('reservasi')->where('id_kamar', 221)->where('status_booking', 'Booking')->count();
        $data['bk222'] = DB::table('reservasi')->where('id_kamar', 222)->where('status_booking', 'Booking')->count();
        $data['bk223'] = DB::table('reservasi')->where('id_kamar', 223)->where('status_booking', 'Booking')->count();

        $data['bk63'] = DB::table('reservasi')->where('id_kamar', 63)->where('status_booking', 'Booking')->count();
        //$data['bk64'] = DB::table('reservasi')->where('id_kamar', 64)->where('status_booking', 'Booking')->count();
        $data['bk65'] = DB::table('reservasi')->where('id_kamar', 65)->where('status_booking', 'Booking')->count();
        $data['bk66'] = DB::table('reservasi')->where('id_kamar', 66)->where('status_booking', 'Booking')->count();
        $data['bk67'] = DB::table('reservasi')->where('id_kamar', 67)->where('status_booking', 'Booking')->count();

        $data['bk68'] = DB::table('reservasi')->where('id_kamar', 68)->where('status_booking', 'Booking')->count();
        $data['bk69'] = DB::table('reservasi')->where('id_kamar', 69)->where('status_booking', 'Booking')->count();
        $data['bk70'] = DB::table('reservasi')->where('id_kamar', 70)->where('status_booking', 'Booking')->count();
        $data['bk71'] = DB::table('reservasi')->where('id_kamar', 71)->where('status_booking', 'Booking')->count();
        $data['bk72'] = DB::table('reservasi')->where('id_kamar', 72)->where('status_booking', 'Booking')->count();

        $data['bk73'] = DB::table('reservasi')->where('id_kamar', 73)->where('status_booking', 'Booking')->count();
        $data['bk74'] = DB::table('reservasi')->where('id_kamar', 74)->where('status_booking', 'Booking')->count();
        $data['bk75'] = DB::table('reservasi')->where('id_kamar', 75)->where('status_booking', 'Booking')->count();
        $data['bk76'] = DB::table('reservasi')->where('id_kamar', 76)->where('status_booking', 'Booking')->count();
        $data['bk77'] = DB::table('reservasi')->where('id_kamar', 77)->where('status_booking', 'Booking')->count();

        $data['bk78'] = DB::table('reservasi')->where('id_kamar', 78)->where('status_booking', 'Booking')->count();
        $data['bk79'] = DB::table('reservasi')->where('id_kamar', 79)->where('status_booking', 'Booking')->count();
        $data['bk80'] = DB::table('reservasi')->where('id_kamar', 80)->where('status_booking', 'Booking')->count();
        $data['bk81'] = DB::table('reservasi')->where('id_kamar', 81)->where('status_booking', 'Booking')->count();
        $data['bk82'] = DB::table('reservasi')->where('id_kamar', 82)->where('status_booking', 'Booking')->count();

        $data['bk83'] = DB::table('reservasi')->where('id_kamar', 83)->where('status_booking', 'Booking')->count();
        $data['bk84'] = DB::table('reservasi')->where('id_kamar', 84)->where('status_booking', 'Booking')->count();
        

         //isikamar
         $data['isi63'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 63 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 63 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "63"');
         $data['isi65'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 65 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 65 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "65"');
        $data['isi219'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 219 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 219 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "219"');
         $data['isi220'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 220 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 220 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "220"');
         $data['isi221'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 221 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 221 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "221"');
        $data['isi222'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 222 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 222 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "222"');
        $data['isi223'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 223 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 223 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "223"');
         $data['isi67'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 67 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 67 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "67"');
 
         $data['isi68'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 68 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 68 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "68"');
         $data['isi69'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 69 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 69 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "69"');
         $data['isi70'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 70 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 70 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "70"');
         $data['isi71'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 71 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 71 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "71"');
         $data['isi72'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 72 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 72 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "72"');
 
         $data['isi73'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 73 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 73 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "73"');
         $data['isi74'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 74 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 74 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "74"');
         $data['isi75'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 75 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 75 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "75"');
         $data['isi76'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 76 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 76 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "76"');
         $data['isi77'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 77 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 77 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "77"');
 
         $data['isi78'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 78 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 78 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "78"');
         $data['isi79'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 79 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 79 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "79"');
         $data['isi80'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 80 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 80 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "80"');
         $data['isi81'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 81
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 81 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "81"');
         $data['isi82'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 82 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 82 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "82"');
        
        $data['isi83'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 83
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 83 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "83"');
         $data['isi84'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 84 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 84 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "84"');
        return view('ruangan.lantaisatu', $data);
    }
    public function lantai2rba1(){
        $data['jml_kamar'] = DB::select('SELECT COUNT(*) AS hasil FROM kamar WHERE group_kamar="LANTAI2RBA1"');
        $data['dirawat'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.keterangan = "terisi" and kamar.group_kamar = "LANTAI2RBA1"');
        $data['booking'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "Booking" and kamar.group_kamar = "LANTAI2RBA1"');
        $data['keluar'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "keluar" and kamar.group_kamar = "LANTAI2RBA1"');

        $data['png'] = DB::select('SELECT penanggungjawab, COUNT(penanggungjawab) AS hasil FROM reservasi WHERE status_kamar = "keluar" GROUP BY penanggungjawab');
        $data['pakai'] = DB::select('SELECT (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi") AS Terpakai, ((SELECT COUNT(*) FROM kamar) - (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi")) AS tidak_terpakai');

        $data['jml_ka'] = DB::select('SELECT COUNT(*) FROM kamar');
        //Update Booking Status
        DB::select('UPDATE reservasi SET keterangan = "Terisi", status_booking = "MRS", status_kamar = "masuk" WHERE DATE(tgl_masuk) = DATE(NOW()) AND status_booking = "Booking"');        

         //cekkamar
         $data['kamar224'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 224 AND status_kamar = "masuk" AND status_booking = "MRS"');

         $data['kamar85'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 85 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar86'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 86 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar87'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 87 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar88'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 88 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar89'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 89 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar90'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 90 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar91'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 91 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar92'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 92 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar93'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 93 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar94'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 94 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar95'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 95 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar96'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 96 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar97'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 97 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar98'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 98 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar99'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 99 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar100'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 100 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar101'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 101 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar102'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 102 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar103'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 103 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar104'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 104 AND status_kamar = "masuk" AND status_booking = "MRS"');

         $data['kamar105'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 105 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar106'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 106 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar107'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 107 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar108'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 108 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar109'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 109 AND status_kamar = "masuk" AND status_booking = "MRS"');
 

         //booked
        $data['bk224'] = DB::table('reservasi')->where('id_kamar', 224)->where('status_booking', 'Booking')->count();

        $data['bk85'] = DB::table('reservasi')->where('id_kamar', 85)->where('status_booking', 'Booking')->count();
        $data['bk86'] = DB::table('reservasi')->where('id_kamar', 86)->where('status_booking', 'Booking')->count();
        $data['bk87'] = DB::table('reservasi')->where('id_kamar', 87)->where('status_booking', 'Booking')->count();
        $data['bk88'] = DB::table('reservasi')->where('id_kamar', 88)->where('status_booking', 'Booking')->count();
        $data['bk89'] = DB::table('reservasi')->where('id_kamar', 89)->where('status_booking', 'Booking')->count();

        $data['bk90'] = DB::table('reservasi')->where('id_kamar', 90)->where('status_booking', 'Booking')->count();
        $data['bk91'] = DB::table('reservasi')->where('id_kamar', 91)->where('status_booking', 'Booking')->count();
        $data['bk92'] = DB::table('reservasi')->where('id_kamar', 92)->where('status_booking', 'Booking')->count();
        $data['bk93'] = DB::table('reservasi')->where('id_kamar', 93)->where('status_booking', 'Booking')->count();
        $data['bk94'] = DB::table('reservasi')->where('id_kamar', 94)->where('status_booking', 'Booking')->count();

        $data['bk95'] = DB::table('reservasi')->where('id_kamar', 95)->where('status_booking', 'Booking')->count();
        $data['bk96'] = DB::table('reservasi')->where('id_kamar', 96)->where('status_booking', 'Booking')->count();
        $data['bk97'] = DB::table('reservasi')->where('id_kamar', 97)->where('status_booking', 'Booking')->count();
        $data['bk98'] = DB::table('reservasi')->where('id_kamar', 98)->where('status_booking', 'Booking')->count();
        $data['bk99'] = DB::table('reservasi')->where('id_kamar', 99)->where('status_booking', 'Booking')->count();

        $data['bk100'] = DB::table('reservasi')->where('id_kamar', 100)->where('status_booking', 'Booking')->count();
        $data['bk101'] = DB::table('reservasi')->where('id_kamar', 101)->where('status_booking', 'Booking')->count();
        $data['bk102'] = DB::table('reservasi')->where('id_kamar', 102)->where('status_booking', 'Booking')->count();
        $data['bk103'] = DB::table('reservasi')->where('id_kamar', 103)->where('status_booking', 'Booking')->count();
        $data['bk104'] = DB::table('reservasi')->where('id_kamar', 104)->where('status_booking', 'Booking')->count();

        $data['bk105'] = DB::table('reservasi')->where('id_kamar', 105)->where('status_booking', 'Booking')->count();
        $data['bk106'] = DB::table('reservasi')->where('id_kamar', 106)->where('status_booking', 'Booking')->count();
        $data['bk107'] = DB::table('reservasi')->where('id_kamar', 107)->where('status_booking', 'Booking')->count();
        $data['bk108'] = DB::table('reservasi')->where('id_kamar', 108)->where('status_booking', 'Booking')->count();
        $data['bk109'] = DB::table('reservasi')->where('id_kamar', 109)->where('status_booking', 'Booking')->count();

        //pn
        $data['pn224'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 224 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn85'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 85 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn86'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 86 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn87'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 87 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn88'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 88 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn89'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 89 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn90'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 90 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn91'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 91 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn92'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 92 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn93'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 93 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn94'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 94 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn95'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 95 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn96'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 96 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn97'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 97 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn98'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 98 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn99'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 99 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn100'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 100 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn101'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 101 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn102'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 102 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn103'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 103 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn104'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 104 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn105'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 105 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn106'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 106 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn107'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 107 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn108'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 108 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn109'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 109 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

         //isikamar
         $data['isi224'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 224 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 224
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "224"');
         $data['isi85'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 85 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 85 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "85"');
         $data['isi86'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 86 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 86 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "86"');
         $data['isi87'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 87 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 87 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "87"');
         $data['isi88'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 88 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 88 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "88"');
         $data['isi89'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 89 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 89 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "89"');
 
         $data['isi90'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 90 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 90 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "90"');
         $data['isi91'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 91 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 91 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "91"');
         $data['isi92'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 92 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 92 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "92"');
         $data['isi93'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 93 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 93 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "93"');
         $data['isi94'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 94 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 94 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "94"');
 
         $data['isi95'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 95 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 95 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "95"');
         $data['isi96'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 96 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 96 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "96"');
         $data['isi97'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 97 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 97 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "97"');
         $data['isi98'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 98 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 98 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "98"');
         $data['isi99'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 99 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 99 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "99"');
 
         $data['isi100'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 100 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 100 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "100"');
         $data['isi101'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 101 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 101 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "101"');
         $data['isi102'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 102 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 102 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "102"');
         $data['isi103'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 103
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 103 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "103"');
         $data['isi104'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 104 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 104 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "104"');

        $data['isi105'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 105 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 105 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "105"');
        $data['isi106'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 106 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 106 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "106"');
        $data['isi107'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 107 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 107 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "107"');
        $data['isi108'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 108
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 108 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "108"');
        $data['isi109'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 109 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 109 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "109"');
        return view('ruangan.lantaidua1', $data);
    }
    public function lantai2rba2(){
        $data['jml_kamar'] = DB::select('SELECT COUNT(*) AS hasil FROM kamar WHERE group_kamar="LANTAI2RBA2"');
        $data['dirawat'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.keterangan = "terisi" and kamar.group_kamar = "LANTAI2RBA2"');
        $data['booking'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "Booking" and kamar.group_kamar = "LANTAI2RBA2"');
        $data['keluar'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "keluar" and kamar.group_kamar = "LANTAI2RBA2"');

        $data['png'] = DB::select('SELECT penanggungjawab, COUNT(penanggungjawab) AS hasil FROM reservasi WHERE status_kamar = "keluar" GROUP BY penanggungjawab');
        $data['pakai'] = DB::select('SELECT (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi") AS Terpakai, ((SELECT COUNT(*) FROM kamar) - (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi")) AS tidak_terpakai');

        $data['jml_ka'] = DB::select('SELECT COUNT(*) FROM kamar');
        //Update Booking Status
        DB::select('UPDATE reservasi SET keterangan = "Terisi", status_booking = "MRS", status_kamar = "masuk" WHERE DATE(tgl_masuk) = DATE(NOW()) AND status_booking = "Booking"'); 

         //cekkamar
         $data['kamar110'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 110 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar111'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 111 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar112'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 112 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar113'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 113 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar114'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 114 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar115'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 115 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar116'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 116 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar117'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 117 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar118'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 118 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar119'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 119 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar120'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 120 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar121'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 121 AND status_kamar = "masuk" AND status_booking = "MRS"');
         
 
         //booked
         $data['bk110'] = DB::table('reservasi')->where('id_kamar', 110)->where('status_booking', 'Booking')->count();
        $data['bk111'] = DB::table('reservasi')->where('id_kamar', 111)->where('status_booking', 'Booking')->count();
        $data['bk112'] = DB::table('reservasi')->where('id_kamar', 112)->where('status_booking', 'Booking')->count();
        $data['bk113'] = DB::table('reservasi')->where('id_kamar', 113)->where('status_booking', 'Booking')->count();
        $data['bk114'] = DB::table('reservasi')->where('id_kamar', 114)->where('status_booking', 'Booking')->count();

        $data['bk115'] = DB::table('reservasi')->where('id_kamar', 115)->where('status_booking', 'Booking')->count();
        $data['bk116'] = DB::table('reservasi')->where('id_kamar', 116)->where('status_booking', 'Booking')->count();
        $data['bk117'] = DB::table('reservasi')->where('id_kamar', 117)->where('status_booking', 'Booking')->count();
        $data['bk118'] = DB::table('reservasi')->where('id_kamar', 118)->where('status_booking', 'Booking')->count();
        $data['bk119'] = DB::table('reservasi')->where('id_kamar', 119)->where('status_booking', 'Booking')->count();

        $data['bk120'] = DB::table('reservasi')->where('id_kamar', 120)->where('status_booking', 'Booking')->count();
        $data['bk121'] = DB::table('reservasi')->where('id_kamar', 121)->where('status_booking', 'Booking')->count();

        //pn
        $data['pn110'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 110 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn111'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 111 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn112'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 112 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn113'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 113 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn114'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 114 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn115'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 115 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn116'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 116 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn117'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 117 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn118'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 118 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn119'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 119 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn120'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 120 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn121'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 121 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        
        
 
         //isikamar
         $data['isi110'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 110 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 110 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "110"');
         $data['isi111'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 111 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 111 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "111"');
         $data['isi112'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 112 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 112 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "112"');
         $data['isi113'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 113 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 113 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "113"');
         $data['isi114'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 114 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 114 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "114"');
 
         $data['isi115'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 115 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 115 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "115"');
         $data['isi116'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 116 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 116 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "116"');
         $data['isi117'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 117 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 117 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "117"');
         $data['isi118'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 118 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 118 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "118"');
         $data['isi119'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 119 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 119 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "119"');
 
         $data['isi120'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 120 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 120 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "120"');
         $data['isi121'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 121 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 121 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "121"');
         
        return view('ruangan.lantaidua2', $data);
    }
    public function lantai3obg(){
        $data['jml_kamar'] = DB::select('SELECT COUNT(*) AS hasil FROM kamar WHERE group_kamar="LANTAI3OBG"');
        $data['dirawat'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.keterangan = "terisi" and kamar.group_kamar = "LANTAI3OBG"');
        $data['booking'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "Booking" and kamar.group_kamar = "LANTAI3OBG"');
        $data['keluar'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "keluar" and kamar.group_kamar = "LANTAI3OBG"');

        $data['png'] = DB::select('SELECT penanggungjawab, COUNT(penanggungjawab) AS hasil FROM reservasi WHERE status_kamar = "keluar" GROUP BY penanggungjawab');
        $data['pakai'] = DB::select('SELECT (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi") AS Terpakai, ((SELECT COUNT(*) FROM kamar) - (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi")) AS tidak_terpakai');

        $data['jml_ka'] = DB::select('SELECT COUNT(*) FROM kamar');
        //Update Booking Status
        DB::select('UPDATE reservasi SET keterangan = "Terisi", status_booking = "MRS", status_kamar = "masuk" WHERE DATE(tgl_masuk) = DATE(NOW()) AND status_booking = "Booking"');        

         //cekkamar
         $data['kamar122'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 122 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar123'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 123 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar124'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 124 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar125'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 125 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar126'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 126 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar127'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 127 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar128'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 128 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar129'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 129 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar130'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 130 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar131'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 131 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar132'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 132 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar133'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 133 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar134'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 134 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar135'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 135 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar136'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 136 AND status_kamar = "masuk" AND status_booking = "MRS"');

         $data['kamar225'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 225 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar226'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 226 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar227'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 227 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar228'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 228 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar229'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 229 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar230'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 230 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
 
         //booked
         $data['bk122'] = DB::table('reservasi')->where('id_kamar', 122)->where('status_booking', 'Booking')->count();
         $data['bk123'] = DB::table('reservasi')->where('id_kamar', 123)->where('status_booking', 'Booking')->count();
         $data['bk124'] = DB::table('reservasi')->where('id_kamar', 124)->where('status_booking', 'Booking')->count();
         $data['bk125'] = DB::table('reservasi')->where('id_kamar', 125)->where('status_booking', 'Booking')->count();
         $data['bk126'] = DB::table('reservasi')->where('id_kamar', 126)->where('status_booking', 'Booking')->count();

         $data['bk127'] = DB::table('reservasi')->where('id_kamar', 127)->where('status_booking', 'Booking')->count();
        $data['bk128'] = DB::table('reservasi')->where('id_kamar', 128)->where('status_booking', 'Booking')->count();
        $data['bk129'] = DB::table('reservasi')->where('id_kamar', 129)->where('status_booking', 'Booking')->count();
        $data['bk130'] = DB::table('reservasi')->where('id_kamar', 130)->where('status_booking', 'Booking')->count();
        $data['bk131'] = DB::table('reservasi')->where('id_kamar', 131)->where('status_booking', 'Booking')->count();

        $data['bk132'] = DB::table('reservasi')->where('id_kamar', 132)->where('status_booking', 'Booking')->count();
        $data['bk133'] = DB::table('reservasi')->where('id_kamar', 133)->where('status_booking', 'Booking')->count();
        $data['bk134'] = DB::table('reservasi')->where('id_kamar', 134)->where('status_booking', 'Booking')->count();
        $data['bk135'] = DB::table('reservasi')->where('id_kamar', 135)->where('status_booking', 'Booking')->count();
        $data['bk136'] = DB::table('reservasi')->where('id_kamar', 136)->where('status_booking', 'Booking')->count();

        $data['bk225'] = DB::table('reservasi')->where('id_kamar', 225)->where('status_booking', 'Booking')->count();
        $data['bk226'] = DB::table('reservasi')->where('id_kamar', 226)->where('status_booking', 'Booking')->count();
        $data['bk227'] = DB::table('reservasi')->where('id_kamar', 227)->where('status_booking', 'Booking')->count();
        $data['bk228'] = DB::table('reservasi')->where('id_kamar', 228)->where('status_booking', 'Booking')->count();
        $data['bk229'] = DB::table('reservasi')->where('id_kamar', 229)->where('status_booking', 'Booking')->count();
        $data['bk230'] = DB::table('reservasi')->where('id_kamar', 230)->where('status_booking', 'Booking')->count();

        //pn
        $data['pn122'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 122 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn123'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 123 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn124'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 124 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn125'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 125 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn126'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 126 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn127'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 127 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn128'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 128 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn129'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 129 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn130'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 130 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn131'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 131 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn132'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 132 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn133'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 133 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn134'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 134 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn135'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 135 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn136'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 136 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn225'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 225 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn226'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 226 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn227'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 227 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn228'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 228 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn229'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 229 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn230'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 230 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

         //isikamar
         $data['isi122'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 122 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 122 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "122"');
         $data['isi123'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 123
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 123 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "123"');
         $data['isi124'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 124 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 124 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "124"');
         $data['isi125'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 125 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 125 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "125"');
         $data['isi126'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 126 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 126 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "126"');
 
         $data['isi127'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 127 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 127 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "127"');
         $data['isi128'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 128 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 128 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "128"');
         $data['isi129'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 129 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 129 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "129"');
         $data['isi130'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 130 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 130 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "130"');
         $data['isi131'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 131 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 131 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "131"');
 
         $data['isi132'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 132 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 132 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "132"');
         $data['isi133'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 133 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 133 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "133"');
         $data['isi134'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 134 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 134 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "134"');
         $data['isi135'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 135 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 135 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "135"');
         $data['isi136'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 136 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 136 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "136"');


         $data['isi225'] = DB::select('SELECT  (SELECT COUNT(*) 
                            FROM reservasi WHERE id_kamar = 225 
                            AND status_kamar = "masuk" 
                            AND status_booking = "MRS") AS booked,
                    (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 225 
                    AND status_kamar != "keluar" 
                    AND status_booking = "Booking") AS bkg,  
                            kapasitas 
                            FROM kamar WHERE id_kamar = "225"');
        $data['isi226'] = DB::select('SELECT  (SELECT COUNT(*) 
                            FROM reservasi WHERE id_kamar = 226 
                            AND status_kamar = "masuk" 
                            AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 226 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                            kapasitas 
                            FROM kamar WHERE id_kamar = "226"');
        $data['isi227'] = DB::select('SELECT  (SELECT COUNT(*) 
                           FROM reservasi WHERE id_kamar = 227 
                           AND status_kamar = "masuk" 
                           AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 227 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                                    kapasitas 
                                    FROM kamar WHERE id_kamar = "227"');
         $data['isi228'] = DB::select('SELECT  (SELECT COUNT(*) 
                FROM reservasi WHERE id_kamar = 228 
                AND status_kamar = "masuk" 
                AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 228 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                        kapasitas 
                FROM kamar WHERE id_kamar = "228"');
        $data['isi229'] = DB::select('SELECT  (SELECT COUNT(*) 
                FROM reservasi WHERE id_kamar = 229 
                AND status_kamar = "masuk" 
                AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 229 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                        kapasitas 
                        FROM kamar WHERE id_kamar = "229"');
        $data['isi230'] = DB::select('SELECT  (SELECT COUNT(*) 
                FROM reservasi WHERE id_kamar = 230 
                AND status_kamar = "masuk" 
                AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 230 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                kapasitas 
                                FROM kamar WHERE id_kamar = "230"');         

        return view('ruangan.lantaitiga1', $data);
    }
    public function lantai3neo(){
        $data['jml_kamar'] = DB::select('SELECT COUNT(*) AS hasil FROM kamar WHERE group_kamar="LANTAI3NEO"');
        $data['dirawat'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.keterangan = "terisi" and kamar.group_kamar = "LANTAI3NEO"');
        $data['booking'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "Booking" and kamar.group_kamar = "LANTAI3NEO"');
        $data['keluar'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "keluar" and kamar.group_kamar = "LANTAI3NEO"');

        $data['png'] = DB::select('SELECT penanggungjawab, COUNT(penanggungjawab) AS hasil FROM reservasi WHERE status_kamar = "keluar" GROUP BY penanggungjawab');
        $data['pakai'] = DB::select('SELECT (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi") AS Terpakai, ((SELECT COUNT(*) FROM kamar) - (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi")) AS tidak_terpakai');

        $data['jml_ka'] = DB::select('SELECT COUNT(*) FROM kamar');
        //Update Booking Status
        DB::select('UPDATE reservasi SET keterangan = "Terisi", status_booking = "MRS", status_kamar = "masuk" WHERE DATE(tgl_masuk) = DATE(NOW()) AND status_booking = "Booking"');  

         //cekkamar
         $data['kamar231'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 231 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar232'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 232 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar233'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 233 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar234'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 234 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar235'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 235 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar236'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 236 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar237'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 237 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar238'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 238 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar239'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 239 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar240'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 240 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar241'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 241 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar242'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 242 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar243'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 243 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar244'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 244 AND status_kamar = "masuk" AND status_booking = "MRS"');

        //  $data['kamar137'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 137 AND status_kamar = "masuk" AND status_booking = "MRS"');
        //  $data['kamar138'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 138 AND status_kamar = "masuk" AND status_booking = "MRS"');
        //  $data['kamar139'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 139 AND status_kamar = "masuk" AND status_booking = "MRS"');
        //  $data['kamar140'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 140 AND status_kamar = "masuk" AND status_booking = "MRS"');
        //  $data['kamar141'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 141 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
        //  $data['kamar142'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 142 AND status_kamar = "masuk" AND status_booking = "MRS"');
        //  $data['kamar143'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 143 AND status_kamar = "masuk" AND status_booking = "MRS"');
        //  $data['kamar144'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 144 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar145'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 145 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar146'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 146 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
        //  $data['kamar147'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 147 AND status_kamar = "masuk" AND status_booking = "MRS"');
        //  $data['kamar148'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 148 AND status_kamar = "masuk" AND status_booking = "MRS"');
        //  $data['kamar149'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 149 AND status_kamar = "masuk" AND status_booking = "MRS"');
        //  $data['kamar150'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 150 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar151'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 151 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar152'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 152 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar153'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 153 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar175'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 175 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar176'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 176 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar177'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 177 AND status_kamar = "masuk" AND status_booking = "MRS"');
 

         //booked
        $data['bk231'] = DB::table('reservasi')->where('id_kamar', 231)->where('status_booking', 'Booking')->count();
        $data['bk232'] = DB::table('reservasi')->where('id_kamar', 232)->where('status_booking', 'Booking')->count();
        $data['bk233'] = DB::table('reservasi')->where('id_kamar', 233)->where('status_booking', 'Booking')->count();
        $data['bk234'] = DB::table('reservasi')->where('id_kamar', 234)->where('status_booking', 'Booking')->count();
        $data['bk235'] = DB::table('reservasi')->where('id_kamar', 235)->where('status_booking', 'Booking')->count();
        $data['bk236'] = DB::table('reservasi')->where('id_kamar', 236)->where('status_booking', 'Booking')->count();
        $data['bk237'] = DB::table('reservasi')->where('id_kamar', 237)->where('status_booking', 'Booking')->count();
        $data['bk238'] = DB::table('reservasi')->where('id_kamar', 238)->where('status_booking', 'Booking')->count();
        $data['bk239'] = DB::table('reservasi')->where('id_kamar', 239)->where('status_booking', 'Booking')->count();
        $data['bk240'] = DB::table('reservasi')->where('id_kamar', 240)->where('status_booking', 'Booking')->count();
        $data['bk241'] = DB::table('reservasi')->where('id_kamar', 241)->where('status_booking', 'Booking')->count();
        $data['bk242'] = DB::table('reservasi')->where('id_kamar', 242)->where('status_booking', 'Booking')->count();
        $data['bk243'] = DB::table('reservasi')->where('id_kamar', 243)->where('status_booking', 'Booking')->count();
        $data['bk244'] = DB::table('reservasi')->where('id_kamar', 244)->where('status_booking', 'Booking')->count();

        // $data['bk137'] = DB::table('reservasi')->where('id_kamar', 137)->where('status_booking', 'Booking')->count();
        // $data['bk138'] = DB::table('reservasi')->where('id_kamar', 138)->where('status_booking', 'Booking')->count();
        // $data['bk139'] = DB::table('reservasi')->where('id_kamar', 139)->where('status_booking', 'Booking')->count();
        // $data['bk140'] = DB::table('reservasi')->where('id_kamar', 140)->where('status_booking', 'Booking')->count();
        // $data['bk141'] = DB::table('reservasi')->where('id_kamar', 141)->where('status_booking', 'Booking')->count();

        // $data['bk142'] = DB::table('reservasi')->where('id_kamar', 142)->where('status_booking', 'Booking')->count();
        // $data['bk143'] = DB::table('reservasi')->where('id_kamar', 143)->where('status_booking', 'Booking')->count();
        // $data['bk144'] = DB::table('reservasi')->where('id_kamar', 144)->where('status_booking', 'Booking')->count();
        $data['bk145'] = DB::table('reservasi')->where('id_kamar', 145)->where('status_booking', 'Booking')->count();
        $data['bk146'] = DB::table('reservasi')->where('id_kamar', 146)->where('status_booking', 'Booking')->count();

        // $data['bk147'] = DB::table('reservasi')->where('id_kamar', 147)->where('status_booking', 'Booking')->count();
        // $data['bk148'] = DB::table('reservasi')->where('id_kamar', 148)->where('status_booking', 'Booking')->count();
        // $data['bk149'] = DB::table('reservasi')->where('id_kamar', 149)->where('status_booking', 'Booking')->count();
        // $data['bk150'] = DB::table('reservasi')->where('id_kamar', 150)->where('status_booking', 'Booking')->count();
        $data['bk151'] = DB::table('reservasi')->where('id_kamar', 151)->where('status_booking', 'Booking')->count();

        $data['bk152'] = DB::table('reservasi')->where('id_kamar', 152)->where('status_booking', 'Booking')->count();
        $data['bk153'] = DB::table('reservasi')->where('id_kamar', 153)->where('status_booking', 'Booking')->count();
        $data['bk175'] = DB::table('reservasi')->where('id_kamar', 175)->where('status_booking', 'Booking')->count();
        $data['bk176'] = DB::table('reservasi')->where('id_kamar', 176)->where('status_booking', 'Booking')->count();
        $data['bk177'] = DB::table('reservasi')->where('id_kamar', 177)->where('status_booking', 'Booking')->count();

        //pn
        $data['pn231'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 231 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn232'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 232 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn233'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 233 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn234'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 234 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn235'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 235 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn236'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 236 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn237'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 237 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn238'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 238 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn239'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 239 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn240'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 240 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn241'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 241 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn242'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 242 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn243'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 243 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn244'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 244 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        // $data['pn137'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 137 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn138'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 138 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn139'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 139 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn140'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 140 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn141'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 141 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        // $data['pn142'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 142 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn143'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 143 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn144'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 144 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn145'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 145 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn146'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 146 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        // $data['pn147'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 147 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn148'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 148 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn149'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 149 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        // $data['pn150'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 150 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn151'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 151 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn152'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 152 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn153'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 153 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn175'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 175 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn176'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 176 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn177'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 177 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
 
         //isikamar
         $data['isi231'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 231 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 231 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "231"');
         $data['isi232'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 232 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 232 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "232"');
         $data['isi233'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 233 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 233 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "233"');
         $data['isi234'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 234 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 234 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "234"');
         $data['isi235'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 235 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 235 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "235"');
        $data['isi236'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 236 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 236 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "236"');
 
        //  $data['isi142'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                  FROM reservasi WHERE id_kamar = 142 
        //                                  AND status_kamar = "masuk" 
        //                                  AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 142 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                  kapasitas 
        //                                  FROM kamar WHERE id_kamar = "142"');
        //  $data['isi143'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                  FROM reservasi WHERE id_kamar = 143 
        //                                  AND status_kamar = "masuk" 
        //                                  AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 143 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                  kapasitas 
        //                                  FROM kamar WHERE id_kamar = "143"');
        //  $data['isi144'] = DB::select('SELECT  (SELECT COUNT(*) 
        //                                  FROM reservasi WHERE id_kamar = 144 
        //                                  AND status_kamar = "masuk" 
        //                                  AND status_booking = "MRS") AS booked,
        //         (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 144 
        //         AND status_kamar != "keluar" 
        //         AND status_booking = "Booking") AS bkg,  
        //                                  kapasitas 
        //                                  FROM kamar WHERE id_kamar = "144"');
         $data['isi145'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 145 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 145 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "145"');
         $data['isi146'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 146 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 146 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "146"');
 
         $data['isi237'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 237 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 237 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "237"');
         $data['isi238'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 238 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 238 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "238"');
        $data['isi239'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 239 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 239 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "239"');
         $data['isi242'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 242 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 242 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "242"');
         $data['isi243'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 243 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 243 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "243"');
         $data['isi151'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 151 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 151 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "151"');
 
         $data['isi152'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 152 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 152 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "152"');
         $data['isi153'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 153 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 153 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "153"');
        $data['isi175'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 175 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 175 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "175"');
        $data['isi176'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 176 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 176 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "176"');
        $data['isi177'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 177 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 177 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "177"');
        $data['isi240'] = DB::select('SELECT  (SELECT COUNT(*) 
                                    FROM reservasi WHERE id_kamar = 240 
                                    AND status_kamar = "masuk" 
                                    AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 240 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                                    kapasitas 
                                    FROM kamar WHERE id_kamar = "240"');
        $data['isi241'] = DB::select('SELECT  (SELECT COUNT(*) 
                                    FROM reservasi WHERE id_kamar = 241 
                                    AND status_kamar = "masuk" 
                                    AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 241 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                                    kapasitas 
                                    FROM kamar WHERE id_kamar = "241"'); 
        $data['isi244'] = DB::select('SELECT  (SELECT COUNT(*) 
                                FROM reservasi WHERE id_kamar = 244 
                                AND status_kamar = "masuk" 
                                AND status_booking = "MRS") AS booked,
            (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 244 
            AND status_kamar != "keluar" 
            AND status_booking = "Booking") AS bkg,  
                                    kapasitas 
                                    FROM kamar WHERE id_kamar = "244"');                                                        
        return view('ruangan.lantaitiga2', $data);
    }
    public function lantai4pdw(){
        $data['jml_kamar'] = DB::select('SELECT COUNT(*) AS hasil FROM kamar WHERE group_kamar="LANTAI4PDW"');
        $data['dirawat'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.keterangan = "terisi" and kamar.group_kamar = "LANTAI4PDW"');
        $data['booking'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "Booking" and kamar.group_kamar = "LANTAI4PDW"');
        $data['keluar'] = DB::select('SELECT COUNT(*) AS hasil FROM reservasi inner join kamar on kamar.id_kamar = reservasi.id_kamar where reservasi.status_kamar = "keluar" and kamar.group_kamar = "LANTAI4PDW"');

        $data['png'] = DB::select('SELECT penanggungjawab, COUNT(penanggungjawab) AS hasil FROM reservasi WHERE status_kamar = "keluar" GROUP BY penanggungjawab');
        $data['pakai'] = DB::select('SELECT (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi") AS Terpakai, ((SELECT COUNT(*) FROM kamar) - (SELECT DISTINCT COUNT(id_kamar) FROM reservasi WHERE keterangan = "Terisi")) AS tidak_terpakai');

        $data['jml_ka'] = DB::select('SELECT COUNT(*) FROM kamar');
        //Update Booking Status
        DB::select('UPDATE reservasi SET keterangan = "Terisi", status_booking = "MRS", status_kamar = "masuk" WHERE DATE(tgl_masuk) = DATE(NOW()) AND status_booking = "Booking"');  

         //cekkamar
         $data['kamar154'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 154 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar155'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 155 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar156'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 156 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar157'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 157 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar158'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 158 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar159'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 159 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar160'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 160 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar161'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 161 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar162'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 162 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar163'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 163 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar164'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 164 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar165'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 165 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar166'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 166 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar167'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 167 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar168'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 168 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
         $data['kamar169'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 169 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar170'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 170 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar171'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 171 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar172'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 172 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar173'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 173 AND status_kamar = "masuk" AND status_booking = "MRS"');

         $data['kamar174'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 174 AND status_kamar = "masuk" AND status_booking = "MRS"');

         $data['kamar245'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 245 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar246'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 246 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar247'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 247 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar248'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 248 AND status_kamar = "masuk" AND status_booking = "MRS"');

         $data['kamar249'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 249 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar250'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 250 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar251'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 251 AND status_kamar = "masuk" AND status_booking = "MRS"');
         $data['kamar252'] = DB::select('SELECT count(*) AS hasil FROM reservasi WHERE id_kamar = 252 AND status_kamar = "masuk" AND status_booking = "MRS"');
 
        
        //booked
        $data['bk154'] = DB::table('reservasi')->where('id_kamar', 154)->where('status_booking', 'Booking')->count();
        $data['bk155'] = DB::table('reservasi')->where('id_kamar', 155)->where('status_booking', 'Booking')->count();
        $data['bk156'] = DB::table('reservasi')->where('id_kamar', 156)->where('status_booking', 'Booking')->count();
        $data['bk157'] = DB::table('reservasi')->where('id_kamar', 157)->where('status_booking', 'Booking')->count();
        $data['bk158'] = DB::table('reservasi')->where('id_kamar', 158)->where('status_booking', 'Booking')->count();

        $data['bk159'] = DB::table('reservasi')->where('id_kamar', 159)->where('status_booking', 'Booking')->count();
        $data['bk160'] = DB::table('reservasi')->where('id_kamar', 160)->where('status_booking', 'Booking')->count();
        $data['bk161'] = DB::table('reservasi')->where('id_kamar', 161)->where('status_booking', 'Booking')->count();
        $data['bk162'] = DB::table('reservasi')->where('id_kamar', 162)->where('status_booking', 'Booking')->count();
        $data['bk163'] = DB::table('reservasi')->where('id_kamar', 163)->where('status_booking', 'Booking')->count();

        $data['bk164'] = DB::table('reservasi')->where('id_kamar', 164)->where('status_booking', 'Booking')->count();
        $data['bk165'] = DB::table('reservasi')->where('id_kamar', 165)->where('status_booking', 'Booking')->count();
        $data['bk166'] = DB::table('reservasi')->where('id_kamar', 166)->where('status_booking', 'Booking')->count();
        $data['bk167'] = DB::table('reservasi')->where('id_kamar', 167)->where('status_booking', 'Booking')->count();
        $data['bk168'] = DB::table('reservasi')->where('id_kamar', 168)->where('status_booking', 'Booking')->count();

        $data['bk169'] = DB::table('reservasi')->where('id_kamar', 169)->where('status_booking', 'Booking')->count();
        $data['bk170'] = DB::table('reservasi')->where('id_kamar', 170)->where('status_booking', 'Booking')->count();
        $data['bk171'] = DB::table('reservasi')->where('id_kamar', 171)->where('status_booking', 'Booking')->count();
        $data['bk172'] = DB::table('reservasi')->where('id_kamar', 172)->where('status_booking', 'Booking')->count();
        $data['bk173'] = DB::table('reservasi')->where('id_kamar', 173)->where('status_booking', 'Booking')->count();

        $data['bk174'] = DB::table('reservasi')->where('id_kamar', 174)->where('status_booking', 'Booking')->count();

        $data['bk245'] = DB::table('reservasi')->where('id_kamar', 245)->where('status_booking', 'Booking')->count();
        $data['bk246'] = DB::table('reservasi')->where('id_kamar', 246)->where('status_booking', 'Booking')->count();
        $data['bk247'] = DB::table('reservasi')->where('id_kamar', 247)->where('status_booking', 'Booking')->count();
        $data['bk248'] = DB::table('reservasi')->where('id_kamar', 248)->where('status_booking', 'Booking')->count();

        $data['bk249'] = DB::table('reservasi')->where('id_kamar', 249)->where('status_booking', 'Booking')->count();
        $data['bk250'] = DB::table('reservasi')->where('id_kamar', 250)->where('status_booking', 'Booking')->count();
        $data['bk251'] = DB::table('reservasi')->where('id_kamar', 251)->where('status_booking', 'Booking')->count();
        $data['bk252'] = DB::table('reservasi')->where('id_kamar', 252)->where('status_booking', 'Booking')->count();

        
        //pn
        $data['pn154'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 154 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn155'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 155 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn156'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 156 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn157'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 157 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn158'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 158 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn159'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 159 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn160'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 160 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn161'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 161 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn162'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 162 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn163'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 163 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn164'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 164 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn165'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 165 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn166'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 166 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn167'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 167 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn168'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 168 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn169'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 169 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn170'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 170 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn171'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 171 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn172'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 172 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn173'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 173 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn174'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 174 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn245'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 245 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn246'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 246 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn247'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 247 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn248'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 248 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        $data['pn249'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 249 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn250'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 250 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn251'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 251 AND status_kamar != "keluar" AND status_kamar != "Batal" ');
        $data['pn252'] = DB::select('SELECT nama_pasien, DATE_FORMAT(tgl_masuk, "%d-%m-%Y") AS tgm, penanggungjawab FROM reservasi WHERE id_kamar = 252 AND status_kamar != "keluar" AND status_kamar != "Batal" ');

        

         //isikamar
         $data['isi154'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 154 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 154 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "154"');
         $data['isi155'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 155 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 155 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "155"');
         $data['isi156'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 156 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 156 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "156"');
         $data['isi157'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 157 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 157 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "157"');
         $data['isi158'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 158 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 158 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "158"');
 
         $data['isi159'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 159 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 159 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "159"');
         $data['isi160'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 160 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 160 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "160"');
         $data['isi161'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 161 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 161 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "161"');
         $data['isi162'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 162 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 162 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "162"');
         $data['isi163'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 163 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 163 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "163"');
 
         $data['isi164'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 164 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 164 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "164"');
         $data['isi165'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 165 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 165 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "165"');
         $data['isi166'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 166 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 166 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "166"');
         $data['isi167'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 167 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 167 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "167"');
         $data['isi168'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 168 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 168 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "168"');
 
         $data['isi169'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 169 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 169 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "169"');
         $data['isi170'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 170 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 170 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "170"');
         $data['isi171'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 171 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 171 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "171"');
         $data['isi172'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 172
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 172 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "172"');
         $data['isi173'] = DB::select('SELECT  (SELECT COUNT(*) 
                                         FROM reservasi WHERE id_kamar = 173 
                                         AND status_kamar = "masuk" 
                                         AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 173 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                         kapasitas 
                                         FROM kamar WHERE id_kamar = "173"');

        $data['isi174'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 174 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 174 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "174"');
        


        $data['isi245'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 245 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 245 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "245"');
        
        $data['isi247'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 247 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 247 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "247"');
        
        $data['isi248'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 248 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 248 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "248"');
        
        $data['isi249'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 249 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 249 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "249"');
        
        $data['isi250'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 250 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 250 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "250"');
        

        $data['isi251'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 251 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 251 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "251"');
        
        $data['isi252'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 252 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 252 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "252"');
        
        $data['isi246'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = 246 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked,
                (SELECT COUNT(*) FROM reservasi WHERE id_kamar = 246 
                AND status_kamar != "keluar" 
                AND status_booking = "Booking") AS bkg,  
                                        kapasitas 
                                        FROM kamar WHERE id_kamar = "246"');
        return view('ruangan.lantaiempat', $data);
    }

    public function BookingRuangan($id,$cate){
        $data['kamar'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = "'.$id.'" 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked, 
                                        kapasitas, nama_kamar, group_kamar, id_kamar
                                        FROM kamar WHERE id_kamar = "'.$id.'" ');
        $data['book'] = DB::select('SELECT id_reservasi, nama_pasien, penanggungjawab, DATE_FORMAT(tgl_masuk, "%d-%m-%Y %h:%m:%s") AS tgl_masuk, DATE_FORMAT(tgl_keluar, "%d-%m-%Y %h:%m:%s") AS tgl_keluar, no_kamar 
                                        FROM reservasi WHERE id_kamar = "'.$id.'" 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS"');
        $data['cate'] = $cate;
        return view('ruangan.booking', $data);
    }
    public function BookingMRS($id,$cate){
        $data['kamar'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = "'.$id.'" 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked, 
                                        kapasitas, nama_kamar, group_kamar, id_kamar
                                        FROM kamar WHERE id_kamar = "'.$id.'" ');

        $data['book'] = DB::select('SELECT * 
                                        FROM reservasi WHERE id_kamar = "'.$id.'" 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS"');
        $cek = DB::select('SELECT * 
                                        FROM reservasi WHERE id_kamar = "'.$id.'" 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS"');
        $cekk = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = "'.$id.'" 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked, 
                                        kapasitas, nama_kamar, group_kamar, id_kamar
                                        FROM kamar WHERE id_kamar = "'.$id.'" ');
        $arr = array();
        foreach($cekk as $ck){
            for ($i=1; $i <= $ck->kapasitas; $i++) { 
                    $cekdong = DB::select('SELECT count(*) as ct
                                    FROM reservasi WHERE id_kamar = "'.$id.'" 
                                    AND status_kamar = "masuk" 
                                    AND status_booking = "MRS" AND no_kamar = "'.$i.'"');
                    
                    foreach($cekdong as $cd){
                        array_push($arr, $cd->ct);   
                    }  
            }
        }
      
        $data['arr'] = $arr;
        $data['cate'] = $cate;



        return view('ruangan.booking_mrs', $data);
    }

    public function BookingKeluar($id,$cate){
        $data['kamar'] = DB::select('SELECT  (SELECT COUNT(*) 
                                        FROM reservasi WHERE id_kamar = "'.$id.'" 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS") AS booked, 
                                        kapasitas, nama_kamar, group_kamar, id_kamar
                                        FROM kamar WHERE id_kamar = "'.$id.'" ');
        $data['book'] = DB::select('SELECT id_reservasi, nama_pasien, penanggungjawab, DATE_FORMAT(tgl_masuk, "%d-%m-%Y %h:%m:%s") AS tgl_masuk, no_kamar 
                                        FROM reservasi WHERE id_kamar = "'.$id.'" 
                                        AND status_kamar = "masuk" 
                                        AND status_booking = "MRS"');
        $data['cate'] = $cate;
        return view('ruangan.booking_keluar', $data);
    }
}
?>