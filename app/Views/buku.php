<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
 <a href="<?= base_url('home/t_buku')?>">
            <button>+Tambah</button></a>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Buku</th>
        <th>Pengarang</th>
        
        <th>aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no =1;
      foreach ($felix as $key => $ilham) {
      ?>

      <tr>
        <td><?= $no++ ?></td>
        <td><?= $ilham->nama_buku?></td>
        <td><?= $ilham->pengarang?></td>



        <td>
          <a href="<?= base_url('home/e_buku/'.$ilham->id_buku)?>">
            <button>Edit</button>
          </a>
          <a href="<?= base_url('home/hapus_buku/'.$ilham->id_buku)?>">
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