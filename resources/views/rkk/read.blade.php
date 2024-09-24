@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Data Perawat</h3>
        </div>
        
        <div class="mb-3 mt-3">
            <form action="{{ route('admin.rkk.hasil') }}" method="GET" class="mx-3">
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
                    <th>RKK PK1</th>
                    <th>RKK PK2</th>
                    <th>RKK PK3</th>
                    <th>RKK BIDAN</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($perawatData as $data)
                    <tr>
                            <td>{{ $data->Nopeg }}</td>
                            <td>{{ $data->Nama }}</td>
                            <td>
                                <a href="{{ route('admin.hasilpk1', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">PK1</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.hasilpk2anestesi', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">ANESTESI</a>
                                <a href="{{ route('admin.hasilpk2bedah', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">BEDAH</a>
                                <a href="{{ route('admin.hasilpk2hd', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">HD</a>
                                <a href="{{ route('admin.hasilpk2icu', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">ICU</a>
                                <a href="{{ route('admin.hasilpk2igd', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">IGD</a>
                                <a href="{{ route('admin.hasilpk2ipcn', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">IPCN</a>
                                <a href="{{ route('admin.hasilpk2medikalbedah', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">MEDIKAL BEDAH</a>
                                <a href="{{ route('admin.hasilpk2neonatologi', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">NEONATOLOGI</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.hasilpk3anestesi', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">ANESTESI</a>
                                <a href="{{ route('admin.hasilpk3bedah', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">BEDAH</a>
                                <a href="{{ route('admin.hasilpk3hd', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">HD</a>
                                <a href="{{ route('admin.hasilpk3icu', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">ICU</a>
                                <a href="{{ route('admin.hasilpk3igd', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">IGD</a>
                                <a href="{{ route('admin.hasilpk3ipcn', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">IPCN</a>
                                <a href="{{ route('admin.hasilpk3medikalbedah', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">MEDIKAL BEDAH</a>
                                <a href="{{ route('admin.hasilpk3neonatologi', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">NEONATOLOGI</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.hasilbidan1', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">BIDAN1</a>
                                <a href="{{ route('admin.hasilbidan2', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">BIDAN2</a>
                                <a href="{{ route('admin.hasilbidan3', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">BIDAN3</a>
                            </td>
            
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
