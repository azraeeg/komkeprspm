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
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Upload File</h3>
            </div>
            <form action="{{ route('admin.upload.file') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="ktp"> KTP</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="ktp" id="ktp" accept=".pdf" onchange="displayFileName(this)">
                                <label for="ktp" class="custom-file-label" id="fileLabelKTP">{{ auth()->user()->KTP }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kk"> KK</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="kk" id="kk" accept=".pdf" onchange="displayFileName(this)">
                                <label for="kk" class="custom-file-label" id="fileLabelKK">{{ auth()->user()->KK }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ijazah"> IJAZAH</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="ijazah" id="ijazah" accept=".pdf" onchange="displayFileName(this)">
                                <label for="ijazah" class="custom-file-label" id="fileLabelIJAZAH">{{ auth()->user()->IJAZAH }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="PPNI"> KTA PPNI/IBI</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="PPNI" id="PPNI" accept=".pdf" onchange="displayFileName(this)">
                                <label for="PPNI" class="custom-file-label" id="fileLabelPPNI">{{ auth()->user()->PPNI }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="SIP"> SIP</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="SIP" id="SIP" accept=".pdf" onchange="displayFileName(this)">
                                <label for="SIP" class="custom-file-label" id="fileLabelSIP">{{ auth()->user()->SIP }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="STR"> STR</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="STR" id="STR" accept=".pdf" onchange="displayFileName(this)">
                                <label for="STR" class="custom-file-label" id="fileLabelSTR">{{ auth()->user()->STR }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="NPWP"> NPWP</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="NPWP" id="NPWP" accept=".pdf" onchange="displayFileName(this)">
                                <label for="NPWP" class="custom-file-label" id="fileLabelNPWP">{{ auth()->user()->NPWP }}</label>
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
        function displayFileName(input) {
            var fileName = input.files[0] ? input.files[0].name : 'Choose file';
            input.nextElementSibling.innerText = fileName;
        }
    </script>

@endsection
