@extends('layouts.master')
@section('content')

	

    <!-- Main content -->
    <section class="content">
      <div class="row">
			 <div class="box">
	   <form action="<?php echo url('updateKategori/'.$data->id_kategori)?>" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Form edit data kategori</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Nama Kategori </span>
                <input title="Nama Kategori"type="text" name="nama_kategori" autocomplete="off" required class="form-control" value="{{$data->nama_kategori}}">
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
    
@endsection