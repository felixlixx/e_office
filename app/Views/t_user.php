<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>
<body>
    <h1>Tambah User</h1>
        <form action="<?= base_url('home/aksi_t_user') ?>" method="POST">
    <form action="add_book.php" method="POST">
        <label for="title">Username:</label><br>
        <input type="text" id="title" name="username" required><br><br>

        <label for="author">Password:</label><br>
        <input type="text" id="author" name="password" required><br><br>

        <label for="publisher">Level:</label><br>
        <input type="text" id="publisher" name="level"><br><br>

        <input type="submit" value="Tambah User">
    </form>
</body>
</html>
