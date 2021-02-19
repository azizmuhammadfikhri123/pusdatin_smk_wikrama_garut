@extends('layout.main')
@section('title', 'halaman Tambah')
    
@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Halaman Tambah Data</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="card">
                        <div class="card-body">                         
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <form method="post" action="/create/siswa" enctype = "multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NIS</label>
                                        <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" id="nis" value="{{old('nis')}}" placeholder="Masukan Nis">
                                        @error('nis')
                                            <div id="validationCustom03" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{old('nama')}}" placeholder="Masukan Name">
                                        @error('nama')
                                            <div id="validationCustom03" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Rombel</label>
                                        <input type="text" class="form-control @error('rombel') is-invalid @enderror" name="rombel" id="rombel" value="{{old('rombel')}}" placeholder="Masukan Rombel">
                                        @error('rombel')
                                            <div id="validationCustom03" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Rayon</label>
                                        <input type="text" class="form-control @error('rayon') is-invalid @enderror" name="rayon" id="rayon" value="{{old('rayon')}}" placeholder="Masukan Rayon">
                                        @error('rayon')
                                            <div id="validationCustom03" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" value="{{old('alamat')}}" placeholder="Masukan Alamat">
                                        @error('alamat')
                                            <div id="validationCustom03" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Agama</label>
                                        <div class="form-group">
                                            <select class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{old('agama')}}" placeholder=" Pilih Agama" ">
                                                <option></option>
                                                <option>Islam</option>
                                                <option>Kristen</option>
                                                <option>Hindu</option>
                                                <option>Buddha</option>
                                                <option>Katolik</option>
                                                <option>Konghucu</option>
                                            </select>
                                            @error('agama')
                                            <div id="validationCustom03" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Pas Foto</label>
                                        <input type="file" class="form-control-file @error('pas_foto') is-invalid @enderror" id="pas_foto" name="pas_foto" value="{{old('pas_foto')}}">
                                        @error('pas_foto')
                                            <div id="validationCustom03" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="/dashboard" class="btn btn-info ml-2">Kembali</a>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection