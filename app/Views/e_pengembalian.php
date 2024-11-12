<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengembalian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
            color: #555;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit pengembalian</h1>
        <form action="<?= base_url('home/aksi_e_pengembalian') ?>" method="POST">
            <div class="form-group">
                <label for="namabuku">Nama Buku:</label>
                <input type="text" id="namab" name="namabuk" value="<?=$felix->nama_buku?>"required>
            </div>
            <div class="form-group">
                <label for="alamat">Tanggal Dikembalikan:</label>
                <input type="date" id="tgl" name="tgldikem" value="<?=$felix->tanggal_dikembalikan?>"required>
            </div>

            <div class="form-group">
    <label for="status">Status:</label>
    <select id="status" name="stat" class="form-control" value="<?=$felix->status?>"required>
        <option value="">Pilih</option>
        <option value="dikembalikan">Dikembalikan</option>
        <option value="tidak dikembalikan">Tidak Dikembalikan</option>
    </select>
</div>
            <input type="hidden" name="id" value="<?=$felix->id_pengembalian?>">
            <input type="submit" value="Edit Pengembalian">
        </form>
    </div>
</body>
</html>
