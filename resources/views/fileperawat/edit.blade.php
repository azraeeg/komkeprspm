@extends('layouts.app')

@section('content')

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="col-md-12">
    <!-- formulir umum -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Edit Data Perawat</h3>
        </div>
        <!-- /.card-header -->
        <!-- mulai formulir -->
        <form action="{{ route('admin.perawat.update', ['id' => $perawatData->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card-body">

                <div class="form-group">
                    <label for="Nopeg">Nopeg:</label>
                    <input type="text" class="form-control" name="Nopeg" value="{{ $perawatData->Nopeg }}" required>
                </div>
                <div class="form-group">
                    <label for="Nama">Nama:</label>
                    <input type="text" class="form-control" name="Nama" value="{{ $perawatData->Nama }}" required>
                </div>
                <div class="form-group">
                    <label for="Jabatan">Jabatan:</label>
                    <input type="text" class="form-control" name="Jabatan" value="{{ $perawatData->Jabatan }}" required>
                </div>
                <div class="form-group">
                    <label for="UnitKrj">Unit Kerja:</label>
                    <input type="text" class="form-control" name="UnitKrj" value="{{ $perawatData->UnitKrj }}" required>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-info">Update</button>
            </div>
        </form>

    </div>
</div>

@endsection
