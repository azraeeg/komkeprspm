@extends('layouts.app')  
@section('content') 


    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Form Input</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('admin.spk.create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Nopeg">Nopeg:</label>
                            <input type="text" class="form-control" name="Nopeg" required>
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama:</label>
                            <input type="text" class="form-control" name="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="AwalMskKrj">Awal Masuk Kerja:</label>
                            <input type="date" class="form-control" name="AwalMskKrj" required>
                        </div>
                        <div class="form-group">
                            <label for="JenKar">Jenjang Karir:</label>
                            <input type="text" class="form-control" name="JenKar" required>
                        </div>
                        <div class="form-group">
                            <label for="WewenangKlinis">WewenangKlinis:</label>
                            <input type="text" class="form-control" name="WewenangKlinis" required>
                        </div>
                        <div class="form-group">
                            <label for="Pendidikan">Pendidikan:</label>
                            <input type="text" class="form-control" name="Pendidikan" required>
                        </div>
                        <div class="form-group">
                            <label for="TglBerakhir">Tgl Berakhir:</label>
                            <input type="date" class="form-control" name="TglBerakhir" required>
                        </div>
                        <div class="form-group">
                            <label for="FileSPK">File SPK</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="FileSPK" id="FileSPK" accept=".pdf" required onchange="displayFileName('FileSPK')">
                                    <label class="custom-file-label" id="fileLabelSPK">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="FileRKK">File RKK</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="FileRKK" id="FileRKK" accept=".pdf" required onchange="displayFileName('FileRKK')">
                                    <label class="custom-file-label" id="fileLabelRKK">Choose file</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
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