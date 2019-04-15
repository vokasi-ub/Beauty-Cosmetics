@extends('layouts.master')
@section('content')



    <!-- Main content -->
    <section class="content">
    @foreach($data as $p)
      <div class="row">
			 <div class="box">
	   <form action="<?php echo url('updatesubKategori/'.$p->id_subkategori)?>" class="form-horizontal" method="post" enctype="multipart/form-data">
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
				<select name="id_kategori" id='id_kategori' class="form-control">
        <option value="">- select kategori </option>
          @foreach ($kategori as $row2)
          @if($row2->id_kategori == $row2->id_kategori)
            <option selected value="{{$row2->id_kategori}}" > {{$row2->nama_kategori}} </option>
          @else
            <option value="{{$row2->id_kategori}}" > {{$row2->nama_kategori}} </option>
          @endif
          @endforeach
          </select>
				
		</div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Nama Subkategori </span>
                <input title="Nama Subkategori"type="text" name="nama_subkategori" autocomplete="off" required class="form-control" value="{{$p->nama_subkategori}}">
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
      @endforeach
      
</section>

@endsection