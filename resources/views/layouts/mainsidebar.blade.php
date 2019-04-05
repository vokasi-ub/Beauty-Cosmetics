<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('tema/dist/img/IMG_9584.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Husnul Khotimah</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
		
		<li class="active">
          <a href="{{url('dashboard2')}}">
            <i class="fa fa-dashboard"></i> <span>HOME</span>
           
          </a>
          
        </li>  
		
        <li class="active">
          <a href="{{url('kategoricosmetics')}}">
            <i class="fa fa-dashboard"></i> <span>Kategori Kosmetik</span>
           
          </a>
          
        </li>   

			 <li class="active">
          <a href="{{url('subkategori')}}">
            <i class="fa fa-dashboard"></i> <span>Sub Katgeori</span>

          </a>
          
        </li> 
		
		<li class="active">
          <a href="{{url('produk')}}">
            <i class="fa fa-dashboard"></i> <span> Produk</span>
            
          </a>
          
        </li>
		
		<li class="active">
          <a href="{{url('detailpesanan')}}">
            <i class="fa fa-dashboard"></i> <span>Detail Pesanan</span>
            
          </a>
        </li>
		
              </ul>
    </section>