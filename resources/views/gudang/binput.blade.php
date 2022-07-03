@extends('layouts/master')

@section('content')
   
    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      </div><!-- /.container-fluid -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
            <div class="card">
              <div class="card-header">
            
                <button class="btn btn-primary text-right add" type="button">Tambah Data</button>
                
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <form class="form-group" id="validate" action={{route('barang.binput')}} method="post"  enctype="multipart/data" >
                  @csrf
                
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  
                    <th class="text-center">Nama Barang</th>
                    <th class="text-center">Satuan</th>
                    <th class="text-center">Stok</th>
                    <th class="text-center">Pilihan</th>
                  </tr>
                  </thead>
                  
                  <tbody>
                  
                 
              
                  </tbody>
                  
                  <tfoot>
                  <tr>
                  
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
          </div>
          <button class="btn btn-primary text-right" id="save"type="submit">Simpan</button>
        </form>

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    
@endsection
@section('script')
<script>
  //add row
  $(document).ready(function(){
    $('.add').click(function(){
      var html = '';
      html += '<tr>';
      html += '<td>';
      html += '<input type="text" class="form-control validate" name="nama_barang[]"  placeholder="Masukkan Nama Barang" required>';      
      html += '</td>';
      html += '<td><input type="text" class="form-control validate" name="satuan[]" placeholder="Masukkan Satuan Barang" required>';
      html += '</td>';
      html += '<td><input type="number" class="form-control validate" name="stok[]" placeholder="Masukkan Jumlah Stok" required>';
      html += '</td>';
      html += '<td>';
      html += '<button class="btn btn-danger text-right remove" type="button">hapus</button>';
      html += '</td>';
      html += '</tr>';
      $('tbody').append(html);
  });
  //remove row
  $(document).on('click', '.remove', function(){
    $(this).closest('tr').remove();
  });
  //alert if success and error
  // $('#save').click(function(){
  //   var error = 0;
  //   $('.validate').each(function(){
  //     if($(this).val() == ''){
  //       error++;
  //     }
  //   });
  //   if(error > 0){
  //     alert('Masih ada data yang kosong');
  //   }else{
  //     $('#validate').submit();
  //   }
  // });
  });
  
 </script>
<script>
  $('#validate').validate({
      reles: {
          'nama_barang[]': {
              required: true,
          },
          'satuan[]': {
              required:true,
          },
          'stok[]': {
              required:true,
          },
      },
  });
</script>


@endsection