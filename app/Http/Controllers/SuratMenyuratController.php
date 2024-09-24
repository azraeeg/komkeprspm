<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;

class SuratMenyuratController extends Controller
{
    // ====================read===================
    public function index(Request $request)
    {
        $search = $request->input('search', '');
        $query = DB::table('suratmenyurat')
            ->when($search, function ($query) use ($search) {
                return $query->where('Nama', 'like', '%' . $search . '%');
            });
        $dokData = $query->paginate(10);
        return view('suratmenyurat.read', compact('dokData', 'search'));
    }
    public function edit($id)
    {
        $dokData = DB::table('suratmenyurat')->find($id);

        return view('suratmenyurat.edit', ['dokData' => $dokData]);
    }
    public function update(Request $request, $id)
    {
        // Lakukan validasi sesuai kebutuhan
        $request->validate([
            'id' => 'required',
            'Nama' => 'required',
            'TglMulai' => 'required|date',
            'TglBerakhir' => 'required|date',
            'FileDok' => 'file|max:10000',
        ]);
        // Mendapatkan nama file lama sebelum diupdate
        $oldFileName = DB::table('suratmenyurat')->where('id', $id)->value('FileDok');
        // Proses file jika ada perubahan
        if ($request->hasFile('FileDok')) {
            // Lakukan pengelolaan file sesuai kebutuhan
            $file = $request->file('FileDok');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads', $fileName);
            // Hapus file lama jika ada
            if ($oldFileName) {
                Storage::delete('public/uploads/' . $oldFileName);
            }
        } else {
            $fileName = $oldFileName; // Jika tidak ada perubahan, tetap gunakan nama file yang lama
        }
        // Update data di database
        DB::table('suratmenyurat')->where('id', $id)->update([
            'id' => $request->id,
            'Nama' => $request->Nama,
            'TglMulai' => $request->TglMulai,
            'TglBerakhir' => $request->TglBerakhir,
            'FileDok' => $fileName,
        ]);
        return redirect()->route('admin.suratmenyurat.index')->with('success', 'Data berhasil diperbarui.');
    }
    public function destroy($id)
    {
        DB::table('suratmenyurat')->where('id', $id)->delete();

        return redirect()->route('admin.suratmenyurat.index')->with('success', 'Data berhasil dihapus.');
    }
    
    // ==========================================================

    public function showForm()
    {
        return view('suratmenyurat.create');
    }

    public function storeData(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'TglMulai' => 'required|date',
            'TglBerakhir' => 'required|date',
            'FileDok' => 'required|max:10000',
        ]);
    
        // Handle file upload for SPK
        $fileDok = $request->file('FileDok');
        $fileNameDok = time() . '_DOK_' . $fileDok->getClientOriginalName();
        $fileDok->storeAs('public/uploads', $fileNameDok);

    
        // Store data in the database (spk table)
        DB::table('suratmenyurat')->insert([
            'Nama' => $request->input('Nama'),
            'TglMulai' => $request->input('TglMulai'),
            'TglBerakhir' => $request->input('TglBerakhir'),
            'FileDok' => $fileNameDok,
        ]);
    
        return redirect()->route('admin.suratmenyurat.index')->with('success', 'Data berhasil disimpan.');
    }


}
