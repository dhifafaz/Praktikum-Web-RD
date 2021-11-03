<?php

include ('db_connect.php');

if (isset($_POST['action'])) 
{
    if($_POST['action'] == 'insert') 
    {
        $query = "INSERT INTO mhs (nim, nama, prodi, angkatan) VALUES ( '" . $_POST['nim'] . "', '" . $_POST['nama'] . "', '" . $_POST['prodi'] . "', '" . $_POST['angkatan'] . "')";
        $do = $connect->prepare($query);
        $do->execute();
        echo "<p>Data berhasil ditambahkan.</p>";
    }
}

if ($_POST['action'] == 'fetch_single')
{
    $query = "SELECT * FROM mhs WHERE id = '" . $_POST["id"]."' ";
    $do = $connect->prepare($query);
    $do->execute();
    $result = $do->fetchAll();
    foreach($result as $row)
    {
        $output['nim'] = $row['nim'];
        $output['nama'] = $row['nama'];
        $output['prodi'] = $row['prodi'];
        $output['angkatan'] = $row['angkatan'];
    }

    echo json_encode($output);
}

if ($_POST['action'] == 'update')
{
    $query = "UPDATE mhs SET nim = '" . $_POST['nim'] . "', nama = '" . $_POST['nama'] . "', prodi = '" . $_POST['prodi'] . "', angkatan = '" . $_POST['angkatan'] . "' WHERE id = '" . $_POST['auto_id'] . "'";
    $do = $connect->prepare($query);
    $do->execute();
    echo '<p>Data berhasil diupdate.</p>';
}

if ($_POST['action'] == 'delete')
{
    $query = "DELETE FROM mhs WHERE id = '" . $_POST['id'] . "'";
    $do = $connect->prepare($query);
    $do->execute();
    echo '<p>Data berhasil dihapus.</p>';
}
?>