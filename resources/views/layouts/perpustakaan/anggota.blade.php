@extends('layouts.master')

@section('content')
    <!--ISI-->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Form Anggota</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form>
        <div class="card-body">
            <div class="form-group">
                <label for="idAnggota">ID Anggota :</label>
                <input type="text" class="form-control" id="idAnggota" placeholder="Masukkan ID">
            </div>
            <div class="form-group">
                <label for="kodeAnggota">Kode Anggota :</label>
                <input type="text" class="form-control" id="kodeAnggota" placeholder="Masukkan Kode">
            </div>
            <div class="form-group">
                <label for="namaAnggota">Nama Anggota :</label>
                <input type="text" class="form-control" id="namaAnggota" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="namaAnggota">Jenis Kelamin Anggota :</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="laki-laki">
                        <label class="form-check-label">L</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="perempuan">
                    <label class="form-check-label">P</label>
                    </div>
            </div>
            <div class="form-group">
                <label>Jurusan Anggota :</label>
                <select class="custom-select">
                <option value="">Pilih Jurusan</option>
                <option value="RPL">Rekayasa Perangkat Lunak</option>
                <option value="TP">Teknik Pemesinan</option>
                <option value="TFLM">Teknik Pengelasan</option>
                <option value="DPIB">Desain Bangunan</option>
                <option value="TO">Teknik Otomotif</option>
                <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <div class="form-group">
                <label for="noTelp">No. Telepon Anggota :</label>
                <input type="text" class="form-control" id="noTelp" placeholder="Masukkan No. Telepon">
            </div>
            <div class="form-group">
                <label>Alamat Anggota :</label>
                <textarea class="form-control" rows="3" placeholder="Masukkan Alamat"></textarea>
            </div>  
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
@endsection