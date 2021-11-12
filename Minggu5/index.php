<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Tugas Pemrograman Web" >
        <meta name="author" content="Dhifaf Athiyah Zhabiyan - 119140047" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Title -->
        <title>Tugas Praktikum 5 PEMWEB RD - Dhifafa Athiyah Z - 119140047</title>
        
        <!-- Styling and logo -->
        <link rel="shortcut icon" type="image/png" href="./assets/images/Logo_ITERA.png" >
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="./assets/css/index.css">
        <link rel="stylesheet" href="./assets/css/jquery-ui.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Ubuntu', sans-serif;
                -webkit-font-smoothing: antialiased
            }
        </style>
    </head>
    <body>

        <div class="container-fluid">
            <h1>Tugas Praktikum PEMWEB RD Minggu 5 - PHP 1</h1>
            <div class="card">
                <div class="card-body">
                    <div id="soal1" >
                        <?php
                            function kalkulator(){
                                    $angka1 = $_POST["angka1"];
                                    $angka2 = $_POST["angka2"];
                                    $operasi = $_POST["operasi"];
                                    if($operasi=="+")
                                    {
                                        $hasil = $angka1 + $angka2;            
                                    }
                                    else if($operasi=="-")
                                    {
                                        $hasil = $angka1 - $angka2;            
                                    }
                                    else if($operasi=="*")
                                    {            
                                        $hasil = $angka1 * $angka2;            
                                    }
                                    else if($operasi=="/")
                                    {            
                                        $hasil = $angka1 / $angka2;        
                                    }
                                    else if($operasi=="%")
                                    {            
                                        $hasil = $angka1 % $angka2;            
                                    }        
                                return $hasil;
                            };     
                        ?>
                        <div class="form ">
                            <form method="post" action="index.php">
                                <div class="mb-3">
                                    <label for="angka1" class="form-label">Angka 1 </label>
                                    <input type="text" name="angka1" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="angka2" class="form-label">Angka 2 </label>
                                    <input type="text" name="angka2" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="operasi" class="form-label">Operasi</label>
                                    <input type="text" name="operasi" class="form-control">    
                                </div>
                                <div class="mb-3">
                                    <input type="submit" name="hitung" class="btn btn-primary">
                                </div>                                                                                                               
                            </form>
                            <?php 
                                if(isset($_POST['hitung'])){                
                            ?>
                            <div class="mb-3">
                                <input type="text" name="hasil" value="<?php 
                                $jawaban = kalkulator();
                                echo $jawaban;
                                ?>" class="form-control" disabled style="background-color: green">
                            </div>
                            <?php
                                }else{
                            ?>
                            <div class="mb-3">
                                <input type="text" name="hasil" class="form-control"  value="0" disabled style="background-color: green">
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-5 mb-5">
                <div class="card-body">
                    <div id="soal2" >
                        <p>List nama : "Larine","Aduh","Qifuat","Toda","Anevi","Samid","Kifuat"</p>
                        <?php                                                           
                        $nama = array("Larine","Aduh","Qifuat","Toda","Anevi","Samid","Kifuat");
                        $length =  7;
                        for($i=0;$i< $length;$i++){
                            for($j=$i+1;$j<$length;$j++){
                                if($nama[$i]>$nama[$j]){
                                    $current=$nama[$i];
                                    $nama[$i]=$nama[$j];
                                    $nama[$j]=$current;
                                }
                            }
                        }
                        $luaran = '<ol class="list">';
                        for($i=0;$i<$length;$i++){
                            $luaran .= '<li>'.$nama[$i].'</li>';                    
                        }             
                        $luaran .= '</ol>';
                        echo $luaran;                                                                   
                    ?>
                    </div>
                </div>
            </div>

            <div class="card mt-5 mb-5">
                <div class="card-body">
                    <div id="soal2" >
                        <p>Berikut bilangan prima dari 1 sampai 50</p>
                        <?php
                            for($i=1;$i<=50;$i++){
                                $bil=0;
                                for($j=1;$j<=$i;$j++){
                                    if($i%$j==0){
                                        $bil++;
                                    }
                                }
                                if($bil==2){
                                    echo $i.' ';
                                }
                            }                    
                        ?>
                    </div>
                </div>
            </div>

            
        </div>
    </body>
    <!-- Script Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./assets/js/index.js"></script>
    </body>
</html>

