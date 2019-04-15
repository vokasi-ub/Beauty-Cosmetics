@extends('layouts.master')
@section('content')

	@foreach ($detailpesanan as $row)

    <!-- Main content -->
    <section class="content">
      <div class="row">
			 <div class="box">
	   <form action="<?php echo url('updatedetailpesanan/'.$row->id_pesanan)?>" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Form edit data detail pesanan</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
        <div class="input-group">
        <select name="id_pesanan" id='id_pesanan' class="form-control">
        <option value="">- select produk </option>
          @foreach ($detailpesanan as $row2)
            <option value="{{$row2->id_produk}}" > {{$row2->nama_produk}} </option>
          @endforeach
          </select>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Nama </span>
                <input title="Nama"type="text" name="nama" autocomplete="off" required class="form-control" value="{{$row->nama}}">
				</div>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list-alt"></i> Alamat</span>
                <input title="Alamat"type="text" name="alamat" autocomplete="off" required class="form-control" value="{{$row->alamat}}">
				</div>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list-alt"></i> Tanggal Pemesanan</span>
                <input title="Tanggal pemesanan"type="date" name="tanggal_pemesanan" autocomplete="off" required class="form-control" value="{{$row->tanggal_pemesanan}}">
				</div>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list-alt"></i> Total Harga</span>
                <input title="Total Harga"type="text" name="total_harga" autocomplete="off" required class="form-control" value="{{$row->total_harga}}">
				</div>
                
				
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
    @endforeach	
@endsection