/**
 * Created by jorge on 07/08/18.
 */

function loadContainerContent(changeInversion, restore)
{
    if (restore === true) {
        $('#invertionButton').attr('invert', 'false');
    }

    var invertionAttr = $('#invertionButton').attr('invert');

    $('#showButton').addClass('hidden');
    $('#restoreButton').removeClass('hidden');
    $('#invertionButton').removeClass('hidden');

    $.get('countries', { 'invert' : invertionAttr }, function(r) {

        if (changeInversion === true) {
            if (invertionAttr === 'true') {
                $('#invertionButton').attr('invert', 'false');
            } else {
                $('#invertionButton').attr('invert', 'true');
            }
        }

        $('#containerContent').html(r);
        $('.table').DataTable();
        $('.dataTables_wrapper').removeClass('form-inline');
    });
}
