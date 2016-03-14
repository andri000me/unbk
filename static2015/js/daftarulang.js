$(document).ready(function() {
    $('.pindahpilihan1_checkbox').change(function() {
        var id = $(this).data('id');
        $('#'+id+'_unduhsurat').toggle();
    });
});