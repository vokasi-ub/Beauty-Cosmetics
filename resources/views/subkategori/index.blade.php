@extends('layouts.master')
@section('content')



    <section class="content-header">
      <h1>
        Beauty Cosmetics
      </h1>
</center>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Subkategori Cosmetics</h3> 
              <h4><a href="{{url('tambahsubdata')}}">Add data</a></h4>
            </div>
            <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="cari" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
         <tr>
  <th>Id Subkategori</th>
  <th>Id kategori</th>
  <th>Nama SubKategori</th>
  </tr>
  <?php $no=1 ?>
  @foreach($subkategori as $row)
    <tr>
    <td> <center>{{$no++}} </center> </td>
    <td>{{$row->id_kategori}}</td>
      <td>{{$row->nama_subkategori}}</td>
      <td><a href="editsubKategori/{{$row->id_subkategori}}">Edit</a> | <a href="hapussubKategori/{{$row->id_subkategori}}" onClick="return confirm('Are you sure you want to delete?')
									" class="btn default"><i class="fa fa-trash-o"></i> Hapus</a></td>
    </tr>
  @endforeach
</table>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          </section>
          



  

    

   
@endsection
