<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
           
            background-color: #f8f9fa; /* Warna background */
            background-image: url('https://genbitegal.com/theme/images/cover1.jpg'); /* Background Image */
            background-size: cover; /* Untuk memastikan gambar background menutupi seluruh halaman */
            background-position: center; /* Untuk menempatkan gambar background di tengah halaman */
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.6); /* Warna background dengan opacity */
            backdrop-filter: blur(10px); /* Efek blur pada background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
            padding: 20px;
        }

        .myDiv, .myDivR {
            background-color: forestgreen; /* Warna latar belakang */
            color: white;
            font-size: 35px;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            display: flex;
            align-items: center;
        }

        .myDivR {
            background-color: red; /* Warna latar belakang */
        }

        .myDiv img, .myDivR img {
            margin-left: auto;
        }

        .content {
            color: black; 
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .content b {
            font-size: 45px;
            margin-right: 20px;
            text-transform: uppercase;
        }

        .content h4, .content h3 {
            margin-top: 10px;
            color:  rgba(0, 0, 0, 0.6) ;
            font-size: 18px;
        }

        .content h3 {
            font-size: 22px;
        }

        .logo {
            width: 200px; /* Lebar logo */
            height: auto; /* Tinggi logo menyesuaikan lebar */
            margin-left: auto;
        }
        .qr-code {
           
            text-align: center; /* Posisi teks ke tengah */
            margin-left: auto; /* Geser QR code ke kanan */
            margin-right: auto; /* Geser QR code ke kanan */
            display: block; /* Agar QR code tampil di tengah */
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php if ($status == 'YES'): ?>
    <div class="container">
        <div class="myDiv">
            <h2>SELAMAT! ANDA LOLOS</h2>
            <!-- <img src="https://genbitegal.com/theme/images/logo_genbi_tegal.png" alt="logo" class="logo"> -->
        </div>
        <div class="content">
            <div style="margin-left: 50px;">
                <b><?php echo $nama; ?></b>
                <h4><?php echo $password; ?></h4>
                <h3><?php echo $univ; ?></h3>
                <h3><?php echo $prodi; ?></h3>
            </div>
            <img src="https://genbitegal.com/theme/images/logo_genbi_tegal.png" alt="logo" class="logo" style="margin-right: 50px;">
        </div>
        <div class="content">
            <div class="row" style="margin-left: 40px;">
                <div class="col" >
                    <div style="height: 40px"></div>
                    <h2>Silakan scan QR untuk gabung ke grup anggota GenBi</h2>
                </div>
             
                <div class="col">
<div class="qr-code">

    <img src="https://static.vecteezy.com/system/resources/previews/021/115/774/original/qr-code-free-png.png" alt="logo" class="logo" style="margin-right: 50px;">
</div>
                </div>
            </div>
        </div>
    </div>
<?php elseif ($status == 'NO'): ?>
    <div class="container">
        <div class="myDivR">
            <h2>MOHON MAAF, ANDA BELUM LOLOS</h2>
            <!-- <img src="https://genbitegal.com/theme/images/logo_genbi_tegal.png" alt="logo" class="logo"> -->
        </div>
        <div class="content">
            <div style="margin-left: 50px;">
                <b><?php echo $nama; ?></b>
                <h4><?php echo $password; ?></h4>
                <h3><?php echo $univ; ?></h3>
                <h3><?php echo $prodi; ?></h3>
            </div>
            <img src="https://genbitegal.com/theme/images/logo_genbi_tegal.png" alt="logo" class="logo" style="margin-right: 50px;">
        </div>
        <div style="height: 200px"></div>
    </div>
<?php else: ?>
    <p>Status not found.</p>
<?php endif; ?>



</body>
</html>
