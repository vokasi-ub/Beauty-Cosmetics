@extends('layouts.master')
@section('content')

  

    <!-- Main content -->
    <section class="content">
      <div class="row">
			 <div class="box">
	   <form action="{{url('tambahproduk')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Form add data Produk</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <select name="id_subkategori" id='id_subkategori' class="form-control">
        <option value="">- select produk </option>
          @foreach ($produk as $row)
            <option value="{{$row->id_subkategori}}" > {{$row->nama_subkategori}} </option>
          @endforeach
          </select>

        <div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Nama Produk </span>
                <input title="Nama Produk"type="text" name="nama_produk"  required class="form-control">
				</div><br>
        </div>

        <div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Stok </span>
                <input title="Stok"type="text" name="stok"  required class="form-control">
				</div><br>
        </div>

        <div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Image </span>
                <input title="Image"type="file" name="gambar"  required class="form-control">
				</div><br>
        </div>
				
        <div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Deskripsi </span>
                <input title="Deskripsi"type="text" name="deskripsi"  required class="form-control">
				</div><br>
        </div>

        <div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Harga </span>
                <input title="Harga"type="text" name="harga"  required class="form-control">
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