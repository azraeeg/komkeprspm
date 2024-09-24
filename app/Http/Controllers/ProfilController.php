<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Sertifikat;

class ProfilController extends Controller
{
    // ===================MY PROFIL=============
    public function profil(){
        // if(auth()->user()->can('view_dashboard')){}
        // dd(auth()->user()->getRoleNames());
    
        return view('profil.myprofil');
    }

    // ===================SERTIFIKAT============
    public function sertif()
    {
        return view('profil.sertifikat');
    }


    public function storesertif(Request $request)
    {
        $request->validate([
            'FileSertif' => 'required|file|mimes:pdf|max:10000', // Sesuaikan dengan jenis file dan ukuran yang diinginkan
        ]);

        $nopeg = auth()->user()->Nopeg; // Ambil Nopeg dari pengguna yang sedang login

        // Handle file upload
        $file = $request->file('FileSertif');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/sertifikat', $fileName);

        // Simpan data sertifikat ke dalam tabel sertifikat
        DB::table('sertifikat')->insert([
            'Nopeg' => $nopeg,
            'FileSertif' => $fileName,
        ]);
        
        return redirect()->route('admin.profil.view')->with('success', 'File sertifikat berhasil diupload.');
    }

    // ===================UPLOAD===============
    public function upload1(){
        return view('profil.upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'ktp' => 'file|mimes:pdf|max:10000',
            'kk' => 'file|mimes:pdf|max:10000',
            'ijazah' => 'file|mimes:pdf|max:10000',
            'PPNI' => 'file|mimes:pdf|max:10000',
            'SIP' => 'file|mimes:pdf|max:10000',
            'STR' => 'file|mimes:pdf|max:10000',
            'NPWP' => 'file|mimes:pdf|max:10000',
        ]);

        // Get the Nopeg of the currently logged-in user
        $nopeg = Auth::user()->Nopeg;

        // Simpan file KTP
        $ktpFileName = $this->storeFile($request->file('ktp'), 'ktp', 'KTP', $nopeg);

        // Simpan file KK
        $kkFileName = $this->storeFile($request->file('kk'), 'kk', 'KK', $nopeg);

        // Simpan file IJAZAH
        $ijazahFileName = $this->storeFile($request->file('ijazah'), 'ijazah', 'IJAZAH', $nopeg);
        $PPNIFileName = $this->storeFile($request->file('PPNI'), 'PPNI', 'PPNI', $nopeg);
        $SIPFileName = $this->storeFile($request->file('SIP'), 'SIP', 'SIP', $nopeg);
        $STRFileName = $this->storeFile($request->file('STR'), 'STR', 'STR', $nopeg);
        $NPWPFileName = $this->storeFile($request->file('NPWP'), 'NPWP', 'NPWP', $nopeg);

        return redirect()->route('admin.profil.view')->with('success', 'File berhasil diupload');
    }

    private function storeFile($file, $fieldName, $fileNamePrefix, $nopeg)
    {
        // Cek apakah file diunggah
        if ($file) {
            // Hapus file lama jika ada
            $oldFileName = DB::table('perawat')->where('Nopeg', $nopeg)->value($fieldName);
            if ($oldFileName) {
                Storage::delete('public/uploads/' . $oldFileName);
            }

            // Simpan file baru
            $fileName = $fileNamePrefix . '_' . time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads', $fileName);

            // Update nama file di tabel untuk user tertentu
            DB::table('perawat')->where('Nopeg', $nopeg)->update([$fieldName => $fileName]);

            return $fileName;
        } else {
            return null;
        }
    }

    


    // ========================EDIT PROFIL==================
    public function edit()
    {
        return view('profil.editprofil');
    }


    public function update(Request $request)
    {
        $user = Auth::user();

        // Validasi input sesuai kebutuhan
        $request->validate([
            'Foto'                  => 'image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);
        // $mime = $request->file('Foto')->getMimeType();
        // dd($mime);

        // Simpan foto profil jika diunggah
        if ($request->hasFile('Foto')) {
            $foto = $request->file('Foto');
            $namaFoto = time() . '_' . $foto->getClientOriginalName();

            // Simpan file ke direktori yang diinginkan
            $foto->storeAs('public/foto_profil', $namaFoto);

            // Hapus foto lama jika ada
            if ($user->Foto) {
                Storage::delete('public/foto_profil/' . $user->Foto);
            }

            // Gunakan Query Builder untuk mengupdate data
            DB::table('perawat')
                ->where('id', $user->id)
                ->update([
                    'Foto'              => $namaFoto, // Simpan nama file foto ke dalam kolom 'Foto'
                ]);
        }

        return redirect()->route('admin.profil.view')->with('success', 'Foto profil berhasil diperbarui.');
    }

    public function update2(Request $request)
    {
        $user = Auth::user();

        // Validasi input sesuai kebutuhan
        $request->validate([
            
            'Alamat'                => 'required',
            'NoHP'                  => 'required',
            'Email'                 => 'required|email',
            'Agama'                 => 'required',
            'StatusPerkawinan'      => 'required',
        ]);
            
            DB::table('perawat')
                ->where('id', $user->id)
                ->update([
                    'Alamat'            => $request->Alamat,
                    'NoHP'              => $request->NoHP,
                    'Email'             => $request->Email,
                    'StatusPerkawinan'  => $request->StatusPerkawinan,
                    'Agama'             => $request->Agama,
                ]);
        

        return redirect()->route('admin.profil.view')->with('success', 'Profil berhasil diperbarui.');
    }

    // =========================ganti password====================
    public function gantiPasswordForm()
    {
        return view('profil.gantipassword');
    }

    public function gantiPassword(Request $request)
    {
        $request->validate([
            'password_lama' => 'required',
            'password_baru' => 'required|min:3|confirmed',
        ]);

        $user = Auth::user();

        // Validasi password lama
        if ($user->password === $request->input('password_lama')) {
            // Update password baru
            DB::table('perawat')
                ->where('id', $user->id)
                ->update([
                    'password' => $request->input('password_baru'),
                ]);

            return redirect()->route('admin.profil.view')->with('success', 'Password berhasil diubah');
        } else {
            return redirect()->back()->with('error', 'Password lama tidak sesuai');
        }
    }
    

}
