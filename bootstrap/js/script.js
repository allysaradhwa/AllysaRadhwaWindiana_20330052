$(function() {
    $('.btnLogin').on('click', function() {
        $('#modalLabel').html('Login Pemilih');
        $('.moodal-footer button[type=submit').html('Login elector');
    });

    $('.loginAdmin').on('click', function() {
        $('#LabelAdmin').html('Login Admin');
        $('.moodal-footer button[type=submit').html('Login Admin');
        $('modal-body form').attr('action', 'http://localhost/E-voting/');
    });
});