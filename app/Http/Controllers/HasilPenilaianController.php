<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PK1;
use App\Models\bidan1;

class HasilPenilaianController extends Controller
{
    // ===============PK1==========================
    public function hasilpk1($nopeg)
    {
        $hasilPenilaian = PK1::where('Nopeg', $nopeg)->get();
        $penilai = PK1::where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = PK1::where('Nopeg', $nopeg)->value('Jabatan');

        return view('rkk.hasilpk1', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
    }

    // ================BIDAN1========================
    public function hasilbidan1($nopeg)
    {
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');

        return view('rkk.hasilbidan1', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
    }

    // ================BIDAN2========================
    public function hasilbidan2($nopeg)
    {
        $hasilPenilaian = DB::table('bidan2')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan2')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan2')->where('Nopeg', $nopeg)->value('Jabatan');

        return view('rkk.hasilbidan2', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
    }

    // ================BIDAN3========================
    public function hasilbidan3($nopeg)
    {
        $hasilPenilaian = DB::table('bidan3')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan3')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan3')->where('Nopeg', $nopeg)->value('Jabatan');

        return view('rkk.hasilbidan3', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
    }

    // ================PK2 ANESTESI========================
    public function hasilpk2anestesi($nopeg)
    {
        $hasilPenilaian = DB::table('pk2anestesi')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk2anestesi')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk2anestesi')->where('Nopeg', $nopeg)->value('Jabatan');

        return view('rkk.hasilpk2anestesi', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
    }
    // ================PK2 BEDAH========================
    public function hasilpk2bedah($nopeg)
    {
        $hasilPenilaian = DB::table('pk2bedah')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk2bedah')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk2bedah')->where('Nopeg', $nopeg)->value('Jabatan');

        return view('rkk.hasilpk2bedah', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
    }
    // ================PK2 HD========================
    public function hasilpk2hd($nopeg)
    {
        $hasilPenilaian = DB::table('pk2hd')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk2hd')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk2hd')->where('Nopeg', $nopeg)->value('Jabatan');

        return view('rkk.hasilpk2hd', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
    }
    // ================PK2 ICU========================
    public function hasilpk2icu($nopeg)
    {
        $hasilPenilaian = DB::table('pk2icu')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk2icu')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk2icu')->where('Nopeg', $nopeg)->value('Jabatan');

        return view('rkk.hasilpk2icu', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
    }
    // ================PK2 IGD========================
    public function hasilpk2igd($nopeg)
    {
        $hasilPenilaian = DB::table('pk2igd')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk2igd')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk2igd')->where('Nopeg', $nopeg)->value('Jabatan');

        return view('rkk.hasilpk2igd', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
    }
    // ================PK2 IPCN========================
    public function hasilpk2ipcn($nopeg)
    {
        $hasilPenilaian = DB::table('pk2ipcn')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk2ipcn')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk2ipcn')->where('Nopeg', $nopeg)->value('Jabatan');

        return view('rkk.hasilpk2ipcn', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
    }
    // ================PK2 MEDIKAL BEDAH========================
    public function hasilpk2medikalbedah($nopeg)
    {
        $hasilPenilaian = DB::table('pk2medikalbedah')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk2medikalbedah')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk2medikalbedah')->where('Nopeg', $nopeg)->value('Jabatan');

        return view('rkk.hasilpk2medikalbedah', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
    }
    // ================PK2 NEONATOLOGI========================
    public function hasilpk2neonatologi($nopeg)
    {
        $hasilPenilaian = DB::table('pk2neonatologi')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk2neonatologi')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk2neonatologi')->where('Nopeg', $nopeg)->value('Jabatan');

        return view('rkk.hasilpk2neonatologi', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
    }
    // ================PK3 ANESTESI========================
    public function hasilpk3anestesi($nopeg)
    {
        $hasilPenilaian = DB::table('pk3anestesi')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk3anestesi')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk3anestesi')->where('Nopeg', $nopeg)->value('Jabatan');

        return view('rkk.hasilpk3anestesi', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
    }
    // ================PK3 BEDAH========================
    public function hasilpk3bedah($nopeg)
    {
        $hasilPenilaian = DB::table('pk3bedah')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk3bedah')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk3bedah')->where('Nopeg', $nopeg)->value('Jabatan');

        return view('rkk.hasilpk3bedah', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
    }
     // ================PK3 HD========================
     public function hasilpk3hd($nopeg)
     {
         $hasilPenilaian = DB::table('pk3hd')->where('Nopeg', $nopeg)->get();
         $penilai = DB::table('pk3hd')->where('Nopeg', $nopeg)->value('Penilai');
         $jabatan = DB::table('pk3hd')->where('Nopeg', $nopeg)->value('Jabatan');
 
         return view('rkk.hasilpk3hd', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
     }
      // ================PK3 ICU========================
      public function hasilpk3icu($nopeg)
      {
          $hasilPenilaian = DB::table('pk3icu')->where('Nopeg', $nopeg)->get();
          $penilai = DB::table('pk3icu')->where('Nopeg', $nopeg)->value('Penilai');
          $jabatan = DB::table('pk3icu')->where('Nopeg', $nopeg)->value('Jabatan');
  
          return view('rkk.hasilpk3icu', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
      }
      // ================PK3 IGD========================
       public function hasilpk3igd($nopeg)
       {
           $hasilPenilaian = DB::table('pk3igd')->where('Nopeg', $nopeg)->get();
           $penilai = DB::table('pk3igd')->where('Nopeg', $nopeg)->value('Penilai');
           $jabatan = DB::table('pk3igd')->where('Nopeg', $nopeg)->value('Jabatan');
   
           return view('rkk.hasilpk3igd', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
       }
       // ================PK3 IPCN========================
       public function hasilpk3ipcn($nopeg)
       {
           $hasilPenilaian = DB::table('pk3ipcn')->where('Nopeg', $nopeg)->get();
           $penilai = DB::table('pk3ipcn')->where('Nopeg', $nopeg)->value('Penilai');
           $jabatan = DB::table('pk3ipcn')->where('Nopeg', $nopeg)->value('Jabatan');
   
           return view('rkk.hasilpk3ipcn', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
       }
       // ================PK3 MEDIKAL BEDAH========================
        public function hasilpk3medikalbedah($nopeg)
        {
            $hasilPenilaian = DB::table('pk3medikalbedah')->where('Nopeg', $nopeg)->get();
            $penilai = DB::table('pk3medikalbedah')->where('Nopeg', $nopeg)->value('Penilai');
            $jabatan = DB::table('pk3medikalbedah')->where('Nopeg', $nopeg)->value('Jabatan');

            return view('rkk.hasilpk3medikalbedah', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
        }
        // ================PK3 NEONATOLOGI========================
        public function hasilpk3neonatologi($nopeg)
        {
            $hasilPenilaian = DB::table('pk3neonatologi')->where('Nopeg', $nopeg)->get();
            $penilai = DB::table('pk3neonatologi')->where('Nopeg', $nopeg)->value('Penilai');
            $jabatan = DB::table('pk3neonatologi')->where('Nopeg', $nopeg)->value('Jabatan');

            return view('rkk.hasilpk3neonatologi', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan'));
        }
}
