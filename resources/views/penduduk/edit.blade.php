<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masjid Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4>Edit Data Penduduk</h4>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        <div class="row">
            <div class="col=-lg-12">
                <form action="/penduduk/{{$penduduk->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="InputNIK" class="form-label">NIK</label>
                        <input name ="NIK" type="text" class="form-control" id="InputNIK" aria-describedby="" value="{{$penduduk->NIK}}">
                    </div>
                    <div class="mb-3">
                        <label for="InputNama" class="form-label">Nama</label>
                        <input name="Nama" class="form-control" id="InputNama" value="{{$penduduk->Nama}}">
                    </div>
                    <div class="mb-3">
                        <label for="InputTempatTanggalLahir" class="form-label">Tempat,Tanggal Lahir</label>
                        <input name="Tempat_TanggalLahir" class="form-control" id="InputTempatTanggalLahir" value="{{$penduduk->Tempat_TanggalLahir}}">
                    </div>
                    <div class="mb-3">
                        <label for="InputJenisKelamin" class="form-label">Jenis Kelamin
                        </label>
                        <select name="JenisKelamin" class="form-select" aria-label="Jenis Kelamin" value="{{$penduduk->JenisKelamin}}">
                            <option selected></option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="InputGolonganDarah" class="form-label">Golongan Darah
                        </label>
                        <select name="GolonganDarah" class="form-select" aria-label="Golongan Darah" value="{{$penduduk->GolonganDarah}}">
                            <option selected></option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="InputAlamat" class="form-label">Alamat</label>
                        <input name="Alamat" class="form-control" id="InputAlamat value="{{$penduduk->Alamat}}">
                    </div>
                    <div class="mb-3">
                        <label for="InputRTRW" class="form-label">RT/RW</label>
                        <input name="RT_RW" class="form-control" id="InputRT/RW" value="{{$penduduk->RT_RW}}">
                    </div>
                    <div class="mb-3">
                        <label for="InputKelDesa" class="form-label">Kelurahan</label>
                        <input name="Kel_Desa" class="form-control" id="InputKelDesa value="{{$penduduk->Kel_Desa}}">
                    </div>
                    <div class="mb-3">
                        <label for="InputKecamatan" class="form-label">Kecamatan</label>
                        <input name="Kecamatan" class="form-control" id="InputKecamatan" value="{{$penduduk->Kecamatan}}">
                    </div>
                    <div class="mb-3">
                        <label for="InputAgama" class="form-label">Agama
                        </label>
                        <select name="Agama" class="form-select" aria-label="Agama" value="{{$penduduk->Agama}}">
                            <option selected>Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="InputStatusPerkawinan" class="form-label">Status Perkawinan
                        </label>
                        <select name="StatusPerkawinan" class="form-select" aria-label="Status Perkawinan" value="{{$penduduk->StatusPerkawinan}}">
                            <option selected>Status Perkawinan</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Belum Kawin">Belum Kawin</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="InputPekerjaan" class="form-label">Pekerjaan</label>
                        <input name="Pekerjaan" class="form-control" id="InputPekerjaan" value="{{$penduduk->Pekerjaan}}">
                    </div>
                    <div class="mb-3">
                        <label for="InputKewarganegaraan" class="form-label">Kewarganegaraan</label>
                        <input name="Kewarganegaraan" class="form-control" id="InputKewarganegaraan" value="{{$penduduk->Kewarganegaraan}}">
                    </div>
                    <div class="mb-3">
                        <label for="InputBerlakuHingga" class="form-label">Berlaku Hingga</label>
                        <input name="BerlakuHingga" class="form-control" id="InputBerlakuHingga" value="{{$penduduk->BerlakuHingga}}">
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>