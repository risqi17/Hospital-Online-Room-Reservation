<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

function checkUtama($id){
    $check =  DB::select('SELECT * FROM reservasi WHERE id_kamar ='.$id.' AND ((status_kamar = "masuk" AND status_booking = "MRS") OR (status_kamar = "Booking" AND status_booking = "Booking"))');
    if($check){
        foreach($check as $ch){
            if ($ch->utama > 0) {
                return true;
            }
            return false;
        }
    }
    return false;
}

?>