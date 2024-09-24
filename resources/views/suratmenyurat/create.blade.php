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
              <form action="{{ route('admin.suratmenyurat.create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label for="Nama">Nama Dokumen:</label>
                            <input type="text" class="form-control" name="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="TglMulai">Tanggal Mulai:</label>
                            <input type="date" class="form-control" name="TglMulai" required>
                        </div>
                        <div class="form-group">
                            <label for="TglBerakhir">Tanggal Berakhir:</label>
                            <input type="date" class="form-control" name="TglBerakhir" required>
                        </div>
                        <div class="form-group">
                            <label for="FileDok">File Dokumen</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="FileDok" id="FileDok"  required onchange="displayFileName('FileDok')">
                                    <label class="custom-file-label" id="fileLabelDok">Choose file</label>
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