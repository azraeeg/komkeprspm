@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Hasil Penilaian Kewenangan Klinis PK 3 MEDIKAL BEDAH</h3>
            </div>
            <div class="card-body">
                <h5> Kewenangan klinik diberikan kepada {{ $nama }} sesuai jenjang karir, telah dilakukan kredensial terhadap kewenangan klinis
                    untuk memperoleh penugasan klinik. Penugasan klinik yang diberikan dalam rangka memberikan asuhan di RS PERMATA MEDIKA 
                    untuk memenuhi kebutuhan dasar pasien dan keluarga. 
                    Proses kredensial dilakukan oleh: {{ $nama }} dan dinilai oleh: {{ $penilai }} yang menjabat sebagai: {{ $jabatan }}
                </h5>
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
            <div class="card-footer">
            <a href="{{ route('admin.generatepdf19') }}" class="btn btn-info">Unduh PDF</a>
            </div>
        </div>
    </div>
@endsection
