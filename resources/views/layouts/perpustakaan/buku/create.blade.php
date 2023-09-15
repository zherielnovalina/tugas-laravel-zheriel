@extends('layouts.master')

@section('content')
    <!--ISI-->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Form Buku</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
            <form action="{{ route('buku.store') }}" method="POST">
            @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeBuku">Kode Buku :</label>
                        <input type="text" class="form-control" name="kode_buku" id="kodeBuku" placeholder="Masukkan Kode">
                    </div>
                    <div class="form-group">
                        <label for="judulBuku">Judul Buku :</label>
                        <input type="text" class="form-control" name="judul_buku" id="judulBuku" placeholder="Masukkan Judul">
                    </div>
                    <div class="form-group">
                        <label for="penulisBuku">Penulis Buku :</label>
                        <input type="text" class="form-control" name="penulis_buku" id="penulisBuku" placeholder="Masukkan Penulis">
                    </div>
                    <div class="form-group">
                        <label for="penerbitBuku">Penerbit Buku :</label>
                        <input type="text" class="form-control" name="penerbit_buku" id="penerbitBuku" placeholder="Masukkan Penerbit">
                    </div>
                    <div class="form-group">
                        <label for="tahunTerbit">Tahun Terbit :</label>
                        <input type="text" class="form-control" name="tahun_penerbit" id="tahunTerbit" placeholder="Masukkan Tahun Terbit">
                    </div>
                    <div class="form-group">
                        <label for="rakId">ID Rak :</label>
                        <input type="id" class="form-control" name="tahun_penerbit" id="tahunTerbit" placeholder="Masukkan Tahun Terbit">
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
    </div>
    <!-- /.card -->
@endsection