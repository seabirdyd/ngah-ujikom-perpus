<?php
  if($this->session->userdata('level') == 'admin'||$this->session->userdata('level') == 'Petugas'){ ?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
        <div class="pull-left image">
         
          <br/>
          <!-- <img src="<?php echo base_url();?>assets_style/image/<?php echo $d->foto;?>" alt="#" c
          lass="user-image" style="border:2px solid #fff;height:auto;width:100%;"/> -->
          <?php }else{?>
            <!--<img src="" alt="#" class="user-image" style="border:2px solid #fff;"/>-->
            <i class="fa fa-user fa-4x" style="color:#fff;"></i>
          <?php }?>
        <!-- </div>
        <div class="pull-left info" style="margin-top: 5px;">
          <p><?php echo $d->nama;?></p>
          <p><?= $d->level;?>
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i>Online</a> -->
        </div>
        <br/>
        <br/>
        <br/>
        <br/>
		</div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
			<?php if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'Petugas'){?>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <li class="header">MAIN NAVIGATION</li>
                <li class="<?php echo ($this->uri->uri_string() == 'dashboard') ? 'active' : '';?>">
                    <a href="<?php echo base_url('dashboard');?>">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>

			<li class="treeview <?php if($this->uri->uri_string() == 'data/kategori'){ echo 'active';}?>
				<?php if($this->uri->uri_string() == 'data/rak'){ echo 'active';}?>
				<?php if($this->uri->uri_string() == 'data'){ echo 'active';}?>
				<?php if($this->uri->uri_string() == 'data/bukutambah'){ echo 'active';}?>
				<?php if($this->uri->uri_string() == 'data/bukudetail/'.$this->uri->segment('3')){ echo 'active';}?>
				<?php if($this->uri->uri_string() == 'data/bukuedit/'.$this->uri->segment('3')){ echo 'active';}?>">
                <a href="#">
                    <i class="fa fa-pencil-square"></i>
                    <span>Data </span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if($this->uri->uri_string() == 'data'){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'data/bukutambah'){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'data/bukudetail/'.$this->uri->segment('3')){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'data/bukuedit/'.$this->uri->segment('3')){ echo 'active';}?>">
                        <a href="<?php echo base_url("data");?>" class="cursor">
                            <span class="fa fa-book"></span> Data Buku
                            
                        </a>
                    </li>
                    <li class=" <?php if($this->uri->uri_string() == 'data/kategori'){ echo 'active';}?>">
                        <a href="<?php echo base_url("data/kategori");?>" class="cursor">
                            <span class="fa fa-tags"></span> Kategori
                            
                        </a>
                    </li>
                    <li class=" <?php if($this->uri->uri_string() == 'data/rak'){ echo 'active';}?>">
                        <a href="<?php echo base_url("data/rak");?>" class="cursor">
                            <span class="fa fa-list"></span> Rak
                            
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview 
                <?php if($this->uri->uri_string() == 'transaksi'){ echo 'active';}?>
                <?php if($this->uri->uri_string() == 'transaksi/kembali'){ echo 'active';}?>
                <?php if($this->uri->uri_string() == 'transaksi/pinjam'){ echo 'active';}?>
                <?php if($this->uri->uri_string() == 'transaksi/detailpinjam/'.$this->uri->segment('3')){ echo 'active';}?>
                <?php if($this->uri->uri_string() == 'transaksi/kembalipinjam/'.$this->uri->segment('3')){ echo 'active';}?>">
                <a href="#">
                    <i class="fa fa-exchange"></i>
                    <span>Transaksi</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if($this->uri->uri_string() == 'transaksi'){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'transaksi/pinjam'){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'transaksi/kembalipinjam/'.$this->uri->segment('3')){ echo 'active';}?>">
                        <a href="<?php echo base_url("transaksi");?>" class="cursor">
                            <span class="fa fa-upload"></span> Peminjaman
                            
                        </a>
                    </li>
                    <li class="<?php if($this->uri->uri_string() == 'transaksi/kembali'){ echo 'active';}?>">
                        <a href="<?php echo base_url("transaksi/kembali");?>" class="cursor">
                            <span class="fa fa-download"></span> Pengembalian
                        </a>
                    </li>
                </ul>
            </li>
            <li class="<?php if($this->uri->uri_string() == 'transaksi/denda'){ echo 'active';}?>">
                <a href="<?php echo base_url("transaksi/denda");?>" class="cursor">
                    <i class="fa fa-money"></i> <span>Denda</span>
                </a>
            </li>
            <li class="treeview">
            <a href="#">
              <i class="fa fa-file-text"></i>
              <span>Laporan</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right">1</span>
              </span>
            </a>
                <ul class="treeview-menu">
                <li><a href="<?=  base_url('laporan'); ?>"><i class="fa fa-circle-o"></i> Laporan Peminjaman</a></li>
                </ul>
            </li>


        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
 
  <?php }
?>