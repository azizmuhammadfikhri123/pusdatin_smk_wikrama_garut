@extends('layout.main')
@section('title', 'halaman utama')
    
@section('container')
    <!-- Begin Page Content -->
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
        
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Kumpulan Data Siswa</h6>
                        <div>
                            <a href="/create" class="btn btn-primary float-right">Tambah Data</a>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>   
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>NIS</th>
                                        <th>NAMA</th>
                                        <th>ROMBEL</th>
                                        <th>RAYON</th>
                                        <th>ALAMAT</th>
                                        <th>AGAMA</th>
                                        <th>PAS FOTO</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $dt)  
                                        <tr class="text-center">
                                            <td>{{$dt->nis}}</td>
                                            <td>{{$dt->nama}}</td>
                                            <td>{{$dt->rombel}}</td>
                                            <td>{{$dt->rayon}}</td>
                                            <td>{{$dt->alamat}}</td>
                                            <td>{{$dt->agama}}</td>
                                            <td>{{$dt->pas_foto}}</td>
                                            <td>
                                                <a href="/student/{{$dt->id}}/edit" class="btn btn-warning">Edit</a>
                                            <form action="/student/delete/{{$dt->id}}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger ">Hapus</button>
                                            </form>     
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
@endsection