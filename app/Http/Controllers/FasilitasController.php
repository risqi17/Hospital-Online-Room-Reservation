<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class FasilitasController extends Controller
{
    public function Vvip(){
        return view('fasilitas-vvip');
    }
    public function Vip(){
        return view('fasilitas-vip');
    }
    public function Kelas1pav(){
        return view('fasilitas-kelas1pav');
    }
    public function Kelas1gp(){
        return view('fasilitas-kelas1gp');
    }

    public function Kelas2b(){
        return view('fasilitas-kelas2b');
    }
    public function Kelas2gp(){
        return view('fasilitas-kelas2gp');
    }
    public function Kelas2pav(){
        return view('fasilitas-kelas2pav');
    }
    public function Kelas3(){
        return view('fasilitas-kelas3');
    }
}