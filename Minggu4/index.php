<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Tugas Pemrograman Web" >
        <meta name="author" content="Dhifaf Athiyah Zhabiyan - 119140047" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Title -->
        <title>Tugas Praktikum 3 PEMWEB RD - Dhifafa Athiyah Z - 119140047</title>
        
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

        <div class="container-fluid">
            <h1>Tugas Praktikum PEMWEB RD Minggu 4 - Operasi Crud Dengan PHP AJAX Jquery</h1>
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
    <script src="assets/js/index.js"></script>
    </body>
</html>

<script>
    $(document).ready(function(){
        fetch_data();
        function fetch_data()
        {
            $.ajax({
                url:"fetch.php",
                success:function(data)
                {
                    $('#user_data').html(data);
                }
            });
        }

        $('#add_data_dialog').dialog({
            autoOpen:false,
            width:400
        });

        $('#add_data').click(function(){
            $('#add_data_dialog').attr('title', 'Add Data');
            $('#action').val('insert');
            $('#submit_form').val('Insert');
            $('#insert_form')[0].reset();
            $('#submit_form').attr('disabled', false);
            $('#add_data_dialog').dialog('open');
        });

        $('#insert_form').on('submit', function(event){
            event.preventDefault();
            let error_nim = '';
            let error_fn = '';
            let error_prodi = '';
            let error_angkatan = '';
            if($('#nim').val() == '')
            {
                error_nim = 'NIM is required';
                $('#error_nim').text(error_nim);
                $('#nim').css('border-color', '#cc0000');
            }
            else{
                error_nim = '';
                $('#error_nim').text(error_nim);
                $('#nim').css('border-color', '');
            }

            if($('#nama').val() == '')
            {
                error_fn = 'Nama is required';
                $('#error_fn').text(error_fn);
                $('#nama').css('border-color', '#cc0000');
            }
            else{
                error_fn = '';
                $('#error_fn').text(error_fn);
                $('#nama').css('border-color', '');
            }

            if($('#prodi').val() == '')
            {
                error_prodi = 'Prodi is required';
                $('#error_prodi').text(error_prodi);
                $('#prodi').css('border-color', '#cc0000');
            }
            else{
                error_prodi = '';
                $('#error_prodi').text(error_prodi);
                $('#prodi').css('border-color', '');
            }

            if($('#angkatan').val() == '')
            {
                error_angkatan = 'Angkatan is required';
                $('#error_angkatan').text(error_angkatan);
                $('#angkatan').css('border-color', '#cc0000');
            }
            else
            {
                error_angkatan = '';
                $('#error_angkatan').text(error_angkatan);
                $('#angkatan').css('border-color', '');
            }

            if(error_nim != '' || error_fn != '' || error_prodi != '' || error_angkatan != '')
            {
                return false;
            }
            else
            {
                $('#submit_form').attr('disabled', 'disabled');
                let data_form = $(this).serialize();
                $.ajax({
                    url:"action.php",
                    method:"POST",
                    data:data_form,
                    success:function(data)
                    {
                        $('#add_data_dialog').dialog('close');
                        $('#alert').html(data);
                        $('#alert').dialog('open');
                        fetch_data();
                    }
                });
            }
        });

        $('#alert').dialog({
            autoOpen:false,
        });

        $(document).on('click', '.edit', function(){
            let id = $(this).attr('id');
            let action = 'fetch_single';
            $.ajax({
                url:"action.php",
                method:"POST",
                data:{id:id, action:action},
                dataType:"json",
                success:function(data)
                {
                    $('#add_data_dialog').attr('title', 'Edit Data');
                    $('#nim').val(data.nim);
                    $('#nama').val(data.nama);
                    $('#prodi').val(data.prodi);
                    $('#angkatan').val(data.angkatan);
                    $('#action').val('update');
                    $('#auto_id').val(id);
                    $('#submit_form').val('Update');
                    $('#submit_form').attr('disabled', false);
                    $('#add_data_dialog').dialog('open');
                    fetch_data();
                }
            })
        });
        
        $('#delete_confirm').dialog({
            autoOpen:false,
            modal:true,
            buttons:{
                Ok:function(){
                    let id = $(this).data('id');
                    let action = 'delete';
                    $.ajax({
                        url:"action.php",
                        method:"POST",
                        data:{id:id, action:action},
                        success:function(data)
                        {
                            $('#delete_confirm').dialog('close');
                            $('#alert').html(data);
                            $('#alert').dialog('open');
                            fetch_data();
                        }
                    });
                },
                Cancel:function(){
                    $(this).dialog('close');
                }
            }
        });
        
        $(document).on('click', '.delete', function(){
            let id = $(this).attr('id');
            $('#delete_confirm').data('id', id).dialog('open');

        });
    });
</script>