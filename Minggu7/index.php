<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Tugas Pemrograman Web" >
        <meta name="author" content="Dhifaf Athiyah Zhabiyan - 119140047" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Title -->
        <title>Tugas Praktikum 7 PEMWEB RD - Dhifafa Athiyah Z - 119140047</title>
        
        <!-- Styling and logo -->
        <link rel="shortcut icon" type="image/png" href="./assets/images/Logo_ITERA.png" >
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="./assets/css/index.css">
        <link rel="stylesheet" href="./assets/css/jquery-ui.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>

        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Ubuntu', sans-serif;
                -webkit-font-smoothing: antialiased
            }
        </style>
    </head>
    <body>
        <nav class="nav-bar" >
            <ul>
                <li class="menu-button"><a href="index.html">Home</a></li>
                <li class="menu-button"><a href="about.html">About</a></li>
                <li class="menu-button"><a href="news.html">News</a></li>   
            </ul>        
        </nav>  
        <div class="container-fluid">
            <h1>Tugas Praktikum PEMWEB RD Minggu 7 - Operasi Crud Dengan DB</h1>
            <div style="margin:20px;left:0;">
                <button class="btn btn-primary" name="add_data" id="add_data" type="button">Tambah Data</button>
            </div>
            <div id="user_data" class="table-responsive">
                

            </div>
        </div>

        <div id="add_data_dialog" title="Add Data">
            <form method="post" id="insert_form">
                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control" />
                    <span id="error_nim" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" />
                    <span id="error_fn" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>Prodi</label>
                    <input type="text" name="prodi" id="prodi" class="form-control" />
                    <span id="error_prodi" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>Angkatan</label>
                    <input type="number" name="angkatan" id="angkatan" class="form-control" />
                    <span id="error_angkatan" class="text-danger"></span>
                </div>
                <br />
                <div class="form-group">
                    <input type="hidden" name="action" id="action" value="insert" />
                    <input type="hidden" name="auto_id" id="auto_id" />
                    <input type="submit" name="submit_form" id="submit_form" value="Insert" class="btn btn-info" />
                </div>
            </form>
        </div>

        <div id="alert" title="Action Info's">

        </div>

        <div id="delete_confirm" title="Confirmation to Delete Data">

            <p>Apakah benar kamu akan menghapus data ?</p>

        </div>
        
    <!-- Script Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./assets/js/index.js"></script>
    </body>
</html>

