<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
                <a href="{{url('/')}}" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
            <!-- Tabel Data -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Tabel Data Master
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/makanan')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Makanan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/pelanggan')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Pelanggan</p>
                  </a>
                </li>
               <li class="nav-item">
                  <a href="{{url('/pegawai')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Pegawai</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/meja')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Meja</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Tabel Transaksi -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Tabel Data Transaksi
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/tables/simple.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Simple Tables</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/data.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>DataTables</p>
                  </a>
                </li>
              </ul>
            </li>
        </nav>