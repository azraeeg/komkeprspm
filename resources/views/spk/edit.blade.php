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
            <h3 class="card-title">Edit Data SPK</h3>
        </div>
        <!-- /.card-header -->
        <!-- mulai formulir -->
        <form action="{{ route('admin.spk.update', ['id' => $spkData->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card-body">
                <div class="form-group">
                    <label for="Nopeg">Nopeg:</label>
                    <input type="text" class="form-control" name="Nopeg" value="{{ $spkData->Nopeg }}" required>
                </div>
                <div class="form-group">
                    <label for="Nama">Nama:</label>
                    <input type="text" class="form-control" name="Nama" value="{{ $spkData->Nama }}" required>
                </div>
                <div class="form-group">
                    <label for="AwalMskKrj">Awal Masuk Kerja:</label>
                    <input type="date" class="form-control" name="AwalMskKrj" value="{{ $spkData->AwalMskKrj }}" required>
                </div>
                <div class="form-group">
                    <label for="JenKar">Jenjang Karir:</label>
                    <input type="text" class="form-control" name="JenKar" value="{{ $spkData->JenKar }}" required>
                </div>
                <div class="form-group">
                    <label for="WewenangKlinis">Kewenangan Klinis:</label>
                    <input type="text" class="form-control" name="WewenangKlinis" value="{{ $spkData->WewenangKlinis }}" required>
                </div>
                <div class="form-group">
                    <label for="Pendidikan">Pendidikan:</label>
                    <input type="text" class="form-control" name="Pendidikan" value="{{ $spkData->Pendidikan }}" required>
                </div>
                <div class="form-group">
                    <label for="TglBerakhir">Tgl Berakhir:</label>
                    <input type="date" class="form-control" name="TglBerakhir" value="{{ $spkData->TglBerakhir }}" required>
                </div>
                <div class="form-group">
                    <label for="File">File SPK</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="FileSPK" id="FileSPK" accept=".pdf" onchange="displayFileName('FileSPK')">
                            <label for="FileSPK" class="custom-file-label" id="fileLabelSPK">{{ $spkData->FileSPK }}</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="File">File RKK</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="FileRKK" id="FileRKK" accept=".pdf" onchange="displayFileName('FileRKK')">
                            <label for="FileRKK" class="custom-file-label" id="fileLabelRKK">{{ $spkData->FileRKK }}</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-info">Update</button>
            </div>
        </form>

    </div>
</div>

<script>
    function displayFileName(inputId) {
        var fileName = document.getElementById(inputId).files[0].name;
        document.getElementById('fileLabel' + inputId.substr(4)).innerText = fileName;
    }
</script>

@endsection
