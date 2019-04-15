@extends('layouts.master')
@section('content')

  

    <!-- Main content -->
    <section class="content">
      <div class="row">
			 <div class="box">
	   <form action="{{url('tambahsubkategori')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Form add data subkategori</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
				
		</div>
		<div class="box-body">
    <select name="id_kategori" id='id_kategori' class="form-control">
        <option value="">- select kategori </option>
          @foreach ($data as $row)
            <option value="{{$row->id_kategori}}" > {{$row->nama_kategori}} </option>
          @endforeach
          </select>
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Nama Subkategori </span>
                <input title="Nama Subkategori"type="text" name="nama_subkategori"  required class="form-control">
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
          <!-- /.box -->
@endsection