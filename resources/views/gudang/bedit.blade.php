@extends('layouts.master')
@section('content')
<section class="content">
    <form class="form-group" action={{route('barang.bedit')}} method="PUT"  enctype="multipart/data" >
    @csrf
        <div class="row">
        <div class="col-2">
        </div>
      <div class="col-8">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tambah Data</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
      
          <div class="card-body">
            <div class="form-group">
              
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang',$barangs->nama_barang') }}" placeholder="Masukkan Nama Barang">
          @error('nama_barang')
              <div class="invalid-feedback">
                  nama barang harus di isi
              </div>   
              @enderror 
            </div>
            <div class="form-group">
              <label for="satuan">Satuan</label>
              <input type="text" class="form-control @error('satuan') is-invalid @enderror" name="satuan" value="{{ old('satuan',$barangs->satuan) }}" placeholder="Masukkan Satuan Barang">
            @error('satuan')
              <div class="invalid-feedback">
                  satuan barang harus di isi
              </div>
              @enderror
            </div>
            <div class="form-group">
                <label for="stok">Stok Barang</label>
                <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ old('stok',$barangs->stok) }}" placeholder="Masukkan Jumlah Stok">
            @error('stok')
              <div class="invalid-feedback">
                stok barang harus di isi 
              </div>
              @enderror  
            </div>
            </div>

          <div class="col-2">
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    </div>
    <div class="row">
        <div class="col-2">
        </div>
      <div class="col-8 text-right">
        <a href="{{url('barang')}}" class="btn btn-secondary text-left">Cancel</a>
        <button type="submit" class="btn btn-md btn-primary text-right">SIMPAN</button>
      </div>
      <div class="col-2">
    </div>
</div>
</form>
  </section>

@endsection