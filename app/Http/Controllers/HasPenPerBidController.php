<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HasPenPerBidController extends Controller
{
    // ================bidan1============================
    public function hasilbidan1()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.bidan1', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF1()
    {
        $bladeName = 'hasilpenilaian.bidan1';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }

    // ================bidan2============================
    public function hasilbidan2()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan2')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan2')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan2')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.bidan2', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF2()
    {
        $bladeName = 'hasilpenilaian.bidan2';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================bidan3============================
    public function hasilbidan3()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan3')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan3')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan3')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.bidan3', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF3()
    {
        $bladeName = 'hasilpenilaian.bidan3';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================PK1============================
    public function hasilpk1()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('pk1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk1')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.pk1', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF4()
    {
        $bladeName = 'hasilpenilaian.pk1';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================PK2 ANESTESI============================
    public function hasilpk2anestesi()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('pk2anestesi')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk2anestesi')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk2anestesi')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.pk2anestesi', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF5()
    {
        $bladeName = 'hasilpenilaian.pk2anestesi';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================PK2 BEDAH============================
    public function hasilpk2bedah()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('pk2bedah')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk2bedah')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk2bedah')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.pk2bedah', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF6()
    {
        $bladeName = 'hasilpenilaian.pk2bedah';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================PK2 HEMODIALISA============================
    public function hasilpk2hd()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('pk2hd')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk2hd')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk2hd')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.pk2hd', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF7()
    {
        $bladeName = 'hasilpenilaian.pk2hd';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================PK2 ICU============================
    public function hasilpk2icu()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('pk2icu')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk2icu')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk2icu')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.pk2icu', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF8()
    {
        $bladeName = 'hasilpenilaian.pk2icu';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================PK2 igd============================
    public function hasilpk2igd()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('pk2igd')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk2igd')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk2igd')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.pk2igd', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF9()
    {
        $bladeName = 'hasilpenilaian.pk2igd';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================PK2 ipcn============================
    public function hasilpk2ipcn()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('pk2ipcn')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk2ipcn')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk2ipcn')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.pk2ipcn', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF10()
    {
        $bladeName = 'hasilpenilaian.pk2ipcn';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================PK2 medikalbedah============================
    public function hasilpk2medikalbedah()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('pk2medikalbedah')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk2medikalbedah')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk2medikalbedah')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.pk2medikalbedah', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF11()
    {
        $bladeName = 'hasilpenilaian.pk2medikalbedah';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================PK2 neonatologi============================
    public function hasilpk2neonatologi()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('pk2neonatologi')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk2neonatologi')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk2neonatologi')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.pk2neonatologi', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF12()
    {
        $bladeName = 'hasilpenilaian.pk2neonatologi';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================PK3 anestesi============================
    public function hasilpk3anestesi()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('pk3anestesi')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk3anestesi')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk3anestesi')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.pk3anestesi', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF13()
    {
        $bladeName = 'hasilpenilaian.pk3anestesi';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================PK3 bedah============================
    public function hasilpk3bedah()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('pk3bedah')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk3bedah')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk3bedah')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.pk3bedah', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF14()
    {
        $bladeName = 'hasilpenilaian.pk3bedah';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================PK3 hd============================
    public function hasilpk3hd()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('pk3hd')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk3hd')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk3hd')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.pk3hd', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF15()
    {
        $bladeName = 'hasilpenilaian.pk3hd';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================PK3 icu============================
    public function hasilpk3icu()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('pk3icu')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk3icu')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk3icu')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.pk3icu', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF16()
    {
        $bladeName = 'hasilpenilaian.pk3icu';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================PK3 igd============================
    public function hasilpk3igd()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('pk3igd')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk3igd')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk3igd')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.pk3igd', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF17()
    {
        $bladeName = 'hasilpenilaian.pk3igd';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================PK3 ipcn============================
    public function hasilpk3ipcn()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('pk3ipcn')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk3ipcn')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk3ipcn')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.pk3ipcn', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF18()
    {
        $bladeName = 'hasilpenilaian.pk3ipcn';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================PK3 medikalbedah============================
    public function hasilpk3medikalbedah()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('pk3medikalbedah')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk3medikalbedah')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk3medikalbedah')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nopeg);
    
        return view('hasilpenilaian.pk3medikalbedah', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF19()
    {
        $bladeName = 'hasilpenilaian.pk3medikalbedah';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    // ================PK3 neonatologi============================
    public function hasilpk3neonatologi()
    {
        $user = Auth::user(); 
        $nopeg = $user->Nopeg; 
        $nama = $user->Nama; 
        $hasilPenilaian = DB::table('pk3neonatologi')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('pk3neonatologi')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('pk3neonatologi')->where('Nopeg', $nopeg)->value('Jabatan');
        // dd($nama);
        return view('hasilpenilaian.pk3neonatologi', compact('hasilPenilaian', 'nopeg', 'penilai', 'jabatan', 'nama'));
    }
    public function generatePDF20()
    {
        $bladeName = 'hasilpenilaian.pk3neonatologi';
        $user = auth()->user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('bidan1')->where('Nopeg', $nopeg)->get();
        $penilai = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Penilai');
        $jabatan = DB::table('bidan1')->where('Nopeg', $nopeg)->value('Jabatan');
        // Render konten HTML dari blade
        $html = view($bladeName, compact('nama', 'penilai', 'jabatan', 'hasilPenilaian'))->renderSections()['content'];

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Konfigurasi opsi Dompdf (opsional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Mengirimkan file PDF ke browser untuk diunduh
        return $dompdf->stream("hasil_penilaian.pdf");
    }
    
}
