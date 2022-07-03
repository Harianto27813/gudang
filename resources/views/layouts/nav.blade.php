<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>  
            </ul>
          </li>
<!---taro menu anda disini--->
<li class="nav-item">
  <a href="#" class="nav-link">
    <i class="far fa-circle nav-icon"></i>
    <p>
      GUDANG
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href={{url('barang')}} class="nav-link">
        <i class="far fa-dot-circle nav-icon"></i>
        <p>daftar barang</p>
      </a>
    </li>
    <li class="nav-item">
      <a href={{url('barangmasuk')}} class="nav-link">
        <i class="far fa-dot-circle nav-icon"></i>
        <p>barang masuk</p>
      </a>
    </li>
    <li class="nav-item">
      <a href={{url('barangkeluar')}} class="nav-link">
        <i class="far fa-dot-circle nav-icon"></i>
        <p>barang keluar</p>
      </a>
    </li>
  </ul>
</li>
<!---ini adalah batas--->
        </ul>
</nav>

