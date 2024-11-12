<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
 <a href="<?= base_url('home/t_user')?>">
            <button>+Tambah</button></a>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Username</th>
        <th>level</th>
        <th>aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no =1;
      foreach ($vira as $key => $ilham) {
      ?>

      <tr>
        <td><?= $no++ ?></td>
        <td><?= $ilham->username?></td>

        <td>
          <?php

          if ($ilham->level==1) {
            echo "Super Admin";
          }else if($ilham->level==2) {
            echo "Admin";
          }else if($ilham->level==3) {
            echo "Manajer";
          }else if ($ilham->level==4) {
            echo "Pelanggan";
          }else if ($ilham->level==5) {
            echo "Pengunjung";
          }
          ?>
        </td>
        <td>
          
          <a href="<?= base_url('home/reset/'.$ilham->id_user)?>">
            <button>Reset Password</button></a>
            <a href="<?= base_url('home/e_user/'.$ilham->id_user)?>">
            <button>Edit</button>
          </a>
          <a href="<?= base_url('home/hapus_user/'.$ilham->id_user)?>">
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