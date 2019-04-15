@extends('layouts.master')
@section('content')

	@foreach ($produk as $row)

    <!-- Main content -->
    <section class="content">
      <div class="row">
			 <div class="box">
	   <form action="<?php echo url('updateproduk/'.$row->id_produk)?>" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Form edit data produk</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
        <select name="id_subkategori" id='id_subkategori' class="form-control">
        <option value="">- select Sub Kategori </option>
        @foreach ($subkategori as $row2)
        @if($row2->id_subkategori == $row->id_subkategori)
            <option selected value="{{$row2->id_subkategori}}" > {{$row2->nama_subkategori}} </option>
        @else
        <option  value="{{$row2->id_subkategori}}" > {{$row2->nama_subkategori}} </option>
            @endif
          @endforeach
          </select>
				
		</div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Nama produk </span>
                <input title="Nama Produk"type="text" name="nama_produk" autocomplete="off" required class="form-control" value="{{$row->nama_produk}}">
				</div>
				
		</div>
        <div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Stok </span>
                <input title="Stok"type="text" name="stok" autocomplete="off" required class="form-control" value="{{$row->stok}}">
				</div>
				
		</div>
        <div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Image </span>
                <input title="Image"type="file" name="gambar" autocomplete="off"  class="form-control" value="/image/{{ $row->image }}">
				</div>
				
		</div>
        <div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Deskripsi </span>
                <input title="Deskripsi"type="text" name="deskripsi" autocomplete="off" required class="form-control" value="{{$row->deskripsi}}">
				</div>
				
		</div>
        <div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Harga </span>
                <input title="Harga"type="text" name="harga" autocomplete="off" required class="form-control" value="{{$row->harga}}">
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