@extends('layouts.master')

@push('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Table Buku</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>Penulis Buku</th>
                    <th>Penerbit Buku</th>
                    <th>Tahun Penerbit</th>
                    <th>Stok</th>
                    <th width="200">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @forelse ($bukus as $key => $value)
                        <tr>
                            <td>{{ $key +1 }}</td>
                            <td>{{ $value->kode_buku }}</td>
                            <td>{{ $value->judul_buku }}</td>
                            <td>{{ $value->penulis_buku }}</td>
                            <td>{{ $value->penerbit_buku }}</td>
                            <td>{{ $value->tahun_penerbit }}</td>                            
                            <td>{{ $value->stok }}</td>
                                <a href="" class="btn-sm btn-info">Show</a>
                                <a href="" class="btn-sm btn-warning">Edit</a>
                                <a href="" class="btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">Data Masih Kosong</td>
                        </tr>
                    @endforelse
                  </tbody>
                </table>
                <div class="row">
                      <div class="col-sm-12 col-md-7 pt-4">
                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                      </div>
                  <div class="col-sm-12 col-md-5 pt-4">
                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                      <ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous">
                          <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                        <li class="paginate_button page-item active">
                          <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                        </li>
                        <li class="paginate_button page-item ">
                          <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                        </li>
                        <li class="paginate_button page-item ">
                          <a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                        </li>
                        <li class="paginate_button page-item ">
                          <a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                        </li>
                        <li class="paginate_button page-item ">
                          <a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                        </li>
                        <li class="paginate_button page-item ">
                          <a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                        </li>
                        <li class="paginate_button page-item next" id="example2_next">
                          <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
   

@endsection

@push('script')
<script src="{{ asset('/template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/template/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('/template/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('/template/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('/template/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/template/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('/template/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

@endpush