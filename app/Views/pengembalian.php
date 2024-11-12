<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<a href="<?= base_url('home/t_pengembalian')?>">
            <button>+Tambah</button></a>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Buku</th>
        <th>Tanggal Pengembalian</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no =1;
      foreach ($tukam as $key => $ilham) {
      ?>

      <tr>
        <td><?= $no++ ?></td>
        <td><?= $ilham->nama_buku?></td>
        <td><?= $ilham->tanggal_dikembalikan?></td>
        <td><?= $ilham->status?></td>

      
        <td>
          <a href="<?= base_url('home/e_pengembalian/'.$ilham->id_pengembalian)?>">
            <button>Edit</button>
          </a>
          <a href="<?= base_url('home/hapus_pengembalian/'.$ilham->id_pengembalian)?>">
            <button>Delete</button>
          </a>
        </td>
      </tr>
      <?php
    } 
    ?>
      
      
    </tbody>
  </table>
</body>
</html>