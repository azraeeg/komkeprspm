@extends('layouts.app')  
@section('content') 

<div class="card-body box-profile" style="max-width: 400px; margin: 0 auto;">
    <div class="text-center">
        @if($data->Foto)
            <img class="profile-user-img img-fluid img-square"
                src="{{ asset('storage/foto_profil/' . $data->Foto) }}"
                alt="User profile picture">
        @else
            <!-- Tampilkan gambar default jika pengguna tidak memiliki foto profil -->
            <img class="profile-user-img img-fluid img-square"
                src="{{ asset('assets/dist/img/dummypic.png') }}"
                alt="User profile picture">
        @endif
    </div> 
    <p class="text-muted text-center">Unit Kerja : {{ $data->UnitKrj }}</p>
</div>
<style>
    .img-square {
        object-fit: cover;
        width: 50%;
        height: 200px; /* Sesuaikan tinggi sesuai kebutuhan */
    }
</style>

<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Data Diri</h3>
        </div>
      <table class="table table-bordered">
          <tr>
              <td class="info-label">NIK KTP:</td>
              <td>{{ $data->NIK }}</td>
          </tr>
          <tr>
              <td class="info-label">NIK Pegawai:</td>
              <td>{{ $data->Nopeg }}</td>
          </tr>
          <tr>
              <td class="info-label">Nama:</td>
              <td>{{ $data->Nama }}</td>
          </tr>
          <tr>
              <td class="info-label">Jenjang Karir:</td>
              <td>{{ $data->JenKar }}</td>
          </tr>
          <tr>
              <td class="info-label">Jabatan:</td>
              <td>{{ $data->Jabatan }}</td>
          </tr>
          <tr>
              <td class="info-label">Jenis Kelamin:</td>
              <td>{{ $data->JenKel }}</td>
          </tr>
          <tr>
              <td class="info-label">Tempat Lahir:</td>
              <td>{{ $data->TmptLahir }}</td>
          </tr>
          <tr>
              <td class="info-label">Tanggal Lahir:</td>
              <td>{{ $data->TglLahir }}</td>
          </tr>
          <tr>
              <td class="info-label">Status Pegawai:</td>
              <td>{{ $data->Status }}</td>
          </tr>
          <tr>
              <td class="info-label">ALAMAT:</td>
              <td>{{ $data->Alamat }}</td>
          </tr>
          <tr>
              <td class="info-label">Nomor HP:</td>
              <td>{{ $data->NoHP }}</td>
          </tr>
          <tr>
              <td class="info-label">Email:</td>
              <td>{{ $data->Email }}</td>
          </tr>
          <tr>
              <td class="info-label">Agama:</td>
              <td>{{ $data->Agama }}</td>
          </tr>
          <tr>
              <td class="info-label">Status Perkawinan:</td>
              <td>{{ $data->StatusPerkawinan }}</td>
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
                <td>{{ $data->KTP }}</td>
                <td>
                    @if($data->KTP)
                        <a href="{{ asset('storage/uploads/' . $data->KTP) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
            <tr>
                <td class="info-label">KK:</td>
                <td>{{ $data->KK }}</td>
                <td>
                    @if($data->KK)
                        <a href="{{ asset('storage/uploads/' . $data->KK) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
            <tr>
                <td class="info-label">IJAZAH:</td>
                <td>{{ $data->IJAZAH }}</td>
                <td>
                    @if($data->IJAZAH)
                        <a href="{{ asset('storage/uploads/' . $data->IJAZAH) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
            <tr>
                <td class="info-label">KTA PPNI/IBI:</td>
                <td>{{ $data->PPNI }}</td>
                <td>
                    @if($data->PPNI)
                        <a href="{{ asset('storage/uploads/' . $data->PPNI) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
            <tr>
                <td class="info-label">SIP:</td>
                <td>{{ $data->SIP }}</td>
                <td>
                    @if($data->SIP)
                        <a href="{{ asset('storage/uploads/' . $data->SIP) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
            <tr>
                <td class="info-label">STR:</td>
                <td>{{ $data->STR }}</td>
                <td>
                    @if($data->STR)
                        <a href="{{ asset('storage/uploads/' . $data->STR) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
            <tr>
                <td class="info-label">NPWP:</td>
                <td>{{ $data->NPWP }}</td>
                <td>
                    @if($data->NPWP)
                        <a href="{{ asset('storage/uploads/' . $data->NPWP) }}" target="_blank">View File</a>
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
                @foreach($data->sertifikats as $sertifikat)
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
                <td>{{ $data->spk->FileSPK ?? 'No File' }}</td>
                <td>
                    @if($data->spk && $data->spk->FileSPK)
                        <a href="{{ asset('storage/uploads/' . $data->spk->FileSPK) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
            <tr>
                <td class="info-label">RKK:</td>
                <td>{{ $data->spk->FileRKK ?? 'No File' }}</td>
                <td>
                    @if($data->spk && $data->spk->FileRKK)
                        <a href="{{ asset('storage/uploads/' . $data->spk->FileRKK) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection