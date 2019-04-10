@extends('layouts.master')
@section('content')
<style>
.majalah{
	line-height: 50px;
	margin-bottom: 5px;
	text-decoration: underline;
	font-family: segoe ui;
	font-size: 28px;
	text-align: center;
	height: 50px;
	border-bottom: 1px solid black;
}
.sembunyi-box
	{
		display: none;
	}
  .hidden-box
	{
		display: none;
	}
</style>

<body>
<div class="kolom12">
<marquee>
				<img src="{{ asset('tema/dist/img/20190406_135535_0001.png') }}" width="100%" heigth="50%">
        <img src="{{ asset('tema/dist/img/20190406_140027_0000.png') }}" width="100%" heigth="50%">	
        <img src="{{ asset('tema/dist/img/20190406_140248_0001.png') }}" width="100%" heigth="50%">
        </marquee>
	</div>
  <div class="kolom12">
		<div class="majalah">Import</div>
	</div>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h5>UV PERFECT MATTE & FRESH SPF50|PA++++</h5>
              <img src="{{ asset('tema/dist/img/loreal1.jpg') }}"  width="100%" heigth="50%">
              
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h5>INFALLIBLE TOTAL COVER COLOR CORRECTING KITIN FALLIBLE</h5>

              <img src="{{ asset('tema/dist/img/loreal2.jpg') }}" width="100%" heigth="50%">
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h5>MAT MAGIQUE LIQUID FOUNDATION MAT MAGIQUE</h5>

              <img src="{{ asset('tema/dist/img/loreal3.jpg') }}" width="100%" heigth="50%">
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h5>SUPER LINER EXPRESSIONIST SUPER LINER</h5>

              <img src="{{ asset('tema/dist/img/loreal4.jpg') }}" width="100%" heigth="50%">
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="kolom12">
		<div class="majalah">Eksport</div>
	</div>
  <!-- Main content -->
  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h5>Sariayu Putih Langsat Body Wash</h5>
              <img src="{{ asset('tema/dist/img/sariayu1.jpg') }}"  width="100%" heigth="50%">
              
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h5>Viva FACE TONIC</h5>

              <img src="{{ asset('tema/dist/img/viva1.jpg') }}" width="100%" heigth="50%">
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h5>LT PRO LOOSE POWDER</h5>

              <img src="{{ asset('tema/dist/img/ltpro1.jpg') }}" width="100%" heigth="50%">
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h5>Warna Metallic Matte Lip Cream - Fuschia</h5>

              <img src="{{ asset('tema/dist/img/mustikaratu1.jpg') }}" width="100%" heigth="50%">
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      </section>
      </body>
@endsection
