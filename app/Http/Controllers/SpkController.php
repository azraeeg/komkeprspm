<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
use App\Models\spk;
use App\Models\User;



class SpkController extends Controller
{
    // ===================create spk======================
    public function showForm()
    {
        return view('spk.create');
    }

    public function storeData(Request $request)
    {
        $request->validate([
            'Nopeg' => 'required|unique:spk,Nopeg', // Menambahkan validasi unique
            'Nama' => 'required',
            'AwalMskKrj' => 'required|date',
            'JenKar' => 'required',
            'WewenangKlinis' => 'required',
            'Pendidikan' => 'required',
            'TglBerakhir' => 'required|date',
            'FileSPK' => 'required|file|mimes:pdf|max:10000',
            'FileRKK' => 'required|file|mimes:pdf|max:10000',
        ], [
            'Nopeg.unique' => 'Gagal input, Nopeg sudah terdaftar.',
        ]);
    
        // Handle file upload for SPK
        $fileSPK = $request->file('FileSPK');
        $fileNameSPK = time() . '_SPK_' . $fileSPK->getClientOriginalName();
        $fileSPK->storeAs('public/uploads', $fileNameSPK);
    
        // Handle file upload for RKK
        $fileRKK = $request->file('FileRKK');
        $fileNameRKK = time() . '_RKK_' . $fileRKK->getClientOriginalName();
        $fileRKK->storeAs('public/uploads', $fileNameRKK);
    
        // Store data in the database (spk table)
        DB::table('spk')->insert([
            'Nopeg' => $request->input('Nopeg'),
            'Nama' => $request->input('Nama'),
            'AwalMskKrj' => $request->input('AwalMskKrj'),
            'JenKar' => $request->input('JenKar'),
            'WewenangKlinis' => $request->input('WewenangKlinis'),
            'Pendidikan' => $request->input('Pendidikan'),
            'TglBerakhir' => $request->input('TglBerakhir'),
            'FileSPK' => $fileNameSPK,
            'FileRKK' => $fileNameRKK,
        ]);
    
        return redirect()->route('admin.spk.index')->with('success', 'Data berhasil disimpan.');
    }

    // ==========================================================


    // ===================read spk===============================
    

    public function index(Request $request)
    {
        $search = $request->input('search', '');

        $query = spk::with('perawat')
            ->when($search, function ($query) use ($search) {
                return $query->where('Nama', 'like', '%' . $search . '%');
            });

        $spkData = $query->paginate(10);

        return view('spk.read', compact('spkData', 'search'));
    }

    public function edit($id)
    {
        $spkData = DB::table('spk')->find($id);

        return view('spk.edit', ['spkData' => $spkData]);
    }

    public function update(Request $request, $id)
    {
        
        // Lakukan validasi sesuai kebutuhan
        $request->validate([
            'Nopeg' => 'required',
            'Nama' => 'required',
            'AwalMskKrj' => 'required|date',
            'JenKar' => 'required',
            'WewenangKlinis' => 'required',
            'Pendidikan' => 'required',
            'TglBerakhir' => 'required|date',
            'FileSPK' => 'file|mimes:pdf|max:10000',
            'FileRKK' => 'file|mimes:pdf|max:10000', // Sesuaikan dengan kebutuhan
        ]);

        

        // Mendapatkan nama file lama sebelum diupdate
        $oldFileName = DB::table('spk')->where('id', $id)->value('FileSPK');

        // Proses file jika ada perubahan
        if ($request->hasFile('FileSPK')) {
            // Lakukan pengelolaan file sesuai kebutuhan
            $file = $request->file('FileSPK');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads', $fileName);

            // Hapus file lama jika ada
            if ($oldFileName) {
                Storage::delete('public/uploads/' . $oldFileName);
            }
        } else {
            $fileName = $oldFileName; // Jika tidak ada perubahan, tetap gunakan nama file yang lama
        }

        // Mendapatkan nama file lama untuk FileRKK sebelum diupdate
        $oldFileRKKName = DB::table('spk')->where('id', $id)->value('FileRKK');

        // Proses file FileRKK jika ada perubahan
        if ($request->hasFile('FileRKK')) {
            // Lakukan pengelolaan file FileRKK sesuai kebutuhan
            $fileRKK = $request->file('FileRKK');
            $fileRKKName = time() . '_' . $fileRKK->getClientOriginalName();
            $fileRKK->storeAs('public/uploads', $fileRKKName);

            // Hapus file lama FileRKK jika ada
            if ($oldFileRKKName) {
                Storage::delete('public/uploads/' . $oldFileRKKName);
            }
        } else {
            $fileRKKName = $oldFileRKKName; // Jika tidak ada perubahan, tetap gunakan nama file yang lama
        }


        // Update data di database
        DB::table('spk')->where('id', $id)->update([
            'Nopeg' => $request->Nopeg,
            'Nama' => $request->Nama,
            'AwalMskKrj' => $request->AwalMskKrj,
            'JenKar' => $request->JenKar,
            'WewenangKlinis' => $request->WewenangKlinis,
            'Pendidikan' => $request->Pendidikan,
            'TglBerakhir' => $request->TglBerakhir,
            'FileSPK' => $fileName,
            'FileRKK' => $fileRKKName,
        ]);
        

        return redirect()->route('admin.spk.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        DB::table('spk')->where('id', $id)->delete();

        return redirect()->route('admin.spk.index')->with('success', 'Data SPK berhasil dihapus.');
    }

    // ============================================================================

    



}
