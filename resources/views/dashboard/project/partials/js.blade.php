<script>
    $(document).ready(function(){
        $(document).on('click', '.ProjectArchiveButton', function(){
            var archiveId = $(this).val();
            $('#ProjectArchiveModalSh').modal('show');
            $('#ProjectArchiveModalId').val(archiveId);
        })
    })

    $(document).ready(function(){
        $(document).on('click','.ProjectArchiveRestoreBTN', function(){
            var RestoreProjectId = $(this).val();
            $('#ProjectRestoreBTNModal').modal('show');
            $('#ProjectRestoreBTNId').val(RestoreProjectId);
        })
    })
    $(document).ready(function(){
        $(document).on('click','.ProjectArchiveDeleteBTN', function(){
            var RestoreProjectId = $(this).val();
            $('#ProjectDeleteBTNModal').modal('show');
            $('#ProjectDeleteBTNId').val(RestoreProjectId);
        })
    })
    
</script>