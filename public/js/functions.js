/**
 * Created by jorge on 07/08/18.
 */

function loadContainerContent()
{
    $.get('countries', {}, function(r) {
        $('#containerContent').html(r);
        $('.table').DataTable();
        $('.dataTables_wrapper').removeClass('form-inline');
    });
}
