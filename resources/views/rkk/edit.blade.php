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
            <h3 class="card-title">Edit Data RKK</h3>
        </div>
        <!-- /.card-header -->
        <!-- mulai formulir -->
        <form action="{{ route('admin.rkk.update', ['id' => $id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card-body">
                <div class="form-group">
                    <label for="TingkatRkk">tingkat rkk:</label>
                    <input type="text" class="form-control" name="TingkatRkk" value="{{ $rkkData->TingkatRkk }}" required>
                </div>
                <div class="form-group">
                    <label for="Deskripsi">desk:</label>
                    <input type="text" class="form-control" name="Deskripsi" value="{{ $rkkData->Deskripsi }}" required>
                </div>
                <div class="form-group">
                    <label for="File">Input File</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="FormRkk" id="File" accept=".xlsx" onchange="displayFileName()">
                            <label for="File" class="custom-file-label" id="fileLabel">{{ $rkkData->FormRkk }}</label>
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
    function displayFileName() {
        var fileName = document.getElementById('File').files[0].name;
        document.getElementById('fileLabel').innerText = fileName;
    }
</script>

@endsection
