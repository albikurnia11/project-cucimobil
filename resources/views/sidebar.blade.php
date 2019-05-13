<ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Fitur</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="{{ url('/transaksi/form') }}">Tambah Data</a>
          <a class="dropdown-item" href="{{ url('/data/form') }}">Daftar Harga</a>
          <a class="dropdown-item" href="{{ url('/diskon/form') }}">Promo</a>
          <a class="dropdown-item" href="">Data Perbulan</a>
          <h6 class="dropdown-header">Logout Screens:</h6>
          <a class="dropdown-item" href="{{('/logout')}}">Logout</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>