<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felix Rawrrrrr</title>

    <!-- Menggunakan PHP untuk memanggil CSS Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap.min.css') ?>">

    <!-- Menggunakan PHP untuk memanggil jQuery dan Bootstrap JS -->
    <script type="text/javascript" src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/popper.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</head>
<body>
    <?php echo view('menu'); ?>
    <div class="container">
