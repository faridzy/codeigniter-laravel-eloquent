<ul class="sidebar-menu">
    <li class="header">Menu Utama</li>
    <li class="treeview">
        <a href="<?php echo base_url() ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data User</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo base_url() ?>users">
                    <i class="fa fa-circle-o"></i> User
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() ?>roles">
                    <i class="fa fa-circle-o"></i> Role User
                </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Produk</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url() ?>">
                  <i class="fa fa-circle-o"></i> Produk
              </a>
            </li>
            <li>
                <a href="<?php echo base_url() ?>productcategories">
                    <i class="fa fa-circle-o"></i> Kategori Produk
                </a>
            </li>
          
        </ul>
    </li>
  </ul>


