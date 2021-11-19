
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Tugas Pemrograman Web" >
        <meta name="author" content="Dhifaf Athiyah Zhabiyan - 119140047" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Title -->
        <title>Tugas Praktikum 6 PEMWEB RD - Dhifafa Athiyah Z - 119140047</title>
        
        <!-- Styling and logo -->
        <link rel="shortcut icon" type="image/png" href="./images/Logo_ITERA.png" >
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="./css/index.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Ubuntu', sans-serif;
                -webkit-font-smoothing: antialiased
            }
        </style>
    </head>
    <body>
        
        <div class="main-content">   
        <h1>Tugas Praktikum Minggu 6 - Toko Buah</h1>         
            <div class="card buah">
                <h3 class="card-title">
                    Harga Buah
                </h3>
                <table class="table table-dark table-striped">
                    <tr>
                        <th>Nama Buah</th>
                        <th>Harga /Kg</th>
                    </tr>
                    <tr>
                        <td>Mangga</td>
                        <td>Rp. 15.000</td>                  
                    </tr>
                    <tr>
                        <td>Jambu</td>
                        <td>Rp. 13.000</td>                  
                    </tr>
                    <tr>
                        <td>Salak</td>
                        <td>Rp. 10.000</td>                  
                    </tr>
                </table>
            </div>
            <?php
                class calc{

                    var $jambu;
                    var $mangga;
                    var $salak;
                    var $total;

                    function totSalak($jumlah,$harga){
                        return $this->salak=$jumlah*$harga;
                    }      

                    function totMangga($jumlah,$harga){
                        return $this->mangga=$jumlah*$harga;
                    }

                    function totJambu($jumlah,$harga){
                        return $this->jambu=$jumlah*$harga;
                    }
                }

                class sum{

                    var $total;

                    function total($a,$b,$c){
                        return $this->total=$a+$b+$c;
                    }
                }
            ?>
            <div class="card buah">
                <h3 class="card-title">
                    Beli Buah
                </h3>
                <form method="post" action="index.php">
                    <div class="mb-3">
                        <label for="mangga" class="form-label">Mangga</label>
                        <input type="text" name="mangga" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="jambu" class="form-label">Jambu</label>
                        <input type="text" name="jambu" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="salak" class="form-label">Salak</label>
                        <input type="text" name="salak" class="form-control">    
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="hitung" class="btn btn-primary">
                    </div>
                </form>
            </div>
                <?php
                    if(isset($_POST['hitung'])){

                        $hasilJambu = new calc();
                        $jumlahJambu = $_POST["jambu"];

                        $hasilSalak = new calc();
                        $jumlahSalak= $_POST["salak"];  
                        
                        $hasilMangga = new calc();
                        $jumlahMangga = $_POST["mangga"];
                        
                        $hargaJambu=$hasilJambu->totJambu($jumlahJambu,13000);
                        $hargaSalak=$hasilSalak->totSalak($jumlahSalak,10000);
                        $hargaMangga=$hasilMangga->totMangga($jumlahMangga,15000);
                        
                        $total= new sum();
                ?>
            <div class="card buah">
                <table class="table table-dark table-striped">
                    <tr>
                        <th>Nama buah</th>
                        <th>Jumlah dalam kilogram</th>
                        <th>Harga per kilogramnya</th>                            
                    </tr>

                    <tr>
                        <td>Jambu</td>
                        <td><?php echo $jumlahJambu; ?></td>
                        <td><?php echo $hargaJambu;?></td>
                    </tr>

                    <tr>
                        <td>Salak</td>
                        <td><?php echo $jumlahSalak; ?></td>
                        <td><?php echo $hargaSalak; ?></td>
                    </tr>

                    <tr>
                        <td>Mangga</td>
                        <td><?php echo $jumlahMangga; ?></td>
                        <td><?php echo $hargaMangga; ?></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><b>TOTAL</b></td>
                        <td><?php echo $total->total($hargaMangga,$hargaJambu,$hargaSalak);?></td>
                    </tr>
                </table>
            </div>                    
                <?php                            
                    }                    
                ?>                
        </div>        
    </body>
</html>
