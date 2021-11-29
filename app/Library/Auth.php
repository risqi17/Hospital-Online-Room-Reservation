<?php

namespace App\Library;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class Auth
{
    public static function authenticate($username, $password)
    {
        $user = DB::table('user_admin')->where('username', $username)->first();

        if (!empty($user)) {
            if (password_verify($password, $user->password)) {
                // if ($user->level >= 2) {
                //     $village_admin = DB::table('village_admin')->where('id_user', $user->id)->first();
                //     $id_village    = $village_admin->id_village;
                // } else {
                //     $id_village = '';
                // }

                $data = [
                    'username'   => $user->username,
                    'email'      => $user->email,
                    'name'       => $user->name,
                    'level'      => $user->level
                ];

                session()->put('user', $data);

                return array(
                    'status' => 1,
                    'data' => $user
                );
            } else {
                return array(
                    'status' => 0,
                    'data' => []
                );
            }
        } else {
            return array(
                'status' => 0,
                'data' => []
            );
        }
    }
}
