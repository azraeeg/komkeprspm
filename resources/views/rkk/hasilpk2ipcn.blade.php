@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Hasil Penilaian Kewenangan Klinis PK 2 IPCN</h3>
            </div>
            <div class="card-body">
                
                <h5>Nama Penilai: {{ $penilai }}</h5>
                <h5>Jabatan Penilai: {{ $jabatan }}</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>DAFTAR KEWENANGAN KLINIS DIMINTA</th>
                            <th>Mandiri</th>
                            <th>Mandat</th>
                            <th>Delegasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hasilPenilaian as $penilaian)
                            <tr>
                                <td>{{ $penilaian->DKKD }}</td>
                                <td>{{ $penilaian->Mandiri }}</td>
                                <td>{{ $penilaian->Mandat }}</td>
                                <td>{{ $penilaian->Delegasi }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
