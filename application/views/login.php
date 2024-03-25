<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa; /* Warna background */
        }

        .container {
            width: 100%;
            max-width: 400px; /* Lebar maksimum container */
            padding: 20px;
            background-color: #fff; /* Warna background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
            text-align: center;
        }

        .logo {
            width: 100px; /* Lebar logo */
            height: auto; /* Tinggi logo menyesuaikan lebar */
            margin-bottom: 20px; /* Jarak antara logo dan teks */
        }

        h1 {
            margin-bottom: 30px; /* Jarak antara teks dengan form */
            color: #333; /* Warna teks */
        }

        .card {
            background-color: #f8f9fa; /* Warna background */
            border: none;
            border-radius: 10px;
        }

        .card-body {
            padding: 20px;
        }

        .form-control {
            margin-bottom: 20px; /* Jarak antar input */
        }

        .btn-primary {
            width: 100%;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">
            <img src="https://genbitegal.com/theme/images/logo_genbi_tegal.png" alt="logo" class="logo">
        </div>
        <div class="col">
            <br>
            <h1>GenBi</h1>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <h3 class="mb-4">Masuk Ke GenBi</h3>
            <?php 
                // Check if there's an error message
                if (!empty($error_message)) {
                    echo '<div class="error-message">' . $error_message . '</div>';
                }
            ?>
            <?php echo form_open('auth/login'); ?>
                <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <?php echo form_close(); ?>
        </div>
    </div>
</div>

</body>
</html>
