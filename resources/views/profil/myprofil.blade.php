@extends('layouts.app')  

@section('content') 
<!-- Profile Image -->
<div class="card-body box-profile" style="max-width: 400px; margin: 0 auto;">
    <div class="text-center">
        @if(auth()->user()->Foto)
            <img class="profile-user-img img-fluid img-circle"
                src="{{ asset('storage/foto_profil/' . auth()->user()->Foto) }}"
                alt="User profile picture">
        @else
            <!-- Tampilkan gambar default jika pengguna tidak memiliki foto profil -->
            <img class="profile-user-img img-fluid img-circle"
                src="{{ asset('assets/dist/img/dummypic.png') }}"
                alt="User profile picture">
        @endif
    </div>

    <h3 class="profile-username text-center">{{ auth()->user()->Nama }}</h3> 
    <p class="text-muted text-center">Unit Kerja : {{ auth()->user()->UnitKrj }}</p>

    <a href="{{ route('admin.profil.edit') }}" class="btn btn-info btn-block"><b>Edit Profil</b></a>
    <a href="{{ route('admin.upload.view') }}" class="btn btn-info btn-block"><b>Upload File</b></a>
    <a href="{{ route('admin.profil.sertif') }}" class="btn btn-info btn-block"><b>Upload Sertifikat</b></a>
    <a href="{{ route('admin.profil.ganti-password.form') }}" class="btn btn-info btn-block"><b>Ganti Password</b></a>
    <a href="{{ route('logout-proses') }}" class="btn btn-info btn-block"><b>Logout</b></a>
</div>

<!-- Data PERAWAT Table -->
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Data Diri</h3>
        </div>
      <table class="table table-bordered">
          <tr>
              <td class="info-label">NIK KTP:</td>
              <td>{{ auth()->user()->NIK }}</td>
          </tr>
          <tr>
              <td class="info-label">NIK Pegawai:</td>
              <td>{{ auth()->user()->Nopeg }}</td>
          </tr>
          <tr>
              <td class="info-label">Nama:</td>
              <td>{{ auth()->user()->Nama }}</td>
          </tr>
          <tr>
              <td class="info-label">Jenjang Karir:</td>
              <td>{{ auth()->user()->JenKar }}</td>
          </tr>
          <tr>
              <td class="info-label">Jabatan:</td>
              <td>{{ auth()->user()->Jabatan }}</td>
          </tr>
          <tr>
              <td class="info-label">Jenis Kelamin:</td>
              <td>{{ auth()->user()->JenKel }}</td>
          </tr>
          <tr>
              <td class="info-label">Tempat Lahir:</td>
              <td>{{ auth()->user()->TmptLahir }}</td>
          </tr>
          <tr>
              <td class="info-label">Tanggal Lahir:</td>
              <td>{{ auth()->user()->TglLahir }}</td>
          </tr>
          <tr>
              <td class="info-label">Status Pegawai:</td>
              <td>{{ auth()->user()->Status }}</td>
          </tr>
          <tr>
              <td class="info-label">ALAMAT:</td>
              <td>{{ auth()->user()->Alamat }}</td>
          </tr>
          <tr>
              <td class="info-label">Nomor HP:</td>
              <td>{{ auth()->user()->NoHP }}</td>
          </tr>
          <tr>
              <td class="info-label">Email:</td>
              <td>{{ auth()->user()->Email }}</td>
          </tr>
          <tr>
              <td class="info-label">Agama:</td>
              <td>{{ auth()->user()->Agama }}</td>
          </tr>
          <tr>
              <td class="info-label">Status Perkawinan:</td>
              <td>{{ auth()->user()->StatusPerkawinan }}</td>
          </tr>
      </table>
  </div>
</div>

<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Data File</h3>
        </div>
        <table class="table table-bordered">
            <tr>
                <td class="info-label">KTP:</td>
                <td>{{ auth()->user()->KTP }}</td>
                <td>
                    @if(auth()->user()->KTP)
                        <a href="{{ asset('storage/uploads/' . auth()->user()->KTP) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
            <tr>
                <td class="info-label">KK:</td>
                <td>{{ auth()->user()->KK }}</td>
                <td>
                    @if(auth()->user()->KK)
                        <a href="{{ asset('storage/uploads/' . auth()->user()->KK) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
            <tr>
                <td class="info-label">IJAZAH:</td>
                <td>{{ auth()->user()->IJAZAH }}</td>
                <td>
                    @if(auth()->user()->IJAZAH)
                        <a href="{{ asset('storage/uploads/' . auth()->user()->IJAZAH) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
            <tr>
                <td class="info-label">KTA PPNI/IBI:</td>
                <td>{{ auth()->user()->PPNI }}</td>
                <td>
                    @if(auth()->user()->PPNI)
                        <a href="{{ asset('storage/uploads/' . auth()->user()->PPNI) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
            <tr>
                <td class="info-label">SIP:</td>
                <td>{{ auth()->user()->SIP }}</td>
                <td>
                    @if(auth()->user()->SIP)
                        <a href="{{ asset('storage/uploads/' . auth()->user()->SIP) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
            <tr>
                <td class="info-label">STR:</td>
                <td>{{ auth()->user()->STR }}</td>
                <td>
                    @if(auth()->user()->STR)
                        <a href="{{ asset('storage/uploads/' . auth()->user()->STR) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
            <tr>
                <td class="info-label">NPWP:</td>
                <td>{{ auth()->user()->NPWP }}</td>
                <td>
                    @if(auth()->user()->NPWP)
                        <a href="{{ asset('storage/uploads/' . auth()->user()->NPWP) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
            
        </table>
    </div>
</div>

<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Sertifikat</h3>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama File</th>
                    <th>View File</th>
                </tr>
            </thead>
            <tbody>
                @foreach(auth()->user()->sertifikats as $sertifikat)
                    <tr>
                        <td>{{ $sertifikat->FileSertif }}</td>
                        <td>
                            @if($sertifikat->FileSertif)
                                <a href="{{ asset('storage/sertifikat/' . $sertifikat->FileSertif) }}" target="_blank">View File</a>
                            @else
                                No File
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">File SPK/RKK</h3>
        </div>
        <table class="table table-bordered">
            <tr>
                <td class="info-label">SPK:</td>
                <td>{{ auth()->user()->spk->FileSPK ?? 'No File' }}</td>
                <td>
                    @if(auth()->user()->spk && auth()->user()->spk->FileSPK)
                        <a href="{{ asset('storage/uploads/' . auth()->user()->spk->FileSPK) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
            <tr>
                <td class="info-label">RKK:</td>
                <td>{{ auth()->user()->spk->FileRKK ?? 'No File' }}</td>
                <td>
                    @if(auth()->user()->spk && auth()->user()->spk->FileRKK)
                        <a href="{{ asset('storage/uploads/' . auth()->user()->spk->FileRKK) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
        </table>
    </div>
</div>



@endsection
