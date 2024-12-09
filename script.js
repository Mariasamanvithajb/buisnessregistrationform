$(document).ready(function () {
    $('#businessForm').submit(function (e) {
        e.preventDefault();

        const formData = $(this).serialize();

        $.ajax({
            url: 'process.php',
            type: 'POST',
            data: formData,
            success: function (response) {
                $('#output').html(response);
                $('#businessForm')[0].reset();
            },
            error: function () {
                $('#output').html('<p style="color: red;">Error occurred while submitting the form. Please try again.</p>');
            }
        });
    });
});
