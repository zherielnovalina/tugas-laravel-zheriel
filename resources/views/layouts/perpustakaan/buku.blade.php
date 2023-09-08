@extends('layouts.master')

@section('content')
    <!--ISI-->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Form Buku</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="idBuku">ID Buku :</label>
                        <input type="text" class="form-control" id="idBuku" placeholder="Masukkan ID">
                    </div>
                    <div class="form-group">
                        <label for="kodeBuku">Kode Buku :</label>
                        <input type="text" class="form-control" id="kodeBuku" placeholder="Masukkan Kode">
                    </div>
                    <div class="form-group">
                        <label for="judulBuku">Judul Buku :</label>
                        <input type="text" class="form-control" id="judulBuku" placeholder="Masukkan Judul">
                    </div>
                    <div class="form-group">
                        <label for="penulisBuku">Penulis Buku :</label>
                        <input type="text" class="form-control" id="penulisBuku" placeholder="Masukkan Penulis">
                    </div>
                    <div class="form-group">
                        <label for="penerbitBuku">Penerbit Buku :</label>
                        <input type="text" class="form-control" id="penerbitBuku" placeholder="Masukkan Penerbit">
                    </div>
                    <div class="form-group">
                        <label for="judulBuku">Judul Buku :</label>
                        <input type="text" class="form-control" id="judulBuku" placeholder="Masukkan Judul">
                    </div>
                    <div class="form-group">
                        <label for="tahunTerbit">Tahun Terbit :</label>
                        <input type="text" class="form-control" id="tahunTerbit" placeholder="Masukkan Tahun Terbit">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok :</label>
                        <input type="text" class="form-control" id="stok" placeholder="Masukkan Stok">
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