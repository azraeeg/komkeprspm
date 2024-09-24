<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
class RkkController extends Controller
{
    public function rkkData()
    {
        $rkkData = DB::table('rkk')->get();
        return view('rkk.create', ['rkkData' => $rkkData]);
    }

    public function hasil(Request $request)
    {
        $search = $request->input('search');
        
        $query = DB::table('perawat')->when($search, function ($query) use ($search) {
            return $query->where('Nama', 'like', '%' . $search . '%');
        });

        $perawatData = $query->paginate(10);

        return view('rkk.read', compact('perawatData', 'search'));
    }

}