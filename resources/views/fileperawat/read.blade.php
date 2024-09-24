@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Data Perawat</h3>
        </div>
        
        <div class="mb-3 mt-3">
            <form action="{{ route('admin.perawat.index') }}" method="GET" class="mx-3">
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
                    <!-- <th>Jabatan</th>
                    <th>Unit Kerja</th> -->
                    <th>KTP</th>
                    <th>KK</th>
                    <th>IJAZAH</th>
                    <th>KTA PPNI/IBI</th>
                    <th>SIP</th>
                    <th>STR</th>
                    <th>NPWP</th>
                    <th>Profil</th>
                    <!-- <th>Aksi</th> -->
                </tr>
            </thead>
            <tbody>

            @foreach($perawatData as $data)
            <tr class=>
                    <td>{{ $data->Nopeg }}</td>
                    <td>{{ $data->Nama }}</td>
                    <!-- <td>{{ $data->Jabatan }}</td>
                    <td>{{ $data->UnitKrj }}</td> -->
                    <td>
                        @if ($data->KTP)
                            @if (pathinfo($data->KTP, PATHINFO_EXTENSION) == 'pdf')
                                <a href="{{ asset('storage/uploads/' . $data->KTP) }}" target="_blank">View PDF</a>
                            @else
                                File Format Not Supported
                            @endif
                        @else
                            File Not Available
                        @endif
                    </td>
                    <td>
                        @if ($data->KK)
                            @if (pathinfo($data->KK, PATHINFO_EXTENSION) == 'pdf')
                                <a href="{{ asset('storage/uploads/' . $data->KK) }}" target="_blank">View PDF</a>
                            @else
                                File Format Not Supported
                            @endif
                        @else
                            File Not Available
                        @endif
                    </td>
                    <td>
                        @if ($data->IJAZAH)
                            @if (pathinfo($data->IJAZAH, PATHINFO_EXTENSION) == 'pdf')
                                <a href="{{ asset('storage/uploads/' . $data->IJAZAH) }}" target="_blank">View PDF</a>
                            @else
                                File Format Not Supported
                            @endif
                        @else
                            File Not Available
                        @endif
                    </td>
                    <td>
                        @if ($data->PPNI)
                            @if (pathinfo($data->PPNI, PATHINFO_EXTENSION) == 'pdf')
                                <a href="{{ asset('storage/uploads/' . $data->PPNI) }}" target="_blank">View PDF</a>
                            @else
                                File Format Not Supported
                            @endif
                        @else
                            File Not Available
                        @endif
                    </td>
                    <td>
                        @if ($data->SIP)
                            @if (pathinfo($data->SIP, PATHINFO_EXTENSION) == 'pdf')
                                <a href="{{ asset('storage/uploads/' . $data->SIP) }}" target="_blank">View PDF</a>
                            @else
                                File Format Not Supported
                            @endif
                        @else
                            File Not Available
                        @endif
                    </td>
                    <td>
                        @if ($data->STR)
                            @if (pathinfo($data->STR, PATHINFO_EXTENSION) == 'pdf')
                                <a href="{{ asset('storage/uploads/' . $data->STR) }}" target="_blank">View PDF</a>
                            @else
                                File Format Not Supported
                            @endif
                        @else
                            File Not Available
                        @endif
                    </td>
                    <td>
                        @if ($data->NPWP)
                            @if (pathinfo($data->NPWP, PATHINFO_EXTENSION) == 'pdf')
                                <a href="{{ asset('storage/uploads/' . $data->NPWP) }}" target="_blank">View PDF</a>
                            @else
                                File Format Not Supported
                            @endif
                        @else
                            File Not Available
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.profil.show', ['id' => $data->id]) }}" class="btn btn-info">Lihat Profil</a>
                    </td>
            
                    <!-- <td>
                        <a href="{{ route('admin.perawat.edit', ['id' => $data->id]) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.perawat.destroy', ['id' => $data->id]) }}" method="post" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td> -->
            </tr>
            @endforeach
            </tbody>
        </table>
            <div class="d-flex justify-content-center">
                {{ $perawatData->appends(['search' => $search])->links('pagination::bootstrap-4') }}
            </div>
        
        
    </div>
</div>
@endsection
