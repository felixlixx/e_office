<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?= session()->get('level')?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Data Master</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('home/buku')?>">Buku</a></li>
            <li><a class="dropdown-item" href="<?= base_url('home/petugas')?>">Petugas</a></li>
            <li><a class="dropdown-item" href="<?= base_url('home/peminjam')?>">Peminjam</a></li>
            <li><a class="dropdown-item" href="<?= base_url('home/user')?>">Reset Password</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Transaksi</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('home/peminjaman')?>">Peminjaman</a></li>
            <li><a class="dropdown-item" href="<?= base_url('home/pengembalian')?>">Pengembalian</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Laporan</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('home/user')?>">Laporan User</a></li>
            <li><a class="dropdown-item" href="<?= base_url('home/peminjaman')?>">Laporan Peminjaman</a></li>
            <li><a class="dropdown-item" href="<?= base_url('home/pengembalian')?>">Laporan Pengembalian</a></li>
          </ul>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('home/logout')?>">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>