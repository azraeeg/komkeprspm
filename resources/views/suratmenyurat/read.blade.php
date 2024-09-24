@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Dokumen</h3>
        </div>

        <div class="mb-3 mt-3">
            <form action="{{ route('admin.suratmenyurat.index') }}" method="GET" class="mx-3">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Cari berdasarkan nama dokumen" value="{{ $search ?? '' }}">
                    <button type="submit" class="btn btn-info">Cari</button>
                </div>
            </form>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama Dokumen</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Berakhir</th>
                    <th>File Dokumen</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

            @foreach($dokData as $data)
                @php
                    // Menentukan tanggal berakhir dalam satu bulan dari tanggal saat ini
                    $tglBerakhir = \Carbon\Carbon::parse($data->TglBerakhir);
                    $tglSebulanLagi = \Carbon\Carbon::now()->addMonth();
                    $bgClass = $tglBerakhir <= $tglSebulanLagi ? 'bg-danger' : '';
                @endphp
                <tr class="{{ $bgClass }}">
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->Nama }}</td>
                    <td>{{ $data->TglMulai }}</td>
                    <td>{{ $data->TglBerakhir }}</td>
                    <td>
                    @if ($data->FileDok)
                        @php
                            $fileExtension = pathinfo($data->FileDok, PATHINFO_EXTENSION);
                            $supportedFormats = ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'txt'];
                        @endphp

                        @if (in_array($fileExtension, $supportedFormats))
                            <a href="{{ asset('storage/uploads/' . $data->FileDok) }}" target="_blank">View {{ strtoupper($fileExtension) }}</a>
                        @else
                            File Format Not Supported
                        @endif
                    @else
                        File Not Available
                    @endif

                    </td>
                    <td>
                        <form action="{{ route('admin.suratmenyurat.destroy', ['id' => $data->id]) }}" method="post" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
            <div class="d-flex justify-content-center">
                {{ $dokData->appends(['search' => $search])->links('pagination::bootstrap-4') }}
            </div>
        
        
    </div>
</div>
@endsection
