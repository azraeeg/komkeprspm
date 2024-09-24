<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;

class FilePerawatController extends Controller
{
    //============================read===============================
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $query = DB::table('perawat')->when($search, function ($query) use ($search) {
            return $query->where('Nama', 'like', '%' . $search . '%');
        });

        $perawatData = $query->paginate(10);

        return view('fileperawat.read', compact('perawatData', 'search'));
    }

    public function show($id)
    {
        $data = User::find($id);

        return view('fileperawat.lihatprofil', compact('data'));
    }

    public function edit($id)
    {
        $perawatData = DB::table('perawat')->find($id);

        return view('fileperawat.edit', ['perawatData' => $perawatData]);
    }

    public function update(Request $request, $id)
    {
        
        // Lakukan validasi sesuai kebutuhan
        $request->validate([
            'Nopeg' => 'required',
            'Nama' => 'required',
            'Jabatan' => 'required',
            'UnitKrj' => 'required',
        ]);

        DB::table('perawat')->where('id', $id)->update([
            'Nopeg' => $request->Nopeg,
            'Nama' => $request->Nama,
            'Jabatan' => $request->Jabatan,
            'UnitKrj' => $request->UnitKrj,
            
        ]);
        return redirect()->route('admin.perawat.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        DB::table('perawat')->where('id', $id)->delete();

        return redirect()->route('admin.perawat.index')->with('success', 'Data perawat berhasil dihapus.');
    }
}
