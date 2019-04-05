@extends('layouts.master')
@section('content')

  

    <!-- Main content -->
    <section class="content">
      <div class="row">
			 <div class="box">
	   <form action="{{url('tambahdetailpesanan')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Form add data Detail Pesanan</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <select name="id_pesanan" id='id_pesanan' class="form-control">
        <option value="">- select produk </option>
          @foreach ($detail_pesanan as $row)
            <option value="{{$row->id_produk}}" > {{$row->nama_produk}} </option>
          @endforeach
          </select>
        <div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Nama Kategori </span>
                <input title="Nama Kategori"type="text" name="nama_kategori"  required class="form-control">
				</div><br>
				
		</div>
        <div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Nama </span>
                <input title="Nama "type="text" name="nama"  required class="form-control">
				</div><br>
				
		</div>
        <div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Alamat </span>
                <input title="Alamat"type="text" name="alamat"  required class="form-control">
				</div><br>
				
		</div>
        <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list-alt"></i> Tanggal pemesanan</span>
                <input title="Tanggal Pemesanan"type="date" name="tanggal_pemesanan" autocomplete="off" required class="form-control">
				</div>

        
        <div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Jumlah Pesanan </span>
                <input title="Jumlah Pesanan"type="text" name="jumlah_pesanan"  required class="form-control">
				</div><br>
				
		</div>
        <div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Total harga </span>
                <input title="Total Harga"type="text" name="total_harga"  required class="form-control">
				</div><br>
				
		</div>
        
                
        <div class="box-footer">
							<div class="col-md-offset-10 col-md-9">
								
									<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
							</div>
		
        </div>
		</form>
		</div>
      </div>
      </div>
</section>
          <!-- /.box -->
@endsection