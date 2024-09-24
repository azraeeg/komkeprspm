@extends('layouts.app')

@section('content') 
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
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
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Upload Sertifikat</h3>
            </div>
            <form action="{{ route('admin.sertifikat.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="FileSertif"> Sertifikat</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="FileSertif" id="FileSertif" accept=".pdf" required onchange="displayFileName()">
                                <label for="FileSertif" class="custom-file-label" id="fileLabelFileSertif">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function displayFileName() {
            var fileName = document.getElementById('FileSertif').files[0].name;
            document.getElementById('fileLabelFileSertif').innerText = fileName;
        }
    </script>
@endsection
