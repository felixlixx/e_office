<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<a href="<?= base_url('home/t_peminjam')?>">
            <button>+Tambah</button></a>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Peminjam</th>
        <th>Alamat Peminjam</th>
        <th>No Tlp</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no =1;
      foreach ($mor as $key => $ilham) {
      ?>

      <tr>
        <td><?= $no++ ?></td>
        <td><?= $ilham->nama?></td>
        <td><?= $ilham->alamat?></td>
        <td><?= $ilham->no_tlp?></td>

      
        <td>
          <a href="<?= base_url('home/e_peminjam/'.$ilham->id_peminjam)?>">
            <button>Edit</button>
          </a>
           <a href="<?= base_url('home/hapus_peminjam/'.$ilham->id_peminjam)?>">
            <button>Hapus</button>
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