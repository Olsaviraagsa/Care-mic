$(function () {
    $('.tampilModalUbah').on('click', function () {
        $('#judulModal').html('Edit Selected Article');
        $('.modal-footer button[type=submit]').html('Save Changes');
        $('.modal-body form').attr('action', 'http://localhost/care-mic/public/Artikel/edit');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/care-mic/public/Artikel/getEdit',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#title').val(data.title);
                $('#content').val(data.content);
                $('#id').val(data.id);
            }
        })
    })
})