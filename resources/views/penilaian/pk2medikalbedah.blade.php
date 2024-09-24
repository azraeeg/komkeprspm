@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Form Penilaian Kewenangan Klinis PK 2 MEDIKAL BEDAH</h3>
            </div>
            <div class="mb-3 mt-3">
                <form action="{{ route('admin.simpanpk2medikalbedah') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="penilai">Nama Penilai:</label>
                        <input type="text" name="penilai" id="penilai" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan Penilai:</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="nopeg">Pilih Nama yang Dinilai:</label>
                        <select name="nopeg" id="nopeg" class="form-control">
                            @foreach ($pegawai as $pegawai)
                                <option value="{{ $pegawai->Nopeg }}">{{ $pegawai->Nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    

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
                            @foreach ($kewenanganKlinis as $kewenangan)
                                <tr>
                                    <td>{{ $kewenangan }}</td>
                                    <td>
                                        <select name="mandiri[{{ $kewenangan }}]">
                                            <option value=""></option>
                                            <option value="SUPERVISI">Supervisi</option>
                                            <option value="PENUH">Penuh</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="mandat[{{ $kewenangan }}]">
                                            <option value=""></option>
                                            <option value="YA">YA</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="delegasi[{{ $kewenangan }}]">
                                            <option value=""></option>
                                            <option value="YA">YA</option>
                                        </select>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
