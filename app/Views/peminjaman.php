<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
 <a href="<?= base_url('home/t_peminjaman')?>">
            <button>+Tambah</button></a>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Peminjam</th>
        <th>Tanggal Peminjaman</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no =1;
      foreach ($vira as $key => $ilham) {
      ?>

      <tr>
        <td><?= $no++ ?></td>
        <td><?= $ilham->nama_peminjam?></td>
        <td><?= $ilham->tanggal_peminjaman?></td>
        

      
        <td>
           <a href="<?= base_url('home/e_peminjaman/'.$ilham->id_peminjaman)?>">
            <button>Edit</button>
          </a>
          <a href="<?= base_url('home/hapus_peminjaman/'.$ilham->id_peminjaman)?>">
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