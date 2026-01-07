<?php
session_start();
// Redirect ke dashboard yang sesuai jika sudah login, atau tampilkan halaman landing
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['role'] === 'admin') {
        header("Location: admin/dashboard.php");
    } else {
        header("Location: user/dashboard.php");
    }
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Concert App</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS UI (DISESUAIKAN DENGAN LOGIN) -->
    <style>
        body{
            background: linear-gradient(to right, #e6ecff, #eef2ff);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .landing-wrapper{
            width: 1000px;
            height: 560px;
            background: #fff;
            border-radius: 28px;
            display: flex;
            overflow: hidden;
            box-shadow: 0 30px 60px rgba(0,0,0,.15);
        }

        /* LEFT */
        .landing-left{
            width: 50%;
            padding: 80px;
        }

        .landing-left h1{
            font-weight: 800;
            margin-bottom: 20px;
        }

        .landing-left p{
            color: #6b7280;
            font-size: 16px;
            margin-bottom: 40px;
        }

        .action-box{
            display: flex;
            flex-direction: column;
            gap: 16px;
            width: 260px;
        }

        .btn-login{
            background: #2563eb;
            color: #fff;
            border: none;
            height: 52px;
            border-radius: 26px;
            font-weight: 600;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-login:hover{
            background: #1e4fd6;
            color: #fff;
        }

        .btn-register{
            border: 2px solid #2563eb;
            color: #2563eb;
            height: 52px;
            border-radius: 26px;
            font-weight: 600;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-register:hover{
            background: #2563eb;
            color: #fff;
        }

        /* RIGHT */
        .landing-right{
            width: 50%;
            background: #4f2bd8;
            color: #fff;
            border-top-left-radius: 300px;
            border-bottom-left-radius: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px;
        }
    </style>
</head>
<body>

<div class="landing-wrapper">

    <!-- LEFT -->
    <div class="landing-left">
        <h1>LOKÉT MUSIK</h1>
        <p>
            Temukan konser terbaik, pesan tiket dengan mudah,
            dan jadilah bagian dari pengalaman musik yang tak terlupakan.
        </p>

        <div class="action-box">
            <a href="auth/login.php" class="btn-login">
                LOGIN
            </a>
            <a href="auth/register.php" class="btn-register">
                DAFTAR
            </a>
        </div>
    </div>

    <!-- RIGHT -->
    <div class="landing-right">
        <div>
            <h1 class="fw-bold">Welcome!</h1>
            <p class="mt-3">
                The stage is set.<br>
                Join us and enjoy live concerts effortlessly.
            </p>
        </div>
    </div>

</div>

</body>
</html>
