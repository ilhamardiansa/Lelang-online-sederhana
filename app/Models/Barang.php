<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Barang extends Model
{
	protected $table = "barangs";
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'uuid';

    public static function kode()
    {
    	$kode = DB::table('barangs')->max('kode_barang');
    	$addNol = '';
    	$kode = str_replace("CAR", "", $kode);
    	$kode = (int) $kode + 1;
        $incrementKode = $kode;

    	if (strlen($kode) == 1) {
    		$addNol = "000";
    	} elseif (strlen($kode) == 2) {
    		$addNol = "00";
    	} elseif (strlen($kode == 3)) {
    		$addNol = "0";
    	}

    	$kodeBaru = "CAR".$addNol.$incrementKode;
    	return $kodeBaru;
    }

} 
?>
