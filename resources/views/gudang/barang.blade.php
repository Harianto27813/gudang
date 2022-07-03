@extends('layouts/master')

@section('content')
   
    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="card-title col-9">DataTable with default features</h3>
                <a class="btn btn-primary text-right" href="{{url('barang/binput')}}" role="button">Tambah Data</a>
              </button>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="text-center">id/No</th>
                    <th class="text-center">Nama Barang</th>
                    <th class="text-center">Satuan</th>
                    <th class="text-center">Stok</th>
                    <th class="text-center">Pilihan</th>
                  </tr>
                  </thead>
                  
                  <tbody>
                    @foreach($barangs as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nama_barang}}</td>
                    <td>{{$item->satuan}}</td>
                    <td>{{$item->stok}}</td>
                    <td class="text-center">
                      <form method="delete" class="d-inline" action="{{route('barang.delete',$item->id)}}" onclick="return confirm('Apakah anda ingin Menghapus data?')">
                        @method('delete')
                        @csrf
                      <button type="submit" class="btn btn-danger">Hapus</button>
                      </form>
                    <form method="edit" class="d-inline" action="{{route('barang.bedit',$item->id)}}">
                      @method('edit')
                      @csrf
                      <button type="submit" class="btn btn-warning">Warning</button>
                      <span></span>
                    </form>
                    </td>
                  </tr>
                 
                  @endforeach
                  </tbody>
                  
                  <tfoot>
                  <tr>
                    <th class="text-center">id/No</th>
                    <th class="text-center">Nama Barang</th>
                    <th class="text-center">Satuan</th>
                    <th class="text-center">Stok</th>
                    <th class="text-center">Pilihan</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    
@endsection
@section('script')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-9:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


@endsection