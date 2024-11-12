<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<a href="<?= base_url('home/t_petugas')?>">
            <button>+Tambah</button></a>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>Umur</th>
        <th>No Tlp</th>
        <th>aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no =1;
      foreach ($bryan as $key => $ilham) {
      ?>

      <tr>
        <td><?= $no++ ?></td>
        <td><?= $ilham->nama_lengkap?></td>
        <td><?= $ilham->jk?></td>
        <td><?= $ilham->umur?></td>
        <td><?= $ilham->No_tlp?></td>

      
        <td>
          <a href="<?= base_url('home/e_petugas/'.$ilham->id_ptgs)?>">
            <button>Edit</button>
          </a>
          <a href="<?= base_url('home/hapus_petugas/'.$ilham->id_ptgs)?>">
            <button>Delete</button>
          </a>
      </tr>
      <?php
    } 
    ?>
      
      
    </tbody>
  </table>
</body>
</html>