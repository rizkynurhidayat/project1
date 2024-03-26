<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-l3N9KqvLGGJN20BqGF1zR6yqTnqMqgIBnKsOsdvBlqPgnp+3uMxrc2cDbTrBvWvrweGRoDth/f1n8WTqy33qgw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            transition: transform 0.3s ease; /* Transisi saat halaman dimuat */
        }

        .container:hover {
            transform: translateY(-5px); /* Efek naik saat hover */
        }

        .logo {
            width: 100px; /* Lebar logo */
            height: auto; /* Tinggi logo menyesuaikan lebar */
            margin-bottom: 20px; /* Jarak antara logo dan teks */
        }

        h3 {
            margin-bottom: 30px; /* Jarak antara teks dengan form */
            color: #333; /* Warna teks */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Font */
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
            border: 1px solid #ced4da; /* Border input */
            border-radius: 5px; /* Border radius input */
            padding: 12px; /* Padding input */
            transition: border-color 0.3s ease; /* Transisi warna border saat hover */
        }

        .form-control:focus {
            outline: none; /* Hapus focus outline */
            border-color: #80bdff; /* Warna border saat input dalam keadaan focus */
        }

        .btn-primary {
            width: 100%;
            background-color: #007bff; /* Warna background tombol */
            border: none;
            border-radius: 5px; /* Border radius tombol */
            padding: 12px; /* Padding tombol */
            transition: background-color 0.3s ease; /* Transisi warna background saat hover */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Warna background tombol saat hover */
        }

        .error-message {
            color: red;
            margin-top: 10px;
            font-size: 14px; /* Ukuran teks pesan error */
        }
        
        .show-password {
            background-color: transparent; /* Warna background tombol */
            border: none;
            cursor: pointer;
            color: #007bff; /* Warna teks tombol */
            transition: color 0.3s ease; /* Transisi warna teks saat hover */
        }

        .show-password:hover {
            color: #0056b3; /* Warna teks tombol saat hover */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">
            <div style="height: 40px"></div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/BI_Logo.png/799px-BI_Logo.png" alt="logo" class="logo" style="width: 90%; height: auto;">
        </div>
        <div class="col">
            <img src="https://genbitegal.com/theme/images/logo_genbi_tegal.png" alt="logo" class="logo">
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <h3 class="mb-4">Masuk ke GenBi</h3>
            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>
            <?php echo form_open('auth/login'); ?>
                <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                    <span class="input-icon"><i class="fas fa-user"></i></span> <!-- Icon pada input field -->
                </div>
               
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <span class="password-toggle" onclick="togglePassword()"><i class="fas fa-eye"></i></span> <!-- Tombol visibilitas password -->
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <?php echo form_close(); ?>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        var passwordField = document.querySelector('input[name="password"]');
        var passwordToggle = document.querySelector('.password-toggle');
        
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            passwordToggle.innerHTML = '<i class="fas fa-eye-slash"></i>';
        } else {
            passwordField.type = 'password';
            passwordToggle.innerHTML = '<i class="fas fa-eye"></i>';
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-3fufhuvOeL75f1qVp+r15aPFzn56QF6zNl9Lo5/fT4uM8N4ChY8+L/B+1dXMs5gVdFmxB7Q0iqSdFY6jHMIPOA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</body>
</html>

