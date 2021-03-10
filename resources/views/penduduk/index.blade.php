@extends('layouts.master')

@section('content')
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses') }}
            </div>
            @endif
            <div class="row">
                <div class="col-6">
                    <h2>Data Penduduk</h2>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data Penduduk
                    </button>
                </div>        
                <table class="table cover">
                    <tr>
                        <th>NIK</th> 
                        <th>NAMA</th>
                        <th>TEMPAT,TANGGAL LAHIR</th>
                        <th>JENIS KELAMIN</th>
                        <th>AGAMA</th>
                        <th>PEKERJAAN</th>
                        <th></th>
                    </tr>
                    @foreach($data_penduduk as $penduduk)
                    <tr>
                        <td>{{$penduduk->NIK}}</td>
                        <td>{{$penduduk->Nama}}</td>
                        <td>{{$penduduk->Tempat_TanggalLahir}}</td>
                        <td>{{$penduduk->JenisKelamin}}</td>
                        <td>{{$penduduk->Agama}}</td>
                        <td>{{$penduduk->Pekerjaan}}</td>
                        <td>
                            <a href="/penduduk.{{$penduduk->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/penduduk.{{$penduduk->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div> 
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Input Penduduk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/penduduk/create" method="POST">
                            {{csrf_field()}}
                            <div class="mb-3">
                                <label for="InputNIK" class="form-label">NIK</label>
                                <input name="NIK" type="text" class="form-control" id="InputNIK" aria-label="NIK" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="InputNama" class="form-label">Nama</label>
                                <input name="Nama" type="text" class="form-control" id="InputNama" aria-label="Nama" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="InputTempatTanggalLahir" class="form-label">Tempat, Tanggal Lahir</label>
                                <input name="Tempat_TanggalLahir" type="Text" class="form-control" id="InputTempatTanggalLahir" aria-label="Tempat, Tanggal Lahir" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="InputJenisKelamin" class="form-label">Jenis Kelamin
                                </label>
                                <select name="JenisKelamin" class="form-select" aria-label="Jenis Kelamin">
                                    <option selected></option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="InputGolonganDarah" class="form-label">Golongan Darah
                                </label>
                                <select name="GolonganDarah" class="form-select" aria-label="Golongan Darah">
                                    <option selected></option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="InputAlamat" class="form-label">Alamat</label>
                                <input name="Alamat" type="text" class="form-control" id="InputAlamat" aria-label="Alamat" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="InputRT/RW" class="form-label">RT/RW</label>
                                <input name="RT_RW" type="text" class="form-control" id="InputRT/Rw" aria-label="RT/RW" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="InputKelurahan" class="form-label">Kelurahan</label>
                                <input name="Kel_Desa" type="text" class="form-control" id="InputKelurahan" aria-label="Kelurahan" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="InputKecamatan" class="form-label">Kecamatan</label>
                                <input name="Kecamatan" type="text" class="form-control" id="InputKecamatan" aria-label="Kecamatan" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="InputAgama" class="form-label">Agama
                                </label>
                                <select name="Agama" class="form-select" aria-label="Agama">
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
                                <select name="StatusPerkawinan" class="form-select" aria-label="Status Perkawinan">
                                    <option selected>Status Perkawinan</option>
                                    <option value="Kawin">Kawin</option>
                                    <option value="Belum Kawin">Belum Kawin</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="InputPekerjaaan" class="form-label">Pekerjaan</label>
                                <input name="Pekerjaan" type="text" class="form-control" id="InputPekerjaan" aria-label="Pekerjaan" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="InputKewarganegaraan" class="form-label">Kewarganegaraan</label>
                                <input name="Kewarganegaraan" type="text" class="form-control" id="InputKewarganegaraan" aria-label="Kewarganegaraan" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="InputBerlakuHingga" class="form-label">Berlaku Hingga</label>
                                <input name="BerlakuHingga" type="text" class="form-control" id="InputBerlakuHingga" aria-label="BerlakuHingga" placeholder="">
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection       
