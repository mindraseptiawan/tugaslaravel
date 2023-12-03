<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($meta['title']) ? $meta['title'] : 'tugaslaravel' }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <audio id="backgroundMusic" loop>
        <source src="https://www.youtuberepeater.com/watch?v=zbPt9LkPT4c" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>
    <script>
            document.getElementById('playButton').addEventListener('click', function() {
        var audio = document.getElementById('backgroundMusic');
        audio.play();
    });
    </script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Poppins);
    </style>
</head>

<body>
    <nav class="navbar">
        <img title="Muhammad Indra Septiawan" style="width: 50px;margin-left: 20px;border-radius: 7px;" src="https://media2.giphy.com/media/f9TJcIkuWrL0EJMQ36/giphy.gif?cid=ecf05e4737bzqad98vtsvyaheui15rpuawb4jfahu8i9tncn&rid=giphy.gif&ct=g"></img>
        <h3 title="Muhammad Indra Septiawan" style="margin-left: -10px;color: white;font-weight: 1500;margin-top: 10px;cursor:default;">ARDNI</h3>
        <a title="Halaman Utama" class="btnservice" href="<?= url('') ?>">Home</a>
        <a title="Tabel User" class="btnservice" href="<?= url('mahasiswa') ?>">Daftar Mahasiswa</a>
        <a title="Tambah data" class="btnservice" href="<?= url('matakuliah') ?>">Daftar Matakuliah</a>
        <a title="Cari Data" class="btnservice" href="<?= url('https://www.instagram.com/prima_pangasa07/') ?>">gatau</a>
        <button class="btnlogin" href="<?= url('') ?>" style="margin-left:auto">P Login</button>
    </nav>


    <main>
        @yield('content')

        <head>

        </head>
    </main>

    <footer>
        <div class="container  text-center">
            <marquee title="kakak" class="title-footer">Copyright Web Tugas Laravel Metode Pemrograman Modern 2023 &copy; <?= date('Y') ?></marquee>
        </div>
    </footer>

    <!-- Tambahkan script JavaScript atau lainnya di sini -->
</body>
<style>
    .navbar a {
        position: relative;
        font-size: 1.1em;
        color: white;
        text-decoration: none;
        margin-left: 40px;
        font-weight: 500;
    }

    .navbar .btnservice {
        cursor: pointer;
        border-radius: 7px;
    }

    .navbar a::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 3px;
        background: white;
        border-radius: 5px;
        bottom: -6px;
        left: 0;
        transform-origin: right;
        transform: scaleX(0);
        transition: transform .5s;
    }

    .navbar a:hover:after {
        transform-origin: left;
        transform: scaleX(1);
    }

    .navbar .btnlogin {
        width: 130px;
        height: 50px;
        background: transparent;
        border: 2px solid white;
        outline: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1.1em;
        color: white;
        font-weight: 500;
        margin-left: 40px;
        transition: .5s;
    }

    .navbar .btnlogin:hover {
        background: white;
        color: #162938;
    }

    .navbar {
        display: flex;
        gap: 1em;
        background-color: #049dbf;
    }

    .navbar a {
        font-family: sans-serif;
        font-weight: 500;
        color: white;
        text-decoration: none;
        padding: 1rem;
    }

    header {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        padding: 20px 100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 99;
    }

    .navbar .btnservice {
        cursor: pointer;
    }

    .navbar a:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .footer {
        font-family: sans-serif;
        background-color: whitesmoke;
        padding: 1em;
        text-align: center;
        border-top: 1px solid lightgray;
    }
</style>

</html>