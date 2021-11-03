<?php

include('db_connect.php');

$query = "SELECT * FROM mhs";

$do = $connect->prepare($query);

$do->execute();

$result = $do->fetchAll();

$total = $do->rowCount();

$output ='
<table class="table table-dark table-striped">
    <tr >
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
';

if($total > 0)
{
    $number = 1;
    foreach($result as $row)
    {
        $output .= '
        <tr >
            <td>'.$number.'</td>
            <td>'.$row["nim"].'</td>
            <td>'.$row["nama"].'</td>
            <td>'.$row["prodi"].'</td>
            <td>'.$row["angkatan"].'</td>
            <td><button type="button" name="edit" class="btn btn-warning btn-xs edit" id="'.$row["id"].'">Edit</button></td>
            <td><button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button></td>
        </tr>';
        $number += 1;
    }
}
else
{
    $output .= '
    <tr>
        <td colspan="5" align="center">No Data Found</td>
    </tr>
    ';
}

$output .= '</table>';

echo $output;

?>