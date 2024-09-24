@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Data SPK</h3>
        </div>
        
        <div class="mb-3 mt-3">
            <form action="{{ route('admin.spk.index') }}" method="GET" class="mx-3">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Cari berdasarkan nama" value="{{ $search ?? '' }}">
                    <button type="submit" class="btn btn-info">Cari</button>
                </div>
            </form>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nopeg</th>
                    <th>Nama</th>
                    <th>Masa Kerja</th>
                    <th>Jenjang Karir</th>
                    <th>Kewenangan Klinis</th>
                    <th>Pendidikan</th>
                    <th>Tanggal Berakhir</th>
                    <th>File SPK</th>
                    <th>File RKK</th>
                    @can('view_hrd')
                    <th>Aksi</th>
                    @endcan
                </tr>
            </thead>
            <tbody>

            @foreach($spkData as $data)
                @php
                    $tglBerakhir = \Carbon\Carbon::parse($data->TglBerakhir);
                    $hSebulan = now()->addMonth()->diffInDays($tglBerakhir, false);
                    $bgClass = ($hSebulan <= 0) ? 'bg-danger' : '';
                    $masaKerja = ($data->AwalMskKrj);
                @endphp
                <tr class="{{ $bgClass }}">
                    <td>{{ $data->Nopeg }}</td>
                    <td>{{ $data->Nama }}</td>
                    <td>
                        @if ($data->AwalMskKrj)
                            @php
                                $tanggalAwal = \Carbon\Carbon::parse ($data->AwalMskKrj);
                                $masaKerja = $tanggalAwal->diff(now());
                                $tahun = $masaKerja->y;
                                $bulan = $masaKerja->m;
                                $hari = $masaKerja->d;
                            @endphp
                            {{ $tahun > 0 ? $tahun . ' tahun ' : '' }}
                            {{ $bulan > 0 ? $bulan . ' bulan ' : '' }}
                            {{ $hari > 0 ? $hari . ' hari' : '' }}
                        @else
                            Tidak ada data masa kerja
                        @endif
                    </td>
                    <td>{{ $data->JenKar }}</td>
                    <td>{{ $data->WewenangKlinis }}</td>
                    <td>{{ $data->Pendidikan }}</td>
                    <td>{{ $data->TglBerakhir }}</td>
                    <td>
                        @if ($data->FileSPK)
                            @if (pathinfo($data->FileSPK, PATHINFO_EXTENSION) == 'pdf')
                                <a href="{{ asset('storage/uploads/' . $data->FileSPK) }}" target="_blank">View PDF</a>
                            @else
                                File Format Not Supported
                            @endif
                        @else
                            File Not Available
                        @endif
                    </td>
                    <td>
                        @if ($data->FileRKK)
                            @if (pathinfo($data->FileRKK, PATHINFO_EXTENSION) == 'pdf')
                                <a href="{{ asset('storage/uploads/' . $data->FileRKK) }}" target="_blank">View PDF</a>
                            @else
                                File Format Not Supported
                            @endif
                        @else
                            File Not Available
                        @endif
                    </td>
                    @can('view_hrd')
                    <td>
                        <a href="{{ route('admin.spk.edit', ['id' => $data->id]) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.spk.destroy', ['id' => $data->id]) }}" method="post" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    @endcan
                </tr>
            @endforeach
            </tbody>
        </table>
            <div class="d-flex justify-content-center">
                {{ $spkData->appends(['search' => $search])->links('pagination::bootstrap-4') }}
            </div>
        
        
    </div>
</div>
@endsection
