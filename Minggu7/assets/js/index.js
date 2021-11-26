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
        width:360
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