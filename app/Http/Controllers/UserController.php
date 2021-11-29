<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $data['user'] = DB::select('SELECT *  FROM user_admin');

        return view('ruangan.adduser', $data);
    }

    public function AddUser(Request $request){
        
            date_default_timezone_set('Asia/Bangkok');
            $nama = $request->input('nama');
            $email = $request->input('email');
            $username = $request->input('tppri-username');
            $password = $request->input('tppri-password');
            $level = $request->input('level');
    
            DB::table('user_admin')->insert([
                'name'          => $nama,
                'email'         => $email,
                'username'      => $username,
                'password'      => Hash::make($password),
                'level'         => $level,
                'status'         => "ac"
            ]);
        
        $data['user'] = DB::select('SELECT *  FROM user_admin');
        return redirect("/add-user");
    }

    public function DeleteUser($id){
        DB::table('user_admin')->where('user_id',$id)->delete();
        $data['user'] = DB::select('SELECT *  FROM user_admin');
        return redirect("/add-user");
    }

    public function UpdateUser(Request $request){
        date_default_timezone_set('Asia/Bangkok');
        $id = $request->input('id');
        $nama = $request->input('nama');
        $email = $request->input('email');
        $username = $request->input('tppri-username');
        $password = $request->input('tppri-password');
        $level = $request->input('level');

        DB::table('user_admin')->where('user_id',$id)->update([
            'name'          => $nama,
            'email'         => $email,
            'username'      => $username,
            'password'      => Hash::make($password),
            'level'         => $level,
            'status'         => "ac"
        ]);
    
        $data['user'] = DB::select('SELECT *  FROM user_admin');
        return redirect("/add-user");
        }
}